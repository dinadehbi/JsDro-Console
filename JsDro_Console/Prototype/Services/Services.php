<?php

require('../DataAccess/DAO.php');

class Services {
    public function getCategorie(){
        $DataBase2 = new DAO();
        return $DataBase2->getCategorie();
    }


    public function setCategorie($categorie){
        $DataBase2 = new DAO();
        $DataBase2->setCategorie($categorie);
    }
    
    public function editCategorieByTitle($title, $categorie) {
        $DataBase2 = new DAO();
        return $DataBase2->editCategorieByTitle($title, $categorie);
    }

    public function deleteCategorieByTitle($title) {
        $DataBase2 = new DAO();
        return $DataBase2->deleteCategorieByTitle($title);
    }
    
    
    
}




?>