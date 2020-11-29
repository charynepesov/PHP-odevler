<html>
	<head></head>
	<body>
		<form action="" method="post">
			<p>Alışveriş Tutarı: <input type="text" name="tutar" ></p>
			<p><input name="dugme" type="submit" ></p>
		</form>
	</body>
</html>
<?php
	if(isset($_POST["dugme"])){
		$alisverisTutari=$_POST['tutar'];
		$gun=date("D");
		if ($gun=="Sat" || $gun=="Sun")
		{
			$alisverisTutari-=10*$alisverisTutari/100;
			echo "Haftasonu indirimi uygulanmıştır. Yeni tutar: $alisverisTutari";
		}
		if ($alisverisTutari>=150)
		{
			$alisverisTutari-=20*$alisverisTutari/100;
			echo "150 TL üstü indirimi uygulanmıştır. Yeni tutar: $alisverisTutari";
		}
	}
?> 