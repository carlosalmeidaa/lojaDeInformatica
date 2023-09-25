<!DOCTYPE html>
<html>
<head>
    <title>Formulários</title>
</head>
<body>

<h1>Formulário de Clientes</h1>
<form action="processa_cliente.php" method="POST">
    
    Nome: <input type="text" name="nome"><br>
    CPF: <input type="text" name="cpf"><br>
    Telefone: <input type="text" name="telefone"><br>
    Email: <input type="text" name="email"><br>
    Endereço: <input type="text" name="endereco"><br>
    <input type="submit" value="Enviar">
</form>

<h1>Formulário de Produtos</h1>
<form action="processa_produto.php" method="POST">
    
    Descrição: <input type="text" name="descricao"><br>
    Preço de Compra: <input type="text" name="precoCompra"><br>
    Preço de Venda: <input type="text" name="precoVenda"><br>
    Quantidade em Estoque: <input type="text" name="qtdeEstoque"><br>
    <input type="submit" value="Enviar">
</form>
</body>

<?php
class Clientes {
    private $idClientes;
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $endereco;

    public function getIdClientes() {
        return $this->idClientes;
    }

    public function setIdClientes($idClientes) {
        $this->idClientes = $idClientes;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}
?>
</html>

