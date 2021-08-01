<?php 
// File Name : Notebook.php
include_once "./MainItem.php";

class Notebook extends MainItem{
    
   
    private  $owner ;

    public function __construct(){
        parent::__construct();
        $this->owner = $this->generateName();
    }
    
    /**
     * setOwner
     *
     * @param  mixed $owner
     * @return void
     */
    public function setOwner(string $owner){
        $this->owner = $owner ;
    }
    
    /**
     * getOwner
     *
     * @return string
     */
    public function getOwner() : string{
        return $this->owner ;
    }
    
    /**
     * read
     *
     * @param  mixed $pageNumber
     * @return string
     */
    public function read(int $pageNumber) : string {

        // Here we can Implement any custom string view for each item type

        if($pageNumber < $this->pageRange){
            return "This is the content of page : ${pageNumber}  (Notebook Item) \n";
        }

        return "Page ${pageNumber} is unavailable! -> Range between 1 to " . $this->pageRange . "\n";
    }
    
    /**
     * getAll
     *
     * @return array
     */
    public function getAll() : array{
        return [
            "owner" => $this->owner
        ];
    }
}