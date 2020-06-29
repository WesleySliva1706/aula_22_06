<?php
/*
Crie uma pasta para os arquivos PHP a serem desenvolvidos, conforme segue:
Crie uma página (index.php) com um formulário onde o usuário digita o nome, email e cidade em que
nasceu.
Em seguida, desenvolva a página (cookies.php) que receberá os dados do formulário e armazenará cada
dado em um Cookie. Depois, redirecione-o à página mensagem.php (dica: utilize o comando
'header(Location...)' para isso).
Por fim, crie a página mensagem.php que exibirá a mensagem a partir dos cookies armazenados.
Mensagem: "<Nome>, você nasceu em <Cidade> e seu e-mail é <e-mail>."
*/

setcookie('nomeCookie', $_POST['nome'], time()+60*60*24);
setcookie('cidnascCookie', $_POST['cidnasc'], time()+60*60*24);
setcookie('emailCookie', $_POST['email'], time()+60*60*24);

header("Location: mensagem.php");