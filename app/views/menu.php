<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php'); 
$titulo = 'Menu Principal - Ki-Oficina'
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
  require_once('conteudo/head.php');
?> 

<body id="menu">
    <div class="container">
        <img class="logo" src="<?php echo BASE_URL; ?>assets/img/logo-kioficina.png" alt="logo">
        <h2>Bem-vindo à </br>Ki-Oficina!</h2>
        <p>Olá, João Silva!</p>
        <div class="menu-buttons">
            <a href="agendamento.php" class="btn">Agendamento</a>
            <a href="listar_servicos.php" class="btn">Listar Serviços</a>
            <a href="depoimentos.php" class="btn">Depoimentos</a>
            <a href="perfil.php" class="btn">Perfil</a>
            <a href="<?php echo BASE_URL; ?>index.php" class="btn logout">Sair</a>
        </div>
    </div>
</body>

</html>