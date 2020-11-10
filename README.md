## Repository trong Laravel
### Repository 
Repository là một mẫu thiết kế trong Design Pattern.
Trong laravel nó là cầu nối giữa Model và Controller. Các câu lệnh truy vấn dữ liệu vốn được viết trong controller sẽ được đưa vào Repository. Khi đó, Controller sẽ dùng Repository để tương tác với dữ liệu thay vì sử dụng trực tiếp.
### Lợi ích
- Code dễ đọc , Giảm thay đổi code khi phần mềm có yêu cầu thay đổi cấu trúc dữ liệu.
- Tránh việc lặp code.
- Hạn chế lỗi trong truy vấn.
- Dễ dàng thực hiện test

## Ví dụ
### Bước 1:
Trong thư mục apptrong ứng dụng Laravel của bạn, tạo 1 thư mục có tên là Repositories. Trong thư mục sẽ có:
- RepositoryInterface: interface khuôn mẫu, khai báo các phương thức chung cho các Models.
- BaseRepository: implements RepositoryInterface, triển khai các phương thức chung cho các Model.
- Các thư mục riêng tương ứng với các Model. (Ở đây mình ví dụ là Product). Trong thư mục này chứa:
    - ProductRepositoryInterface: interface chứa các phương thức riêng của Model Product.
    - ProductRepository: implements ProductRepositoryInterface
### Bước 2: Đăng kí trong app/Providers/AppServiceProvider.php
Khi khởi tạo controller, chúng ta sẽ gán thuộc tính $productRepo có kiểu là ProductRepositoryInterface. Tại sao không phải là ProductRepository?
Mục đích là để khi database thay đổi (ví dụ chuyển từ MySQL sang Redis), các lệnh truy vấn dữ liệu sẽ thay đổi. Khi đó, ta sẽ phải tạo thêm 1 class ProductRepository khác (ví dụ RedisProductRepository). Để dễ dàng cho các thay đổi như vậy, không cần sửa lại các controller đang dùng repository cũ, ta đăng kí và sau đó chỉ cần thay đổi repository ở file app/Providers/AppServiceProvider.php.
```PHP
public function register()
{
    $this->app->singleton(
        \App\Repositories\Product\ProductRepositoryInterface::class,
        \App\Repositories\Product\ProductRepository::class
    );
}
```
### Bước 3: Tạo RepositoryInterface và BaseRepository
### Bước 4: Viết Interface và Repository cho Model tương ứng
#### ProductRepositoryInterface
#### ProductRepository
### Bước 5: Tạo ProductController

