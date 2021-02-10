<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * **Giriş yapmamış kullanıcı** için giriş sayfasına (`login.php`), **giriş
  * yapmış kullanıcı** için de yazı listesini(`posts.php`) göreceği sayfaya
  * yönlendirmesi gerekiyor.
  */

if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['giris']) && $_SESSION['giris'] == '1') {
	header("Location: posts.php");
} else {
	header("Location: login.php");
}
?>
