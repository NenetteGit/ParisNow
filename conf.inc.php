<?php

$listOfGender = [ 1=>"Monsieur", 2=>"Madame", 3=>"Autre"];
$defaultGender = 1;

define("DBNAME","parisnow");
define("CHARSET","utf8");
define("DBUSER","root");
define("DBPWD","");
define("DBHOST","localhost");
define("DBDRIVER","mysql");

$listOfErrors = [
    1=>"Le genre n'est pas correct",
    2=>"Le prénom doit faire plus de 2 caractères",
    3=>"Le nom doit faire plus de 2 caractères",
    4=>"L'email n'est pas valide",
    5=>"Le format de la date d'anniversaire n'est pas correct",
    6=>"La date d'anniversaire n'existe pas",
    7=>"Vous devez avoir entre 18 et 100 ans",
    8=>"Le pays n'est pas correct",
    9=>"Le mot de passe doit faire entre 8 et 20 caractères",
    10=>"Le mot de passe de confirmation ne correspond pas",
    11=>"L'email existe déjà",
    12=>"Captcha incorrect"
];

$categoryOfContact = [
    1=>"Idée",
    2=>"Problème",
    3=>"Commerciale"
];