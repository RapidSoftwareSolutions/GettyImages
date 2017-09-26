[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GettyImages/functions?utm_source=RapidAPIGitHub_GettyImagesFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GettyImages Package
Getty Images is among the world’s leading creators and distributors of award-winning still imagery, video, music and multimedia products, as well as other forms of premium digital content, available through its trusted house of brands, including iStock and Thinkstock.
* Domain: [www.gettyimages.com](http://www.gettyimages.com/)
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Register on the [www.gettyimages.com](http://www.gettyimages.com/)
1. Create gettyImages application in console
2. After creation app, you will receive clientKey and clientSecret
3. For getting accessToken use getResourceOwnerGrant or getAccessToken endpoints
 
 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## GettyImages.getAccessToken
Client Credentials grant is for client applications that will not have individual users. An application token is created and limits the client application to operations that do not need user credentials. A Sandbox application (for trial development and without a licensing agreement) can only use the Client Credential grant type.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Client API Key.
| apiSecret| credentials| Client API Secret.

## GettyImages.getResourceOwnerGrant
The Resource Owner grant is only for Getty Images and Getty Images partner applications. This grant type is suitable for clients capable of obtaining the resource owner's credentials.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Client API Key.
| apiSecret| credentials| Client API Secret.
| username | String     | User Name.
| password | String     | User Password.

## GettyImages.refreshToken
A refresh token is obtained when authorizing through the the Resource Owner grant. The refresh token is good for one year and can be used to retrieve another 30-minute access token by calling the token endpoint.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Client API Key.
| apiSecret   | credentials| Client API Secret.
| refreshToken| String     | Refresh token obtained from Resource Owner grant call.

## GettyImages.getEventsBySearchQuery
Use this endpoint to search Getty Images news, sports and entertainment events. Getty Images photographers and videographers cover editorially relevant events occurring around the world.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Provide your API key.
| acceptLanguage  | String     | Provide a header to specify the language of result values.
| accessToken     | String     | Provide access token.
| dateFrom        | DatePicker | Filters to events that start on or after this date.
| dateTo          | DatePicker | Filters to events that start on or before this date.
| editorialSegment| Select     | Filters to events with a matching editorial segment.
| fields          | List       | Specifies fields to return.
| phrase          | String     | Filters to events related to this phrase.
| page            | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize        | Number     | Request number of images to return in each page.

## GettyImages.getImagesBySearchQuery
Use this endpoint to search over a blend of our contemporary stock photos, illustrations, archival images, editorial photos, illustrations and archival images.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| artists              | List       | Search for images by specific artists.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| color                | String     | Filter based on predominant color in an image. Use 6 character hexidecimal format (e.g., #002244). Note: when specified, results will not contain editorial images
| compositions         | List       | Filter based on image composition.
| embedContentOnly     | Select     | Restrict search results to embeddable images. The default is false.
| ethnicity            | List       | Filter search results based on the ethnicity of individuals in an image.
| eventIds             | List       | Filter based on specific events
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| fileTypes            | List       | Return only images having a specific file type.
| graphicalStyles      | List       | Filter based on graphical style of the image.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| licenseModels        | List       | Specifies the image licensing model(s).
| minimumSize          | Select     | Filter based on minimum size requested
| numberOfPeople       | List       | Filter based on the number of people in the image.
| orientations         | List       | Return only images with selected aspect ratios.
| phrase               | String     | Search images using a search phrase.
| prestigeContentOnly  | Select     | Restrict search results to prestige images. The default is false.
| productTypes         | List       | Filter images to those having product types from the selected list.
| specificPeople       | List       | Return only images associated with specific people.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.

## GettyImages.getCreativeImagesBySearchQuery
Use this endpoint to search our contemporary stock photos, illustrations and archival images.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| artists              | List       | Search for images by specific artists.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| color                | String     | Filter based on predominant color in an image. Use 6 character hexidecimal format (e.g., #002244). Note: when specified, results will not contain editorial images
| compositions         | List       | Filter based on image composition.
| embedContentOnly     | Select     | Restrict search results to embeddable images. The default is false.
| ethnicity            | List       | Filter search results based on the ethnicity of individuals in an image.
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| fileTypes            | List       | Return only images having a specific file type.
| graphicalStyles      | List       | Filter based on graphical style of the image.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| licenseModels        | List       | Specifies the image licensing model(s).
| minimumSize          | Select     | Filter based on minimum size requested
| numberOfPeople       | List       | Filter based on the number of people in the image.
| orientations         | List       | Return only images with selected aspect ratios.
| phrase               | String     | Search images using a search phrase.
| prestigeContentOnly  | Select     | Restrict search results to prestige images. The default is false.
| productTypes         | List       | Filter images to those having product types from the selected list.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.

## GettyImages.getEditorialImagesBySearchQuery
Use this endpoint to search our editorial stock photos, illustrations and archival images. Editorial images represent newsworthy events or illustrate matters of general interest, such as news, sport and entertainment and are generally intended for editorial use.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| artists              | List       | Search for images by specific artists.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| compositions         | List       | Filter based on image composition.
| embedContentOnly     | Select     | Restrict search results to embeddable images. The default is false.
| dateFrom             | DatePicker | Filters to events that start on or after this date.
| dateTo               | DatePicker | Filters to events that start on or before this date.
| ethnicity            | List       | Filter search results based on the ethnicity of individuals in an image.
| editorialSegments    | List       | Return only events with a matching editorial segment.
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| fileTypes            | List       | Return only images having a specific file type.
| graphicalStyles      | List       | Filter based on graphical style of the image.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| entityUris           | List       | Specify linked data entity uri.
| licenseModels        | List       | Specifies the image licensing model(s).
| minimumSize          | Select     | Filter based on minimum size requested
| numberOfPeople       | List       | Filter based on the number of people in the image.
| orientations         | List       | Return only images with selected aspect ratios.
| phrase               | String     | Search images using a search phrase.
| prestigeContentOnly  | Select     | Restrict search results to prestige images. The default is false.
| productTypes         | List       | Filter images to those having product types from the selected list.
| specificPeople       | List       | Return only images associated with specific people.
| minimumQualityRank   | Number     | Filter search results based on minimum quality ranking. Possible values 1, 2, 3 with 1 being best.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.

## GettyImages.getVideoBySearchQuery
Use this endpoint to search over a blend of our premium stock, contemporary 4K and HD footage, celebrities, news, newsmakers, entertainment, events and archival videos.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| licenseModels        | List       | Specifies the image licensing model(s).
| phrase               | String     | Search images using a search phrase.
| productTypes         | List       | Filter images to those having product types from the selected list.
| formatAvailable      | Select     | Filters according to the digital video format available on a film asset.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.

## GettyImages.getCreativeVideoBySearchQuery
Use this endpoint to search premium stock video, from archival film to contemporary 4K and HD footage.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| licenseModels        | List       | Specifies the image licensing model(s).
| phrase               | String     | Search images using a search phrase.
| productTypes         | List       | Filter images to those having product types from the selected list.
| specificPeople       | List       | Return only images associated with specific people.
| formatAvailable      | Select     | Filters according to the digital video format available on a film asset.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.

## GettyImages.getEditorialVideoBySearchQuery
Use this endpoint to search current and archival video clips of celebrities, newsmakers, and events.

| Field                | Type       | Description
|----------------------|------------|----------
| apiKey               | credentials| Provide your API key.
| acceptLanguage       | String     | Provide a header to specify the language of result values.
| accessToken          | String     | Provide access token.
| ageOfPeople          | List       | Filter based on the age of individuals in an image.
| collectionCodes      | List       | Filter by collection codes. Include or exclude based on collections_filter_type.
| collectionsFilterType| Select     | Provides searching based on specified collection(s).
| excludeNudity        | Select     | Excludes images containing nudity. The default is false.
| fields               | List       | Specifies fields to return. Defaults to 'summary_set'.
| keywordIds           | List       | Return only images tagged with specific keyword(s). If keyword Ids and phrase are both specified, only those images matching the query phrase which also contain the requested keyword(s) are returned.
| licenseModels        | List       | Specifies the image licensing model(s).
| phrase               | String     | Search images using a search phrase.
| productTypes         | List       | Filter images to those having product types from the selected list.
| specificPeople       | List       | Return only images associated with specific people.
| formatAvailable      | Select     | Filters according to the digital video format available on a film asset.
| page                 | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize             | Number     | Request number of images to return in each page.
| sortOrder            | Select     | Select sort order of results.
| specificPeople       | List       | Return only images associated with specific people.
| entityUris           | List       | Specify linked data entity uri.

## GettyImages.getImages
This endpoint returns the detailed image metadata for all specified images. Due to a wide variety of available image resolutions, the images are grouped into a handful of size categories for simplicity.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| accessToken   | String     | Provide access token.
| fields        | List       | Specifies fields to return. Defaults to 'summary_set'.
| imageIds      | List       | Specifies one or more image ids to return.

## GettyImages.getImage
This endpoint returns the detailed image metadata for a specified image. Due to a wide variety of available image resolutions, the images are grouped into a handful of size categories for simplicity.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| accessToken   | String     | Provide access token.
| fields        | List       | Specifies fields to return. Defaults to 'summary_set'.
| imageId       | Number     | An image id. For more than one image please use the /v3/images endpoint.

## GettyImages.getSimilarImage
This endpoint will search our asset database for images similar to the specified asset id. Due to a wide variety of available image resolutions, the images are grouped into a handful of size categories for simplicity.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| accessToken   | String     | Provide access token.
| fields        | List       | Specifies fields to return. Defaults to 'summary_set'.
| imageId       | Number     | An image id. For more than one image please use the /v3/images endpoint.
| page          | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize      | Number     | Request number of images to return in each page.

## GettyImages.getVideos
Use this endpoint to return detailed video metadata for all the specified video ids.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| accessToken   | String     | Provide access token.
| fields        | List       | Specifies fields to return. Defaults to 'summary_set'.
| videoIds      | List       | Specifies one or more video ids to return.

## GettyImages.getVideo
Use this endpoint to return detailed video metadata for the specified video id.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| accessToken   | String     | Provide access token.
| fields        | List       | List of fields to retrive for the video.
| videoId       | Number     | A video id.

## GettyImages.getPreviousDownloadsInfo
Returns information about a customer's previously downloaded assets.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Provide your API key.
| accessToken     | String     | Provide access token.
| dateFrom        | DatePicker | Filters to events that start on or after this date.
| dateTo          | DatePicker | Filters to events that start on or before this date.
| companyDownloads| Select     | If specified, returns the list of previously downloaded images for all users in your company. Your account must be enabled for this functionality. Contact your Getty Images account rep for more information. Default is false.
| page            | Number     | Request results starting at a page number (default is 1, maximum is 50).
| productType     | Select     | Specifies product type to be included in the previous download results.
| pageSize        | Number     | Request number of images to return in each page.

## GettyImages.downloadImage
Use this endpoint to generate download URLs and related data for images you are authorized to download.Most product offerings have enforced periodic download limits such as monthly, weekly, and daily. When this operation executes, the count of allowed downloads is decremented by one for the product offering. Once the download limit is reached for a given product offering, no further downloads may be requested for that product offering until the next download period.The download limit for a given download period is covered in your product agreement established with Getty Images.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Provide your API key.
| accessToken  | String     | Provide access token.
| imageId      | Number     | Id of image to download.
| fileType     | Select     | File Type expressed with three character file extension.
| height       | String     | Specifies the pixel height of the particular image to download. Available heights can be found in the images/{ids} response for the specific image. If left blank, it will return the largest available size.
| productId    | String     | Identifier of the instance for the selected product offering type.
| downloadNotes| String     | Associate a note with the download of an image.
| projectCode  | String     | Specifies the associated project code saved with the downloaded of an image.
| productType  | Select     | Specifies product type to be included in the previous download results.

## GettyImages.downloadVideo
Use this endpoint to generate download URLs and related data for videos you are authorized to download.Most product offerings have enforced periodic download limits such as monthly, weekly, and daily. When this operation executes, the count of allowed downloads is decremented by one for the product offering. Once the download limit is reached for a given product offering, no further downloads may be requested for that product offering until the next download period.The download limit for a given download period is covered in your product agreement established with Getty Images.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Provide your API key.
| accessToken| String     | Provide access token.
| videoId    | Number     | Id of video to download.
| size       | String     | Specifies the size to be downloaded.
| productId  | String     | Identifier of the instance for the selected product offering type.
| productType| Select     | Specifies product type to be included in the previous download results.

## GettyImages.getBoards
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to retrieve all Boards available for a user.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Provide your API key.
| accessToken      | String     | Provide access token.
| acceptLanguage   | String     | Provide a header to specify the language of result values.
| boardRelationship| Select     | Search for boards the user owns or has been invited to as an editor.
| page             | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize         | Number     | Request number of images to return in each page.
| sortOrder        | Select     | Sort the list of boards by last update date or name. Defaults to date_last_updated_descending.

## GettyImages.createBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the Board FAQ. Use this endpoint to create a Board by a specific id.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Provide your API key.
| accessToken     | String     | Provide access token.
| acceptLanguage  | String     | Provide a header to specify the language of result values.
| name            | String     | Board name.
| boardDescription| String     | Board description.

## GettyImages.updateBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to update a Board by a specific id.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Provide your API key.
| accessToken     | String     | Provide access token.
| acceptLanguage  | String     | Provide a header to specify the language of result values.
| boardId         | String     | Specify the board to update.
| name            | String     | New board name.
| boardDescription| String     | new board description.

## GettyImages.getBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to retrieve a Board by a specific id.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Retrieve details for a specific board.

## GettyImages.deleteBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to delete a Board by a specific id.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to delete.

## GettyImages.addBoardAssets
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to add a set of assets to a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to add assets to.
| assetsIds     | List       | List assets to add to the board.

## GettyImages.deleteBoardAssets
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to add a set of assets to a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to remove assets from.
| assetsIds     | List       | List the assets to be removed from the board.

## GettyImages.addAssetToBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to add an asset to a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to add an asset to.
| assetId       | String     | Specify the asset to add to the board. If it is already in the board's asset collection, no action is taken. 

## GettyImages.deleteAssetFromBoard
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to remove an asset from a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to remove an asset from.
| assetId       | String     | Specify the asset to add to the board. If it is already in the board's asset collection, no action is taken. 

## GettyImages.getBoardComments
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to retrieve all comments for a specific board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to retrieve comments from.

## GettyImages.createBoardComments
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to add a comment to a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board to add a comment to.
| commentText   | String     | Comment text.

## GettyImages.deleteBoardComments
Boards are where you collect, curate, collaborate on and manage photo and video assets in one place. More information on the [Boards FAQ](http://www.gettyimages.com/boards/faq). Use this endpoint to delete a comment from a board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| boardId       | String     | Specify the board containing the comment to delete.
| commentId     | String     | Specify the comment to delete.

## GettyImages.getCollection
Use this endpoint to retrieve collections associated with your Getty Images account. To browse available collections see our Image collections page.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.

## GettyImages.getCountriesList
Returns a list of country objects that contains country name, two letter ISO abbreviation and three letter ISO abbreviation.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.

## GettyImages.getEvents
This endpoint returns the detailed event metadata for all specified events. Getty Images news, sports and entertainment photographers and videographers cover editorially relevant events occurring around the world.All images or video clips produced in association with an event, are assigned the same EventID. EventIDs are part of the meta-data returned in SearchForImages Results. Only content produced under a Getty Images brand name (Getty Images News, Getty Images Sports, Getty Images Entertainment, Film Magic, Wire Image) will be consistently assigned an EventID. The Event framework may also be used to group similar content, such as "Hats from the Royal Wedding" or "Odd-ballOffbeat images of the week".

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| fields        | List       | list of fields to return in the response.
| eventIds      | List       |  list of event ids.

## GettyImages.getEvent
This endpoint returns the detailed event metadata for a specified event. Getty Images news, sports and entertainment photographers and videographers cover editorially relevant events occurring around the world. All images or video clips produced in association with an event, are assigned the same EventID. EventIDs are part of the meta-data returned in SearchForImages Results. Only content produced under a Getty Images brand name (Getty Images News, Getty Images Sports, Getty Images Entertainment, Film Magic, Wire Image) will be consistently assigned an EventID. The Event framework may also be used to group similar content, such as "Hats from the Royal Wedding" or "Odd-ballOffbeat images of the week".

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| fields        | List       | list of fields to return in the response.
| eventId       | Number     | An event id.

## GettyImages.getProducts
This endpoint returns all products available to the username used during authentication. As such, this endpoint requires the use of a fully authorized access_token. The product data can then be used as search filters, restricting results to images from a specific product.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| fields        | List       | list of fields to return in the response.

## GettyImages.getPreviouslyPurchasedAssets
This endpoint returns a list of all assets purchased on gettyimages.com by the username used for authentication. Use of this endpoint requires configuration changes to your API key. Please contact developersupport@gettyimages.com to learn more.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Provide your API key.
| accessToken| String     | Provide access token.
| dateFrom   | DatePicker | If specified, retrieves previous purchases on or after this date.
| dateTo     | DatePicker | If specified, retrieves previous purchases on or before this date.
| page       | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize   | Number     | Request number of images to return in each page.

## GettyImages.GetPreviousPurchases
This endpoint returns a list of all images purchased on gettyimages.com by the username used for authentication. Use of this endpoint requires configuration changes to your API key. Please contact developersupport@gettyimages.com to learn more.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Provide your API key.
| accessToken| String     | Provide access token.
| dateFrom   | DatePicker | If specified, retrieves previous purchases on or after this date.
| dateTo     | DatePicker | If specified, retrieves previous purchases on or before this date.
| page       | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize   | Number     | Request number of images to return in each page.

## GettyImages.reportUsage
Use this endpoint to report the usages of a set of assets. The count of assets submitted in a single batch to this endpoint is limited to 1000. Note that all asset Ids specified must be valid or the operation will fail causing no usages to be recorded. In this case, you will need to remove the invalid asset Ids from the query request and re-submit the query.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| reportId      | String     | Specifies a unique batch transaction id to identify the report.
| assetUsages  | Array      | Identifies the list of asset id, usage count and date of usage combinations to record.

## GettyImages.assetChanges
Asset changes.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| channelId     | Number     | Specifies the id of the channel for the asset data. Valid channel ids can be found in the results of the Get Partner Channel query.
| batchSize     | Number     | Specifies the number of assets to return. The default is 10; maximum is 500.

## GettyImages.deleteAssetChanges
Confirm asset changes acknowledges receipt of asset changes.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| changeSetId   | Number     | Specify the change-set-id associated with a transaction resource whose receipt you want to confirm.

## GettyImages.getPartnerChannels
Confirm asset changes acknowledges receipt of asset changes.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.

## GettyImages.registerAssets
Registers a list of assets that a customer has stored in their system.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| assetsIds     | List       | Specifies the list of asset ids you want to register.

## GettyImages.getImagesByArtistName
Get images by artist name.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| artistName    | String     | Name of artist for desired images
| page          | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize      | Number     | Request number of images to return in each page.
| fields        | List       | Specifies fields to return. Default set is 'id','name','start_date'.

## GettyImages.getVideosByArtistName
Get videos by artist name.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Provide your API key.
| accessToken   | String     | Provide access token.
| acceptLanguage| String     | Provide a header to specify the language of result values.
| artistName    | String     | Name of artist for desired images
| page          | Number     | Request results starting at a page number (default is 1, maximum is 50).
| pageSize      | Number     | Request number of images to return in each page.
| fields        | List       | Specifies fields to return.

