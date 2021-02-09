<?php
if (!isset($_SESSION)) {
	session_start();
}
if ( !isset($_SESSION['giris']) || $_SESSION['giris'] != '1') {
	header("Location: login.php");
}
require __DIR__ . '/data.php';

function set_cookie($isim, $deger)
{
	setcookie($isim, $deger, time() + 3600);
}

function get_cookie($isim)
{
	if ( isset($_COOKIE[$isim]) ) {
		return $_COOKIE[$isim];
	} else {
		return false;
	}
}

function delete_cookie($isim)
{
	setcookie($isim, '', time() - 3600);
}
?>

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
  * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
  *
  * Bu dosyayı diğer dosyalarınızda dahil etmek için `require`, `include`,
  * `require_once` veya `include_once` fonksiyonlarını kullanabilirsiniz.
  */
