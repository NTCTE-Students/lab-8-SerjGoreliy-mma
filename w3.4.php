<?php

interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        print "Подключение к MySQL базе данных.<br>";
    }
    
    public function query($sql) {
        print "Выполнение SQL запроса в MySQL: {$sql}<br>";
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        print "Подключение к PostgreSQL базе данных.<br>";
    }
    
    public function query($sql) {
        print "Выполнение SQL запроса в PostgreSQL: {$sql}<br>";
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        print "Подключение к SQLite базе данных.<br>";
    }
    
    public function query($sql) {
        print "Выполнение SQL запроса в SQLite: {$sql}<br>";
    }
}

$mysqlDb = new MySQLDatabase();
$pgsqlDb = new PostgreSQLDatabase();
$sqliteDb = new SQLiteDatabase();

$mysqlDb->connect();
$mysqlDb->query("SELECT * FROM users");

$pgsqlDb->connect();
$pgsqlDb->query("SELECT * FROM products");

$sqliteDb->connect();
$sqliteDb->query("SELECT * FROM orders");