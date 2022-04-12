<?php
require_once "Disk.php";
$disk = new Disk(10);
echo $disk->getArea();
echo $disk->getLength();