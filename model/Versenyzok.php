<?php

class Versenyzok{

    public static function Listaz($conn){
        $result = $conn->query("SELECT * FROM jelentkezes");
        if($result){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }

    public static function Regisztral($conn,$jelentkezo){
        $stmt = $conn->prepare("INSERT INTO jelentkezes(nev,nem,szuletes,email) VALUES (?,?,?,?)");
        $stmt->bind_param("sisi",$jelentkezo->get_nev(),$jelentkezo->get_nem(),$jelentkezo->get_szuletes(),$jelentkezo->get_email());
        if($stmt->execute()){
            $result = $stmt->get_result();
            return $result;
        }else{
            return false;
        }
    }
}


?>