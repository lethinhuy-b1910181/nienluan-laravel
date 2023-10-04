@extends('front.layout.app')

{{-- @section('seo_title'){{ $faq_page_item->title }}@endsection
@section('seo_meta_description'){{ $faq_page_item->meta_description }}@endsection --}}

@section('main_content')
    <div
    class="page-top"
    style="background-image: url('uploads/banner.jpg')"
    >
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Tổng quát</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content user-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        @include('company.sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <h3>Xin chào, {{ Auth::guard('company')->user()->person_name }} ({{ Auth::guard('company')->user()->company_name }})</h3>
                    <p>Số liệu thống kê:</p>

                    <div class="row box-items">
                        <div class="col-md-4">
                            <div class="box1">
                                <h4>{{ $total_opened_jobs }}</h4>
                                <p>Mẫu tin đã đăng</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box2">
                                <h4>3</h4>
                                <p>Pending Jobs</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box3">
                                <h4>{{ $total_featured_jobs }}</h4>
                                <p>Mẫu tin nổi bật</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Mẫu tin mới nhất</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Lĩnh vực</th>
                                    <th>Địa điểm</th>
                                    <th>Việc làm tốt nhất?</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($jobs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->rJobCategory->name }}</td>
                                        <td>{{ $item->rJobLocation->name }}</td>
                                        <td>
                                            @if($item->is_featured == 1)
                                            <span class="badge bg-success"
                                                >Có</span
                                            >
                                            @else 
                                            <span class="badge bg-danger"
                                            >Không</span
                                            >
                                            @endif
                                        </td>
                                        <td>
                                            
                                            <a
                                                href="{{ route('company_job_edit', $item->id) }}"
                                                class="btn btn-warning btn-sm text-white"
                                                ><i class="fas fa-edit"></i
                                            ></a>
                                            <a
                                                href="{{ route('company_job_delete', $item->id) }}"
                                                class="btn btn-danger btn-sm"
                                                onClick="return confirm('Are you sure?');"
                                                ><i class="fas fa-trash-alt"></i
                                            ></a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection