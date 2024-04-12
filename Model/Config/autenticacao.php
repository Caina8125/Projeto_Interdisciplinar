<?php

require 'conect.php';

class Autenticacao {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function autenticar($cpf, $senha) {
        // Consulta SQL para verificar se o usuário e senha existem no banco de dados
        $query = "SELECT * FROM usuario WHERE CPF = :cpf AND SENHA = :senha";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Verifica se a consulta retornou alguma linha
        if ($stmt->rowCount() > 0) {
            // Usuário autenticado com sucesso
            return true;
        } else {
            // Usuário ou senha incorretos
            return false;
        }
    }
}

// Exemplo de uso
$conexao = new PDO('mysql:host=localhost;dbname=jornada_interdisciplinar', 'lab3', '123');
$autenticacao = new Autenticacao($conexao);

// Verifica se o usuário com CPF '09876543243' e senha 'Senha Aluno MD5' é válido
if ($autenticacao->autenticar('09876543243', 'Senha Aluno MD5')) {
    echo "Usuário autenticado com sucesso!";
} else {
    echo "Usuário ou senha incorretos.";
}
?>
