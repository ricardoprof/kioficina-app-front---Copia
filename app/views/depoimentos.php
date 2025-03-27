<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php');
$titulo = 'Depoimento - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
  require_once('conteudo/head.php');
?> 

<body id="depoimento">
    <div class="container">

        <h2>Deixe seu depoimento</h2>
        <form method="POST">
            <label for="descricao">Seu Depoimento:</label>
            <textarea name="descricao" id="descricao" rows="4" required></textarea>

            <label>Nota:</label>
            <div class="stars">
                <input type="radio" name="nota" id="star5" value="5"><label for="star5">★</label>
                <input type="radio" name="nota" id="star4" value="4"><label for="star4">★</label>
                <input type="radio" name="nota" id="star3" value="3"><label for="star3">★</label>
                <input type="radio" name="nota" id="star2" value="2"><label for="star2">★</label>
                <input type="radio" name="nota" id="star1" value="1" required><label for="star1">★</label>
            </div>

            <input type="hidden" name="datahora" id="datahora">
            <button type="submit">Enviar Depoimento</button>
        </form>

        <a href="menu.php" class="btn">Voltar</a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const now = new Date();
            const offset = now.getTimezoneOffset() * 60000; // Pega o fuso horário
            const localDate = new Date(now - offset).toISOString().slice(0, 19).replace("T", " ");

            document.getElementById('datahora').value = localDate;
        });
    </script>

</body>

</html>