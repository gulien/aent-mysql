<h1 align="center">aent-mysql</h1>
<p align="center">TODO</p>
<p align="center">
    <a href="https://travis-ci.org/theaentmachine/aent-mysql">
        <img src="https://travis-ci.org/theaentmachine/aent-mysql.svg?branch=master" alt="Travis CI">
    </a>
    <a href="https://scrutinizer-ci.com/g/theaentmachine/aent-mysql/?branch=master">
        <img src="https://scrutinizer-ci.com/g/theaentmachine/aent-mysql/badges/quality-score.png?b=master" alt="Scrutinizer">
    </a>
    <a href="https://codecov.io/gh/theaentmachine/aent-mysql/branch/master">
        <img src="https://codecov.io/gh/theaentmachine/aent-mysql/branch/master/graph/badge.svg" alt="Codecov">
    </a>
</p>

---

## events

### ADD
`$ aent ADD`

Sent by aenthill, 

### ADD-DOCKER-SERVICE
`$ aent ADD-DOCKER-SERVICE {payload}`

Payload format (JSON) :
```
{
  "serviceName" : "foo",
  "service": {
    "image"         : "foo",
    "internalPorts" : [123],
    "dependsOn"     : ["foo"],
    "ports"         : [{"source": 80, "target": 8080}],
    "labels"        : [{"key": "foo", "value": "bar"}],
    "environments"   : [{"key": "FOO", "value": "bar"}],
    "volumes": [
      {
        "type"        : "volume|bind|tmpfs",
        "source"	  : "foo",
        "target"	  : "bar",
        "readOnly"    : true
      }
    ]
  }
}
```
It handles named volumes by adding them inside the root **volumes** level in docker-compose.json

TODO: handle case when the service already exists


### DELETE-DOCKER-SERVICE
`$ aent DELETE-DOCKER-SERVICE {payload}`

Payload format (JSON) :
```
{
  "serviceName" : "foo",
  "namedVolume" : ["bar"]
}
```

