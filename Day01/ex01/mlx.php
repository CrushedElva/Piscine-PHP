#!/usr/bin/php
<?php
$i = 0;
while ($i < 1000)
{
	if (((($i + 1) % 99) == 0) || $i == 999)
		print("X\n");
	else
		print("X");
	$i++;
}
?>