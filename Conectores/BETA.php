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
// 			FTP
// ###################################

define('FTP_HOST','ftphost');
define('FTP_USER','user');
define('FTP_PASS','pass');
define('FTP_DIR_DEFAULT','files/projetoPhp/');
define('__UPLOAD_MAX_SIZE_MB', 15);
define('__UPLOAD_MIN_SIZE_MB', 0);


// ###################################
// 			SYSTEM
// ###################################

define('__CONTROLLER_DEFAULT','Site');
define('__METHOD_DEFAULT','index');
define('__ROUTEVARS_DEFAULT', 'home');

// ###################################
// 			DATABASE
// ###################################

define('__HOST','127.0.0.1');
define('__USER','root');
define('__PASS','');
define('__BDNAME','projetoPhp');
define('__DBPORT', 3306);

// ###################################
// 			EMAIL
// ###################################
define('__SMTP_EMAIL','contato@renanporto.com.br');
define('__SMTP_NOME','Sistema');
define('__SMTP_USER','contato@renanporto.com.br');
define('__SMTP_PASS','WcB[hOIQ2O6f');
define('__SMTP_SERVER','br696.hostgator.com.br');

// ###################################
// 			DIRETÓRIO BIBLIOTECA
// ###################################

define('LIBRARY_VENDOR', __FRAME_DIR . 'Library/');
define('URL_JS','http://localhost/FramePHP-Simples/Assets/js');
define('URL_CSS','http://localhost/FramePHP-Simples/Assets/css');
define('URL_IMG','http://localhost/FramePHP-Simples/Assets/img');
define('URL_ASSETS_EXTERNO','http://localhost/FramePHP-Simples/Assets/externos/');
define('URL_JS_EXTERNO',URL_ASSETS_EXTERNO . 'js');
define('URL_CSS_EXTERNO',URL_ASSETS_EXTERNO . 'css');
define('URL_LIBRARY_EXTERNO',URL_ASSETS_EXTERNO . 'library');

ini_set('display_errors', 1);