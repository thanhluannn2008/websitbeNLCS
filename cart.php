<?php
include 'inc/header.php';

?>
<!---------------------------------------------------------------------------------- cart ----------------------------------------------------------------------------->
<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-items">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="cart-top-address cart-top-items">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="cart-top-payment cart-top-items">
                    <i class="fa-solid fa-money-check"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>SIZE</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td><img src="images/sp1.jpg" alt=""></td>
                        <td>Áo thun nam</td>
                        <td> <img src="images/spcolor.png" alt=""></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>200.000<sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="images/sp2.jpg" alt=""></td>
                        <td>Áo thun nam</td>
                        <td> <img src="images/spcolor.png" alt=""></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>200.000<sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>

            </div>
            <div class="cart-contetn-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p>200.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="color: black; font-weight: bold;">200.000<sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>
                    Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000.00đ
                    </p>
                    <p style="color: RED; font-weight: bold;">
                        Mua thêm <span style="font-size: 16px;">131.000<sup>đ</sup></span> được miêm phí SHIP
                    </p>
                </div>
                <div class="cart-content-right-button">
                    <button><a href="cartegory.php">TIẾP TỤC MUA SẮM</a></button>
                    <a href="delivery.php"><button>THANH TOÁN</button></a>
                </div>
                <div class="cart-content-right-signIn">
                    <p>TÀI KHOẢN IVY</p> <br>
                    <P>Hãy <a href="">đăng nhập</a> tài khoản để tích điểm thành viên</P>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
include 'inc/footer.php';

?>