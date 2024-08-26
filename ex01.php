<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Xin chao. Toi ten la Bach Bui Nguyet Anh.<br>';
    echo strlen('Bach Bui Nguyet Anh');
    echo '<br>';
    $length = str_word_count('hello world');

    function Demtu() {
        $x = 106204;
        global $length;
        echo "Do dai: $length";
    }
    
    Demtu();
    echo '<br>';
    $x = strlen('BachBuiNguyetAnh');
    echo "Do dai ten: $x";
    ?>
</body>
</html>