<?php
class Bolha{
    public function Executa (){
        @$vetor[7];
        $vetor = $_POST['vetor']; 
        $TAM = 7;
        $aux = 0;
        // coloca em ordem crescente
        for($x = 0; $x < $TAM; $x++ ){
            for($y = $x + 1; $y < $TAM; $y++ ){ // sempre 1 elemento a frente
                // se o (x > (x+1)) entao o x passa pra frente (ordem crescente)
                if ($vetor[$x] > $vetor[$y] ){
                    $aux = $vetor[$x];
                    $vetor[$x] = $vetor[$y];
                    $vetor[$y] = $aux;
                }
            }
        }
        echo " Elementos ordenados (Crescente): <br/>";
        for($x = 0; $x < $TAM; $x++){
            echo " O numero na posicao ".$x." eh ".$vetor[$x]."<br/>";
        }
        // coloca em ordem decrescente
        for($x = 0; $x < $TAM; $x++){
            for($y = $x + 1; $y < $TAM; $y++ ){
                if ($vetor[$x] < $vetor[$y] ){
                    $aux = $vetor[$x];
                    $vetor[$x] = $vetor[$y];
                    $vetor[$y] = $aux;
        }
    }
}
echo " Elementos Desordenados (Decrescente): <br/>";
for($x = 0; $x < $TAM; $x++){
    echo " O numero na posicao ".$x." eh ".$vetor[$x]."<br/>";
}
}
}
$acessa = new Bolha();
$acessa->Executa();

