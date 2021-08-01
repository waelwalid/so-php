<?php 
// File Name : Book.php
include_once "./MainItem.php";

class Book extends MainItem{
    
   
    private  $author ;
    private  $title ;

    public function __construct(){
        parent::__construct();
        $this->author = $this->generateName();
        $this->title = $this->generateName();
    }
    
    /**
     * setTitle
     *
     * @param  string $title
     * @return void
     */
    public function setTitle(string $title){
        $this->title = $title ;
    }
    
    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle() : string{
        return $this->title ;
    }
    
    /**
     * setAuthor
     *
     * @param  string $author
     * @return void
     */
    public function setAuthor(string $author){
        $this->author = $author ;
    }
    
    /**
     * getAuthor
     *
     * @return string
     */
    public function getAuthor() : string{
        return $this->author ;
    }
    
    /**
     * read
     *
     * @param  int $pageNumber
     * @return string
     */
    public function read(int $pageNumber) : string {

        // Here we can Implement any custom string view for each item type

        if($pageNumber < $this->pageRange){
            return "This is the content of page : ${pageNumber}  (Book Item) \n";
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
            "title" => $this->title ,
            "author" => $this->author , 
            "pages" => $this->pageRange
        ];
    }
}