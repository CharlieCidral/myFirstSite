<?php
session_start();
 $nome = filter_input(INPUT_POST, 'nome_login', FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST,'email_login', FILTER_VALIDATE_EMAIL);
 $senha = filter_input(INPUT_POST,'senha_cad', FILTER_VALIDATE_INT);

 if($nome) {

    $expiracao = time() + (86400 * 30);
    setcookie('nome_login', $nome, $expiracao);

     echo 'Nome: '.$nome." Bem vindo!";
 } else {
     $_SESSION['aviso'] = 'Preencha os itens corretamente!';
     header("Location:cadastro.php");
     exit;
 }

 if(isset($_COOKIE['nome_login'])) {
    $nome = $_COOKIE['nome_login'];
    echo '<h2>'.$nome.'</h2>';
}
?>
<a href="apagar.php">Apagar Cookie</a>
<?php
require 'calculadora.php';
    $calc = new calculadora();
    // objeto
    $calc->add(12);
    $calc->add(2);
    $calc->sub(1);
    $calc->multiply(3);
    $calc->divide(2);
    $calc->add(0.5);
    echo "TOTAL: ".$calc->total();
    
    $calc->clear();
    ?>