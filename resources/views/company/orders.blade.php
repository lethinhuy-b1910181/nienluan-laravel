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
                    <h2>Make Payment</h2>
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>SL</th>
                                    <th>Order No</th>
                                    <th>Plan Name</th>
                                    <th>Price</th>
                                    <th>Order Date</th>
                                    <th>Expire Date</th>
                                    <th>Payment Method</th>
                                </tr>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->order_no }}</td>
                                        <td>
                                            {{ $item->rPackage->package_name }}<br>
                                            @if ($item->currently_active == 1)
                                                <span class="badge bg-success"
                                                >Active</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->paid_amout }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->expire_date }}</td>
                                        <td>{{ $item->payment_method }}</td>
                                        
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