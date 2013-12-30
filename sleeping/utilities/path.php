<?php
	
global $PATH;

$PATH['url'] = './sleeping/';
$PATH['img_path'] = './sleeping/public/img/';
$PATH['css_path'] = './sleeping/public/css/';
$PATH['js_path'] = './sleeping/public/js/';
$PATH['hotel_admin'] = './sleeping/hotel_admin/';

$PATH['html'] = './sleeping/private/html/';

//library
$PATH['js_lib'] = './sleeping/libs/js/';
$PATH['js_lib_ui'] = './sleeping/libs/js/jquery-ui/';
$PATH['smarty_lib'] = './sleeping/libs/smarty/';
$PATH['doctrine_path'] = './sleeping/libs/doctrine/lib/';

//smarty paths
$PATH['smarty_template_c'] = './sleeping/smarty/template_c/';
$PATH['smarty_config'] = './sleeping/smarty/config/';
$PATH['smarty_template'] = './sleeping/smarty/template/';
$PATH['smarty_cache'] = './sleeping/smarty/cache/';
$PATH['smarty_plugins'] = './sleeping/libs/smarty/plugins/';

//mysql
/*
 * Configurazione locale */
$PATH['mysql']['user'] = 'root';
$PATH['mysql']['password'] = 'uomosil3nt3';
$PATH['mysql']['host'] = '127.0.0.1';
$PATH['mysql']['database'] = 'sleeping';

$PATH['doctrine']['DSN'] = 'mysql://root:uomosil3nt3@localhost:3306/sleeping';

/*
 *  * Configurazione appfog
 
$PATH['mysql']['user'] = 'progweb2012b';
$PATH['mysql']['password'] = 'uomosil3nt3';
$PATH['mysql']['host'] = 'localhost';
$PATH['mysql']['database'] = 'my_progweb2012b';
$PATH['doctrine']['DSN'] = 'mysql://progweb2012b:uomosil3nt3@localhost:3306/sleeping';
*/



/*doctrine2.3 paths
$PATH['doctrine']['app_mod'] = 'development';
$PATH['doctrine']['metadata']='xml';
$PATH['doctrine']['entity']='XmlEntities';
$PATH['doctrine']['proxydir']='Proxy';
$PATH['doctrine']['proxy']='doctrineTester\Proxies';
$PATH['doctrine']['con_driver']='pdo_mysql';
$PATH['doctrine']['con_path']='database.mysql';
*/

/*configurazione server smtp per invio email
$PATH['smtp']['host'] = 'ssl://smtp.gmail.com';
$PATH['smtp']['port'] = '465';
$PATH['smtp']['smtpauth'] = false;
$PATH['smtp']['username'] = 'dipompeodaniele@gmail.com';
$PATH['smtp']['password'] = 'uomosil3nt3Google';
*/
?>
	