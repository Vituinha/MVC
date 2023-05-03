<?php
namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    /** 
    *Método responsável por retornar o conteúdo (view) da nossa home
    *@return string
    */
    public static function getHome(){
        //ORGANIZAÇÃO
        $obOrganization = new Organization;

        //RETORNA A VIEW DA HOME
        $content = View::render('Pages/Home',[
        "name" => $obOrganization->name,
        "description" => $obOrganization->description,
        "site" => $obOrganization->site]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('WDEV - CANAL - HOME', $content);
    }
}