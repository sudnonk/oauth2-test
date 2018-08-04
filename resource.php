<?php
    /**
     * 受け取ったトークンが正しいかを認証し、なにかを表示するページ
     */
    require_once __DIR__.'/server.php';

    //Verifyする
    if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
        $server->getResponse()->send();
        die;
    }
    echo json_encode(array('success' => true, 'message' => 'You accessed my APIs!'));