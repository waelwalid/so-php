<?php
// File Name : index.php
include_once "./BookShelf.php";
include_once "./Book.php";
include_once "./Magazine.php";
include_once "./Notebook.php";
try{
    /** Book Implementation */
    echo "\n ------ Book Start ----- \n";
    $Book = new Book();
    $Book->setTitle("hello World");
    $Book->setAuthor("Wael Walid");
    print_r($Book->read(4));
    print_r($Book->getAll());
    echo "\n ------ Book End ----- \n";


    /** Magazine Implementation */
    echo "\n ------ Magaize Start ----- \n";
    $Magazine = new Magazine();
    $Magazine->setName("Hello Tech team magazine");
    print_r($Magazine->read(4));
    print_r($Magazine->getAll());
    echo "\n ------ Magaize End ----- \n";


    echo "\n ------ Notebook Start ----- \n";
    /** Notebook Implementation */
    $Notebook = new Notebook();
    $Notebook->setOwner("John doe");
    print_r($Notebook->read(4));
    print_r($Notebook->getAll());
    echo "\n ------ Notebook End ----- \n";


    echo "\n ------ BookShelf Start ----- \n";
    /** Book Shelf Implementation */
    // initiate shelf and modify the maximum capacity if needed
    $bookShelf = new BookShelf(100);
    // store items (book , magazine , notebook) | item must be instance of allowed types
    $bookShelf->setItems([$Book , $Magazine , $Notebook]);
    // Get all items
    print_r($bookShelf->getItems());
    // Get Capacity Report
    print_r($bookShelf->report());
    echo "\n ------ BookShelf End ----- \n";

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}