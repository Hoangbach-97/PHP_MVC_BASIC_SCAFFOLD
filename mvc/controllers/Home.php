<?php 
class Home extends Controller{
    function Products()
    {
    echo "Products";

// Home extends từ Controller: Controller require SinhVienModel
// $name = new SinhVienModel();


}




function SeeProducts($param1, $param2) {
    $name =$this-> model("SinhVienModel");
    // echo $name->getSv();
    // echo $param1+$param2;
    $this->views("ProductDetail", ["Product"=>$param1, "Pages"=>"About", "SV"=>$name->SinhVien()]);

}
 
}




?>