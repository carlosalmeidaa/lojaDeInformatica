<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Colaboradores</title>
</head>
<body>

<h1>Formulário de Colaboradores</h1>
<form action="processa_colaborador.php" method="POST">
    
    Nome: <input type="text" name="nome"><br>
    CPF: <input type="text" name="cpf"><br>
    Telefone: <input type="text" name="telefone"><br>
    Email: <input type="text" name="email"><br>
    Número de Dependentes: <input type="text" name="dependentesNumero"><br>
    <input type="submit" value="Enviar">
</form>

</body>
<?php
class Colaboradores {
    private $idColaboradores;
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $dependentesNumero;

    public function getIdColaboradores() {
        return $this->idColaboradores;
    }

    public function setIdColaboradores($idColaboradores) {
        $this->idColaboradores = $idColaboradores;
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

    public function getDependentesNumero() {
        return $this->dependentesNumero;
    }

    public function setDependentesNumero($dependentesNumero) {
        $this->dependentesNumero = $dependentesNumero;
    }
}
?>
</html>

