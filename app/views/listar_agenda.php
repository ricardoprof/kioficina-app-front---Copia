<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php');
$titulo = 'Listar Agenda - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
  require_once('conteudo/head.php');
?> 

<body id="listar-agenda">
    <div class="container">
        <h2>Lista de Agendamentos</h2>

        <!-- "Em análise" => "status-analise",
        "Agendado" => "status-agendado",
        "Cancelado" => "status-cancelado",
        "Concluído" => "status-concluido" -->

        <div class='card'>
            <p><strong>Veículo:</strong> Carro 1</p>
            <p><strong>Funcionário:</strong> Marcos Souza</p>
            <p><strong>Data Agenda:</strong> 17/03/2025 08:00</p>
            <p class='status status-agendado'><strong>Status:</strong> Agendado</p>
        </div>

        <div class='card'>
            <p><strong>Veículo:</strong> Carro 2</p>
            <p><strong>Funcionário:</strong> Marcos Souza</p>
            <p><strong>Data Agenda:</strong> 18/03/2025 09:00</p>
            <p class='status status-analise'><strong>Status:</strong> Em análise</p>
        </div>

        <a href="agendamento.php" class="btn">Voltar</a>
    </div>
</body>

</html>