<?php

$app->post('/api/GettyImages/getEditorialImagesBySearchQuery', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKey'=>'apiKey'];
    $optionalParams = ['acceptLanguage'=>'acceptLanguage','accessToken'=>'accessToken','ageOfPeople'=>'age_of_people','artists'=>'artists','collectionCodes'=>'collection_codes','collectionsFilterType'=>'collections_filter_type','compositions'=>'compositions','embedContentOnly'=>'embed_content_only','dateFrom'=>'date_from','dateTo'=>'date_to','ethnicity'=>'ethnicity','editorialSegments'=>'editorial_segments','excludeNudity'=>'exclude_nudity','fields'=>'fields','fileTypes'=>'file_types','graphicalStyles'=>'graphical_styles','keywordIds'=>'keyword_ids','entityUris'=>'entity_uris','licenseModels'=>'license_models','minimumSize'=>'minimum_size','numberOfPeople'=>'number_of_people','orientations'=>'orientations','phrase'=>'phrase','prestigeContentOnly'=>'prestige_content_only','productTypes'=>'product_types','specificPeople'=>'specific_people','minimumQualityRank'=>'minimum_quality_rank','page'=>'page','pageSize'=>'page_size','sortOrder'=>'sort_order'];
    $bodyParams = [
       'query' => ['minimum_quality_rank','specific_people','editorial_segments','date_from','date_to','entity_uris','age_of_people','artists','collection_codes','collections_filter_type','color','compositions','embed_content_only','ethnicity','exclude_nudity','fields','file_types','graphical_styles','keyword_ids','license_models','minimum_size','number_of_people','orientations','phrase','prestige_content_only','product_types','page','page_size','sort_order']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $emptyArr = ['fields','editorial_segments','entity_uris','specific_people','product_types','orientations','number_of_people','license_models','keyword_ids','graphical_styles','file_types','event_ids','ethnicity','compositions','age_of_people','artists','collection_codes'];


    foreach($emptyArr as $key => $value)
    {
        if(!empty($data[$value]))
        {
            $data[$value] = \Models\Params::toString($data[$value], ',');
        }
    }

    $client = $this->httpClient;
    $query_str = "https://api.gettyimages.com/v3/search/images/editorial";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Api-Key"=>"{$data['apiKey']}", "Authorization"=>"Bearer {$data['accessToken']}"];

    if(!empty($data['acceptLanguage']))
    {
        $requestParams['headers']['acceptLanguage'] = $data['acceptLanguage'];
    }

    try {
        $resp = $client->get($query_str, $requestParams);
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