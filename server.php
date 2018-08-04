<?php
    require_once "vendor/autoload.php";

    $dsn      = 'mysql:dbname=oauth2_test;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';

    /** @var OAuth2\Storage\Pdo $storage データベースのこと */
    $storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));

    /** @var OAuth2\Server $server OAuth2サーバ */
    $server = new OAuth2\Server($storage);

    //ClientCredentials
    $server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
    //AuthorizationCode
    $server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));

