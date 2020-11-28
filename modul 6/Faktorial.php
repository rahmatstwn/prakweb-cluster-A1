<?php
    function faktorial($bil)
    {
        $hasil = $bil;
        for ($i = 1; $i < $bil; $i++) {
            $hasil = $hasil * $i;
        }
        return $hasil;
    }

    $a = 1;
    $b = 10;

    for($i=$a; $i<=$b; $i++){
        echo "<br>Nilai dari Faktorial " . $i . " : " . faktorial($i);
    }
//118140097_Rahmat Setiawan    
?>
