# react-php-docker

..is a docker-compose microapp react setup with a php api and composer building

NOTE: THIS IS A WORK IN PROGRESS

![gif of building](https://github.com/niallone/react-php-docker/blob/master/doc/build.gif)

### Makes containers..

- `db_re` - RethinkDB - Realtime JSON database
- `db` - MariaDB - Relational database
- `app` - React
- `nginx` - Web Server 
    - Serves app.example.com & api.example.com
    - API server proxypasses PHP scripts to phpfpm server
- `phpfpm` - PHP processor
- `composer` - PHP composer build task

### Notes..

- Add `app.example.io.docker` & `api.example.io.docker` to `hosts` file

### Usage..

```docker-compose build```
```docker-compose up -d```

