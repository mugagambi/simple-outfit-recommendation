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
{
    "data": [
        {
            "id": 1,
            "name": "official",
            "created_at": "2018-07-29 19:33:51",
            "updated_at": "2018-07-29 19:33:51"
        },
        {
            "id": 2,
            "name": "casual",
            "created_at": "2018-07-29 19:50:58",
            "updated_at": "2018-07-29 20:04:08"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/dresscodes?page=1",
        "last": "http:\/\/localhost\/api\/dresscodes?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/dresscodes",
        "per_page": 20,
        "to": 2,
        "total": 2
    }
}
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
{
    "data": {
        "id": 1,
        "name": "official",
        "created_at": "2018-07-29 19:33:51",
        "updated_at": "2018-07-29 19:33:51"
    }
}
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
{
    "data": [
        {
            "id": 1,
            "name": "party",
            "created_at": "2018-07-29 18:19:28",
            "updated_at": "2018-07-29 18:19:28"
        },
        {
            "id": 2,
            "name": "date",
            "created_at": "2018-07-29 18:19:35",
            "updated_at": "2018-07-29 18:19:35"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/events?page=1",
        "last": "http:\/\/localhost\/api\/events?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/events",
        "per_page": 20,
        "to": 2,
        "total": 2
    }
}
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
{
    "data": {
        "id": 1,
        "name": "party",
        "created_at": "2018-07-29 18:19:28",
        "updated_at": "2018-07-29 18:19:28"
    }
}
```

### HTTP Request
`GET api/events/{id}`

`HEAD api/events/{id}`


<!-- END_2f937339643bb255988a5ee41f56547c -->

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
{
    "data": [
        {
            "id": 1,
            "name": "rainy",
            "created_at": "2018-07-29 17:24:02",
            "updated_at": "2018-07-29 17:24:02"
        },
        {
            "id": 2,
            "name": "windy",
            "created_at": "2018-07-29 17:25:24",
            "updated_at": "2018-07-29 17:38:49"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/weather-groups?page=1",
        "last": "http:\/\/localhost\/api\/weather-groups?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/weather-groups",
        "per_page": 20,
        "to": 2,
        "total": 2
    }
}
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
{
    "data": {
        "id": 1,
        "name": "rainy",
        "created_at": "2018-07-29 17:24:02",
        "updated_at": "2018-07-29 17:24:02"
    }
}
```

### HTTP Request
`GET api/weather-groups/{id}`

`HEAD api/weather-groups/{id}`


<!-- END_db23914d5df1afe92c1ad7984b017ec5 -->

