<?php
include 'inc/header.php';

?>
<!---------------------------------------------------------------------------------- DELIVERY ----------------------------------------------------------------------------->
<section class="delivery">
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-items">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="delivery-top-address delivery-top-items">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="delivery-top-payment delivery-top-items">
                    <i class="fa-solid fa-money-check"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>Vui lòng chọn đia chỉ giao hàng</p>
                <div class="delivery-content-left-signIn row">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>
                </div>
                <div class="delivery-content-left-guest row">
                    <input checked name="loaiKhach" type ="radio">
                    <p><span style="font-weight: bold;">Khách lẻ</span>(Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangKy row">
                    <input name="loaiKhach" type ="radio">
                    <p><span style="font-weight: bold;">Đăng ký</span>(Tạo tài khoản mới với thông tin bên dưới)</p>
                 </div>
                 <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-items">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-items">
                        <label for="">Điện thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-items">
                        <label for="">Tỉnh/Tp <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-items">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                 </div>
                 <div class="delivery-content-left-input-bottom">
                    <div class="delivery-content-left-input-bottom-items">
                        <label for="">Địa chỉ <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>

                 </div>
                 <div class="delivery-content-left-button row">
                    <a href="cart.php"> <p><span><i class="fa-solid fa-angles-left"></i></span> Quay lại trang giỏ hàng</p></a>
                    <a href="payment.php"><button><p style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</p></button></a>
                 </div>

            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <td>Áo thun nam</td>
                        <td>-50%</td>
                        <td>1</td>
                        <td><p>200.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Áo thun nam màu xanh cổ vịt</td>
                        <td>-50%</td>
                        <td>1</td>
                        <td><p>200.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Tổng</td>
                        <td style="font-weight: bold;"><p>400.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Thuế VAT</td>
                        <td style="font-weight: bold;"><p>69.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-weight: bold;">Tổng tiền hàng</td>
                        <td style="font-weight: bold;"><p>469.000<sup>đ</sup></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
include 'inc/footer.php';

?>