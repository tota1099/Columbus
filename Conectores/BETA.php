<?php

// ###################################
// 	MAIN CONFIGURATIONS
// ###################################

define("__SYSTEM_ROOT_NAME","BETA");
define("__SYSTEM_NAME","Columbus");
define('__FRAME_DIR', __APP_DIR . '/Frame/');;
define('__SYSTEM_URL', 'http://localhost/');

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

define('__HOST','database');
define('__USER','root');
define('__PASS','root');
define('__BDNAME','columbus');
define('__DBPORT', 3306);

// ###################################
// 	EMAIL
// ###################################
define('__SMTP_EMAIL','contato@seusite.com.br');
define('__SMTP_NOME','Sistema Email');
define('__SMTP_USER','contato@seusite.com.br');
define('__SMTP_PASS','SMTP_Password');
define('__SMTP_SERVER','SMTP_SERVER');

// ###################################
// 	ASSETS
// ###################################

define('URL_ASSETS', __SYSTEM_URL .'Assets/');
define('URL_JS',URL_ASSETS . 'js');
define('URL_ASSETS_EXTERNO', URL_ASSETS . 'externos/');
define('URL_CSS',URL_ASSETS . 'css');
define('URL_IMG',URL_ASSETS. 'img');
