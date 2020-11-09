<head>
<?php include("koneksi.php"); ?>
<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">

</script>
<style>
		/* Adjust the width of the left reveal menu. */
		#demo-page #left-panel.ui-panel {
			width: 15em;
		}
		#demo-page #left-panel.ui-panel-closed {
			width: 0;
		}
		#demo-page .ui-panel-page-content-position-left,
		.ui-panel-dismiss-open.ui-panel-dismiss-position-left {
			left: 15em;
			right: -15em;
		}
		#demo-page .ui-panel-animate.ui-panel-page-content-position-left.ui-panel-page-content-display-reveal {
			left: 0;
			right: 0;
			-webkit-transform: translate3d(15em,0,0);
			-moz-transform: translate3d(15em,0,0);
			transform: translate3d(15em,0,0);
		}

		/* Listview with collapsible list items. */
	    .ui-listview > li .ui-collapsible-heading {
	      margin: 0;
	    }
	    .ui-collapsible.ui-li-static {
	      padding: 0;
	      border: none !important;
	    }
	    .ui-collapsible + .ui-collapsible > .ui-collapsible-heading > .ui-btn {
	      border-top: none !important;
	    }
	    /* Nested list button colors */
	    .ui-listview .ui-listview .ui-btn {
	    	background: #fff;
	    }
	    .ui-listview .ui-listview .ui-btn:hover {
	    	background: #f5f5f5;
	    }
	    .ui-listview .ui-listview .ui-btn:active {
	    	background: #f1f1f1;
	    }

		/* Reveal panel shadow on top of the listview menu (only to be used if you don't use fixed toolbars) */
		#demo-page .ui-panel-display-reveal {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
		}
		#demo-page .ui-panel-page-content-position-left {
			-webkit-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			-moz-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			box-shadow: -5px 0px 5px rgba(0,0,0,.15);
		}

		/* Setting a custom background image. */
		#demo-page.ui-page-theme-a,
		#demo-page .ui-panel-wrapper {
			background-color: #fff;
			background-image: url("../_assets/img/bg-pattern.png");
			background-repeat: repeat-x;
			background-position: left bottom;
		}

		/* Styling of the page contents */
		.article p {
			margin: 0 0 1em;
			line-height: 1.5;
		}
		.article p img {
			max-width: 100%;
		}
		.article p:first-child {
			text-align: center;
		}
		.article small {
			display: block;
			font-size: 75%;
			color: #c0c0c0;
		}
		.article p:last-child {
			text-align: right;
		}
		.article a.ui-btn {
			margin-right: 2em;
		}
		@media all and (min-width:769px) {
			.article {
				max-width: 994px;
				margin: 0 auto;
				padding-top: 4em;
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
				-webkit-column-gap: 2em;
				-moz-column-gap: 2em;
				column-gap: 2em;
			}
			/* Fix for issue with buttons and form elements
			if CSS columns are used on a page with a panel. */
			.article a.ui-btn {
				-webkit-transform: translate3d(0,0,0);
			}
		}
	</style>
</head>

<body>
	<div data-role="page" >
		<div data-role="header">
			<h1>Toko Jam Tangan</h1>
		</div>

		<div data-role="main" class="ui-content">
			<form method="post" action="demoform.asp">
				<div class="ui-field-contain"  style="margin: auto;max-width: 600px;min-width: 400px;">

				<div class="ui-grid-b" >
					<?php
						$sql = "SELECT * FROM t_produk";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						$i = 0;	
						while($row = mysqli_fetch_assoc($result)) {
							$i = $i+1;
							if($row["id_produk"] %2 != 0){
					?>
					<div class="ui-block-a" style="margin-bottom: 5px;width: 48%;margin: 3px;"><div class="ui-bar ui-bar-a" >
						<a href="#bukafoto_<?php echo $i; ?>" data-rel="popup" data-position-to="window" data-transition="fade">
						<img class="popphoto" src="<?php echo $row["photo"]; ?>" style="width: 100%;height: 120px;"></a>
						<span style="font-size: 15px;font-weight: 400;height: 40px;padding: 5px 0;letter-spacing: normal;text-align: left;overflow: hidden;color: rgba(0, 0, 0, 0.7);"><?php echo $row["nama"]; ?> </span><br>
						<span style="font-size: 16px;font-weight: 600;text-align: left;padding-bottom: 10px;color: #ff5722;">Rp.<?php echo $row["harga"]; ?></span></div>
					</div>
							<?php }else{ ?>
					
					<div class="ui-block-b" style="margin-bottom: 5px;width: 48%;margin: 3px;"><div class="ui-bar ui-bar-a" >
						<a href="#bukafoto_<?php echo $i; ?>" data-rel="popup" data-position-to="window" data-transition="fade">
						<img class="popphoto" src="<?php echo $row["photo"]; ?>" style="width: 100%;height: 120px;"></a>
						<span style="font-size: 15px;font-weight: 400;height: 40px;padding: 5px 0;letter-spacing: normal;text-align: left;overflow: hidden;color: rgba(0, 0, 0, 0.7);"><?php echo $row["nama"]; ?> </span><br>
						<span style="font-size: 16px;font-weight: 600;text-align: left;padding-bottom: 10px;color: #ff5722;">Rp.<?php echo $row["harga"]; ?></span></div>
					</div>
					
						<?php }}} ?>
				</div>
				<?php
						$sql = "SELECT * FROM t_produk";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						$a = 0;	
						while($row = mysqli_fetch_assoc($result)) {
						$a = $a+1;
					?>
				<div data-role="popup"   id="bukafoto_<?php echo $a; ?>" data-overlay-theme="b" data-theme="b" data-corners="false">
					<a href="#" data-rel="back"  class="ui-btn-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">close</a>
				   <img src="<?php echo $row["photo"]; ?>" alt="" width="300">
					<a href="#demo-page<?php echo $a; ?>"><button>Checkout</button></a>
				</div>
						<?php } } ?>
			</form>
    

		</div>
	</div>

	</div>
	<?php
						$sql = "SELECT * FROM t_produk";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
						$a = 0;	
						while($row = mysqli_fetch_assoc($result)) {
						$a = $a+1;
					?>
<div data-role="page" id="demo-page<?php echo $a; ?>">

    <div data-role="header">
        <h1>Jam Tangan</h1>
        <a href="#" data-rel="back"  class="ui-btn-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Kembali</a>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    	<div class="article">
    		<p><img src="<?php echo $row["photo"]; ?>" alt="Fixed Gear bike"></p>

            <h2 style="text-align: right;margin-right:20px;"><?php echo $row["nama"]; ?></h2>
			<h2 style="margin-right:20px;font-weight: 600;text-align: right;padding-bottom: 10px;color: #ff5722;">Rp.<?php echo $row["harga"]; ?></h2>
			<h2>Deskripsi</h2>
            <p><?php echo $row["deskripsi"]; ?></p>

            <p><small></small></p>

            <p><a style="width: 100px;" href="#beli" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini">Beli</a></p>

		</div><!-- /article -->

    </div><!-- /content -->
        	

    </div><!-- /panel -->

	<?php } } ?>
	<div data-role="page" id="beli" data-overlay-theme="b" data-theme="b" data-corners="false">

			<h2 style="text-align: center;padding-top: 50%;">Terimakasih telah belanja di toko kami</h2>
			<p style="text-align: center;"><a style="width: 100px;background-color: #2ad;"   href="index.php" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini">Kembali</a></p>


    </div>
</body>