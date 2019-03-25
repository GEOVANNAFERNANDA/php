<html>
    <head>
    </head>
    <body>
        <?php
            echo"opcion: ".$_POST["op"];
        $genero=$_POST["league"];
	$edad=$_POST["op"];
	if($genero=="Hombre"){
	
	if($edad>=1 && $edad <=5){
            $url = "https://geovannafernanda.github.io/ninode1a5/";
        }
	if($edad>=6 && $edad <=10){
            $url = "https://geovannafernanda.github.io/ninosde610/";
        }
	if($edad>=11 && $edad <=15){
            $url = "https://geovannafernanda.github.io/ninosde11a15/ ";
        }
	if($edad>=16 && $edad <=20){
            $url = "https://geovannafernanda.github.io/hombresde16a20/";
        }
	if($edad>=20 && $edad <=80){
            $url = "https://geovannafernanda.github.io/hombres20/";
        }
	}else{
	if($genero=="Mujer"){
	
	if($edad>=1 && $edad <=5){
            $url = "https://geovannafernanda.github.io/ninasde1a5/";
        }
	if($edad>=6 && $edad <=10){
            $url = "https://geovannafernanda.github.io/ninasde6a10/";
        }
	if($edad>=11 && $edad <=15){
            $url = "https://geovannafernanda.github.io/ninaasde11a15/";
        }
	if($edad>=16 && $edad <=20){
            $url = "https://geovannafernanda.github.io/mujeresde16a20/";
        }
	if($edad>=20 && $edad <=80){
            $url = "https://geovannafernanda.github.io/Mujeresde20/";
        }
        
	}
	
         
        
        
        header("Location".$url);
    
    ?>
    </body>
        </html>
    
    
