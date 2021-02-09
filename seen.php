<?php
require __DIR__ . '/functions.php';

?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Okunanlar</title>
	<link rel="stylesheet" href="style.css">
<body class="yazilar-sayfa">

	<h2 style="text-align: center">
		Hoş geldin, <?php echo $_SESSION['kullanici']; ?>
	</h2>

	<div class="menu">
		<h3 class="baslik">Okunanlar</h3>
		<a href="posts.php" class="okunanlar">Tüm Yazılar</a>
	</div>

	<div class="yazilar">
		<?php foreach ($yazilar as $key => $okunan): ?>
			<?php if (get_cookie('key' . $key) != false): ?>
				<div class="yazi">
					<img src="<?php echo $okunan['image']; ?>" class="resim">
					<div class="icerik">
						<h3><?php echo $okunan['title']; ?></h3>
						<p><?php echo $okunan['brief']; ?></p>
						<div class="islem">
							<form action="seen-delete.php" method="post">
								<input type="hidden" name="yazi_key" value="<?=$key?>">
								<button type="submit" class="kaldir">Kaldır</button>
							</form>
							<a href="post.php?id=<?=$key?>" class="detay">Detay</a>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>

	</div>
</body>
</html>
