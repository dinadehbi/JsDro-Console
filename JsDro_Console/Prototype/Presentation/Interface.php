<?php

require('../Presentation/Presentation.php');

function askQuestion($question){
    echo $question;
    return trim(fgets(STDIN));
}

function CategorieManagmant(){
  echo "Welcome to the Categorie List Manager\n\n";
    $exitProgram = false;
    while (!$exitProgram) {
      echo "+------------------------------------+\n";
      echo "|        Books Management            |\n";
      echo "|------------------------------------|\n";
      echo "|    Please choose an action:        |\n";
      echo "|------------------------------------| \n";
      echo "| [1] - View the Categorie           |\n";
      echo "| [2] - Add a new Categorie          |\n";
      echo "| [3] - Edit an existing Categorie   |\n";
      echo "| [4] - Delete a Categorie               |\n";
      echo "| [5] - Exite  The programme         |\n";


      echo "+------------------------------------+\n\n";
  
      $action = askQuestion("Your choice: ");
      switch (strtolower($action)) {
        case '1':
            $Presentation = new Presentation();
            $Presentation->viewCategorie();
            break;
        case '2':
            $Presentation = new Presentation();
            $Presentation->addCategorie();
            break;
        case '3':
            $Presentation = new Presentation();
            $Presentation->editCategorie();
            break;
        case '4':
            $Presentation = new Presentation();
            $Presentation->deleteCategorie();
            break;
        case '5':
            $exitProgram = true;
            break;
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
    
    }
    echo "Exiting the program. Goodbye!\n";
  }

  CategorieManagmant();
  






?>