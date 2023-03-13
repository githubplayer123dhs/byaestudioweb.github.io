<form method="json" id="yorum">
				<!-- current #{user} avatar -->
				<div class="input_comment" style="width: 380px;">
					<input type="text" id="kullanici_ad" name="kullanici_ad" placeholder="Kullanıcı Adı">
				</div>		 	<div class="input_comment"  style="width: 390px;">
					<input type="mail" id="mail" name="mail" placeholder="Mail Adresi">
				</div>		 	<div class="input_comment">
					<textarea type="text" id="yorum_text" name="yorum" placeholder="Yorumunuz.."></textarea>
					<input type="hidden" name="icerik_id" value="<?php echo $icerikgetir['id'];?>">
					<input type="hidden" id="yorum_alt" name="yorum_alt" value="<?php if(isset($_GET["comment"])){echo $_GET['comment'];}  ?>">
				</div>
				<div class="input_comment">
					<input type="button" name="ekle" id="ekle" value="Yorum Yap">
				</div></form>