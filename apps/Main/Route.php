<?php
/*
* Welcome to excode route 
* Error massagenya bisa kalian tambahin sendiri
* Ini hanya basic kalau kurang silahkan tambahin
* Author @ Eggy fachrurrozy

*/

class Route{
//class penting

     protected $controller = 'ThisController';
     protected $params      = [];
     protected $method     = 'index';


//main class
          public function __construct(){

                //pencarian url
                 if(isset($_GET['url'])){
                              
                              //filter karakter berbahaya
                              $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
                              
                              //definisi controller
                              $url[0] = $url[0] .'Controller';
      
                                           }else{
                                                
                                                //lokasi thiscontoller berati menjadi "http://localhost/ex/public/home"
                                                $url[0] = 'home';
                              } 

              //cek file controller
                if( file_exists('../apps/Controllers/'. $url[0].'.php') ){
                              
                              //load menjadi url[0]
                              $this->controller = $url[0];

                                      }else{
                                            //disini isi bagian error untuk page anda
                                          //return require_once '../apps/Resource/error/404.php';
                              }
 
                         //mengambil controller jadi tidak perlu menambahkan php dibelakangnya
                          require_once '../apps/Controllers/'. $this->controller.'.php';
                                            
                                            //unset ulang variable
                                            $this->controller = new $this->controller; 
  
  
                        //cek method
                         if(isset($url[1])){
        
                                   //jika method ada maka akan menjadiurl kedua
                                   if(method_exists($this->controller,$url[1])){
           
                               $this->method = $url[1];

                    }
  
  
             }

                unset($url[0]);
                unset($url[1]);
                $this->params = $url;
                call_user_func_array([$this->controller, $this->method], $this->params);
        } 
     
   }
