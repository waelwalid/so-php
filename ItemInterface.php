<?php 
// File Name : ItemInterface.php
interface ItemInterface{    
    /**
     * read
     *
     * @param  mixed $pageNumber
     * @return string
     */
    public function read(int $pageNumber) : string ;    
    /**
     * getAll
     *
     * @return array
     */
    public function getAll() : array;
}