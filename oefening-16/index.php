<?php

spl_autoload_register(function ($name){
    $path = "${name}.php";
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);
    require_once $path;
});

$beeldhouwerk = new Kunstwerken\Beeldhouwerk();
$boek = new Kunstwerken\Boek();
$film = new Kunstwerken\Film();
$foto = new Kunstwerken\Foto();
$schilderij = new Kunstwerken\Schilderij();
$vaas = new Kunstwerken\Vaas();
$lied = new Kunstwerken\Lied();
$dans = new Kunstwerken\Dans();

echo var_dump($boek);