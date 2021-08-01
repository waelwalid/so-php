<?php 
// File Name : Magazine.php
include_once "./MainItem.php";

class Magazine extends MainItem{
    
   
    private  $name ;

    public function __construct(){
        parent::__construct();
        $this->name = $this->generateName();
    }
    
    /**
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName(string $name){
        $this->name = $name ;
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName() : string{
        return $this->name ;
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
            return "This is the content of page : ${pageNumber}  (Magazine Item) \n";
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
            "name" => $this->name
        ];
    }
}