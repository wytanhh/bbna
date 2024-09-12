<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Câu 8
    function giaiptbac2($a, $b, $c) {
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    return "Phương trình có vô số nghiệm.";
                } else {
                return "Phương trình vô nghiệm.";
                }
            } else {
                $x = -$c / $b;
                return "Phương trình có nghiệm duy nhất: x = $x";
            }
        }

        $delta = $b * $b - 4 * $a * $c;

        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x = $x";
        } else {
            return "Phương trình vô nghiệm.";
        }
    }

    $a = 1;
    $b = -3;
    $c = 2;

    $ketqua = giaiptbac2($a, $b, $c);
    echo $ketqua;
    echo "<br>";
    
    // Câu 9
    function inhcn($x, $y) {
        for ($i = 1; $i <= $x; $i++) {
            for ($j = 1; $j <= $y; $j++) {
                if ($i == 1 || $i == $x || $j == 1 || $j == $y) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
    }

    $x = 5;
    $y = 7;
    inhcn($x, $y);
    echo "<br>";
    
    // Câu 10
    function tbc($mang) {
        if (empty($mang)) {
            return "Mảng rỗng, không thể tính trung bình cộng.";
        }
        $tong = array_sum($mang);
        $soPhanTu = count($mang);
        $trungBinhCong = $tong / $soPhanTu;
        return $trungBinhCong;
    }

    $mang = [2, 4, 6, 8, 10];
    $tbc = tbc($mang);
    echo "Trung bình cộng của mảng là: $tbc";
    ?>
</body>
</html>