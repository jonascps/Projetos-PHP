<?php
include 'conexao.php';

// Obtém o método HTTP (GET, POST, PUT ou DELETE)
$metodo = $_SERVER['REQUEST_METHOD'];

// Define a resposta padrão
$resposta = array('status' => false, 'mensagem' => 'Método não suportado.');

// Verifica o método e executa a operação correspondente
switch ($metodo) {
    case 'GET':
        $resposta = listarUsuarios();
        break;
    case 'POST':
        $resposta = inserirUsuario();
        break;
    case 'PUT':
        $resposta = atualizarUsuario();
        break;
    case 'DELETE':
        $resposta = excluirUsuario();
        break;
}

// Define o cabeçalho da resposta como JSON
header('Content-Type: application/json');

// Retorna a resposta como JSON
echo json_encode($resposta);

// Função para listar todos os usuários
function listarUsuarios() {
    global $conexao;
    $sql = "SELECT * FROM usuarios";
    $stmt = $conexao->query($sql);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return array('status' => true, 'usuarios' => $usuarios);
}

// Função para inserir um novo usuário
function inserirUsuario() {
    global $conexao;
    parse_str(file_get_contents("php://input"), $dados);
    $nome = $dados['nome'];
    $email = $dados['email'];
    $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return array('status' => true, 'mensagem' => 'Usuário inserido com sucesso.');
}

// Função para atualizar um usuário existente
function atualizarUsuario() {
    global $conexao;
    parse_str(file_get_contents("php://input"), $dados);
    $id = $dados['id'];
    $nome = $dados['nome'];
    $email = $dados['email'];
    $sql = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return array('status' => true, 'mensagem' => 'Usuário atualizado com sucesso.');
}

// Função para excluir um usuário
function excluirUsuario() {
    global $conexao;
    parse_str(file_get_contents("php://input"), $dados);
    $id = $dados['id'];
    $sql = "DELETE FROM usuarios WHERE id=:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return array('status' => true, 'mensagem' => 'Usuário excluído com sucesso.');
}
?>
