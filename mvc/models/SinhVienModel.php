<?php 

class SinhVienModel extends DB{
    public function getSv(){
        // Normally: Connect DB here
        return "Hoàng Xuân Bách";
    }

    // extends DB: connect DB thành công =>Truyền DB qua cho  controllers/Home
    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}



?>