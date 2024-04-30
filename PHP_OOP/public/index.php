<?php
use App\Worker;

require_once('../vendor/autoload.php');
$worker = new \App\Worker('Alexey', 26, [6, 8, 10]);
$worker->work();