<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php');
$titulo = 'Perfil Cliente - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
  require_once('conteudo/head.php');
?> 

<body id="perfil">
    <div class="container">
        <h2>Meu Perfil</h2>

        <!-- Imagem do perfil -->
        <div class="perfil-imagem">
            <img src="<?php echo BASE_URL; ?>assets/img/house.jpg">
            <!-- Botão de alteração de imagem -->
            <form action="atualizar_imagem.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="foto_cliente" id="foto_cliente" style="display:none;" accept="image/*" capture="camera" onchange="this.form.submit()">
                <label for="foto_cliente" class="btn-upload">+</label>
            </form>
        </div>

        <form action="" method="POST">
            <div>
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </div>

            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label>Telefone:</label>
                <input type="text" name="telefone" required>
            </div>

            <div>
                <label>Endereço:</label>
                <input type="text" name="endereco" required>
            </div>

            <div>
                <label>Bairro:</label>
                <input type="text" name="bairro" required>
            </div>
            <div class="local">
                <div>
                    <label>Cidade:</label>
                    <input type="text" name="cidade" required>
                </div>

                <div>
                    <label>Estado:</label>
                    <select name="id_uf" required>
                            <option value="">AC</option>
                            <option value="">SP</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="lbl-senha">Alterar Senha (opcional):</label>
                <input type="password" name="senha" placeholder="Nova senha">
            </div>

            <div>
                <button type="submit">Salvar Alterações</button>
            </div>
        </form>
        <a href="menu.php" class="btn">Voltar</a>
    </div>     

</body>

</html>