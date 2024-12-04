<div>
    <div>
    <?php 
$connect = new mysqli('localhost', 'root', '', 'duan1');
$query = "SELECT `danh_muc`.*, COUNT(san_pham.id_dm) AS 'number_cate' FROM `san_pham` INNER JOIN `danh_muc` ON san_pham.id_dm = danh_muc.id_dm GROUP BY san_pham.id_dm";
$result = mysqli_query($connect, $query);
$data = [];

while($row = mysqli_fetch_array($result)){
    $data[] = $row;
}

// Chuyển đổi dữ liệu thành định dạng JavaScript
$chartData = [];
foreach ($data as $item) {
    $chartData[] = [$item['ten_danhmuc'], (int)$item['number_cate']];
}

// Chuyển đổi mảng PHP thành JSON để sử dụng trong JavaScript
$chartDataJson = json_encode($chartData);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh Mục', 'Số Lượng'],
            <?php
                // In dữ liệu JSON vào JavaScript
                echo implode(",\n", array_map(function($item) {
                    return "['" . addslashes($item[0]) . "', " . $item[1] . "]";
                }, $chartData));
            ?>
        ]);

        var options = {
            title: 'Thống Kê Sản Phẩm Theo Danh Mục'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

<div id="piechart" style=" height: 500px;"></div>
</div>