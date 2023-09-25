<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Pedidos</title>
</head>
<body>

<h1>Formulário de Pedidos</h1>
<form action="processa_pedido.php" method="POST">
  
    Fornecedor: <input type="text" name="fornecedor"><br>
    Produto: <input type="text" name="produto"><br>
    Quantidade em Estoque: <input type="text" name="quantidadeEstoque"><br>
    Data do Pedido: <input type="text" name="dataPedido"><br>
    Total: <input type="text" name="total"><br>
    <input type="submit" value="Enviar">
</form>

</body>
<?php 
class Pedidos {
    private $idPedidos;
    private $fornecedor;
    private $produto;
    private $quantidadeEstoque;
    private $dataPedido;
    private $total;

    public function getIdPedidos() {
        return $this->idPedidos;
    }

    public function setIdPedidos($idPedidos) {
        $this->idPedidos = $idPedidos;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function getQuantidadeEstoque() {
        return $this->quantidadeEstoque;
    }

    public function setQuantidadeEstoque($quantidadeEstoque) {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getDataPedido() {
        return $this->dataPedido;
    }

    public function setDataPedido($dataPedido) {
        $this->dataPedido = $dataPedido;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
}

?>
</html>
