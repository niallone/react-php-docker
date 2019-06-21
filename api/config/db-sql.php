<?php
$dsn = 'mysql:unix_socket=/var/run/mysqld/mysqld.sock;host=db;dbname=intadoc_sql;charset=utf8';
$connection = new \PDO($dsn, 'int_db_user', 'FYf2IpgopGVfwvsmjdI6vthbKB5A3G0jgt8AYHTS9y6sYz9Pvc7Gg');
// throw exceptions, when SQL error is caused
$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
// prevent emulation of prepared statements
$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
