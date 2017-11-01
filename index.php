<!DOCTYPE html>
<?php
include_once "data.php";
include_once "controller.php";
?>
<html>
	<head>
		<title>Archives municipales de Nantes</title>
		<link href="style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div id="entete" style="background-image: url(<?= $actual_link ?>/img/background.jpg);">
		</div>
		<div id="backentete">
			<div class="title">
				Les Maires de la Ville de Nantes
			</div>
			<img src="<?= $actual_link ?>/img/blason.png" />
		</div>
		<?php
		foreach ($aListeMaires as $iKey => $aValue) { ?>
			<div id="ancre-<?= $aValue['begin-date'] ?>" class="ancre"></div>
			<div id="maire-<?= $iKey ?>" class="maire">
				<div class="row">
					<div class="col-md-6 info-maire">
						<div class="date">
						<?php if(isset($aValue['begin-date']) && ($aValue['begin-date'] != '')){ ?>
							<div class="begin">
								<?= $aValue['begin-date'] ?>
							</div>
						<?php } ?>
						<?php if(isset($aValue['end-date']) && ($aValue['end-date'] != '')){ ?>
							<div class="end">
								-<?= $aValue['end-date'] ?>
							</div>
						<?php } ?>
						</div>
						<div class="name">
							<?= $aValue['name'] ?>,
						</div>
						<?php if(isset($aValue['label']) && ($aValue['label'] != '')){ ?>
							<div class="label">
							 <?= $aValue['label'] ?>
							</div>
						<?php } ?>
						<?php if(isset($aValue['description']) && ($aValue['description'] != '')){ ?>
							<div class="description">
							 <?= $aValue['description'] ?>
							</div>
						<?php } ?>
						<?php if(isset($aValue['picture']) && ($aValue['picture'] != '')){ ?>
							<img class="picture" src="<?= $actual_link ?>/img/<?= $aValue['picture'] ?>" />
						<?php } ?>
					</div>
					<div class="col-md-6">
						<div class="this-date">
							Cette année
						</div>
						<?php if(isset($aValue['nb_hab']) && ($aValue['nb_hab'] != '')){ ?>
							<div class="info-city">
								Nombre d'habitants: <?= $aValue['nb_hab'] ?>
							</div>
						<?php } ?>
						<?php if(isset($aValue['building']) && ($aValue['building'] != '')){ ?>
							<div class="info-city">
								Structure inaugurée: <?= $aValue['building'] ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php
		} ?>

		<div class="menu">
			<div id="menu" class="extand">
				<div class="content">
				<?php foreach ($aNavTimeline as $key => $value) { ?>
					<span data-index="<?= $value ?>"><?= $value ?></span>
				<?php } ?>
				</div>
			</div>
			<div id="btn-timeline" class="btn">
				<div id="open-timeline">
					<div class="burger">
						<div class="line 1"><div class="over"></div></div>
						<div class="line 2"><div class="over"></div></div>
						<div class="line 3"><div class="over"></div></div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div id="details">
			<div class="img">

			</div>
		</div> -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>
