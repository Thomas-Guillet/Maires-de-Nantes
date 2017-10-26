<!DOCTYPE html>
<?php
include_once "data.php";
?>
<html>
	<head>
		<title>Archives municipales de Nantes</title>
	</head>
	<body>
		<?php foreach ($aListeMaires as $iKey => $aValue) { ?>
			<div id="maire-<?= $iKey ?>">
				<div class="name">
					<?= $aValue['name'] ?>,
				</div>
				<?php if(isset($aValue['label']) && ($aValue['label'] != '')){ ?>
					<div class="label">
					 <?= $aValue['label'] ?>
					</div>
				<?php } ?>
				<?php if(isset($aValue['begin-date']) && ($aValue['begin-date'] != '')){ ?>
					<div class="begin-date">
						<?= $aValue['begin-date'] ?>
					</div>
				<?php } ?>
				<?php if(isset($aValue['end-date']) && ($aValue['end-date'] != '')){ ?>
					<div class="end-date">
						<?= $aValue['end-date'] ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</body>
</html>