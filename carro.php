<?php 

class Carro {

    public $cor = "Vermelho";
    public $modelo = "Civic";
    public $KMperHour = 200;
    public $ano = 2018;
    public $quantPortas = 3;
    public $valor = 200000;

    public function velocidade() {

        echo "O veiculo além de ser de um otimo modelo, {$this->modelo}, também tem a vantagem da quantidade de KM por hora, fazendo {$this->KMperHour}<br>";

    }

    public function revenda() {

        echo "Outra vantagem do veiculo é o seu valor de revenda que gira em torno de {$this->valor} e isso se da por conta de ser um veiculo mais novo de {$this->ano}<br>";
        
    }

    public function usabilidade() {

        echo "O caro é um otimo veiculo porém a usabilidade para familia é um pouco falha pois tem apenas {$this->quantPortas}<br>";

    }

}

$carro = new Carro();
$carro -> velocidade();
$carro -> revenda();
$carro -> usabilidade();