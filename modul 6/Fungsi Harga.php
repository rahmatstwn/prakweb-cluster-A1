<?php
    function harga($name, $color = "Merah")
    {
        $length = strlen($name);

        if ($length <= 10) {
            $harga = $length * 300;
        } else if ($length <= 20) {
            $harga = $length * 500;
        } else {
            $harga = $length * 700;
        }
        echo "<br> Bet " . $color . " dengan nama " . $name . ", seharga " . $harga;
    }

    $name1 = "Rahmat";
    $name2 = "Setiawan";
    $name3 = "Rahmat Setiawan";
    echo harga($name1, "Abu-Abu");
    echo harga($name2, "Hijau Army");
    echo harga($name3);

    //118140097_Rahmat Setiawan
    ?>