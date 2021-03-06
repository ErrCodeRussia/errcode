<?php

$database = require __DIR__ . "/database.php";

return [
    /** Название проекта */
    'name' => 'ErrCode Base Project',

    /** Относительные ссылки на главную страницу и страницу авторизации */
    'homeUrl' => '/',
    'authUrl' => '/auth/',

    /**
     * true - исключения выводятся на экран
     * false - исключения логируются в logs/
     */
    'exceptions' => true,

    'database' => $database,

    /** Названия файлов стилей из public_html/css/, которые нужно подключить */
    'styles' => [
        'main.css',
        'fonts.css',
    ],

    /** Названия скриптовых файлов из public_html/js/, которые нужно подключить */
    'scripts' => [

    ],

    /** Ссылка на favicon относительно public_html/ */
    'favicon' => '',

    'errors' => [
        404 => 'errors/404',
        'access' => 'errors/access',
    ],

    'logs' => [
        'log' => LOGS . 'log.txt',
    ],

    'DSA' => [
        "digest_alg" => "sha512",
        "private_key_bits" => 4096,
    ],

    'mail' => [
        'host' => '',
        'username' => '',
        'password' => '',
        /** secure => 'ssl'/'tls' */
        'secure' => '',
        'port' => 25
    ],

    'any' => [

    ]
];