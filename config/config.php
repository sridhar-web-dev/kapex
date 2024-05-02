<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);
// ini_set('display_error', 'on');


// Common Constants
define('BACKOFFICE_MAIL_ID', 'info@domain.com');
define('COMPANY_NAME', 'KAPEX');
define('SUPPORTTEAM_MAIL_ID', 'needhelp@company.com');

//Absolute file path ==>>
define('ABS_PATH',str_replace("\\", "/", dirname( dirname(__FILE__) ) . DIRECTORY_SEPARATOR));
//Absolute file path <<==

//Absolute url path starts ==>>
$init_temp_root = str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']);
if(isset($_SERVER['HTTPS']) && $_SESSION['https'] == 'on'){
    $init_temp_http = 'https://';
}else{
    $init_temp_http = 'https://';
}

// $init_temp_port = '';

// if(isset($_SERVER["SERVER_PORT"])){
//     if( $_SERVER["SERVER_PORT"] != '80' ){
//         $init_temp_port = ':'. $_SERVER["SERVER_PORT"];
//     }
// }

// For Local
if( $init_temp_root !== ABS_PATH){
    define('ABS_URL',$init_temp_http.$_SERVER['SERVER_NAME']. $init_temp_port . substr( ABS_PATH, strlen( $init_temp_root ) ) );
}else{
    define('ABS_URL',$init_temp_http.$_SERVER['SERVER_NAME'].$init_temp_port.'/' );
}
// For Server
// if( $init_temp_root !== ABS_PATH){
//     define('ABS_URL',$init_temp_http.$_SERVER['SERVER_NAME'] . substr( ABS_PATH, strlen( $init_temp_root ) ) );
// }else{
//     define('ABS_URL',$init_temp_http.$_SERVER['SERVER_NAME']    .'/' );
// }
//Absolute url path end <<===


// DB Config
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'allonibp_lapex');

// Mail Config
define('MAILER_SMTP', 'smtp.mailtrap.io'); //SMTP Server Name
define('MAILER_PORT', 465); //Port
define('MAILER_USER', '18c533a5dcf404');
define('MAILER_PASS', '76b78d18c069ba');
define('MAILER_FROM_EMAIL', 'sridharjnet@gmail.com'); // From Email
define('MAILER_FROM_NAME', COMPANY_NAME); //  From Name
define('MAILER_REPLYTO_EMAIL', BACKOFFICE_MAIL_ID); // Reply-to Email
define('MAILER_REPLYTO_ADMIN', BACKOFFICE_MAIL_ID); // Reply-to Email Admin
define('MAILER_REPLYTO_NAME', COMPANY_NAME); // Reply-to Name


// session and autoload classes
require_once ABS_PATH . 'includes/support/session.php';

require_once ABS_PATH . 'includes/support/class-auto-load.php';


/* country block code starts*/
// $_clientIP = Utils::ReadIPAddress();
// $_client_country_code = Utils::ReadIPLocation($_clientIP,true);
// $blocked_country_list = ['IN'];
// if( in_array( $_client_country_code , $blocked_country_list)  ){
// ob_end_clean();
// //header("HTTP/ 503 Service Unavailable");
// http_response_code(503);
// exit;
// }
/* country block code ends */

//seo tag manager enable/disable config
define('SEO_TAGMANAGER',false);  // set true ==> enable , false => disable

// Social Media LINKS
define('FACEBOOK_LINK',"https://www.facebook.com/");
define('INSTRAGRAM_LINK',"https://www.instagram.com/");
define('LINKEDIN_LINK',"https://www.linkedin.com/");
define('TWITTER_LINK',"https://twitter.com/");
define('YOUTUBE_LINK',"https://www.youtube.com/");
define('TELEGRAM_LINK',"https://t.me/");

?>
