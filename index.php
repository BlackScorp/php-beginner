<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

include __DIR__.'/includes/functions.php';
$currentPage = 'index';
$navigation = getNavigation($currentPage);

$title = 'Startseite';

include __DIR__.'/includes/layout.php';
