<!doctype html>
<html> 
<head> 
</head> 
<body> 
  <form  name="form1" method="post" action="gonder_post.php"> 
      <input type="text" name="kuladi"/> 
      <input type="password" name="sifre" /> 
      <input type="submit" name="gonder" value="gonder" /> 
  </form> 
  <br /> 
  Kullanıcı Adın: <?php echo $_POST["kuladi"]; ?><br /> 
  Şifren: <?php echo $_POST["sifre"]; ?> 
</body> 
</html> 