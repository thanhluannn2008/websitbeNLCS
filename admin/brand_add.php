<?php
    include "brand_class.php";
    include "./inc/header.php";
    include "./inc/slider.php";

?>

<?php
    $brand = new brand;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $cartegory_id = $_POST['cartegory_id'];
        $brand_name = $_POST['brand_name'];
        $insert_brand = $brand -> insert_brand($cartegory_id,$brand_name);
    }
 
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>
    
    <div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm loại sản phẩm</h1> <br>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                       <?php
                       $show_cartegory = $brand ->show_cartegory();
                       if($show_cartegory){while($rusult = $show_cartegory->fetch_assoc()){
                     
                       ?>
                        <option value="<?php echo $rusult['cartegory_id'] ?>"><?php echo $rusult['cartegory_name'] ?></option>  
                        <?php
                              }
                            }
                        ?>
                    </select> <br>
                    <input required name="brand_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>