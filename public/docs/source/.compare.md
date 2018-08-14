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

#WeatherGroup
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
        "per_page": 15,
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

