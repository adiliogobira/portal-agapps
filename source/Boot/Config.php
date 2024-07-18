<?php

define("ENVIRONMENT", 'prod');

/**
 * DATABASE
 */
if (ENVIRONMENT == 'prod') {
/**
 * PROJECT URLs
 */
	define("CONF_URL_BASE", "https://www.agapps.com.br");
	define("CONF_DB_HOST", "localhost");
	define("CONF_DB_USER", "root");
	define("CONF_DB_PASS", "!Adilio{}270");
	define("CONF_DB_NAME", "agapps");

} else {
/**
 * PROJECT URLs
 */
	define("CONF_URL_BASE", "http://localhost/html/deprecated/agapps");
	define("CONF_DB_HOST", "localhost");
	define("CONF_DB_USER", "adilio");
	define("CONF_DB_PASS", "Adilio{}2019");
	define("CONF_DB_NAME", "agapps");
}

/**
 * SITE
 */
define("CONF_SITE_NAME", "AG Apps");
define("CONF_SITE_TITLE", "AG Apps - Soluções para aplicação online");
define("CONF_SITE_DESC", "Uma empresa para soluções de aplicações online");
define("CONF_SITE_LANG", "pt-BR");
define("CONF_SITE_DOMAIN", "wwww.agapps.com.br");
define("CONF_SITE_ADDR_STREET", "AV. Alberto Calixto");
define("CONF_SITE_ADDR_NUMBER", "1000");
define("CONF_SITE_ADDR_COMPLEMENT", "B 204");
define("CONF_SITE_ADDR_CITY", "Santa Luzia");
define("CONF_SITE_ADDR_STATE", "Minas Gerais");
define("CONF_SITE_ADDR_ZIPCODE", "33170-863");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@dilioguitar");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@dilioguitar");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "AgAppsSystem");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "AdilioGobira");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "adiliogobira");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");
const CONF_SOCIAL_WHATSAPP = "https://api.whatsapp.com/send?phone=5533991437706&text=Quero%20ter%20mais%20informa%C3%A7%C3%B5es%20sobre%20esta%20ferramenta!";

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ['cost' => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../themes");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "agapps"); //"cafeweb");
define("CONF_VIEW_APP", "cafeapp");
define("CONF_VIEW_ADMIN", "cafeadm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.gmail.com");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "adiliogobira@gmail.com");
define("CONF_MAIL_PASS", "Adilio{}27022015");
define("CONF_MAIL_SENDER", [
	"name" => "Adilio Gobira",
	"address" => "adiliogobira@gmail.com",
]);
define("CONF_MAIL_SUPPORT", "adiliogobira@gmail.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", "true");
define("CONF_MAIL_OPTION_AUTH", "true");
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

/**
 * PAGAR.ME
 */
define("CONF_PAGARME_MODE", "test");
define("CONF_PAGARME_LIVE", "test");
define("CONF_PAGARME_TEST", "test");
define("CONF_PAGARME_BACK", CONF_URL_BASE . "/pay/callback");

// switch (ENVIRONMENT) {
// case 'development':
error_reporting(-1);
ini_set('display_errors', 1);
// 	// error_reporting(E_ALL & ~E_NOTICE);
// 	break;

// case 'testing':
// case 'production':
// 	ini_set('display_errors', 0);
// 	if (version_compare(PHP_VERSION, '5.3', '>=')) {
// 		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
// 	} else {
// 		error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
// 	}
// 	break;

// default:
// 	header('HTTP/1.1 503 Service Unavailable.', true, 503);
// 	echo 'The application environment is not set correctly.';
// 	exit(1); // EXIT_ERROR
// }

// set_error_handler('PHPErro');
