<?php 
/*
* Welcome to ex-controller
* controller kalian bisa edit
* lokasi view dan modelsnya 
* Author @ Eggy fachrurrozy

*/
class Controller{

    public function view($file){

        require_once '../apps/Resource/Views/'.$file.'.php';

       }
        
        public function model($file){
           
            require_once '../apps/Model/'.$file.'.php';
                  
                   return new $show();
                   return new $ExModels();
        }
    }





