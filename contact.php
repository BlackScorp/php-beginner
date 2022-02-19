<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

include __DIR__.'/includes/functions.php';
$currentPage = 'contact';
$navigation = getNavigation($currentPage);

$title = 'Kotakt';
include __DIR__.'/includes/layout.php';
