
# Getting Started with Onfon Developer V1

## Introduction

### Authentication

Requests made to our APIs must be authenticated, there are two ways to do this:

1. Authenticating using your API apiUsername and apiPassword - `Basic Auth`
2. Authenticating using an Auth Token - `Bearer Token`

#### Method 1: Basic Auth

Basic Authentication is a method for an HTTP user agent (e.g., a web browser) to provide a apiUsername and apiPassword when making a request.

When employing Basic Authentication, users include an encoded string in the Authorization header of each request they make. The string is used by the request’s recipient to verify users’ identity and rights to access a resource.

The Authorization header follows this format:

> Authorization: Basic base64(apiUsername:apiPassword)

So if your apiUsername and apiPassword are `onfon` and `!@pas123`, the combination is `onfon:!@pas123`, and when base64 encoded, this becomes `b25mb246IUBwYXMxMjM=`.
So requests made by this user would be sent with the following header:

> Authorization: Basic b25mb246IUBwYXMxMjM=

| Description                                                                                    |
| ---------------------------------------------------------------------------------------------- |
| **apiUsername** `String` `Required` <br> Your onfon account apiUsername, retrieved from portal |
| **apiPassword** `String` `Required` <br> Your onfon account apiPassword, retrieved from portal |

#### Method 2: Bearer Tokens

This authentication stategy allows you to authenticate using JSON Web Token ``JWT` that will expire after given duration.

Each Access Token is a `JWT`, an encoded JSON object with three parts: the `header`, the `payload`, and the `signature`. The following is an example Access Token generated for Conversations

> Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

##### Getting the token

To generate the token, make a `POST` request to `/v1/authorization` endpoint with your `apiUsername` and `apiPassword`
This request should be made from your server and not on the client side such as browser or mobile environment.

You will receive a JSON similar to below:

`{ "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c", "validDurationSeconds": 3600}`

You can use the token received to make API calls. The token will be valid for value of `validDurationSeconds`, before which you should generate a new token.

###### Request Body

```
{
	"apiUsername": "root",
	"apiPassword": "hakty11"
}
```

###### Response Body

```
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
    "validDurationSeconds": 3600
}
```

###### Example Curl

```
curl --location --request POST 'https://apis.onfonmedia.co.ke/v1/authorization' \
--data-raw '{
	"apiUsername": "correctapiUsername",
	"apiPassword": "correctapiPassword"
}
```

###### Making an API call

You will be required to pass the token in `Authorization` header prefixed by `Bearer` when calling other endpoints.

Example `Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c`

## Building

The generated code has dependencies over external libraries like UniRest and JsonMapper. JsonMapper requires docblock annotations like `@var`, `@maps`, and `@factory` to map JSON responses with our class definitions. Hence the docblocks in generated code cannot be disabled by deactivating the PHP configurations like `opcache.save_comments`. These dependencies are defined in the `composer.json` file that comes with the SDK. To resolve these dependencies, we use the Composer package manager which requires PHP greater than or equal to 7.2 installed in your system. Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. Open command prompt and type `composer --version`. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including `composer.json`) for the SDK.
* Run the command `composer install`. This should install all the required dependencies and create the `vendor` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=installDependencies)

### Configuring CURL Certificate Path in php.ini

:information_source: **Note** This is for Windows users only.

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```
[curl]; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
curl.cainfo = PATH_TO/cacert.pem
```

## Installation

The following section explains how to use the OnfonDeveloperV1Lib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=openIDE)

Click on `Open` in PhpStorm to browse to your generated SDK directory and then click `OK`.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=openProject0)

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=createDirectory)

Name the directory as "test".

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=nameDirectory)

Add a PHP file to this project.

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=createFile)

Name it "testSDK".

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=nameFile)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```php
require_once "vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file `autoload.php` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 5](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=projectFiles)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and use the Controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open `Settings` from `File` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=openSettings)

Select `PHP` from within `Languages & Frameworks`.

![Run Test Project - Step 2](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=setInterpreter0)

Browse for Interpreters near the `Interpreter` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=setInterpreter1)

Once the interpreter is selected, click `OK`.

![Run Test Project - Step 4](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=setInterpreter2)

To run your project, right click on your PHP file inside your Test project and click on `Run`.

![Run Test Project - Step 5](https://apidocs.io/illustration/php?workspaceFolder=OnfonDeveloperV1&step=runProject)

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `accessToken` | `string` | The OAuth 2.0 Access Token to use for API requests. |

The API client can be initialized as follows:

```php
$client = OnfonDeveloperV1Lib\OnfonDeveloperV1ClientBuilder::init()
    ->accessToken('AccessToken')
    ->environment('production')
    ->build();
```

## Authorization

This API uses `OAuth 2 Bearer token`.

## List of APIs

* [Balance Send SMS](doc/controllers/balance-send-sms.md)
* [SMS Campaigns](doc/controllers/sms-campaigns.md)
* [Compose SMS](doc/controllers/compose-sms.md)
* [Authentication](doc/controllers/authentication.md)
* [Group](doc/controllers/group.md)
* [Contacts](doc/controllers/contacts.md)
* [Senderid](doc/controllers/senderid.md)
* [Purchase](doc/controllers/purchase.md)

## Classes Documentation

* [ApiException](doc/api-exception.md)
* [HttpRequest](doc/http-request.md)
* [HttpResponse](doc/http-response.md)

