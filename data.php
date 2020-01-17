<?php

    session_start();

    if(!isset($_SESSION["favorites"])){$_SESSION["favorites"]=[];}

    // Vérification de la requête Ajax côté serveur

    function isAjaxRequest()
    {
        return isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest";
    }


    // Si le serveur ne reçoit pas d'Ajax, alors nous quittons le script

    if(!isAjaxRequest())
    {
        exit;
    }

/*
    *** Traitement des favoris ***
*/

if($_POST)
{
    //print_r($_POST);

    $id=isset($_POST["id"]) ? $_POST["id"] : "";

    //echo $id;

    // nous passon la donnée dans un filtre(REGEX) acceptant un ou plusieurs nombres et qui conservera cette valeur

    if(preg_match("/post-(\d+)/",$id,$filter))
    {
            //print_r($filter);
            $id = $filter[1];

            if(!in_array($id,$_SESSION["favorites"]))
            {
                $_SESSION["favorites"][] = $id;
            }
            
            // traitement du retrait des favoris
            

            print "true";

    }else{
        print"false";
    }

}

/*
    *** Traitement de la déconnexion ***
*/

if($_GET)
{
    //print_r($_GET);
    if(isset($_GET["a"]) && $_GET["a"] == "deconnect")
    {
        session_destroy();
        print"true";
    }
}












































?>