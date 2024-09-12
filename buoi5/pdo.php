<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $dbname = 'melody';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Thiết lập chế độ lỗi cho PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối thành công!";
    } catch (PDOException $e) {
        die("Lỗi kết nối: " . $e->getMessage());
    }

    // 1. Thêm dữ liệu vào bảng
    try {
        $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country)
                VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
        
        $stmt = $pdo->prepare($sql);
        
        // Gán giá trị cho các tham số
        $stmt->bindParam(':full_names', $full_names);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':contact_no', $contact_no);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':country', $country);
        
        // Giá trị mẫu để thêm
        $full_names = 'bbna';
        $gender = 'Female';
        $contact_no = '999';
        $email = 'bbna@sea.gr';
        $city = 'Vinh Phuc';
        $country = 'Viet Nam';
        
        $stmt->execute();
        echo "Thêm dữ liệu thành công!";
    } catch (PDOException $e) {
        echo "Lỗi thêm dữ liệu: " . $e->getMessage();
    }

    // 2. Cập nhật dữ liệu trong bảng
    try {
        $sql = "UPDATE my_contacts SET email = :email, city = :city WHERE id = :id";
        
        $stmt = $pdo->prepare($sql);
        
        // Gán giá trị cho các tham số
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':id', $id);
        
        // Giá trị mẫu để cập nhật
        $email = 'jupiter_new@planet.pt.co';
        $city = 'New Rome';
        $id = 3;
        
        $stmt->execute();
        echo "Cập nhật dữ liệu thành công!";
    } catch (PDOException $e) {
        echo "Lỗi cập nhật dữ liệu: " . $e->getMessage();
    }

    // 3. Xóa dữ liệu trong bảng
    try {
        $sql = "DELETE FROM my_contacts WHERE id = :id";
        
        $stmt = $pdo->prepare($sql);
        
        // Gán giá trị cho tham số
        $stmt->bindParam(':id', $id);
        
        // ID của dòng muốn xóa
        $id = 4;
        
        $stmt->execute();
        echo "Xóa dữ liệu thành công!";
    } catch (PDOException $e) {
        echo "Lỗi xóa dữ liệu: " . $e->getMessage();
    }

    // 4. Hiển thị dữ liệu từ bảng
    try {
        $sql = "SELECT * FROM my_contacts";
        $stmt = $pdo->query($sql);
        
        // Hiển thị kết quả
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Tên: " . $row['full_names'] . "<br>";
            echo "Giới tính: " . $row['gender'] . "<br>";
            echo "Số liên hệ: " . $row['contact_no'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Thành phố: " . $row['city'] . "<br>";
            echo "Quốc gia: " . $row['country'] . "<br><br>";
        }
    } catch (PDOException $e) {
        echo "Lỗi hiển thị dữ liệu: " . $e->getMessage();
    }
    ?>
</body>
</html>