# API calls

Our server is `http://localhost:8080/`. All examples use this server. Change this in your own server name.

## API endpoint

`$servername/api.php`. In our example, this is `http://localhost:8080/api.php`.

## Get all the images

### Query

```http
http://localhost:8080/api.php?action=query&list=allimages&format=json
```

### Response

```json
{
    "batchcomplete":"",
    "query":{
        "allimages":[
            {
                "name":"Hondje.jpeg",
                "timestamp":"2020-04-14T13:09:22Z",
                "url":"http://localhost:8080/images/8/8f/Hondje.jpeg",
                "descriptionurl":"http://localhost:8080/wiki/Bestand:Hondje.jpeg",
                "descriptionshorturl":"http://localhost:8080/index.php?curid=3",
                "ns":6,
                "title":"Bestand:Hondje.jpeg"
            },
            {
                "name":"Kleurrijke_poesjes.jpeg",
                "timestamp":"2020-04-14T13:18:45Z",
                "url":"http://localhost:8080/images/9/9e/Kleurrijke_poesjes.jpeg",
                "descriptionurl":"http://localhost:8080/wiki/Bestand:Kleurrijke_poesjes.jpeg",
                "descriptionshorturl":"http://localhost:8080/index.php?curid=4",
                "ns":6,
                "title":"Bestand:Kleurrijke poesjes.jpeg"
            },
            {
                "name":"Natte_nas.jpeg",
                "timestamp":"2020-04-14T12:44:48Z",
                "url":"http://localhost:8080/images/8/84/Natte_nas.jpeg",
                "descriptionurl":"http://localhost:8080/wiki/Bestand:Natte_nas.jpeg",
                "descriptionshorturl":"http://localhost:8080/index.php?curid=2",
                "ns":6,
                "title":"Bestand:Natte nas.jpeg"
            }
        ]
    }
}
```

## Get all the pages of a given namespace

We'll use the _Pilootprojecten_-namespace.

### Query

```http
http://localhost:8080/api.php?action=query&list=allpages&&apnamespace=20&format=json
```

### Response

```json
{
    "batchcomplete":"",
    "query":{
        "allpages":[
            {
                "pageid":6,
                "ns":20,
                "title":"Pilootproject:Testje"
            },
            {
                "pageid":7,
                "ns":20,
                "title":"Pilootproject:Tof project"
            }
        ]
    }
}
```

## Get all the namespaces

### Query

```http
http://localhost:8080/api.php?action=query&meta=siteinfo&formatversion=2&siprop=namespaces&format=json
```

### Response

```json
{
    "batchcomplete":true,
    "query":{
        "namespaces":
        {
            "-2":{
                "id":-2,
                "case":"first-letter",
                "name":"Media",
                "subpages":false,
                "canonical":"Media",
                "content":false,
                "nonincludable":false
            },
            "-1":{
                "id":-1,
                "case":"first-letter",
                "name":"Speciaal",
                "subpages":false,
                "canonical":"Special",
                "content":false,
                "nonincludable":false
            },
            "0":{
                "id":0,
                "case":"first-letter",
                "name":"",
                "subpages":false,
                "content":true,
                "nonincludable":false
            },
            "1":{
                "id":1,
                "case":"first-letter",
                "name":"Overleg",
                "subpages":true,
                "canonical":"Talk",
                "content":false,
                "nonincludable":false
            }
        }
    }
}
```
