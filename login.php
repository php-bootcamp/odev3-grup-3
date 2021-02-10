<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['giris']) && $_SESSION['giris'] == '1') {
	header("Location: posts.php");
} 
?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Giriş Yap</title>
	<link rel="stylesheet" href="style.css">
<body class="login-page">
	<div class="login">
		<?php if (isset($_GET['durum']) && $_GET['durum'] == '0'): ?>
		<div class="login-alert">
			Kullanıcı adı ve parola hatalı!
		</div>
		<?php endif; ?>
		<form action="do-login.php" method="post" class="login-form">
		  <div class="form-group">
		    <label>Kullanıcı Adı</label>
		    <input type="text" class="login-input" name="kullanici"
				value="<?=isset($_SESSION['kullanici']) ? $_SESSION['kullanici']:'';?>" required>
		  </div>
		  <div class="form-group">
		    <label>Parola</label>
		    <input type="password" class="login-input" name="parola" required>
		  </div>
			<div class="login-submit">
		    <button type="submit" class="login-btn">Giriş Yap</button>
		  </div>
		</form>
	</div>
</body>
</html>
