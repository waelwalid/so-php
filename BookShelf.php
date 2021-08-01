<?php 
// File Name : BookShelf.php
 include_once "./MainItem.php";

 class BookShelf {
    private $items = [] ;
    private $maxCapacity ;
    
    /**
     * __construct
     *
     * @param  mixed $maxCapacity
     * @return void
     */
    public function __construct($maxCapacity = 100) {
       $this->maxCapacity = $maxCapacity;
    }
        
    /**
     * setItems
     *
     * @param  array $items
     * @return void
     */
    public function setItems(array $items){

        foreach($items as $val){
            // @val must be instance of allowed types
            if($val instanceof MainItem){
                if(count($this->items) < $this->maxCapacity){
                    array_push($this->items , $val);
                }else{
                    throw new Exception("The BookShelf cannot contain more than ".$this->maxCapacity);
                }
            }else{
                throw new Exception("Each Item must be instance of 'MainItem'! ");
            }
          
        }
       
    }
    
    /**
     * getItems
     *
     * @return array
     */
    public function getItems() : array{
        return $this->items ;
    }
    
    /**
     * report
     *
     * @return array
     */
    public function report() : array{
        return [
            "busySlots" => count($this->items),
            "freeSlots" => $this->maxCapacity - count($this->items),
            "maxCapacity" => $this->maxCapacity
        ];
    }

 }






