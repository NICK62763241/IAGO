<?php 

class Escola {

    public $professor = "Iago Jesus";
    public $disciplina = "Desenvolvimento WEB";
    public $adress = "Rua Milão";
    public $alunoName = " Edilson ";
    public $modulo = "Terceiro Módulo";
    public $salaInfo = "Laborátorio de Informatica";
    public $salaEnfer = "Sala de Enfermagem";

    public function ensino() {

        echo "A máteria que o professor {$this->professor} leciona é {$this->disciplina}<br>";
        echo "O professor trabalha na escola FHA localizada na {$this->adress}<br>";

    }

    public function estudar() {

        echo "O Aluno {$this->alunoName} irá se formar em breve pois está no {$this->modulo}<br>";
        
    }

    public function classRoom() {

        echo "Para usar as salas de {$this->salaInfo} e {$this->salaEnfer} é necessário agendar com antecedencia";

    }

}

$escola = new Escola();
$escola -> ensino();
$escola -> estudar();
$escola -> classRoom();