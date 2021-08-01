<?php 
// File Name : MainItem.php
include_once "./ItemInterface.php";
abstract class MainItem implements ItemInterface{

    protected $pageRange;
    
    /**
     * __construct
     *
     * @return void
     */
    protected function __construct(){
        $this->pageRange = $this->generateRandomPages();
    }    
    /**
     * generateRandomPages
     *
     * @return int
     */
    protected function generateRandomPages() : int{
        return rand(1 , 1000) ;
    }
    
    /**
     * generateName
     *
     * @return string
     */
    protected function generateName() : string{
        return uniqid();
   }

}