<?php


	session_start();

	function login(){

    $usuarios = file_get_contents("usuario.json");
	$usuarios = json_decode($usuarios, true);

	$fez_login = false;


        foreach($usuarios as $usuario){

        if ($_POST['login'] == $usuario['usuario'] && $_POST['senha'] == $usuario['senha']){

              $fez_login = true;

            $_SESSION ['nome'] = $_POST['nome'];
            $_SESSION ['login'] = $_POST['login'];
            $_SESSION ['senha'] = $_POST['senha'];

            $_SESSION ['esta_logado'] = true;

            header('Location: index.php');


        }
    }
       if($fez_login == false){

            header("location: login.php");
       }
        }


    function sair()
    {

        session_destroy();
        header('Location: login.php');
    }


        if ($_GET['acao'] == 'login'){
            login();


	}elseif ($_GET ['acao']== 'sair'){
            sair();

     }



