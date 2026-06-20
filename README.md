# Website Ban Trai Cay - HiusBlack Foods

## Gioi Thieu

Day la du an website ban trai cay duoc thuc hien trong qua trinh bao cao thuc tap. He thong ho tro nguoi dung mua sam truc tuyen, quan ly gio hang, dat hang, thanh toan, theo doi don hang va tuong tac voi cua hang. Phia quan tri vien cung cap cac chuc nang quan ly san pham, danh muc, don hang, khuyen mai, tai khoan, danh gia, tin nhan va thong ke.

Muc tieu cua du an la xay dung mot website thuong mai dien tu co day du cac nghiep vu co ban cua mot cua hang ban trai cay, dong thoi ung dung cac cong nghe web pho bien nhu Laravel, MySQL, Bootstrap va API tich hop ben thu ba.

## Thong Tin Du An

- Ten du an: Website Ban Trai Cay HiusBlack Foods
- Loai du an: Website thuong mai dien tu
- Muc dich: Bao cao thuc tap
- Nen tang: Web application
- Ngon ngu chinh: PHP
- Framework chinh: Laravel 9
- Co so du lieu: MySQL/MariaDB

## Cong Nghe Su Dung

### Backend

- PHP 8
- Laravel Framework 9
- Laravel Authentication
- Laravel Query Builder/DB Facade
- Laravel Session
- Laravel Mail
- JWT Authentication cho API
- Guzzle HTTP Client

### Frontend

- Blade Template Engine
- HTML, CSS, JavaScript
- Bootstrap
- jQuery
- FontAwesome
- SB Admin 2 cho giao dien quan tri
- Laravel Mix

### Co So Du Lieu

- MySQL/MariaDB
- File database mau: `webtraicay_laravel.sql`
- Cac bang chinh:
  - `users`
  - `tbl_admin`
  - `tbl_product`
  - `tbl_category_product`
  - `tbl_oder`
  - `tbl_order_main`
  - `tbl_coupon`
  - `tbl_reviews`
  - `tbl_messages`

### Tich Hop Ben Thu Ba

- Dang nhap Google
- Thanh toan VNPay sandbox
- Gui email OTP dat lai mat khau
- AI chatbot tu van san pham bang Google Gemini
- API JWT cho dang nhap va lay du lieu danh muc/san pham

## Chuc Nang Chinh

### Chuc Nang Nguoi Dung

- Xem trang chu va danh sach san pham.
- Xem chi tiet san pham.
- Loc, tim kiem va sap xep san pham.
- Xem san pham theo danh muc.
- Dang ky tai khoan.
- Dang nhap, dang xuat.
- Dang nhap bang Google.
- Quen mat khau va dat lai mat khau bang OTP qua email.
- Cap nhat thong tin ca nhan.
- Doi mat khau.
- Them san pham vao gio hang.
- Cap nhat so luong san pham trong gio hang.
- Xoa san pham khoi gio hang.
- Ap dung ma giam gia.
- Thanh toan bang COD.
- Thanh toan bang VNPay.
- Xem lich su dat hang.
- Xem chi tiet don hang.
- Huy don hang khi don con o trang thai cho phep.
- Xem thong bao trang thai don hang.
- Danh gia san pham sau khi don hang da giao va da thanh toan.
- Nhan tin voi admin.
- Su dung AI chatbot de duoc tu van san pham.

### Chuc Nang Quan Tri Vien

- Dang nhap admin.
- Dang xuat admin.
- Dang ky tai khoan admin.
- Xem dashboard tong quan.
- Quan ly tai khoan nguoi dung.
- Them, sua tai khoan nguoi dung.
- Quan ly danh muc san pham.
- Them, sua, an/hien va xoa danh muc.
- Quan ly san pham.
- Them, sua, xoa mem san pham.
- Quan ly ton kho san pham.
- Tu dong an san pham khi het hang.
- Quan ly don hang.
- Xem danh sach don hang.
- Loc don hang theo trang thai, thanh toan va ngay dat.
- Xem chi tiet don hang.
- Cap nhat trang thai don hang.
- Xu ly huy don va hoan ton kho.
- Quan ly ma giam gia.
- Tao ma giam gia theo phan tram hoac so tien.
- Gioi han ma giam gia theo san pham, nguoi dung, hang khach hang va dieu kien don hang.
- Quan ly xep hang khach hang.
- Thong ke doanh thu.
- Thong ke don hang.
- Thong ke san pham.
- Thong ke khach hang.
- Thong ke khuyen mai.
- Quan ly danh gia san pham.
- Phan hoi danh gia cua khach hang.
- Quan ly tin nhan voi nguoi dung.

## Phan Quyen He Thong

He thong gom 2 nhom nguoi dung chinh:

- User: nguoi mua hang, co the xem san pham, dat hang, thanh toan, quan ly thong tin ca nhan va tuong tac voi cua hang.
- Admin: nguoi quan tri he thong, co the quan ly du lieu san pham, danh muc, don hang, khach hang, khuyen mai, danh gia, tin nhan va thong ke.

## Cau Truc Thu Muc Chinh

```text
app/
  Http/Controllers/        Chua cac controller xu ly nghiep vu
  Models/                  Chua model cua he thong
  Service/                 Chua mot so lop xu ly dich vu
config/                    Cau hinh Laravel va dich vu ben thu ba
public/
  backend/                 Tai nguyen giao dien admin
  fontend/                 Tai nguyen giao dien user
  upload/product/          Anh san pham upload
resources/
  views/                   Giao dien Blade
  views/pages/             Cac trang user
  views/pages_admin/       Cac trang admin
routes/
  web.php                  Dinh nghia route web
  api.php                  Dinh nghia route API
webtraicay_laravel.sql     File co so du lieu mau
```

## Mot So Route Tieu Bieu

### User

- `/trang-chu`: trang chu
- `/san-pham`: danh sach san pham
- `/chi-tiet-san-pham/{product_id}`: chi tiet san pham
- `/dang-nhap-dang-ky`: dang nhap/dang ky
- `/gio-hang`: gio hang
- `/thanh-toan`: thanh toan
- `/lich-su-dat-hang`: lich su dat hang
- `/chi-tiet-don/{id}`: chi tiet don hang
- `/tin-nhan`: tin nhan voi admin
- `/ai-chatbot`: chatbot tu van san pham

### Admin

- `/admin-dang-nhap`: dang nhap admin
- `/admin-trang-chu`: dashboard admin
- `/all-taikhoan`: quan ly tai khoan
- `/all-danhmuc-sanpham`: quan ly danh muc
- `/all-sanpham`: quan ly san pham
- `/all-oder`: quan ly don hang
- `/all-coupon`: quan ly khuyen mai
- `/all-rank-user`: xep hang khach hang
- `/all-reviews`: quan ly danh gia
- `/admin-messages`: quan ly tin nhan
- `/all-statistics-revenue`: thong ke doanh thu

### API

- `POST /api/auth/register`: dang ky API
- `POST /api/auth/login`: dang nhap API
- `GET /api/auth/me`: lay thong tin user hien tai
- `POST /api/auth/refresh`: lam moi token
- `POST /api/auth/logout`: dang xuat API
- `PUT /api/auth/profile`: cap nhat ho so API
- `GET /api/categories`: lay danh muc
- `GET /api/products`: lay danh sach san pham
- `GET /api/products/{productId}`: lay chi tiet san pham

## Huong Dan Cai Dat

### Yeu Cau Moi Truong

- PHP >= 8.0
- Composer
- Node.js va npm
- MySQL/MariaDB
- XAMPP hoac moi truong web server tuong duong

### Cac Buoc Cai Dat

1. Clone hoac copy du an vao thu muc web server.

```bash
cd c:/xampp/htdocs/TTTN_Project_WebsiteBanTraiCay
```

2. Cai dat thu vien PHP.

```bash
composer install
```

3. Cai dat package frontend.

```bash
npm install
```

4. Tao file cau hinh moi truong.

```bash
copy .env.example .env
```

5. Tao application key.

```bash
php artisan key:generate
```

6. Cau hinh database trong file `.env`.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ten_database
DB_USERNAME=root
DB_PASSWORD=
```

7. Import database tu file `webtraicay_laravel.sql` vao MySQL.

8. Build asset frontend neu can.

```bash
npm run dev
```

9. Chay ung dung.

```bash
php artisan serve
```

Sau do truy cap:

```text
http://127.0.0.1:8000
```

Neu chay bang XAMPP, co the truy cap theo duong dan localhost tu thu muc `htdocs`.

## Cau Hinh Dich Vu Ben Thu Ba

Mot so tinh nang can cau hinh them trong file `.env`:

### Google Login

```env
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=
```

### Gemini AI

```env
GEMINI_API_KEY=
GEMINI_MODEL=gemini-2.5-flash
```

### Mail OTP

```env
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

### VNPay

Thong tin VNPay sandbox dang duoc xu ly trong controller thanh toan. Khi trien khai thuc te, can thay doi cau hinh ma website, secret key va return URL theo tai khoan VNPay chinh thuc.

## Nghiep Vu Don Hang

He thong su dung cac trang thai don hang:

- `0`: Cho xac nhan
- `1`: Da xac nhan
- `2`: Dang chuan bi
- `3`: Dang giao
- `4`: Da giao
- `5`: Da huy

Trang thai thanh toan:

- `0`: Chua thanh toan
- `1`: Da thanh toan
- `2`: Thanh toan that bai
- `3`: Da hoan tien

Khi nguoi dung dat hang, he thong se kiem tra ton kho, tao don hang, tru ton kho va cap nhat trang thai san pham neu het hang. Khi don bi huy, he thong hoan lai ton kho cho san pham.

## Diem Noi Bat Cua Du An

- Co phan user va admin rieng biet.
- Ho tro dang nhap Google.
- Ho tro thanh toan COD va VNPay.
- Co he thong coupon linh hoat theo san pham, nguoi dung va hang khach hang.
- Co chatbot AI tu van san pham.
- Co he thong tin nhan user/admin.
- Co danh gia san pham va phan hoi cua admin.
- Co thong ke doanh thu, don hang, san pham, khach hang va khuyen mai.
- Co xu ly ton kho va xoa mem san pham.
- Co API JWT phuc vu mo rong ung dung mobile hoac frontend rieng.

## Ket Qua Dat Duoc

Qua qua trinh thuc hien, du an da xay dung duoc mot website ban trai cay co cac chuc nang co ban cua he thong thuong mai dien tu. Nguoi dung co the dang ky, dang nhap, tim kiem san pham, them vao gio hang, dat hang, thanh toan va theo doi don hang. Admin co the quan ly toan bo du lieu van hanh cua cua hang va theo doi thong ke kinh doanh.

Du an giup nguoi thuc hien nam ro hon ve:

- Cach xay dung ung dung web bang Laravel.
- Cach thiet ke database cho website ban hang.
- Cach xu ly gio hang, don hang va thanh toan.
- Cach phan chia giao dien user/admin.
- Cach tich hop dich vu ben thu ba.
- Cach lam viec voi route, controller, view va session trong Laravel.

## Han Che

- Mot so route admin chua ap dung middleware phan quyen chat che.
- Mot so controller con xu ly truc tiep bang DB Facade, chua tach het sang service/repository.
- Giao dien co the tiep tuc toi uu responsive va trai nghiem nguoi dung.
- Cau hinh VNPay sandbox dang nam trong controller, nen tach sang `.env` khi trien khai.
- Can bo sung them test cho cac luong quan trong nhu dat hang, thanh toan va coupon.

## Huong Phat Trien

- Bo sung middleware bao ve toan bo khu vuc admin.
- Chuan hoa code theo mo hinh service/repository.
- Hoan thien API cho gio hang, don hang va thanh toan.
- Them chuc nang quan ly banner, tin tuc va lien he.
- Them bao cao thong ke nang cao theo khoang thoi gian.
- Cai tien chatbot AI de goi y san pham chinh xac hon.
- Bo sung test tu dong cho cac nghiep vu quan trong.
- Trien khai len hosting/server thuc te.

## Tac Gia

- Sinh vien thuc hien: Nguyen Thanh Hieu
- Lop: 22CT2
- Don vi thuc tap: Trung Tam Phat Trien Pham Mem SDC - Da Nang
- Giang vien huong dan: Lam Tung Giang
- Thoi gian thuc hien: 18-5 -> 28/6

