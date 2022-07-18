<?php
// bước 1: triệu gọi kết nối ở file connect

use LDAP\Result;

include "connect.php";
// bước 2 tiến hành truy vấn
$sql = "SELECT * FROM sinhvien";
$query = mysqli_query($conn, $sql);
// bước 3 đếm kết quả trả về của câu truy vấn.
$num = mysqli_num_rows($query); // co bao nhieu hang
// echo "số lượng: " .$num. "<br>";

$sql1 = "SELECT ma_MonHoc FROM diemthi WHERE ma_SV='uni123'";
$result = $conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai CSDL</title>
</head>

<body>
    <?php
    echo "So luong sinh vien la: $num" . "<br>";
    while ($num = mysqli_fetch_array($query)) {  //mysqli_fetch_array() Tìm nạp một hàng kết quả dưới dạng một mảng số và dưới dạng một mảng kết hợp:
        echo $num['Ten_SV'] . "<br>";
    }
    echo "Cac mon hoc cua sinh vien co ma Uni123 la:" . "<br>";
    while($row=$result->fetch_assoc()){ //tìm nạp một hàng kết quả dưới dạng một mảng kết hợp.
        echo $row["ma_MonHoc"]."<br>";
        $row2 = $row["ma_MonHoc"];
        $sql2 = "SELECT ten_MonHoc FROM monhoc Where ma_MonHoc ='$row2'";
        $result2 = $conn->query($sql2);
        while($monHoc=$result2->fetch_assoc()){
            echo $monHoc["ten_MonHoc"]."<br>";
        }
    }
    echo "Cac sinh vien da hoan thanh 200 tinh chi la: <br>";
    $sqlMaSV = "SELECT ma_SV FROM tinchi where TinChiHT >=200";
    $resultM_SV = $conn ->query($sqlMaSV);
    while($row_MSV=$resultM_SV->fetch_assoc()){ //tìm nạp một hàng kết quả dưới dạng một mảng kết hợp.
        echo $row_MSV["ma_SV"]."<br>";
        $row3 = $row_MSV["ma_SV"];
        $sqlTenSV = "SELECT ten_SV FROM sinhvien Where ma_SV ='$row3'";
        $resultTenSV = $conn->query($sqlTenSV);
        while($TenSV=$resultTenSV->fetch_assoc()){
            echo $TenSV["ten_SV"]."<br>";
        }
    }

    ?>
</body>

</html>