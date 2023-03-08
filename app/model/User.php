<?php

    use Db\Database\Conexao;

class User{
    private $id;
    private $nome;
    private $username;
    private $user;
    private $email;
    private $senha;
    // private $check;


    public function validateLogin(){
        $conn = Conexao::getConn();
        $sql ='SELECT * FROM users WHERE username =:username';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':username',$this->username);
        // $stmt->bindValue(':senha',$this->senha);
        $stmt->execute();

        if($stmt->rowCount()){
            $result = $stmt->fetch();

            if($result['senha']===$this->senha){
                $_SESSION['freelancer']=array(
                    'id_user'=>$result['id'],'name_user'=>$result['username']);

                return true;
            }
        }
        throw new \Exception('Login Invalido');

    }
    public static function InserirTodos($reqPost){
        $con = Conexao::getConn();
         
        $sql = "INSERT INTO user_login (nome, user, email, senha) VALUES (:nom, :user, :eml, :senh)";
        $sql= $con->prepare($sql);
        $sql->bindValue(':nom',$reqPost['username']);
        $sql->bindValue(':user',$reqPost['user']);
        $sql->bindValue(':eml',$reqPost['email']);
        $sql->bindValue(':senh',$reqPost['pwd']);
        
        $res=$sql->execute();
       var_dump($sql->fetchAll());
       if ($res == 0) {
        throw new Exception("Falha na inserção");

        return false;
    }
    return true;
    }
    
    // public function setCheck($check){
    //     $this->check = $check;
    // }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function setUser($user){
        $this->user = $user;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getNome(){
        return $this->nome;
    }
    // public function getCheck(){
    //     return $this->check;
    // }

    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function getUsername(){
        return $this->username;
    }
    public function getUser(){
        return $this->user;
    }

}



