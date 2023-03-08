<?php

 class DashboardController
 {
    public function index()
    {

        //echo 'Logado com sucesso <a href="http://localhost/web/dashboard/logout">Fazer logout</a>';

        $colecPostagem = Projecto::selecionaTodos();
         //var_dump($colecPostagem);
        $loader = new \Twig\Loader\FiLesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache','auto_reload'=>true,
        ]);
       $template =$twig->load('freelancer.html');
      
       $parameters['name_user']= $_SESSION['freelancer']['name_user'];
     
      echo $template->render($parameters); 

      


      $parametro= array();
      $parametro['ultprojectos']=$colecPostagem;
      //var_dump($colecPostagem->fetchAll());
    //   $conteudo = $template->render($parametro);
    //   echo $conteudo;
    }

    public function logout(){
        unset($_SESSION['freelancer']);
        session_destroy();


        header('Location: http://localhost/web');
    }


  
 }