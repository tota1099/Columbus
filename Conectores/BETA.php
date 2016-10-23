<?php

// ###################################
// 			MAIN CONFIGURATIONS
// ###################################

define("__SYSTEM_ROOT_NAME","BETA");
define("__SYSTEM_NAME","FramePHP - Simples");
define('__APP_DIR', 'C:/xampp/htdocs/FramePHP-Simples/');
define('__FRAME_DIR', __APP_DIR . 'Frame/');;
define('__SYSTEM_URL', 'http://localhost/FramePHP-Simples/public/');

// ###################################
// 			DATABASE
// ###################################

define('__HOST','127.0.0.1');
define('__USER','root');
define('__PASS','root');
define('__BDNAME','bancoExample');

// ###################################
// 			DIRETÓRIO BIBLIOTECA
// ###################################

define('LIBRARY_VENDOR', __FRAME_DIR . 'Library/');
define('URL_ASSETS_EXTERNO','http://localhost/FramePHP-Simples/Assets/externos/');
define('URL_JS_EXTERNO',URL_ASSETS_EXTERNO . 'js');
define('URL_CSS_EXTERNO',URL_ASSETS_EXTERNO . 'css');
define('URL_LIBRARY_EXTERNO',URL_ASSETS_EXTERNO . 'library');