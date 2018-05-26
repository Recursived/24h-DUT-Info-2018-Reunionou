<?php

$date1="2010-08-10";
$date2="2010-06-10";
if (strtotime($date1) > strtotime($date2)){
	echo "oui";
} else {
	echo "non";
}