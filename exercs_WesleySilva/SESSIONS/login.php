<?php
/*
Crie uma pasta para desenvolver os arquivos, conforme segue:
Crie uma página (index.php) com um formulário em que o usuário insere um login e uma senha, enviando os
dados via POST à página login.php;
O programa deve validar se o usuário e a senha são válidos (considere o usuário '<seu_primeiro_nome>' e a
senha '<seu_RM>') e se forem válidos deve criar a sessão com a chave user_login, com o valor '1' (true).
Caso contrário, seu valor deve ser alterado para '0' (false). Após a verificação, a página principal.php deve
ser carregada (utilize a função header).
Na página principal.php verifique se o valor da sessão é igual a '1'. Se for, exiba a mensagem "Bem
vindo ao Sistema". Se não for, exiba a página index.php, redirecionando sua exibição.
*/

    if($_POST['login']=="Wesley" || $_POST['login']=="wesley"){
        if($_POST['senha']=="20072"){
            session_start();
                $_SESSION['user_login'] = 1;
        }
    }
    else{
        session_start();
            $_SESSION['user_login'] = 0;
    }

header("Location: principal.php");