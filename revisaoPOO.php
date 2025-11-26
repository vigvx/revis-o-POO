<?php
class Pessoa {
    public $nome;
    public $cpf;
    public $idade;

    function __construct($nome, $cpf, $idade) {
        $this->nome= $nome;
        $this->cpf= $cpf;
        $this->idade= $idade;
    }
    function falar(){
        echo $this->nome . " está falando" . "\n";
    }

    function mostrarInfo() {
    echo "Nome: {$this->nome}, CPF: {$this->cpf}, Idade: {$this->idade} anos" . "\n";
}



}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $cpf, $idade, $login) {
        parent::__construct($nome, $cpf, $idade);
        $this->login = $login;
    }

    function logar(){
        echo $this->nome . " está logando..." . "\n";
    }
}

class Aluno extends Pessoa {
    public $ra;

    function __construct($nome, $cpf, $idade, $ra) {
        parent::__construct($nome, $cpf, $idade);
        $this->ra = $ra;
    }

    function estudar(){
        echo $this->nome . " está estudando" . "\n";
    }

    function mostrarInfo(){
        parent::mostrarInfo();
        echo "RA do aluno: {$this->ra}" . "\n" . "\n";
}
}

class Funcionario extends Pessoa {
    public $cargo;

    function __construct($nome, $cpf, $idade, $cargo = "Professor"){
    parent::__construct($nome, $cpf, $idade);
    $this->cargo = $cargo;
}
function mostrarInfo(){
    parent::mostrarInfo();
    echo "Cargo: " . $this->cargo . "\n" . "\n";
}
}


$pessoa = new Pessoa("João", 55653290766, 30);


$usuario1 = new Usuario("Lucas", 76498547818, 45, "lucas.verissimo@etec.sp.gov.br");
$usuario2 = new Usuario("Maria", 89123456790, 28, "maria.silva@etec.sp.gov.br");
$usuario3 = new Usuario("Pedro", 98765432101, 32, "pedro.almeida@etec.sp.gov.br");


$aluno1 = new Aluno("Pedro Henrique", 76218909887, 11, 119487096);
$aluno2 = new Aluno("Vitor Moraes", 87345678901, 20, 2439987387);
$aluno3 = new Aluno("Ryan Porto", 98456789012, 30, 3343swqq50987);


$funcionario1 = new Funcionario("Wellington", 76543219876, 32, "Professor");
$funcionario2 = new Funcionario("Matheus",8456345679, 29, "Coordenadora");
$funcionario3 = new Funcionario("Ednei", 65432985415, 35, "Diretor");


$pessoa->mostrarInfo();

$usuario1->mostrarInfo();
$usuario2->mostrarInfo();
$usuario3->mostrarInfo();

$aluno1->mostrarInfo();
$aluno2->mostrarInfo();
$aluno3->mostrarInfo();

$funcionario1->mostrarInfo();
$funcionario2->mostrarInfo();
$funcionario3->mostrarInfo();


$usuario1->logar();
$usuario2->logar();
$usuario3->logar();

$aluno1->estudar();
$aluno2->estudar();
$aluno3->estudar();

$funcionario1->falar();
$funcionario2->falar();
$funcionario3->falar();

?>
