<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niagahoster</title>

    <?php echo $style; ?>
</head>
<body>
    <?php echo $navbar; ?>

    <?php echo $banner; ?>

    <hr class="devider">

    <?php echo $service; ?>

    <div class="container">
        <?php echo $pricing; ?>

        <?php echo $kelebihan; ?>

        <?php echo $component; ?>

        <?php echo $dukungan; ?>
    </div>

    <hr class="devider">
    
    <?php echo $modul; ?>
    
    <br class="hd-1024">
    
    <?php echo $share; ?>

    <div class="footer-segment">
        <div class="container" id="footer">
            <div class="row">
                <div class="col-6 col-md-3">
					<p class="head-label">HUBUNGI KAMI</p>
                    <p class="list-label">
                        0274-5305505 <br>
                        Senin - Minggu <br>
                        24 Jam Nonstop <br>
                        <br>
                        Jl. Selokan Mataram Monjali <br>
                        Karangjati MT I/304 <br>
                        Sinduadi, Mlati, Sleman <br>
                        Yogyakarta 55284
                    </p>
				</div>

                <div class="col-6 col-md-3">
                    <p class="head-label">LAYANAN</p>
                    <p class="list-label">
                        Domain <br>
                        Shared Hosting <br>
                        Cloud VPS Hosting <br>
                        Managed VPS Hosting <br>
                        Web Builder <br>
                        Keamanan SSL / HTTPS <br>
                        Jasa Pembuatan Website <br>
                        Program Affiliasi
                    </p>
				</div>

                <div class="col-6 col-md-3">
                    <p class="head-label">SERVICE HOSTING</p>
                    <p class="list-label">
                        Hosting Murah <br>
                        Hosting Indonesia <br>
                        Hosting Singapura <br>
                        Hosting PHP <br>
                        Web Builder <br>
                        Hosting Wordpress <br>
                        Hosting Laravel
                    </p>
				</div>

                <div class="col-6 col-md-3">
                    <p class="head-label">TUTORIAL</p>
                    <p class="list-label">
                        Knowledgebase <br>
                        Blog <br>
                        Cara Pembayaran
                    </p>
				</div>
            </div>

            <div class="row">
                <div class="col-6 col-md-3">
					<p class="head-label">TENTANG KAMI</p>
                    <p class="list-label">
                        Tim Niagahoster <br>
                        Karir <br>
                        Events <br>
                        Penawaran & Promo Spesial <br>
                        Kontak Kami
                    </p>
				</div>

                <div class="col-6 col-md-3">
					<p class="head-label">KENAPA PILIH NIAGAHOSTER?</p>
                    <p class="list-label">
                        Support Terbaik <br>
                        Garansi Harga Termurah <br>
                        Domain Gratis Selamanya <br>
                        Datacenter Hosting Terbaik <br>
                        Review Pelanggan
                    </p>
				</div>

                <div class="col-12 col-md-3">
					<p class="head-label">NEWSLETTER</p>
                    <div class="buttonInside">
						<input id="inputan" placeholder="Email" type="email">
						<button class="btn btn-primary" id="submitemail">Berlangganan</button>
					</div>
                    <p class="list-label">
                        Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda
                    </p>
				</div>

                <div class="col-12 col-md-3">
                    <ul id="social-media">
						<li><a href="#" style="color: white;"><img src="<?php echo base_url('assets/icons/'); ?>facebook.png"></a></li>
						<li><a href="#" style="color: white;"><img src="<?php echo base_url('assets/icons/'); ?>twitter.png"></a></li>
						<li><a href="#" style="color: white;"><img src="<?php echo base_url('assets/icons/'); ?>google.png"></a></li>
					</ul>
				</div>
            </div>

            <div class="row" id="bayar">
				<div class="col-md-12">
					<p class="head-label">PEMBAYARAN</p>
                    <br>
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>bca.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>mandiri.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>bni.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>visa.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>mastercard.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>atmbersama.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>permata.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>prima.png">
					<img id="banks" src="<?php echo base_url('assets/icons/'); ?>alto.png">
					<br />
					<p class="list-label bank-label">Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</p>
				</div>
			</div>

            <div class="row" id="copyright">
				<div class="col-12 col-md-9">
					<p class="list-label">
                        Copyright &#169;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta
                        <br>
                        Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology    
                    <p>
				</div>
				<div class="col-12 col-md-3">
					<p>
                        <a href="#">Syarat dan Ketentuan</a> | 
                        <a href="#">Kebijakan Privasi</a>
                    </p>
				</div>
			</div>
        </div>
    </div>
</body> 
</html>

<?php echo $script; ?>