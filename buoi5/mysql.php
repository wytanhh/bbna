<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $dbh = mysqli_connect('localhost', 'root', '', 'melody');
    // Kết nối tới MySQL server

    if (!$dbh)
        die("Unable to connect to MySQL: " . mysqli_connect_error());
    // Nếu kết nối thất bại thì đưa ra thông báo lỗi

    // 1. Thêm dữ liệu vào bảng
    $sql_stmt1 = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt1 .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result1 = mysqli_query($dbh, $sql_stmt1);
    
    if (!$result1) {
        die("Adding record failed: " . mysqli_connect_error()); 
    } else {
        echo "Poseidon has been successfully added to your contacts list".'<br>';
    }

    // 2. Cập nhật dữ liệu
    $sql_stmt2 = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt2 .= "WHERE `id` = 5";
    
    $result2 = mysqli_query($dbh,$sql_stmt2);

    if (!$result2) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number 5 has been successfully updated".'<br>';
    }

    // 3. Xóa dữ liệu
    $id = 4; 
    $sql_stmt3 = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    
    $result3 = mysqli_query($dbh,$sql_stmt3); 
    
    if (!$result3) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number $id has been successfully deleted".'<br>';
    }

    // 4. Hiển thị dữ liệu
    $sql_stmt4 = "SELECT * FROM my_contacts";

    $result4 = mysqli_query($dbh, $sql_stmt4);

    if (!$result4)
        die("Database access failed: " . mysqli_connect_error());

    $rows = mysqli_num_rows($result4);

    if ($rows) {
        while ($row = mysqli_fetch_array($result4)) {
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Full Names: ' . $row['full_names'] . '<br>';
            echo 'Gender: ' . $row['gender'] . '<br>';
            echo 'Contact No: ' . $row['contact_no'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>';
            echo 'City: ' . $row['city'] . '<br>';
            echo 'Country: ' . $row['country'] . '<br><br>';
        }
    }

    mysqli_close($dbh); // Đóng kết nối CSDL

    ?>
</body>
</html>