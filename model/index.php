<?php
include './bd_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //dado entrada
    $data_entrada = $_POST['data_entrada'];
    $origem = $_POST['origem'];
    $entregue_por = $_POST['entregue_por'];
    $ref_operador = $_POST['ref_operador'];
    $motivo = $_POST['motivo'];
    $ent_ele = $_POST['ent_ele'];
    $ent_mec = $_POST['ent_mec'];
    $n_selo_placa = $_POST['n_selo_placa'];
    $modelo = $_POST['modelo'];
    $lacre_azul = $_POST['lacre_azul'];
    //dado saida
    $data_saida = $_POST['data_saida'];
    $destino = $_POST['destino'];
    $saida_ele = $_POST['saida_ele'];
    $saida_mec = $_POST['saida_mec'];
    $liberado_por = $_POST['liberado_por'];
    $observacoes_tecnicas = $_POST['observacoes_tecnicas'];

    $sql = "INSERT INTO entrada_saida_equipamento (data_entrada, origem, entregue_por, ref_operador, motivo, ent_ele, ent_mec, n_selo_placa, modelo, lacre_azul, data_saida, destino, saida_ele, saida_mec, liberado_por, observacoes_tecnicas)
            VALUES ('$data_entrada', '$origem', '$entregue_por', '$ref_operador', '$motivo', '$ent_ele', '$ent_mec', '$n_selo_placa', '$modelo', '$lacre_azul', '$data_saida', '$destino', '$saida_ele', '$saida_mec', '$liberado_por', '$observacoes_tecnicas')";

    if ($conn->query($sql) === TRUE) {
        echo "N registro";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Entrada e Saída de Equipamento</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <section class="title_h1">
        <h1>Ficha de entrada e Saída de equipamento Manutenção</h1>
    </section>
    <div class="container">
        <h1>Cadastro de Entrada e Saída de Equipamento</h1>

        <form method="POST" action="">
            <h2>Informações de Entrada</h2>
            <div class="form-group">
                <label for="data_entrada">Data de Entrada:</label>
                <input type="date" id="data_entrada" name="data_entrada" required>
            </div>
            <div class="form-group">
                <label for="origem">Origem:</label>
                <input type="text" id="origem" name="origem" required>
            </div>
            <div class="form-group">
                <label for="entregue_por">Entregue por:</label>
                <input type="text" id="entregue_por" name="entregue_por" required>
            </div>
            <div class="form-group">
                <label for="ref_operador">Operador de Referência:</label>
                <input type="text" id="ref_operador" name="ref_operador" required>
            </div>
            <div class="form-group">
                <label for="motivo">Motivo:</label>
                <textarea id="motivo" name="motivo" required></textarea>
            </div>
            <div class="form-group">
                <label for="ent_ele">Entrada Ele:</label>
                <input type="text" id="ent_ele" name="ent_ele" required>
            </div>
            <div class="form-group">
                <label for="ent_mec">Entrada Mec:</label>
                <input type="text" id="ent_mec" name="ent_mec" required>
            </div>
            <div class="form-group">
                <label for="n_selo_placa">Nº Selo/Placa:</label>
                <input type="text" id="n_selo_placa" name="n_selo_placa" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="lacre_azul">Lacre Azul:</label>
                <input type="text" id="lacre_azul" name="lacre_azul" required>
            </div>

            <h2>Informações de Saída</h2>
            <div class="form-group">
                <label for="data_saida">Data de Saída:</label>
                <input type="date" id="data_saida" name="data_saida">
            </div>
            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" id="destino" name="destino">
            </div>
            <div class="form-group">
                <label for="saida_ele">Saída Ele:</label>
                <input type="text" id="saida_ele" name="saida_ele">
            </div>
            <div class="form-group">
                <label for="saida_mec">Saída Mec:</label>
                <input type="text" id="saida_mec" name="saida_mec">
            </div>
            <div class="form-group">
                <label for="liberado_por">Liberado por:</label>
                <input type="text" id="liberado_por" name="liberado_por">
            </div>
            <div class="form-group">
                <label for="observacoes_tecnicas">Observações Técnicas:</label>
                <textarea id="observacoes_tecnicas" name="observacoes_tecnicas"></textarea>
            </div>

            <input type="submit" value="Inserir Registro" class="btn-submit">
        </form>
    </div>
</body>
</html>
