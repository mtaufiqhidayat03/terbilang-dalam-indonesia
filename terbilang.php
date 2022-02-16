<?php

    function cleanNumberHelper($angka) {
        $cleanNumber = preg_replace('~\D~', '', $angka);
        return $cleanNumber;
    }

    function terbilangDalamIndonesiaHelper($number) {
        $angka = abs($number);
        $kurangDariSebelas = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $kata = "";
        if ($angka < 12) {
            $kata = " " . $kurangDariSebelas[$angka];
        } else if ($angka < 20) {
            $kata = terbilangDalamIndonesiaHelper($angka - 10) . " belas";
        } else if ($angka < 100) {
            $kata = terbilangDalamIndonesiaHelper($angka / 10) . " puluh" . terbilangDalamIndonesiaHelper($angka % 10);
        } else if ($angka < 200) {
            $kata = " seratus" . terbilangDalamIndonesiaHelper($angka - 100);
        } else if ($angka < 1000) {
            $kata = terbilangDalamIndonesiaHelper($angka / 100) . " ratus" . terbilangDalamIndonesiaHelper($angka % 100);
        } else if ($angka < 2000) {
            $kata = " seribu" . terbilangDalamIndonesiaHelper($angka - 1000);
        } else if ($angka < 1000000) {
            $kata = terbilangDalamIndonesiaHelper($angka / 1000) . " ribu" . terbilangDalamIndonesiaHelper($angka % 1000);
        } else if ($angka < 1000000000) {
            $kata = terbilangDalamIndonesiaHelper($angka / 1000000) . " juta" . terbilangDalamIndonesiaHelper($angka % 1000000);
        } else if ($angka < 1000000000000) {
            $kata = terbilangDalamIndonesiaHelper($angka / 1000000000) . " milyar" . terbilangDalamIndonesiaHelper(fmod($angka, 1000000000));
        } else if ($angka < 1000000000000000) {
            $kata = terbilangDalamIndonesiaHelper($angka / 1000000000000) . " triliun" . terbilangDalamIndonesiaHelper(fmod($angka, 1000000000000));
        }
        return $kata;
	}

	function terbilangDalamIndonesiaWithSwitchHelper($number) {
	    $angka = abs($number);
        $kurangDariSebelas = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $kata = "";
         switch ($angka) {
             case $angka < 12:
                 $kata = " " . $kurangDariSebelas[$angka];
                 break;
             case $angka < 20:
                 $kata = terbilangDalamIndonesiaHelper($angka - 10) . " belas";
                 break;
             case $angka < 100:
                 $kata = terbilangDalamIndonesiaHelper($angka / 10) . " puluh" . terbilangDalamIndonesiaHelper($angka % 10);
                 break;
             case $angka < 200:
                 $kata = " seratus" . terbilangDalamIndonesiaHelper($angka - 100);
                 break;
             case $angka < 1000:
                 $kata = terbilangDalamIndonesiaHelper($angka / 100) . " ratus" . terbilangDalamIndonesiaHelper($angka % 100);
                 break;
             case $angka < 2000:
                 $kata = " seribu" . terbilangDalamIndonesiaHelper($angka - 1000);
                 break;
             case $angka < 1000000:
                 $kata = terbilangDalamIndonesiaHelper($angka / 1000) . " ribu" . terbilangDalamIndonesiaHelper($angka % 1000);
                 break;
             case $angka < 1000000000:
                 $kata = terbilangDalamIndonesiaHelper($angka / 1000000) . " juta" . terbilangDalamIndonesiaHelper($angka % 1000000);
                 break;
             case $angka < 1000000000000:
                 $kata = terbilangDalamIndonesiaHelper($angka / 1000000000) . " milyar" . terbilangDalamIndonesiaHelper(fmod($angka, 1000000000));
                 break;
             case $angka < 1000000000000000:
                 $kata = terbilangDalamIndonesiaHelper($angka / 1000000000000) . " triliun" . terbilangDalamIndonesiaHelper(fmod($angka, 1000000000000));
                 break;
         }
         return $kata;
    }

	$selectedValue = "6.231.211";
    echo $selectedValue."<br/>";
    echo "Menggunakan switch = ".terbilangDalamIndonesiaWithSwitchHelper(cleanNumberHelper($selectedValue))."<br/>";
	echo "Menggunakan nested if = ".terbilangDalamIndonesiaHelper(cleanNumberHelper($selectedValue));

	?>
