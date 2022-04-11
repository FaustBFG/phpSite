<?php
/* config.php */
$link = mysqli_connect ('localhost', 'w1702u01', 'Kob4s89a', 'w1702u01');

if (!$link) {

	dieLog(mysqli_connect_error());
}