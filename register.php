<?php
/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 4/25/17
 * Time: 11:38 AM
 */
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "<h2>Bạn phải sử dụng phương thức POST.</h2>";
    return;
}
if(!isset($_POST['name'])){
    echo "<h3>Bạn thiếu trường 'name'.</h3>";
    return;
}
if(!isset($_POST['email'])){
    echo "<h3>Bạn thiếu trường 'email'.</h3>";
    return;
}
if(!isset($_POST['phone'])){
    echo "<h3>Bạn thiếu trường 'phone'.</h3>";
    return;
}
if(!isset($_POST['gender'])){
    echo "<h3>Bạn thiếu trường 'gender'. Hoặc thiếu thuộc tính 'checked' cho giá trị mặc định của trường gender.</h3>";
    return;
}
echo "<h2>Chúc mừng. Biểu mẫu của bạn đã được hoàn thành.</h2>";
echo "<h3>Giá trị được gửi lên server là:</h3>";
echo "<h4>Họ và tên: ".$_POST['name']."</h4>";
echo "<h4>Email: ".$_POST['email']."</h4>";
echo "<h4>Điện thoại: ".$_POST['phone']."</h4>";
echo "<h4>Giới tính: ".$_POST['gender']."</h4>";