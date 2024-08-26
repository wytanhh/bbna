<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 'Bai tap tuan 2 cua Nguyet Anh';
    echo "Chuỗi 1: '$x'".':'.'<br>';
    // 1
    echo "Số ký tự: ".strlen($x).'<br>';
    // 2
    echo "Số từ: ".str_word_count($x).'<br>';
    // 3
    echo "Chuỗi 1 sau khi đảo ngược: ".strrev($x).'<br>';
    // 4
    echo "Vị trí của 'Nguyet Anh': ".strpos("$x","Nguyet Anh").'<br>';
    // 5
    echo "Chuỗi 1 sau khi thay thế: ".str_replace("Nguyet Anh", "Phu Duc", "$x").'<br>';
    // 6
    $check0 = 'Bai tap';
    if (strncmp("$check0", $x, strlen("$check0")) == 0) {
        echo "Chuỗi '$x' bắt đầu bằng '$check0'";
    } else {
        echo "Chuỗi '$x' không bắt đầu bằng '$check0'";
    };
    echo '<br>';
    // 7
    echo "Chuỗi 1 sau khi chuyển thành chữ hoa: ".strtoupper($x).'<br>';
    // 8
    echo "Chuỗi 1 sau khi chuyển thành chữ thường: ".strtolower($x).'<br>';
    // 9
    echo "Chuỗi 1 sau khi in hoa chữ cái đầu: ".ucwords($x).'<br>';
    // 10
    $y = ' mot hai ba ';
    echo "Chuỗi '$y' sau khi bỏ khoảng trắng ở đầu và cuối chuỗi: ".trim($y).'.'.'<br>';
    // 11
    echo "Chuỗi 1 sau khi loại bỏ ký tự đầu tiên: ".ltrim($x, 'B').'<br>';
    // 12
    echo "Chuỗi 1 sau khi loại bỏ ký tự cuối cùng: ".rtrim($x, 'h').'<br>';
    // 13
    echo "Chuỗi 1 sau khi tách: ";
    $arr = explode(" ", $x);
    print_r($arr);
    echo '<br>';
    // 14
    $data = ['Bach', 'Bui', 'Nguyet', 'Anh', 'xinh', 'gai'];
    $t = implode(' ', $data);
    echo "Chuỗi sau khi nối các phần tử của 1 mảng: ".$t.'<br>';
    // 15
    echo "Chuỗi sau khi thêm 1 chuỗi vào cuối: ".str_pad($t, strlen($t." hoc gioi"), " hoc gioi", STR_PAD_RIGHT).'<br>';
    // 16
    $check1 = 'Anh';
    $result1 = strrchr($x, $check1);
    if ($result1 == $check1) {
        echo "Chuỗi '$check1' là chuỗi kết thúc trong chuỗi '$x'";
    } else {
        echo "Chuỗi '$check1' không phải là chuỗi kết thúc trong chuỗi '$x'";
    };
    echo '<br>';
    // 17
    $check2 = 'tuan 2';
    $result2 = strstr($x, $check2);
    if ($result2 == true) {
        echo "Chuỗi '$x' có chứa chuỗi '$check2'";
    } else {
        echo "Chuỗi '$x' không chứa chuỗi '$check2'";
    };
    echo '<br>';
    // 18
    $a = "Hello, world! 123.";   
    $check3 = "_";
    $result3 = preg_replace('/[^a-zA-Z0-9]/', $check3, $a);
    echo "Chuỗi '$a' sau khi replace: '$result3";
    echo '<br>';
    // 19
    $check4 = 2;
    if (is_int($check4)) {
        echo "'$check4' là số nguyên";
    } else {
        echo "'$check4' không phải là số nguyên";
    };
    echo '<br>';
    // 20
    $email = "bbnga106@gmail.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email là email hợp lệ");
    } else {
        echo("$email không phải là email hợp lệ");
    };
    echo '<br>';
    ?>
</body>
</html>