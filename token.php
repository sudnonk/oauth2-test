<?php
    /**
     * Credentialを発行するっぽい
     */

    require_once __DIR__.'/server.php';

    //createFromGlobalsは、$_POSTとか$_GETを使うっていう意味だと思われ
    //リクエストをハンドルして送り返すみたいな？
    /** @var \OAuth2\Response $response リクエストに対する応答 */
    $response = $server->handleTokenRequest(OAuth2\Request::createFromGlobals());
    $response->send();

