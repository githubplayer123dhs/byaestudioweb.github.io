<?php

		include 'baglan.php';
		$icerik=$db->prepare("select * from icerikler where seo=:seo");
		$icerik->execute(array('seo' => $_GET['seo']));
		$icerikgetir=$icerik->fetch(PDO::FETCH_ASSOC);


		?>
		<div style="text-align: center;">
			<img src="<?php echo $icerikgetir['img'];?>" width="50%">
			<div class="sub">
				<a href="<?php echo $icerikgetir['seo'];?>"><?php echo $icerikgetir['konu'];?></a>
			</div><br>
			<p class="metin"><?php echo $icerikgetir['metin'];?></p>
			<p class="metin">Tarih: <?php echo ($icerikgetir['icerik_tarih']);?></p>
		</div>