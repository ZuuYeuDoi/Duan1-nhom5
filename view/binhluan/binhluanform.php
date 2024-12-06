<?php
 $id_sp = $_REQUEST['id_sp'];


?>


<div class="container mt-5">
<div class="border border-danger rounded shadow-lg p-4 mb-4 bg-danger" style="border-width: 3px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);">
    <h2 class="text-center text-white">Bình luận</h1>
</div>
            <div class="boxcontent2 menudoc">
                <?php
                    echo "id san pham la :" .$id_sp;
                
                ?>

            </div>

        <form action = "index.php?act=addbinhluan" method= "post">
            <div class="mb-3">
                <label for="comment" class="form-label">Nội dung bình luận</label>
                <textarea class="form-control" name="msg" id="comment" rows="3" placeholder="Nhập bình luận của bạn" required></textarea>
            </div>
            <!-- Nút gửi -->
            <button type="submit" name="guibinhluan" class="btn btn-primary">Gửi bình luận</button>
        </form>
    </div>
