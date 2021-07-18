<?php 
// Tất cả truy cập đều đi qua file .htacess để bảo vệ server
// RewriteEngine On 
// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteCond %{REQUEST_FILENAME} !-f
// RewriteRule ^(.+)$ index.php?url=$1 :Những gì khách hàng gõ trên thanh địa chỉ ^(.+)$ sẽ truyền vào cho biến url:url=$1($1 chính là ^(.+)$))
// Lưu ý là tên file index.php?url chỉ xuất hiện ở phía server =>Không display cho user

// echo $_GET['url'];
session_start();
require_once ("./mvc/Bridge.php");
new App();




?>