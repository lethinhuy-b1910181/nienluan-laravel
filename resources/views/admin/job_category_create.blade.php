@extends('admin.layout.app')

@section('heading','Thêm Ngành Nghề Mới')

@section('button')
<div>
    <a href="{{ route('admin_job_category') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem tất cả</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_job_category_store') }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Tên ngành nghề</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group mb-3">
                            <label>Icon</label>
                            <input type="text" class="form-control " name="icon" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection