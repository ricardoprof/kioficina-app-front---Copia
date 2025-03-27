<?php

// Carregue as configurações iniciais da aplicação
require_once('config/config.php');
$titulo = 'Login - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php
  require_once('app/views/conteudo/head.php');
?>  
<body id="login">
  
  <div class="container">
    <img class="logo" src="<?php echo BASE_URL; ?>assets/img/logo-kioficina.png" alt="logo">
    <h2>Login</h2>

    <form action="app/views/menu.php" method="POST">
      <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <div>
        <button type="submit">Entrar</button>
      </div>
    </form>
  </div>
</body>

</html>