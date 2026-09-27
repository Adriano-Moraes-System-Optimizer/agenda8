<?php require_once('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php
    session_start();
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
    
    require_once 'conexaoBD.php';
    
    $sql = "SELECT * FROM usuario WHERE nome = '".$nome."'";
    $resultado = $conexao->query($sql);
    $linha = mysqli_fetch_array($resultado);
    
    if($linha != null && $linha['senha'] == $senha) {
        $_SESSION['logado'] = $nome;
        echo '<a href="principal.php" style="text-decoration:none;">
                <h1 class="w3-button w3-teal w3-round-large">'.$nome.', Seja Bem-Vinda! </h1>
              </a>';
    } else {
        echo '<a href="index.php" style="text-decoration:none;">
                <h1 class="w3-button w3-red w3-round-large"><i class="fa fa-warning"></i> Login Inválido! </h1>
              </a>';
    }
    $conexao->close();
?>
</div>
<?php require_once('rodape.php'); ?>