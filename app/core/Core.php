<?php

class Core{
     
    private $url;
    private $controller;
    private $method ='index';
    private $params = array(); 

    private $use; //usuario
    private $error;

    public function __construct()
    {
        // $this->use =$_SESSION['freelancer'] ?? null;

        // $this->error = $_SESSION['msg_error'] ?? null;

        // if(isset($this->error)){
        //     if($this->error['count']=== 0){
        //         $_SESSION['msg_error']['count']++;
        //     }else{
        //         unset($_SESSION['msg_error']);
        //     }
        // }

    }

    public function start($request){

        if(isset($request['url'])){
            $this->url= explode('/', $request['url']);

            $this->controller =ucfirst( $this->url[0]).'Controller';
            array_shift($this->url);

            if(isset($this->url[0]) && $this->url != ''){
                $this->method = $this->url[0];
                array_shift($this->url);

                if(isset($this->url[0]) && $this->url != ''){
                    $this->params = $this->url;
                }
            }            
        } 
        if($this->use){
            $pg_permission=['DashboardController'];
            
            if(!isset($this->controller) || !in_array($this->controller,$pg_permission)){
                $this->controller = 'DashboardController';
                $this->method = 'index';
            }
        }else{
            $pg_permission= ['LoginController'];

            if(!isset($this->controller) || !in_array($this->controller,$pg_permission)){
                $this->controller = 'LoginController';
                $this->method = 'index';
            }
        }
        else{
            $this->controller='LoginController';
            $this->method ='index';
            
        }

      return call_user_func(array(new $this->controller, $this->method), $this->params);
        //var_dump($this->controller,$this->method, $this->params);
       
    }
}




?>