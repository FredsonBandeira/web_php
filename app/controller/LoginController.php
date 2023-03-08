<?php

 class LoginController
 {
    public function index()
    {
        $loader = new \Twig\Loader\FiLesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache','auto_reload'=>true,
        ]);
       $template =$twig->load('login.html');
       $parameters['error']= $_SESSION['msg_error'] ?? null;

       return $template->render($parameters);
    }

    public function check(){

        try{

            $user = new User;
            $user->setUsername($_POST['username']);
            // $user->setUser($_POST['user']);
            // $user->setEmail($_POST['email']);
            $user->setSenha($_POST['pwd']);
      
            $user->validateLogin();

            header('Location: http://localhost/web/dashbord');
        }catch(\Exception $e){
            $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count'=>0);

            header('Location: http://localhost/web/');

        }

     
    }

    public function inserir($dadosPost){

        try{

            
           
            if(!empty($dadosPost['check'])){
                $user = new User;
                $user->setUsername($_POST['username']);
                $user->setUser($_POST['user']);
                $user->setEmail($_POST['email']);
                $user->setSenha($_POST['pwd']);

                 $user->InserirTodos($reqPost);
            }
           // header('Location: http://localhost/web/dashbord');
        }catch(\Exception $e){
            $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count'=>0);

            header('Location: http://localhost/web/');

        }

    }
 }