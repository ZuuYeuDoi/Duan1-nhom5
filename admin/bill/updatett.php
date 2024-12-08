<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy thông tin đơn hàng theo ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $conn->prepare("SELECT * FROM don_hang WHERE id_donhang = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();

if (!$order) {
    die("Đơn hàng không tồn tại.");
}

// Xử lý cập nhật trạng thái
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = isset($_POST['status']) ? (int)$_POST['status'] : $order['id_trangthai'];
    $updateStmt = $conn->prepare("UPDATE don_hang SET id_trangthai = ? WHERE id_donhang = ?");
    $updateStmt->bind_param("ii", $status, $id);
    $updateStmt->execute();
    header("Location: index.php?act=listdh");
    exit();
}

// Hàm trạng thái đơn hàng
function getOrderStatusOptions($currentStatus) {
    $statusDescriptions = [
        1 => "Chờ xác Nhận",
        2 => "Đã Xác Nhận",
        3 => "Chờ lấy hàng",
        4 => "Đang giao hàng",
        5 => "Giao hàng thành công",
        6 => "Đã huỷ",
        7 => "Trả hàng"
    ];
    foreach ($statusDescriptions as $key => $value) {
        echo "<option value='$key' " . ($currentStatus == $key ? 'selected' : '') . ">$value</option>";
    }
}
?>

<script>
    // Hàm xử lý sự thay đổi của trạng thái
    function handleStatusChange() {
        const statusSelect = document.getElementById('status');
        const selectedStatus = parseInt(statusSelect.value);

        for (let option of statusSelect.options) {
            const optionValue = parseInt(option.value);

            // Ẩn các trạng thái nhỏ hơn giá trị đã chọn
            if (optionValue < selectedStatus) {
                option.style.display = 'none';
            } else {
                option.style.display = 'block';
            }
        }
    }

    // Đảm bảo khi trang được tải, sự kiện được gọi
    window.onload = handleStatusChange;
</script>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">  
    <title>Cập nhật trạng thái đơn hàng</title>
    <link href="path_to_css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top: 1%;
    margin-left: 10px;">
    <h1 class="mt-4 mb-4">Cập nhật trạng thái đơn hàng</h1>
    <form method="POST">
        <div class="form-group">
            <label for="status">Trạng thái:</label>
            <select class="form-control" id="status" name="status" onchange="handleStatusChange()">
                <?php getOrderStatusOptions($order['id_trangthai']); ?>
            </select>
        </div>
        <div style="margin-top: 10px">
        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="index.php?act=listdh" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
</div>

</body>
</html>
