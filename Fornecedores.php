<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Fornecedores</title>
</head>
<body>

<h1>Formulário de Fornecedores</h1>
<form action="processa_fornecedor.php" method="POST">
  
    Nome: <input type="text" name="nome"><br>
    CNPJ: <input type="text" name="cnpj"><br>
    Inscrição Estadual: <input type="text" name="insc_estadual"><br>
    Contato: <input type="text" name="contato"><br>
    Endereço: <input type="text" name="endereco"><br>
    <input type="submit" value="Enviar">
</form>

</body>
<?php
class Fornecedores {
    private $idFornecedores;
    private $nome;
    private $cnpj;
    private $insc_estadual;
    private $contato;
    private $endereco;

    public function getIdFornecedores() {
        return $this->idFornecedores;
    }

    public function setIdFornecedores($idFornecedores) {
        $this->idFornecedores = $idFornecedores;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getInscEstadual() {
        return $this->insc_estadual;
    }

    public function setInscEstadual($insc_estadual) {
        $this->insc_estadual = $insc_estadual;
    }

    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
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

