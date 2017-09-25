<?php

$app->post('/api/GettyImages/downloadImage', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','accessToken','imageId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'apiKey','accessToken'=>'accessToken','imageId'=>'id'];
    $optionalParams = ['fileType'=>'file_type','height'=>'height','productId'=>'product_id','downloadNotes'=>'download_notes','projectCode'=>'project_code','productType'=>'product_type'];
    $bodyParams = [
       'query' => ['file_type','height','product_id','product_type']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);



    $client = $this->httpClient;
    $query_str = "https://api.gettyimages.com/v3/downloads/images/{$data['id']}";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);

    if(!empty($data['download_notes']))
    {
        $requestParams['json']['download_details']['download_notes'] = $data['download_notes'];
    }

    if(!empty($data['project_code']))
    {
        $requestParams['json']['download_details']['project_code'] = $data['project_code'];
    }

    $requestParams['headers'] = ["Api-Key"=>"{$data['apiKey']}", "Authorization"=>"Bearer {$data['accessToken']}"];
    $requestParams['query']['auto_download'] = 'false';

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});