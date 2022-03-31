<?php

include "model/Jelentkezes.php";
include "model/Versenyzok.php";


$versenyzok = new Versenyzok();

if(isset($_GET["nev"])){

    $nev = $_GET["nev"];
    $szuletes = new DateTime($_GET["szuletes"]);
    $email = $_GET["email"];
    $nem = $_GET["nem"];


    $now = new Datetime()->now;

    $diff = $szuletes->diff($now);
    $diffYears = $diff->y;

    
    if($diffYears <= 14){
        die("Csak a 14 éven felettiek jelentkezhetnek");
    }else{
        if($versenyzok->Regisztral($conn,$nev,$szuletes,$nem,$email)){
            include "view/siker.php";
        }else{
            include "view/hiba.php";
        }
        
    }

    
}else{
    include "view/regisztraciok.php";
}



?>