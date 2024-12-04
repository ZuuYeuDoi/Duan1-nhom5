<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Chi tiết đơn hàng</h1>
            </div>

            <!-- Content Row -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thông tin sản phẩm trong đơn hàng</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($ctdh as $key){
                                    
                                
                            ?>
                            <tr>
                                    <th><img src="../upload/<?php echo $key['img']?>" alt="" width="100px"></th>
                                    <th><?php echo $key['name'] ?></th>
                                    <th><?php echo $key['price']?></th>
                                    <th><?php echo $key['soluong']?></th>
                                    <th><?php echo $key['thanhtien']?></th>

                                </tr>
                           <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                   
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            
                </div>
            </div>
        </div>