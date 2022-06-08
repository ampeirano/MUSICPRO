<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 

$tablet_browser = 0;
$mobile_browser = 0;
$body_class = 'desktop';

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
	$tablet_browser++;
	$body_class = "tablet";
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
	$mobile_browser++;
	$body_class = "mobile";
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
	$mobile_browser++;
	$body_class = "mobile";
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		'newt','noki','palm','pana','pant','phil','play','port','prox',
		'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		'wapr','webc','winw','winw','xda ','xda-');

if (in_array($mobile_ua,$mobile_agents)) {
	$mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
	$mobile_browser++;
	//Check for tablets on opera mini alternative headers
	$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
	if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
		$tablet_browser++;
	}
}
if ($tablet_browser > 0) {
	// Si es tablet has lo que necesites
	header('Location: vista/home.php' , true, 301);
	exit();
}
else if ($mobile_browser > 0) {
	// Si es dispositivo mobil has lo que necesites
	header('Location: vista/home.php' , true, 301);
	exit();
}
else {
	//Si es ordenador de escritorio has lo que necesites
	//Se mantiene en esta pagina 
	
	header('Location: vista/home.php' , true, 301);
	exit();
}  


?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>.::Jardin Granja del Sol - Sistema ::. [BETA] </title>
          <style type="text/css">
            body, html
            {
                margin: 0; padding: 0; height: 100%; overflow: hidden;
 
            }
		    #content
            {
                position:absolute; left: 0; right: 0; bottom: 0; top: 0px; 
            }
        </style>
    </head>
    <body>
        
        <div id="content">
             <iframe width="100%" height="100%" frameborder="0" src="vista/home.php" />
        </div>
        
    </body>
    
    
</html>