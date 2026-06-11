@extends('user_layout')
@section('home_display')
@php
    $categoryTabs = $all_category_product->take(6);
    $productsByCategory = collect($all_product)->groupBy('category_id');
@endphp

<style>
    .home-modern-shell {
        background: linear-gradient(180deg, #fff7ed 0%, #f8fafc 24%, #ffffff 100%);
    }
    .hero-header.hero-modern {
        background:
            radial-gradient(circle at top left, rgba(255, 212, 163, 0.65), transparent 28%),
            linear-gradient(135deg, #fff2e8 0%, #fff8f1 48%, #ffffff 100%);
        margin-bottom: 0;
    }
    .hero-modern-copy h4 {
        font-weight: 800;
        letter-spacing: 0.04em;
    }
    .hero-modern-copy h1 {
        font-weight: 800;
        line-height: 1.08;
        color: #111827;
        margin-bottom: 18px;
    }
    .hero-modern-copy p {
        color: #6b7280;
        font-size: 1.05rem;
        max-width: 580px;
        margin-bottom: 22px;
    }
    .hero-feature-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }
    .hero-feature-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid #fed7aa;
        color: #ea580c;
        font-weight: 700;
        box-shadow: 0 12px 24px rgba(249, 115, 22, 0.08);
    }
    .hero-carousel-modern {
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 24px 44px rgba(15, 23, 42, 0.12);
        background: #fff;
    }
    .hero-carousel-modern .carousel-item img {
        height: 430px;
        object-fit: cover;
    }
    .hero-carousel-modern .carousel-item a {
        position: absolute;
        left: 22px;
        bottom: 22px;
        background: rgba(17, 24, 39, 0.72);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.18);
        font-weight: 700;
    }
    .modern-section-card {
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.06);
    }
    .featurs-item.modern-feature {
        border-radius: 22px;
        background: linear-gradient(180deg, #ffffff 0%, #fffaf5 100%);
        border: 1px solid #f8e7d5;
        transition: transform .18s ease, box-shadow .18s ease;
        box-shadow: 0 16px 32px rgba(15, 23, 42, 0.06);
    }
    .featurs-item.modern-feature:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 36px rgba(249, 115, 22, 0.12);
    }
    .featurs-item.modern-feature .featurs-icon {
        background: linear-gradient(135deg, #ff8a3d, #ffb36b) !important;
        box-shadow: 0 12px 24px rgba(249, 115, 22, 0.24);
    }
    .home-section-heading {
        display: flex;
        align-items: end;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
    }
    .home-section-heading h1,
    .home-section-heading h2 {
        margin: 0;
        color: #111827;
        font-weight: 800;
    }
    .home-section-heading p {
        margin: 8px 0 0;
        color: #6b7280;
    }
    .home-tab-pills {
        gap: 10px;
        flex-wrap: wrap;
    }
    .home-tab-pills .nav-link {
        border: 1px solid #fed7aa;
        background: #fff7ed;
        color: #9a3412;
        border-radius: 999px;
        padding: 10px 18px;
        font-weight: 700;
        transition: all .18s ease;
    }
    .home-tab-pills .nav-link.active,
    .home-tab-pills .nav-link:hover {
        background: linear-gradient(135deg, #ee4d2d, #ff8a3d);
        color: #fff;
        border-color: transparent;
        box-shadow: 0 14px 24px rgba(238, 77, 45, 0.18);
    }
    .home-product-card {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 22px;
        overflow: hidden;
        height: 100%;
        transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
    }
    .home-product-card:hover {
        transform: translateY(-5px);
        border-color: #fed7aa;
        box-shadow: 0 20px 38px rgba(249, 115, 22, 0.12);
    }
    .home-product-thumb {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, #fff7ed, #ffffff);
    }
    .home-product-thumb img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: transform .24s ease;
    }
    .home-product-card:hover .home-product-thumb img {
        transform: scale(1.04);
    }
    .home-product-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(17, 24, 39, 0.78);
        color: #fff;
        border-radius: 999px;
        padding: 7px 11px;
        font-size: 12px;
        font-weight: 700;
    }
    .home-product-body {
        padding: 18px;
    }
    .home-product-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 48px;
        margin-bottom: 10px;
        font-size: 1.02rem;
        font-weight: 800;
        color: #111827;
    }
    .home-product-desc {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 42px;
        color: #6b7280;
        margin-bottom: 14px;
    }
    .home-product-price-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px;
    }
    .home-product-price {
        color: #ee4d2d;
        font-size: 1.18rem;
        font-weight: 800;
        margin: 0;
    }
    .home-product-stock {
        font-size: 13px;
        font-weight: 700;
        color: #059669;
    }
    .home-product-actions {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 10px;
    }
    .home-product-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: #fff7ed;
        color: #ea580c;
        border: 1px solid #fed7aa;
        text-decoration: none;
        font-weight: 700;
        padding: 12px 14px;
    }
    .home-product-buy {
        border: 0;
        border-radius: 12px;
        padding: 12px 16px;
        color: #fff;
        background: linear-gradient(135deg, #ee4d2d, #ff8a3d);
        font-weight: 700;
        white-space: nowrap;
    }
    .home-strip-banner {
        background: linear-gradient(135deg, #111827 0%, #1f2937 55%, #374151 100%);
        color: #fff;
        border-radius: 26px;
        padding: 30px;
        overflow: hidden;
        position: relative;
    }
    .home-strip-banner::after {
        content: "";
        position: absolute;
        right: -40px;
        top: -40px;
        width: 220px;
        height: 220px;
        background: radial-gradient(circle, rgba(255,255,255,0.18), transparent 62%);
    }
    .home-strip-banner h3 {
        font-weight: 800;
        margin-bottom: 12px;
    }
    .home-strip-banner p {
        max-width: 540px;
        color: rgba(255,255,255,0.84);
        margin-bottom: 0;
    }
    .counter.modern-counter {
        border-radius: 22px;
        border: 1px solid #f3f4f6;
        box-shadow: 0 16px 34px rgba(15, 23, 42, 0.06);
    }
    .counter.modern-counter i {
        font-size: 1.8rem;
        margin-bottom: 16px;
    }
    .counter.modern-counter h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #374151;
    }
    .counter.modern-counter h1 {
        font-size: 2.1rem;
        font-weight: 800;
        color: #ea580c;
        margin-bottom: 0;
    }
    @media (max-width: 991px) {
        .home-section-heading {
            align-items: flex-start;
            flex-direction: column;
        }
        .hero-carousel-modern .carousel-item img {
            height: 320px;
        }
    }
</style>

<div class="home-modern-shell">
    <div class="container-fluid py-5 hero-header hero-modern">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <div class="hero-modern-copy">
                        <h4 class="text-secondary">100% Không Chất Bảo Quản</h4>
                        <h1 class="display-3">Thực phẩm tươi, giao diện hiện đại, mua hàng nhanh hơn</h1>
                        <p>Chúng tôi giữ lại cấu trúc trang chủ quen thuộc, nhưng tinh chỉnh theo hướng gọn hơn, dễ nhìn hơn và tập trung tốt hơn vào sản phẩm, giá và thao tác mua hàng.</p>
                        <div class="hero-feature-row">
                            <span class="hero-feature-pill"><i class="fa fa-truck-fast"></i> Giao nhanh</span>
                            <span class="hero-feature-pill"><i class="fa fa-shield-heart"></i> Hàng sạch</span>
                            <span class="hero-feature-pill"><i class="fa fa-bag-shopping"></i> Mua tiện hơn</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative hero-carousel-modern" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{ URL::to('fontend/images/hero-img-1.jpg') }}" class="img-fluid w-100" alt="First slide">
                                <a href="{{ url('/san-pham') }}" class="btn px-4 py-2 text-white rounded-pill">Trái Cây</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{ URL::to('fontend/images/hero-img-2.jpg') }}" class="img-fluid w-100" alt="Second slide">
                                <a href="{{ url('/san-pham') }}" class="btn px-4 py-2 text-white rounded-pill">Rau Tươi</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid featurs py-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item modern-feature text-center p-4 h-100">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Miễn Phí Vận Chuyển</h5>
                            <p class="mb-0">Cho đơn hàng trên 500.000 vnd</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item modern-feature text-center p-4 h-100">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Thanh Toán Bảo Mật</h5>
                            <p class="mb-0">Thanh toán bảo mật 100%</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item modern-feature text-center p-4 h-100">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Trả Hàng Trong 30 Ngày</h5>
                            <p class="mb-0">Đảm bảo hoàn tiền trong 30 ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item modern-feature text-center p-4 h-100">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Hỗ Trợ 24/7</h5>
                            <p class="mb-0">Hỗ trợ mọi lúc & nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fruite py-5">
        <div class="container py-4">
            <div class="modern-section-card p-4 p-lg-5">
                <div class="home-section-heading">
                    <div>
                        <h1>Sản Phẩm Của Cửa Hàng</h1>
                        <p>Giữ nguyên khu vực sản phẩm chính, nhưng làm rõ hơn cách phân loại và trình bày sản phẩm.</p>
                    </div>
                    <a href="{{ url('/san-pham') }}" class="btn btn-outline-secondary rounded-pill px-4">Xem tất cả</a>
                </div>

                <div class="tab-class">
                    <ul class="nav nav-pills home-tab-pills mb-4">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-all" type="button">Tất Cả</button>
                        </li>
                        @foreach ($categoryTabs as $category)
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-category-{{ $category->category_id }}" type="button">
                                    {{ $category->category_name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        <div id="tab-all" class="tab-pane fade show active">
                            <div class="row g-4">
                                @foreach ($all_product as $pro)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="home-product-card">
                                            <div class="home-product-thumb">
                                                <a href="{{ url('/chi-tiet-san-pham/' . $pro->product_id) }}">
                                                    <img src="{{ asset('upload/product/' . $pro->product_image) }}" alt="{{ $pro->product_name }}">
                                                </a>
                                                <span class="home-product-badge">Sản phẩm mới</span>
                                            </div>
                                            <div class="home-product-body">
                                                <div class="home-product-title">{{ $pro->product_name }}</div>
                                                <p class="home-product-desc">{{ $pro->product_content }}</p>
                                                <div class="home-product-price-row">
                                                    <p class="home-product-price">{{ number_format($pro->product_price) }}đ</p>
                                                    <span class="home-product-stock">Còn hàng</span>
                                                </div>
                                                <div class="home-product-actions">
                                                    <a href="{{ url('/chi-tiet-san-pham/' . $pro->product_id) }}" class="home-product-link">Chi tiết</a>
                                                    <form method="POST" action="{{ url('/them-gio-hang/' . $pro->product_id) }}" class="m-0">
                                                        @csrf
                                                        <button type="submit" class="home-product-buy">
                                                            <i class="fa fa-shopping-bag me-1"></i> Mua
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach ($categoryTabs as $category)
                            <div id="tab-category-{{ $category->category_id }}" class="tab-pane fade">
                                <div class="row g-4">
                                    @forelse($productsByCategory->get($category->category_id, collect()) as $pro)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="home-product-card">
                                                <div class="home-product-thumb">
                                                    <a href="{{ url('/chi-tiet-san-pham/' . $pro->product_id) }}">
                                                        <img src="{{ asset('upload/product/' . $pro->product_image) }}" alt="{{ $pro->product_name }}">
                                                    </a>
                                                    <span class="home-product-badge">{{ $category->category_name }}</span>
                                                </div>
                                                <div class="home-product-body">
                                                    <div class="home-product-title">{{ $pro->product_name }}</div>
                                                    <p class="home-product-desc">{{ $pro->product_content }}</p>
                                                    <div class="home-product-price-row">
                                                        <p class="home-product-price">{{ number_format($pro->product_price) }}đ</p>
                                                        <span class="home-product-stock">Sẵn sàng</span>
                                                    </div>
                                                    <div class="home-product-actions">
                                                        <a href="{{ url('/chi-tiet-san-pham/' . $pro->product_id) }}" class="home-product-link">Chi tiết</a>
                                                        <form method="POST" action="{{ url('/them-gio-hang/' . $pro->product_id) }}" class="m-0">
                                                            @csrf
                                                            <button type="submit" class="home-product-buy">
                                                                <i class="fa fa-shopping-bag me-1"></i> Mua
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <div class="alert alert-light border rounded-4 mb-0">
                                                Hiện chưa có sản phẩm hiển thị trong danh mục <strong>{{ $category->category_name }}</strong>.
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid py-2 pb-5">
        <div class="container">
            <div class="home-strip-banner">
                <h3>Trang chủ được giữ cấu trúc quen thuộc, chỉ làm gọn và dễ mua hơn</h3>
                <p>Phần carousel, feature, danh sách sản phẩm và thống kê vẫn còn nguyên tinh thần cũ. Điểm thay đổi chính là cách nhấn nhá, card sản phẩm, tab danh mục và độ rõ của các nút thao tác.</p>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded modern-section-card">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter modern-counter bg-white p-5 text-center">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Khách hàng hài lòng</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter modern-counter bg-white p-5 text-center">
                            <i class="fa fa-award text-secondary"></i>
                            <h4>Chất lượng dịch vụ</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter modern-counter bg-white p-5 text-center">
                            <i class="fa fa-certificate text-secondary"></i>
                            <h4>Chứng chỉ chất lượng</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter modern-counter bg-white p-5 text-center">
                            <i class="fa fa-box-open text-secondary"></i>
                            <h4>Sản phẩm sẵn có</h4>
                            <h1>{{ $all_product->count() }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
