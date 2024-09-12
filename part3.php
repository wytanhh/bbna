<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 6;
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";

    echo "a + b = ".$a+$b."<br>";
    echo "a - b = ".$a-$b."<br>";
    echo "a*b = ".$a*$b."<br>";
    echo "a/b = ".$a/$b."<br>";
    echo "a % b = ".$a%$b."<br>";

    for ($x = 1; $x <=3; $x++) {
        echo "The number is: ".$x."<br>";
    };

    $y = array("xinh gái", "đáng iu", "tuyệt vời", "số 1", "dể thưn");
    foreach($y as $value) {
        echo "Nguyệt Anh ".$value."<br>";
    };

    $i = 1;
    while ($i < 4) {
        echo "i = ".$i."<br>";
        $i++;
    };

    // Câu 2
    function chuvihcn(float $x, float $y) {
        echo "Chu vi hình chữ nhật có chiều dài $x, chiều rộng $y là: ";
        return ($x + $y)*2;
    };
    echo chuvihcn(2, 3);
    echo "<br>";

    // Câu 3
    function giaiptbac1(float $m, float $n) {
        if ($m == 0) {
            if ($n == 0) {
                echo "Phương trình $m.x + $n vô số nghiệm";
            } else {
                echo "Phương trình $m.x + $n vô nghiệm";
            };
        } else {
            echo "Nghiệm của phương trình $m.x + $n là: ";
            return (0 - $n)/$m;
        }
    };
    echo giaiptbac1(7,0);
    echo "<br>";

    // Bài tập
    $danhsach = array(
        "1" => "Nguyệt Anh",
        "2" => "Phương Anh",
        "3" => "Mai Anh",
        "4" => "Ngọc Ánh",
        "5" => "Linh Chi"
    );
    $stt = array_rand($danhsach);
    $ten = $danhsach[$stt];
    echo "Mời bạn có tên $ten số thú tự $stt lên làm bài 2";

    $list_sinh_vien = array(
        "1" => "Bạch Bùi Nguyệt Anh",
        "2" => "Đàm Phương Anh",
        "3" => "Nguyễn Mai Anh",
        "4" => "Phạm Thị Ngọc Ánh",
        "5" => "Đào Linh Chi",
        "6" => "Đinh Thị Ngọc Diễm",
        "7" => "Trần Ngọc Dũng",
        "8" => "Quế Thị Thùy Dương",
        "9" => "Tạ Văn Hải",
        "10" => "Phạm Thị Hằng",
        "11" => "Trần Thị Ngọc Hoa",
        "12" => "Nguyễn Thị Thu Hoài",
        "13" => "Trần Thị Hồng",
        "14" => "Lê Ngọc Huyền",
        "15" => "Nguyễn Đình Hưng",
        "16" => "Phạm Quốc Hưng",
        "17" => "Nguyễn Thị Hương",
        "18" => "Nguyễn Bá Khang",
        "19" => "Đỗ Thành Khoa",
        "20" => "Nguyễn Diệu Linh",
        "21" => "Nguyễn Thị Ngọc Linh",
        "22" => "Nguyễn Thị Hiền Lương",
        "23" => "Trần Bình Minh",
        "24" => "Nguyễn Thanh Nga",
        "25" => "Cao Trọng Nghĩa",
        "26" => "Đinh Thị Nhạn",
        "27" => "Nguyễn Linh Chi",
        "28" => "Trần Thị Ly"
    );

    // echo $list_sinh_vien['23']."<br>";

    function tim_sinh_vien_bang_STT(int $stt, array $student_list)
    {
        foreach ($student_list as $key => $value) {
            if ($stt == $key) {
                return $value;
            }
        }
    }

    $stt = rand(1, 28);
    echo '<div class="alert alert-success" role="alert"><b>';
    echo "Mời bạn may mắn có stt " . $stt . " tên là: " . tim_sinh_vien_bang_STT($stt, $list_sinh_vien);
    echo '</b></div>';
    for ($d=0; $d<10; $d++) {
        if ($d%2==0) {
            echo $d." ";
        }
    };
    $x1=5;
    $x2=7;
    function sum() {
        return $x1+$x2;
    };
    echo sum();
    ?>
</body>
</html>