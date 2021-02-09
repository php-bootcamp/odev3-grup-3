<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
  * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
  *
  * **Giriş yapmamış olan kullanıcı için** formdan gelen bilgilerin kontrol
  * edildiği ve kullanıcı adı `bootcamp`, parola `bootcamp` olduğu durumda
  * sisteme giriş yaptırmasını bekliyoruz. Bilgilerde eksiklik veya hata olduğu
  * durumda `login.php` dosyasına yönlenmesini ve ekrana hata ile ilgili mesajı
  * yazmasını bekliyoruz. Ek olarak, kullanıcının hassas verisi dışındaki
  * verilerin (parola hariç diğer alanlar gibi) form üzerinde **girilmiş**
  * olmasını bekliyoruz.
  * 
  * (Örn: `login.php` dosyasında kullanıcı adı kısmına `eray`, parola kısmına
  * `deneme` yazdığımda `do-login.php` dosyasına gitmesini ve oradan dönüp forma
  * geri geldiğimde hata mesajı ile birlikte formda sadece kullanıcı adı kısmının
  * `eray` ile dolmasını bekliyoruz.)
  */
if (!isset($_SESSION)) {
	session_start();
}

if ( isset($_POST['kullanici']) || isset($_POST['parola']) ) {

	if ( !isset($_POST['kullanici']) ) {
		header("Location: login.php?durum=0");
	}

	if ( !isset($_POST['parola']) ) {
		header("Location: login.php?durum=0");
	}

	$kullanici = $_POST['kullanici'];
	$parola = $_POST['parola'];

	$_SESSION['kullanici'] = $kullanici;

	if ( $kullanici == 'bootcamp' && $parola == 'bootcamp' ) {
		$_SESSION['giris'] = '1';
		header("Location: posts.php");
	}
	else {
		header("Location: login.php?durum=0");
	}

}
else {
	header("Location: login.php?durum=0");
}
?>

