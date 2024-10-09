<?php
include './bd_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $data_entrada = $_POST['data_entrada'];
   $origem = $_POST['origem'];
   $entregue_por = $_POST['entregue_por'];
   $ass = $_POST['ass'];
   $ref_operador = $_POST['ref_operador'];
   $motivo = $_POST['motivo'];
   $ent_ele = $_POST['ent_ele'];
   $ent_mec = $_POST['ent_mec'];
   $n_selo_placa_entrada = $_POST['n_selo_placa_entrada']; 
   $modelo = $_POST['modelo'];
   $lacre_azul_entrada = $_POST['lacre_azul_entrada']; 
   $data_saida = $_POST['data_saida'];
   $destino = $_POST['destino'];
   $saida_ele = $_POST['saida_ele'];
   $saida_mec = $_POST['saida_mec'];
   $liberado_por = $_POST['liberado_por'];
   $ass_saida = $_POST['ass_saida']; 
   $lacre_azul_saida = $_POST['lacre_azul_saida']; 
   $chave_numero_entrada = $_POST['chave_numero_entrada']; 
   $chave_numero_saida = $_POST['chave_numero_saida']; 
   $observacoes_tecnicas = $_POST['observacoes_tecnicas'];

   $sql = "INSERT INTO entrada_saida_equipamento (data_entrada, origem, entregue_por, ass, ref_operador, motivo, ent_ele, ent_mec, n_selo_placa, modelo, lacre_azul_entrada, data_saida, destino, saida_ele, saida_mec, liberado_por, ass_saida, lacre_azul_saida, chave_numero_entrada, chave_numero_saida, observacoes_tecnicas)
           VALUES ('$data_entrada', '$origem', '$entregue_por', '$ass', '$ref_operador', '$motivo', '$ent_ele', '$ent_mec', '$n_selo_placa_entrada', '$modelo', '$lacre_azul_entrada', '$data_saida', '$destino', '$saida_ele', '$saida_mec', '$liberado_por', '$ass_saida', '$lacre_azul_saida', '$chave_numero_entrada', '$chave_numero_saida', '$observacoes_tecnicas')";



    if ($conn->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso!";
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
    <div class="container">
        <h1>Cadastro de Entrada e Saída de Equipamento</h1>

        <form method="POST" action="">
            <h2>Informações de Entrada</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="data_entrada">Data de Entrada:</label>
                    <input type="date" id="data_entrada" name="data_entrada" required>
                </div>
                <div class="form-group">
                    <label for="origem">Origem:</label>
                    <input type="text" id="origem" name="origem" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="entregue_por">Entregue por:</label>
                    <input type="text" id="entregue_por" name="entregue_por" required>
                </div>
                <div class="form-group">
                    <label for="ass">ASS:</label>
                    <input type="text" id="ass" name="ass" required>
                </div>
                <div class="form-group">
                    <label for="ref_operador">Ref Operador:</label>
                    <input type="text" id="ref_operador" name="ref_operador" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="motivo">Motivo:</label>
                    <textarea id="motivo" name="motivo" required></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="ent_ele">Entrada Ele:</label>
                    <input type="text" id="ent_ele" name="ent_ele" required>
                </div>
                <div class="form-group">
                    <label for="ent_mec">Entrada Mec:</label>
                    <input type="text" id="ent_mec" name="ent_mec" required>
                </div>
                <div class="form-group">
                    <label for="n_selo_placa_entrada">Nº Selo/Placa:</label>
                    <input type="text" id="n_selo_placa_entrada" name="n_selo_placa_entrada" required>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group">
                    <label for="sai_ele_entrada">Saida Ele:</label>
                    <input type="text" id="sai_ele_entrada" name="sai_ele_entrada" required>
                </div>
                <div class="form-group">
                    <label for="sai_mec_entrada">Saida Mec:</label>
                    <input type="text" id="sai_mec_entrada" name="sai_mec_entrada" required>
                </div>
                <div class="form-group">
                    <label for="modelo_entrada">Modelo:</label>
                    <input type="text" id="modelo_entrada" name="modelo_entrada" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="recebido_pessoa_entrada">Recebido Por:</label>
                    <input type="text" id="recebido_pessoa_entrada" name="recebido_pessoa_entrada" required>
                </div>

                <div class="form-group">
                    <label for="ass_entrada">ASS: </label>
                    <input type="text" id="ass_entrada" name="ass_entrada" required>
                </div>

                <div class="form-group">
                    <label for="lacre_azul_entrada">Lacre Azul:</label>
                    <input type="text" id="lacre_azul_entrada" name="lacre_azul_entrada" required>
                </div>
            </div>
            <div class="form-group">
                <label for="chave_numero_entrada">Chave N°:</label>
                <textarea id="chave_numero_entrada" name="chave_numero_entrada" required></textarea>
            </div>
            

            <h2>Informações de Saída</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="data_saida">Data de Saída:</label>
                    <input type="date" id="data_saida" name="data_saida">
                </div>
                <div class="form-group">
                    <label for="destino">Destino:</label>
                    <input type="text" id="destino" name="destino">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="recebido_pessoa_saida">Recebido Por:</label>
                    <input type="text" id="recebido_pessoa_saida" name="recebido_pessoa_saida">
                </div>
                <div class="form-group">
                    <label for="ass_saida">ASS:</label>
                    <input type="text" id="ass_saida" name="ass_saida">
                </div>
                <div class="form-group">
                    <label for="ref_operador">REF Operador:</label>
                    <input type="text" id="ref_operador" name="ref_operador">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                        <label for="obs_tecnico">Observações Técnico:</label>
                        <input type="text" id="obs_tecnico" name="obs_tecnico">
                </div>
            </div>


            <div class="form-row">
                <div class="form-group">
                        <label for="ent_ele_saida">Entrada ele:</label>
                        <input type="text" id="ent_ele_saida" name="ent_ele_saida">
                </div>
                <div class="form-group">
                        <label for="ent_mec_saida">Entrada Mec:</label>
                        <input type="text" id="ent_mec_saida" name="ent_mec_saida">
                </div>
                <div class="form-group">
                        <label for="ent_mec_saida">Entrada Mec:</label>
                        <input type="text" id="ent_mec_saida" name="ent_mec_saida">
                </div>
                <div class="form-group">
                    <label for="n_selo_placa_saida">Nº Selo/Placa:</label>
                    <input type="text" id="n_selo_placa_sadida" name="n_selo_placa_saida" required>
                </div>
            </div>
            

            <div class="form-row">
                <div class="form-group">
                    <label for="sai_ele_saida">Saida Ele:</label>
                    <input type="text" id="sai_ele_saida" name="sai_ele_saida" required>
                </div>
                <div class="form-group">
                    <label for="sai_mec_saida">Saida Mec:</label>
                    <input type="text" id="sai_mec_saida" name="sai_mec_saida" required>
                </div>
                <div class="form-group">
                    <label for="modelo_saida">Modelo:</label>
                    <input type="text" id="modelo_saida" name="modelo_saida" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="liberado_por">Liberado por:</label>
                    <input type="text" id="liberado_por" name="liberado_por">
                </div>     
                <div class="form-group">
                    <label for="ass_saida_2">ASS:</label>
                    <textarea id="ass_saida_2" name="ass_saida_2"></textarea>
                </div>
                <div class="form-group">
                    <label for="lacre_azul_saida">Lacre Azul N°:</label>
                    <textarea id="lacre_azul_saida" name="lacre_azul_saida"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="chave_numero_saida">Chave N°:</label>
                    <textarea id="chave_numero_saida" name="chave_numero_saida" required></textarea>
                </div>
            </div>

            <input type="submit" value="Inserir Registro" class="btn-submit">
        </form>
    </div>
</body>
</html>
