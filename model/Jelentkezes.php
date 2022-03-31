<?php

class Jelentkezes{
    private int $sorszam;
    private string $nev;
    private string $szuletes;
    private int $nem;
    private string $email;


    function __construct($sorszam,$nev,$szuletes,$nem,$email)
    {
        $this->sorszam = $sorszam;
        $this->nev = $nev;
        $this->szuletes = $szuletes;
        $this->nem = $nem;
        $this->email = $email;

    }

    function get_nev()
    {
        if(isset($this->nev)) return $this->username;
    }
    function get_sorszam()
    {
        if(isset($this->sorszam)) return $this->sorszam;
    }

    function get_szuletes()
    {
        if(isset($this->szuletes)) return $this->szuletes;
    }

    function get_nem()
    {
        if(isset($this->szuletes)) return $this->nem;
    }

    function get_email()
    {
        if(isset($this->email)) return $this->email;
    }

    function set_nev($nev)
    {
        $this->nev = $nev;
    }
    function set_sorszam($sorszam)
    {
        $this->sorszam = $sorszam;
    }

    function set_szuletes($szuletes)
    {
        $this->szuletes = $szuletes;
    }

    function set_nem($nem)
    {
        $this->nem = $nem;
    }

    function set_email($email)
    {
        $this->email = $email;
    }

}



?>