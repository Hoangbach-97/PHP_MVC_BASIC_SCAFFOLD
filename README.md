Mục đích mô hình MVC: Giúp cho Project gọn, dễ chỉnh sửa và làm việc nhóm, giải quyết vấn đề

Chia ra làm 3 phần rõ ràng: 
Views: Chứa phần hiển thị cho người dùng
Models: Chứa các câu lệnh truy vấn CSDL
Controls: Tức khi user tương tác thực hiện các thao tác click, xóa, chỉnh sửa comment thì Control có nhiệm vụ điều khiển mock DB từ Model=> Kết hợp với Views để render ra màn hình


Process: User gõ url => file .htaccess -> tiến hành phân tích, cắt url->filter/trim->truy xuất vào controller nào, action nào 
->Khởi tạo controller->Controller gọi action ->Action xử lý và truy xuất dữ liệu truyền dữ liệu cho view -> render ra trang user cần ->

Request Cycle: mvc/Bridge.php(Middleware) được gọi trong index.pp =>Bridge.php có nhiệm vụ cầu kết nối 3 thằng mvc cho index.php. 
App.php có nhiệm vụ connect,gọi controller, models, views