<?php require_once('cabecalho.php'); ?>
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-white w3-third">
    <div class="w3-center w3-padding-16">
        <i class="fa fa-user-circle-o w3-text-teal" style="font-size: 5em;"></i>
        <h2>Acesso ao Sistema</h2>
    </div>
    <form class="w3-container" action="loginAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">Usuário</label>
            <input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Digite o nome" name="txtNome" required>
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border w3-round" type="password" placeholder="Digite a Senha" name="txtSenha" required>
            <button class="w3-button w3-block w3-teal w3-section w3-padding w3-round" type="submit">Entrar</button>
        </div>
    </form>
</div>
<?php require_once('rodape.php'); ?>