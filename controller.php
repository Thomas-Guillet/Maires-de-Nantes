<?php

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$aNavTimeline = array();
foreach ($aListeMaires as $key => $value) {
	array_push($aNavTimeline, $value['begin-date']);
}
