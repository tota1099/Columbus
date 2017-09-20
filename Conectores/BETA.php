<?php

// ###################################
// 	MAIN CONFIGURATIONS
// ###################################

define("__SYSTEM_ROOT_NAME","BETA");
define("__SYSTEM_NAME","FramePHP - Simples");
define('__FRAME_DIR', __APP_DIR . 'Frame/');;
define('__SYSTEM_URL', 'http://localhost/FramePHP-Simples/public/');

// ###################################
// 	FTP
// ###################################

define('FTP_HOST','ftphost');
define('FTP_USER','user');
define('FTP_PASS','pass');
define('FTP_DIR_DEFAULT','files/projetoPhp/');
define('__UPLOAD_MAX_SIZE_MB', 15);
define('__UPLOAD_MIN_SIZE_MB', 0);


// ###################################
// 	SYSTEM
// ###################################

define('__CONTROLLER_DEFAULT','Site');
define('__METHOD_DEFAULT','index');
define('__ROUTEVARS_DEFAULT', 'home');

// ###################################
// 	DATABASE
// ###################################

define('__HOST','127.0.0.1');
define('__USER','root');
define('__PASS','');
define('__BDNAME','projetoPhp');
define('__DBPORT', 3306);

// ###################################
// 	EMAIL
// ###################################
define('__SMTP_EMAIL','contato@seusite.com.br');
define('__SMTP_NOME','Sistema Email');
define('__SMTP_USER','contato@seusite.com.br');
define('__SMTP_PASS','SMPT_Password');
define('__SMTP_SERVER','SMPT_SERVER');

// ###################################
// 	ASSETS
// ###################################

define('LIBRARY_VENDOR', __FRAME_DIR . 'Library/');
define('URL_ASSETS', __APP_DIR .'Assets/');
define('URL_JS',URL_ASSETS . 'js');
define('URL_CSS',URL_ASSETS . 'css');
define('URL_IMG',URL_ASSETS. 'img');
