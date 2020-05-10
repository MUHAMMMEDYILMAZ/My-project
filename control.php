<!DOCTYPE>
<html  lang="tr">
 
<head>
        <link rel="stylesheet" type="text/css" href="stylepp.css">
		
</head>
<body>
<div class="far">
<?php
                if(isset($_POST['submit'])){
					                         $kullancı_Adi=$_POST['kullancı_Adi'];
											  $Şifre=$_POST['Şifre'];
                if($Şifre=='12345'){
					?>
				                	<div class="dogru">
                                        <p><?php echo "Hoş geldiniz\ ". $kullancı_Adi;?><p><br>			
									</div>
<?php									
				}
				else{
					?>
                        <div class="yanlis">
						<p><?php echo "Şifreyi yanlış girdiniz lütfen 12345 giriniz\ ". $kullancı_Adi;?></p><br>	
						</div>
                           <a href="http://localhost/php/login.php"> Lütfen geri dönün 
                <img src="goback.jpg" width="100px" height="100px"/>  
            </a>	
<?php
				}}
?>				
    </div>
 </body>
</html>		