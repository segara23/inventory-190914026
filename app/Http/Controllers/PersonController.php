<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //membuat attribute name
    private $name ="Bayu Purbayanto";
    private $nrp ="190914026";
    //membuat method index
    public function index(){
        //mengembalikan nilai attribute name
        return $this->name. " " .$this->nrp;
       
    //membuat method baru 
    }
    public function show($param) {
        //merubah attribut name 
        $this->name = $param;
        return $this->name;
    }
    
}
