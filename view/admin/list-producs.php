<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Sản phẩm</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Màu sản phẩm</th>
            <th>Chi tiếp sản phẩm</th>
            <th>Số lượng</th>
            <th>Đã bán</th>
            <th>Giá</th>
            <th>Khuyến mại 1</th>
            <th>Khuyến mại 2</th>
            <th>Ngày cập nhập</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $stt=1;
                $ds = $db->List();
                foreach ($ds as $value) { 
            ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value["tensp"]; ?></td>
            <td><img src="../images/<?php echo $value["hinhanhsp"]; ?>" width="100px" ></td>
            <td><?php //echo $value[" mausp"]; ?></td>
            <td><?php echo $value["chitietsp"]; ?></td>
            <td><?php echo $value["soluong"]; ?></td>
            <td><?php echo $value["daban"]; ?></td>
            <td><?php echo $value["gia"]; ?></td>
            <td><?php //echo $value["tenkhuyenmai1sp"]; ?></td>
            <td><?php echo $value["khuyenmai2"]; ?></td>
            <td><?php echo $value["ngaycapnhap"]; ?></td>
            <td><?php echo $value["trangthai"]; ?></td>
            <td>
              <a href="index.php?hd=sanpham&action=edit&id=<?php echo $value["idsp"]; ?>"><i class="fas fa-edit"></i></a>
              <a href="index.php?hd=sanpham&action=delete&id=<?php echo $value["idsp"]; ?>"><i class="fas fa-archive"></i></a>
            </td>
          </tr>
          <?php 
              $stt++;  }
             ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>