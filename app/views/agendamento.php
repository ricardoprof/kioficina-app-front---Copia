<?php


// Carregue as configurações iniciais da aplicação
require_once('../../config/config.php'); 
$titulo = 'Agendamento - Ki-Oficina';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
  require_once('conteudo/head.php');
?> 

<body id="agendamento">
    <div class="container">

        <h2>Faça seu agendamento</h2>
        <form method="POST" action="listar_agenda.php">

            <div>
                <label>Veículo:</label>
                <select name="id_veiculo" id="id_veiculo" required>
                    <option value="">Selecione o veículo</option>
                    <option value="">Carro 1</option>
                    <option value="">Carro 2</option>
                    <option value="">Carro 3</option>
                </select>
            </div>

            <div>
                <label for="data_agenda">Data:</label>
                <input type="date" name="data_agenda" id="data_agenda" value="<?= date('Y-m-d') ?>" required>
            </div>

            <div>
                <label for="hora_agenda">Hora:</label>
                <select name="hora_agenda" id="hora_agenda" required>
                    <option value="">Selecione a hora</option>
                    <option value="">08:00</option>
                    <option value="">09:00</option>
                    <option value="">10:00</option>
                    <option value="">11:00</option>
                    <option value="">12:00</option>
                    <option value="">13:00</option>
                    <option value="">14:00</option>
                    <option value="">15:00</option>
                    <option value="">16:00</option>
                    <option value="">17:00</option>
                </select>
            </div>
            
            <div>
                <label>Funcionário:</label>
                <select name="id_funcionario" id="id_funcionario" required>
                    <option value="">Selecione o funcionário</option>
                    <option value="">Ana Costa</option>
                    <option value="">Beatriz Campos</option>
                    <option value="">Carlos Silva</option>
                    <option value="">Fernanda Oliveira</option>
                    <option value="">Juliana Mendes</option>
                    <option value="">Lucas Ferreira</option>
                    <option value="">Marcos Souza</option>
                    <option value="">Pedro Lima</option>
                    <option value="">Rafael Azevedo</option>
                    <option value="">Ricardo Almeida</option>
                </select>
            </div>

            <button id="agendar" type="submit">Agendar</button>
        </form>
        <a href="menu.php" class="btn">Voltar</a>
        <a href="listar_agenda.php" class="btn lista-agenda">Listar Agenda</a>
    </div>
</body>

</html>