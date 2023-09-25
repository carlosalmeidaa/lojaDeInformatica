<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Pagamentos</title>
</head>
<body>

<h1>Formulário de Pagamentos</h1>
<form action="processa_pagamento.php" method="POST">
    <!-- Campos de formulário para a classe Pagamentos -->
    Forma: <input type="text" name="forma"><br>
    Prazo: <input type="text" name="prazo"><br>
    <input type="submit" value="Enviar">
</form>

</body>
<?php
class Pagamentos {
    private $idPagamentos;
    private $forma;
    private $prazo;

    public function getIdPagamentos() {
        return $this->idPagamentos;
    }

    public function setIdPagamentos($idPagamentos) {
        $this->idPagamentos = $idPagamentos;
    }

    public function getForma() {
        return $this->forma;
    }

    public function setForma($forma) {
        $this->forma = $forma;
    }

    public function getPrazo() {
        return $this->prazo;
    }

    public function setPrazo($prazo) {
        $this->prazo = $prazo;
    }
}
?>
</html>

