<?php

require('../DB/DataBase.php');

class DAO {
    public function getCategorie(){
        $DataBase = new DataBase();
        return $DataBase->Categories;
    }

    public function setCategorie($categorie){
        $DataBase = new DataBase();
        $DataBase->Categories[] = $categorie;
        $DataBase->saveData();

    }
    public function editCategorieByTitle($title, $newCategorie) {
        $DataBase = new DataBase();
        foreach ($DataBase->Categories as $index => $categorie) {
            if ($categorie->getTitle() === $title) {
                $DataBase->Categories[$index] = $newCategorie;
                $DataBase->saveData();
                return true;
            }
        }
        return false;
    }

    public function deleteCategorieByTitle($title) {
        $DataBase = new DataBase();
        foreach ($DataBase->Categories as $index => $categorie) {
            if ($categorie->getTitle() === $title) {
                unset($DataBase->Categories[$index]);
                $DataBase->Categories = array_values($DataBase->Categories); // Reindex the array
                $DataBase->saveData();
                return true;
            }
        }
        return false;
    }
    
    
    
}


?>