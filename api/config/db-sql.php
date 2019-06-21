<?php
$dsn = 'mysql:unix_socket=/var/run/mysqld/mysqld.sock;host=db;dbname=changeme;charset=utf8';
$connection = new \PDO($dsn, 'changeme', 'changeme');
// throw exceptions, when SQL error is caused
$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
// prevent emulation of prepared statements
$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
