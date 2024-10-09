-- Criação do banco de dados
CREATE DATABASE manutencao_equipamentos;

-- Selecionar o banco de dados
USE manutencao_equipamentos;

-- Criação da tabela entrada_saida_equipamento
CREATE TABLE entrada_saida_equipamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_entrada DATE NOT NULL,
    origem VARCHAR(255) NOT NULL,
    entregue_por VARCHAR(255) NOT NULL,
    ass VARCHAR(255) NOT NULL,
    ref_operador VARCHAR(255) NOT NULL,
    motivo TEXT NOT NULL,
    ent_ele VARCHAR(255) NOT NULL,
    ent_mec VARCHAR(255) NOT NULL,
    n_selo_placa VARCHAR(255) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    lacre_azul_entrada VARCHAR(255) NOT NULL,
    data_saida DATE,
    destino VARCHAR(255),
    saida_ele VARCHAR(255),
    saida_mec VARCHAR(255),
    liberado_por VARCHAR(255),
    ass_saida VARCHAR(255),
    lacre_azul_saida VARCHAR(255),
    chave_numero_entrada TEXT NOT NULL,
    chave_numero_saida TEXT NOT NULL,
    observacoes_tecnicas TEXT
);
