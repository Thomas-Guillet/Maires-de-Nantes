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
	</head>
	<body>
		<?php
		$iIndent = 0;
		foreach ($aListeMaires as $iKey => $aValue) { 
			if($iIndent % 2 == 0){
				$sClassname = 'left';
			}else{
				$sClassname = 'right';
			} ?>
			<div id="<?= $aValue['begin-date'] ?>" class="ancre"></div>
			<div id="maire-<?= $iKey ?>" class="maire <?= $sClassname ?>">
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
			</div>
		<?php
		$iIndent++;
		} ?>

		<div class="menu">
			<div id="menu" class="extand">
				<div class="content">
				<?php foreach ($aNavTimeline as $key => $value) { ?>
					<a id="date-timeline-<?= $key ?>" href="#<?= $value ?>" ><?= $value ?></a>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
		<script src="main.js"></script>
	</body>
</html>