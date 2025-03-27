<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php');
$titulo = 'Listar Serviço - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
  require_once('conteudo/head.php');
?> 

<body id="listar-servico">
    <div class="container">
        <h2>Lista de Serviços</h2>

        <!-- "Em análise" => "status-analise",
        "Agendado" => "status-agendado",
        "Concluído" => "status-concluido" -->

        <div class='card'>
            <p><strong>Data de Entrada:</strong> 17/03/2025</p>
            <p><strong>Previsão de Saída:</strong> 18/03/2025</p>
            <p><strong>Marca:</strong> Honda</p>
            <p><strong>Modelo:</strong> Civic</p>
            <p><strong>Chassi:</strong> 8APVZBA17HB001234</p>
            <p><strong>Observação:</strong> Manutenção Preventiva</p>
            <p><strong>Total:</strong> R$ 1.800,00</p>
            <p class='status status-analise'><strong>Status:</strong> Em análise</p>
        </div>

        <a href="menu.php" class="btn">Voltar</a>
    </div>
</body>

</html>