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
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Authentication
Authentication Api Resource
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## login api.This will return a token that will be added as query param to subsequent api calls
e.g http://oufit.herokuapp.com/api/weather-groups?token={returned_token}
to fetch weather groups

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
-H "Accept: application/json" \
    -d "email"="uzieme@example.org" \
    -d "password"="rerum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
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
## Register api.This registers a new user to the app and returns a token that the user can use to access the resources.

e.g http://oufit.herokuapp.com/api/weather-groups?token={returned token}
to fetch weather groups

> Example request:

```bash
curl -X POST "http://localhost/api/register" \
-H "Accept: application/json" \
    -d "name"="et" \
    -d "email"="milo77@example.org" \
    -d "password"="et" \
    -d "phone_number"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/register",
    "method": "POST",
    "data": {
        "name": "et",
        "email": "milo77@example.org",
        "password": "et",
        "phone_number": "et"
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
    phone_number | string |  optional  | 

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

#Dress Codes
Dress Code Api Resource
<!-- START_e58560675c9fdf08730f76352d6075a1 -->
## return all the dress codes

> Example request:

```bash
curl -X GET "http://localhost/api/dresscodes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dresscodes",
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
curl -X GET "http://localhost/api/dresscodes/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/dresscodes/{id}",
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
curl -X GET "http://localhost/api/events" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/events",
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
curl -X GET "http://localhost/api/events/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/events/{id}",
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
curl -X GET "http://localhost/api/outfit-categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfit-categories",
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
curl -X GET "http://localhost/api/outfit-categories/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfit-categories/{id}",
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

#Outfits
Outfits Api Resource
<!-- START_655c8be18583834e62d5aa89aab0bfb6 -->
## returns a list of all outfits by the logged in user.

> Example request:

```bash
curl -X GET "http://localhost/api/outfits" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits",
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
`GET api/outfits`

`HEAD api/outfits`


<!-- END_655c8be18583834e62d5aa89aab0bfb6 -->

<!-- START_53df37f9d63713a9a2cb4ea863657ab5 -->
## Add new outfit by the logged in user

> Example request:

```bash
curl -X POST "http://localhost/api/outfits" \
-H "Accept: application/json" \
    -d "name"="consectetur" \
    -d "photo_url"="http://legros.com/" \
    -d "outfit_category_id"="consectetur" \
    -d "weather_group_id"="consectetur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits",
    "method": "POST",
    "data": {
        "name": "consectetur",
        "photo_url": "http:\/\/legros.com\/",
        "outfit_category_id": "consectetur",
        "weather_group_id": "consectetur"
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
`POST api/outfits`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    photo_url | url |  required  | 
    outfit_category_id | string |  required  | 
    weather_group_id | string |  required  | 

<!-- END_53df37f9d63713a9a2cb4ea863657ab5 -->

<!-- START_09c47a3a7022ef11b7cc7aa5050ce340 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/outfits/{outfit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits/{outfit}",
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
`GET api/outfits/{outfit}`

`HEAD api/outfits/{outfit}`


<!-- END_09c47a3a7022ef11b7cc7aa5050ce340 -->

<!-- START_8508f326f01ae2f614518b83258dd599 -->
## Update an outfit by the user.

> Example request:

```bash
curl -X PUT "http://localhost/api/outfits/{outfit}" \
-H "Accept: application/json" \
    -d "name"="eaque" \
    -d "photo_url"="http://www.johnston.com/" \
    -d "outfit_category_id"="eaque" \
    -d "weather_group_id"="eaque" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits/{outfit}",
    "method": "PUT",
    "data": {
        "name": "eaque",
        "photo_url": "http:\/\/www.johnston.com\/",
        "outfit_category_id": "eaque",
        "weather_group_id": "eaque"
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
`PUT api/outfits/{outfit}`

`PATCH api/outfits/{outfit}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    photo_url | url |  required  | 
    outfit_category_id | string |  required  | 
    weather_group_id | string |  required  | 

<!-- END_8508f326f01ae2f614518b83258dd599 -->

<!-- START_6bd3206374b256d9575a67180f788f61 -->
## Remove a user outfit.

> Example request:

```bash
curl -X DELETE "http://localhost/api/outfits/{outfit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits/{outfit}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/outfits/{outfit}`


<!-- END_6bd3206374b256d9575a67180f788f61 -->

<!-- START_2bb5e81c8f07faef86818c25738543d7 -->
## returns a list of outfits by the logged in user given a weather group.

> Example request:

```bash
curl -X GET "http://localhost/api/outfits/weather/{weather_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/outfits/weather/{weather_id}",
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
`GET api/outfits/weather/{weather_id}`

`HEAD api/outfits/weather/{weather_id}`


<!-- END_2bb5e81c8f07faef86818c25738543d7 -->

#Weather
Fetch weather
<!-- START_4ca078b560da12f92c41fcb5d9bcea98 -->
## Fetch the weather for a given place
place_code query param is required
date query param is required
example query http://127.0.0.1:8000/api/weather?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU0MTQ0MTY0MCwiZXhwIjoxNTQxNDQ1MjQwLCJuYmYiOjE1NDE0NDE2NDAsImp0aSI6IlU0ZkFZVFdQMkZ5RXJTTnYiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.m6URX8fHzUXgQjPypPaMYGqTKywOHo725iGEE6NDIm8&amp;place_code=NAI&amp;date=2018-11-04

> Example request:

```bash
curl -X GET "http://localhost/api/weather" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/weather",
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
`GET api/weather`

`HEAD api/weather`


<!-- END_4ca078b560da12f92c41fcb5d9bcea98 -->

#WeatherGroups
Weather Groups Api Resource
<!-- START_40a1e4796345e29908a5a9580142e7d0 -->
## List all weather groups

> Example request:

```bash
curl -X GET "http://localhost/api/weather-groups" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/weather-groups",
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
curl -X GET "http://localhost/api/weather-groups/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/weather-groups/{id}",
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

