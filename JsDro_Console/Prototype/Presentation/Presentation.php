<?php

require('../Services/Services.php');
require('../Entities/categorie.php');

class Presentation {
    public function viewCategorie(){
        echo "\n View Categories available ";

        $categorieServices = new Services();
        $categories = $categorieServices->getCategorie();
      if(!empty($categories)){  
        foreach($categories as $ct){
            echo "---------------------------------\n";
            echo "Titles: " . $ct->getTitle() . "\n";
            echo "Image: " . $ct->getImage() . "\n";
        }
    }else{
        echo "Categories not available";
    }
    echo "---------------------------------\n\n";
}

    public function addCategorie(){
        echo "\n Adding new Categorie : \n";

        $title = askQuestion("Enter The title of Category or 'back' for go back : \n");
        if(strtolower($title) === 'back'){
            return;
        }

         $image = askQuestion("Enter The image of Category or 'back' for go back : \n");
        if(strtolower($image) === 'back'){
            return;
        }

        $new_categorie = new Categorie($title,$image);
        $categorieServices = new Services();
        $categorieServices->setCategorie($new_categorie);
        echo "Categorie  added successfully\n\n";

    }
    public function editCategorie() {
        echo "\n Edit Categorie: \n";
    
        $title = askQuestion("Enter the title of the category to edit: ");
        
        $categorieServices = new Services();
        $categories = $categorieServices->getCategorie();
        
        $found = false;
        foreach ($categories as $categorie) {
            if ($categorie->getTitle() === $title) {
                $found = true;
                $newTitle = askQuestion("Enter the new title or 'skip' to keep the current title: ");
                $newImage = askQuestion("Enter the new image or 'skip' to keep the current image: ");
                
                $updatedTitle = ($newTitle !== 'skip') ? $newTitle : $categorie->getTitle();
                $updatedImage = ($newImage !== 'skip') ? $newImage : $categorie->getImage();
    
                $newCategorie = new Categorie($updatedTitle, $updatedImage);
                $categorieServices->editCategorieByTitle($title, $newCategorie);
    
                echo "Categorie updated successfully.\n\n";
                break;
            }
        }
    
        if (!$found) {
            echo "Categorie with title '$title' not found.\n\n";
        }
    }

    public function deleteCategorie() {
        echo "\n Delete Categorie: \n";
    
        $title = askQuestion("Enter the title of the category to delete: ");
        
        $categorieServices = new Services();
        $deleted = $categorieServices->deleteCategorieByTitle($title);
    
        if ($deleted) {
            echo "Categorie with title '$title' deleted successfully.\n\n";
        } else {
            echo "Categorie with title '$title' not found.\n\n";
        }
    }
    
    
     
}
    


?>