<?php

class Cadastro{
    public static function InserirTodos($reqPost){
        $con = Conexao::getConn();
         
        $sql = "INSERT INTO user_login (nome, user, email, senha) VALUES (:nom, :user, :eml, :senh)";
        $sql= $con->prepare($sql);
        $sql->bindValue(':nom',$reqPost['nome']);
        $sql->bindValue(':user',$reqPost['msg']);
        $sql->bindValue(':eml',$reqPost['id']);
        $sql->bindValue(':senh',$reqPost['id']);
        $sql= $con->prepare($sql);
        $sql->execute();
     //var_dump($sql->fetchAll());
         $resultado = array();
        
        while ($row = $sql->fetchobject('Projecto')) {
             $resultado[] = $row;
        }
        if (!$resultado) {
            throw new Exception("Não foi encontrado nenhum registro no banco de dados");
        }
        return $resultado;
    }
}

?>