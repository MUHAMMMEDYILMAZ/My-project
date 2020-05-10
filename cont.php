<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.php"/>
</head>
<body>
<div class="ilet">
             <?php 
			if(isset($_POST["submit"])){

				$name1=$_POST["name1"];
				$surname=$_POST["surname"];
				$number=$_POST["number"];
				$email=$_POST["email"];
				$city=$_POST["city"];
				$msg=$_POST["msg"];
				echo "<span>Adınız:</span> ".$name1."<br>"."<br>";
				echo "<SoyAdınız: </span>".$surname."<br>"."<br>";
				echo "<span>Email: </span>".$email."<br>"."<br>";
				echo "<span>Şehir: </span>".$number."<br>"."<br>";
				echo "<span>Numaranız: </span>".$city."<br>"."<br>";
				if(!empty($_POST["cinsiyet"])){
					echo "<span>Cinsiyet: </span>".$_POST["cinsiyet"]."<br>"."<br>";
				}
				echo "<span>Mesaj: </span>".$msg."<br>"."<br>";
				
				
			}
		 ?>
	
</div>	
</body>
</html>
			
		