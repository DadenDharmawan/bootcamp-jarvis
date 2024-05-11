<?php
    function bilanganGenap($start, $end) {
        echo "Soal 1 </br>";
        for ($start; $start<=$end; $start++) {
            if ($start % 2 == 0) {
                echo $start . "</br>";
            }
        }
    }

    function bilanganGanjil($start, $end) {
        echo "</br>Soal 2 </br>";
        for ($start; $start<=$end; $start++) {
            if ($start % 2 != 0) {
                echo $start . "</br>";
            }
        }
    }
    
    function Kalkulator($operator, $nilai1, $nilai2) {
        echo "</br>Soal 3 </br>";
        if ($operator == "+") {
            $hasil = "Hasil penjumlahan " . $nilai1 . " dan " . $nilai2 . " adalah " . $nilai1 + $nilai2;
        } else if ($operator == "-") {
            $hasil = "Hasil pengurangan " . $nilai1 . " dan " . $nilai2 . " adalah " . $nilai1 - $nilai2;
        } else if ($operator == "/") {
            $hasil = "Hasil pembagian " . $nilai1 . " dan " . $nilai2 . " adalah " . $nilai1 / $nilai2;
        } else if ($operator == "*") {
            $hasil = "Hasil perkalian " . $nilai1 . " dan " . $nilai2 . " adalah " . $nilai1 * $nilai2;
        }
        echo $hasil;
    }

    bilanganGenap(1, 10);
    bilanganGanjil(1, 10);
    Kalkulator("*", 15, 10)
?>