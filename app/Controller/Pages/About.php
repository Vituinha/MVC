<?php
namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page{
    /** 
    *Método responsável por retornar o conteúdo (view) da nossa página de Sobre WDEV
    *@return string
    */
    public static function getAbout(){
        //ORGANIZAÇÃO
        $obOrganization = new Organization;

        //RETORNA A VIEW DA HOME
        $content = View::render('Pages/About',[
        "name" => $obOrganization->name,
        "description" => $obOrganization->description,
        "site" => $obOrganization->site]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('SOBRE > WDEV', $content);
    }
}