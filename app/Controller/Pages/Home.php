<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

    /**
     * método responsável por retornar o conteúdo (view) da nossa home
     * @return string
    */
    
    public static function getHome() {
        // Organização
        $obOrganization = new Organization;

        $content = View::render('pages/home',[
            'name'        => $obOrganization -> name,
            'description' => $obOrganization -> description,
            'site'        => $obOrganization -> site
        ]);

        // Retorna a view da página
        return parent::getPage('WDEV - Canal - Home', $content);

    }

}

?>