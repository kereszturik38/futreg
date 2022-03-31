<?php

include "model/Jelentkezes.php";
include "model/Versenyzok.php";


$versenyzok = new Versenyzok();

if(isset($_POST["Küldés"])){

    var_dump($_POST);

    
}else{
    include "view/regisztraciok.php";
}



?>