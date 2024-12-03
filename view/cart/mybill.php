<div class="container mt-3 bg-light rounded pt-3 pb-1">
    <nav class="text-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb text-center">

            <li class="breadcrumb-item active text-success fw-bolder" aria-current="page">Đơn Hàng</li>
        </ol>
    </nav>
</div>
<div class="container my-5 wow fadeIn">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-start">Mã Đơn Hàng</th>
                    <th class="text-center">Thanh toán</th>
                    <th class="text-center">Giao hàng</th>
                    <th class="text-center">Ngày tạo</th>
                    <th class="text-center">Tổng</th>
                    <th class="text-end">Trạng thái / Xem</th>
                </tr>
            </thead>
            <tbody class="align-middle">

                <?php
                
                // Display the orders in a table or other suitable format
                if (is_array($listBill) && count($listBill) > 0) {
                    foreach ($listBill as $bill) {
                        // Extract relevant information from the $bill array
                        $madh = $bill['madh'];
                        $ngaydathang = $bill['ngaydathang'];
                        $tongtien = $bill['tongtien'];
                        $ttdh = get_ttdh($bill['id_trangthai']);
                        $pttt = get_pttt($bill['pttt']);

                        // Display the order information in a table row or other desired format
                    echo '<tr>
                        <td class="text-start">' . $madh . '</td> 
                        <td class="text-center">' . $pttt . '</td>
                        <td class="text-center">' . $ttdh . '</td>
                         <td class="text-center">' . $ngaydathang . '</td>
                        <td class="text-center">' . $tongtien . '</td>
                        <td class="text-end">' . $ttdh . '</td>
                    </tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">Không có đơn hàng nào.</td></tr>';
                }
                ?>
                <!-- <tr>
                    <td colspan="7" class="text-center py-3">Bạn chưa có hóa đơn nào.</td>
                </tr> -->

            </tbody>
        </table>
    </div>
</div>