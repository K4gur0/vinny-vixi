<?php

function chargerClasse($classe)
{
    require strtolower($classe) . ".php";
}

spl_autoload_register("chargerClasse");

?>