<?php
var_dump($_POST);

if(isset($_POST)){
    if(!empty($_POST)){
        if(isset($_POST['nome'])&& !empty($_POST['nome'])){
            $nome= $_POST['nome'];
            echo $nome;
        }
    }
}
if(isset($_POST)){
    if(!empty($_POST)){
        if(isset($_POST['email'])&& !empty($_POST['email'])){
            $nome= $_POST['email'];
            
        }
    }
}