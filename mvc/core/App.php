<?php 
// echo $_GET['url'];
class App{
    // http://localhost/MVC_PHP/Home/Products/smartphone/1

    // /Gán giá trị mặc định: phòng trường hợp user ngáo
    protected  $controller="Home";
    protected  $action="Products";
    protected   $params=[];

    function __construct(){
        $response = $this->UrlProcess();
        // print_r($response);
        // XỬ LÝ CONTROLLER
        if(isset($response[0]))
        {
        if(file_exists("./mvc/controllers/".$response[0].".php"))
        {
            $this->controller = $response[0];
            unset($response[0]);
        }
    }
    require_once("./mvc/controllers/".$this->controller.".php");
    $this->controller = new $this->controller;

        // XỬ LÝ ACTION
        // Hàm kiểm tra action tức method có exist hay không: method_exists(Classname, method);
        if(isset($response[1]))
        {
            if(method_exists($this->controller, $response[1]))
            {
                $this->action = $response[1];
            }
            unset($response[1]);

        }
        
        // echo "Action";


        // XỬ LÝ PARAMS
        // Hàm array_values($arr):Chuyển từ mảng kết hợp qua mảng liên tục: VD array("2"=>"name", "3"=>"value") convert thành array("0"=>"name", "1"=>"value")
        $this->params= $response?array_values($response):[];
        // echo $this->controller;
        // echo $this->action;
        // print_r($this->params);
        // Gọi hàm tồn tại trong PHP. Tham số đầu tiên là callback, Tham số thứ 2 là một mảng các parameters của hàm đó.
        call_user_func_array([$this->controller,$this->action], $this->params);


       


    }


    function UrlProcess(){
        if(isset($_GET["url"]))
        {
            // Hàm explode("/", $tring) =>break string into array tại dấu "/"(separator)
            // filter_var(): filter and sanitize 
            // trim(); loại bỏ khoảng trắng or kí tự nào(được cung cấp) ở đầu và cuối chuỗi

          return  explode("/", filter_var(trim($_GET["url"], "/"), FILTER_SANITIZE_URL));
        //    return filter_var(trim($_GET["url"],"/"));
           
        }   
    }
}
?>