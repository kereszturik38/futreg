<?php

include "model/Jelentkezes.php";
include "model/Versenyzok.php";


$versenyzok = new Versenyzok();

if(isset($_POST)){

    $nev = $_POST["nev"];
    $szuletes = date_create_from_format('Y-m-d',$_POST["szuletes"]);
    $email = $_POST["email"];
    $nem = $_POST["nem"];


    $now = date_create_from_format("Y-m-d",date("Y-m-d"));

    $diff = (array) date_diff($szuletes,$now);
    $diffYears = $diff["Y"];

    
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