<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('company/home') ? 'active' : '' }}">
        <a href="{{ route('company_home') }}"
            >Trang cá nhân</a
        >
    </li>
    <li class="list-group-item {{ Request::is('company/make-payment') ? 'active' : '' }}">
        <a href="{{ route('company_make_payment') }}"
            >Đăng kí dịch vụ</a
        >
    </li>
    <li class="list-group-item {{ Request::is('company/orders') ? 'active' : '' }}">
        <a href="{{ route('company_orders') }}">Danh sách gói đăng kí</a>
    </li>
    <li class="list-group-item {{ Request::is('company/create-job') ? 'active' : '' }}">
        <a href="{{ route('company_job_create') }}"
            >Tạo mẫu tin mới</a
        >
    </li>
    <li class="list-group-item {{ Request::is('company/jobs') ? 'active' : '' }}">
        <a href="{{ route('company_job') }}">Danh sách tin tuyển dụng</a>
    </li>
    
    <li class="list-group-item">
        <a href="company-applications.html"
            >Danh sách ứng viên</a
        >
    </li>
    <li class="list-group-item {{ Request::is('company/edit-profile') ? 'active' : '' }}">
        <a href="{{ route('company_edit_profile') }}"
            >Cập nhật thông tin</a
        >
    </li>
    <li class="list-group-item {{ Request::is('company/photo') ? 'active' : '' }}">
        <a href="{{ route('company_photo') }}">Cập nhật hình ảnh</a>
    </li>
    <li class="list-group-item">
        <a href="company-videos.html">Cập nhật Video</a>
    </li>
    <li class="list-group-item ">
        <a href="{{ route('company_logout') }}">Đăng xuất</a>
    </li>
</ul>