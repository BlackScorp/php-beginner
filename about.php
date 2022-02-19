<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

include __DIR__.'/includes/functions.php';
$currentPage = 'about';
$navigation = getNavigation($currentPage);
$title = 'Über mich';
include __DIR__.'/includes/layout.php';
