<?php
exit;
for($i=1;$i<=60;$i++)
{
	$file = "cat".$i.".png";
	file_put_contents($file, file_get_contents('cat.png'));
}