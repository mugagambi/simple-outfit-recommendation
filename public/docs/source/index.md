---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://oufit.herokuapp.com/docs/collection.json)
<!-- END_INFO -->

#Dress Codes
Dress Code Api Resource
<!-- START_e58560675c9fdf08730f76352d6075a1 -->
## return all the dress codes

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/dresscodes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/dresscodes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/dresscodes`

`HEAD api/dresscodes`


<!-- END_e58560675c9fdf08730f76352d6075a1 -->

<!-- START_351ead3503296953ce637bffa5cd8bff -->
## return a certain dress code

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/dresscodes/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/dresscodes/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/dresscodes/{id}`

`HEAD api/dresscodes/{id}`


<!-- END_351ead3503296953ce637bffa5cd8bff -->

#Events
Events api resource
<!-- START_0f5e59e5d39a318daed6631442199c5d -->
## return all events in the system

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/events" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/events",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/events`

`HEAD api/events`


<!-- END_0f5e59e5d39a318daed6631442199c5d -->

<!-- START_2f937339643bb255988a5ee41f56547c -->
## return a certain event

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/events/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/events/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/events/{id}`

`HEAD api/events/{id}`


<!-- END_2f937339643bb255988a5ee41f56547c -->

#Outfit Categories
outfit categories api resource
<!-- START_1279af338159dcffcf3c88d97fc5b3a3 -->
## return outfit categories

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/outfit-categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/outfit-categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/outfit-categories`

`HEAD api/outfit-categories`


<!-- END_1279af338159dcffcf3c88d97fc5b3a3 -->

<!-- START_d24fdd4349f20e6a5014120d7f04006f -->
## return an outfit category

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/outfit-categories/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/outfit-categories/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/outfit-categories/{id}`

`HEAD api/outfit-categories/{id}`


<!-- END_d24fdd4349f20e6a5014120d7f04006f -->

#WeatherGroups
Weather Groups Api Resource
<!-- START_40a1e4796345e29908a5a9580142e7d0 -->
## List all weather groups

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/weather-groups" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/weather-groups",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/weather-groups`

`HEAD api/weather-groups`


<!-- END_40a1e4796345e29908a5a9580142e7d0 -->

<!-- START_db23914d5df1afe92c1ad7984b017ec5 -->
## Show a certain weather group

> Example request:

```bash
curl -X GET "http://oufit.herokuapp.com/api/weather-groups/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/weather-groups/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/weather-groups/{id}`

`HEAD api/weather-groups/{id}`


<!-- END_db23914d5df1afe92c1ad7984b017ec5 -->

#general
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## login api

> Example request:

```bash
curl -X POST "http://oufit.herokuapp.com/api/login" \
-H "Accept: application/json" \
    -d "email"="uzieme@example.org" \
    -d "password"="rerum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/login",
    "method": "POST",
    "data": {
        "email": "uzieme@example.org",
        "password": "rerum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    password | string |  required  | 

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST "http://oufit.herokuapp.com/api/register" \
-H "Accept: application/json" \
    -d "name"="et" \
    -d "email"="milo77@example.org" \
    -d "password"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://oufit.herokuapp.com/api/register",
    "method": "POST",
    "data": {
        "name": "et",
        "email": "milo77@example.org",
        "password": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/register`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | 
    password | string |  required  | 

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

