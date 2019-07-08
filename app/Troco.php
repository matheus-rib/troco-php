<?php

/**
 * Essa classe possui o metodo getQtdeNotas ele não está completo e cabe a você concluí-lo de acordo com os requisitos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     * @param float $reais
     * @return array
     */
    public function getQtdeNotas(float $reais): array
    {
        $notas_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.01" => 0,
        ];

        /*
         * Coloque o seu código aqui.
         * Você é livre para criar classes, arquivos e funções da maneira que achar melhor.
         * Esse método deve retornar a quantidade de notas e moedas necessária para o valor em reais passado para ele
         *
         * Exemplo:
         * getQtdeNotas(100.00); // Deve retornar algo como ['100' => 1]
         */

        return $this->calcularQuantidadeNotas($reais, $notas_qtd);
    }

    private function calcularQuantidadeNotas($valorTotal, $notas){
        // Como não ficou claro no desafio se números como 0.009 deveriam ser arredondados ou truncados
        // O código a seguir é para truncar o número
        $valorTotal = floor($valorTotal * 100) / 100;

        // O código abaixo é para garantir que o array esteja ordenado com a maior nota na primeira posição
        ksort($notas, SORT_NUMERIC);
        $notas = array_reverse($notas, true);

        foreach($notas as $valorNota => $quantidadeNota){
            while($valorTotal >= $valorNota){
                $notas[$valorNota]++;
                $valorTotal = round($valorTotal - $valorNota, 2);
            }
        }
        return $notas;
    }
}
