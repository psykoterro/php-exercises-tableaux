<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 22:50
 */
$HautsDeFrance = array(59=>"Nord",80=>"Somme",62=>"Pas-de-Calais",02=>"Aisne",60=>"Oise");

foreach ($HautsDeFrance as $NumDep => $departements){
    echo "Le département ".$departements." a le numéro ".$NumDep."<br />";
}