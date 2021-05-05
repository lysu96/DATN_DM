<?php
$titel = "Giỏ hàng"; 
include 'view/masster/head.php';
 ?>
    <div class="container">
        <?php require_once 'view/masster/menu.php'; ?>
    </div>

    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng giá</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/category-1.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="" class="delete">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/category-2.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="" class="delete">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/category-3.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="" class="delete">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Tổng số tiền sản phẩm</td>
                    <td>175.000$</td>
                </tr>
                <tr>
                    <td>Thuế</td>
                    <td>25.00$</td>
                </tr>
                <tr>
                    <td>Tổng</td>
                    <td>200.000$</td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="" class="btn">Thanh toán &#8594;</a></td>
                </tr>
            </table>

        </div>


    </div>

<script>
    // xóa cart
    var remove_cart = document.getElementsByClassName("delete");
    for (var i = 0; i < remove_cart.length; i++) {
      var button = remove_cart[i]
      button.addEventListener("click", function () {
        var button_remove = event.target
        button_remove.parentElement.parentElement.remove()
    })
  }
</script>
    <!-- ------------footer----------- -->

<?php include 'view/masster/footer.php'; ?>