<?php

class DataBase {
    public $Categories = [];

    public function __construct() {
        $this->retrieveData();
    }

    private function retrieveData() {
        $file_path = '../DB/DataBase.txt'; 
        if (file_exists($file_path)) {
            $content = file_get_contents($file_path);
            $Data = unserialize($content);
            if ($Data !== false && isset($Data->Categories)) {
                $this->Categories = $Data->Categories; 
            }
        }
    }

    private function storeData() {
        $file_path = '../DB/DataBase.txt'; 
        $Data = serialize($this); 
        file_put_contents($file_path, $Data);
    }

    public function saveData() {
        $this->storeData();
    }
}

?>
