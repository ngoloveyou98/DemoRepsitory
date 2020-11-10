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

