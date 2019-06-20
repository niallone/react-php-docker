# react-php-docker

..is a docker-compose microapp react setup with a php api and composer building

NOTE: THIS IS A WORK IN PROGRESS

### Makes containers..

- db_re - rethink database
- db - mariadb
- app - react
- nginx - web server 
    - serves app.example.com & api.example.com
    - api server proxypasses any php requests to phpfpm server
- phpfpm - php processor
- composer - php composer builder

### Notes..

- add app.example.io.docker & api.example.io.docker to hosts file