<?php 
require_once('verificarAcesso.php'); 
require_once('cabecalho.php');
?>
<a href="principal.php" class="w3-display-topleft w3-margin">
    <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge w3-round"></i>     
</a> 
<div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-teal w3-round-large w3-margin">Listagem de Amigos</h1>
    <table class="w3-table-all w3-centered w3-text-black">
        <thead>   
            <tr class="w3-teal">
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>Excluir</th>
                <th>Atualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Usa o arquivo centralizado de conexão sem conflito de senha
                require_once 'conexaoBD.php';
                
                $sql = "SELECT * FROM amigo";
                $resultado = $conexao->query($sql);
                
                if($resultado != null && $resultado->num_rows > 0) {
                    foreach($resultado as $linha) {
                        echo '<tr>';
                        echo '<td>'.htmlspecialchars($linha['idamigo']).'</td>';
                        echo '<td>'.htmlspecialchars($linha['nome']).'</td>';
                        echo '<td>'.htmlspecialchars($linha['apelido']).'</td>';
                        echo '<td>'.htmlspecialchars($linha['email']).'</td>';
                        echo '<td><a href="excluir.php?id='.$linha['idamigo'].'&nome='.urlencode($linha['nome']).'&apelido='.urlencode($linha['apelido']).'&email='.urlencode($linha['email']).'"><i class="fa fa-user-times w3-large w3-text-red"></i></a></td>';
                        echo '<td><a href="atualizar.php?id='.$linha['idamigo'].'&nome='.urlencode($linha['nome']).'&apelido='.urlencode($linha['apelido']).'&email='.urlencode($linha['email']).'"><i class="fa fa-refresh w3-large w3-text-teal"></i></a></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">Nenhum amigo cadastrado.</td></tr>';
                }
                $conexao->close();
            ?>
        </tbody>
    </table>
</div>
<?php require_once('rodape.php'); ?>