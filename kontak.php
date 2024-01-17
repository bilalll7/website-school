	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Kontak</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
			</div>

			<div class="box-gmaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.45198153476!2d108.68190661744383!3d-6.955890099999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f0e97e9beddcb%3A0x2fd17d5f9eaf9d66!2sSMK%20Negeri%204%20Kuningan!5e0!3m2!1sid!2sid!4v1653492405459!5m2!1sid!2sid" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			
		</div>
	</div>

	<?php include 'footer.php'; ?>