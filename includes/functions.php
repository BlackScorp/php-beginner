<?php

function getNavigation(string $activeElement = 'index'):array{
    $navigation = [];

    $navigationElement = [
        'label' => 'Startseite',
        'target'=>'index.php',
        'active'=>false
    ];

    $navigation['index']=$navigationElement;


    $navigationElement = [
        'label' => 'Kontakt',
        'target'=>'contact.php',
        'active'=>false
    ];

    $navigation['contact']=$navigationElement;

    $navigationElement = [
        'label' => 'Über mich',
        'target'=>'about.php',
        'active'=>false
    ];

    $navigation['about']=$navigationElement;

    $navigation[$activeElement]['active'] = true;

    return $navigation;
}