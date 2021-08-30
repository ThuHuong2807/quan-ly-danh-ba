@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản Lý Danh Bạ
                    <small>Edit</small>
                </h1>
            </div>


            <div class="col-lg-7" style="padding-bottom:120px">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
    
                @if (session('thong_bao'))
                    <div class="alert alert-success">
                        {{session('thong_bao')}}
                    </div>
                @endif


            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Số máy</label>
                        <input class="form-control" name="so_may" value="{{$danh_ba->so_may}}" />
                    </div>
                    <div class="form-group">
                        <label>Đối tượng sử dụng</label>
                        <input class="form-control" name="doi_tuong" value="{{$danh_ba->doi_tuong}}" />
                    </div>
                    <div class="form-group">
                        <label>Hệ máy</label>
                        <input class="form-control" name="he_may" value="{{$danh_ba->he_may}}" />
                    </div>
                    <div class="form-group">
                        <label>Trạm BTS</label>
                        <input class="form-control" name="tram_bts" value="{{$danh_ba->tram_bts}}" />
                    </div>
                    <div class="form-group">
                        <label>Đối số ở trạm</label>
                        <input class="form-control" name="doi_so_tram" value="{{$danh_ba->doi_so_tram}}" />
                    </div>
                    <div class="form-group">
                        <label>Đối số hộp cáp</label>
                        <input class="form-control" name="doi_so_hop" value="{{$danh_ba->doi_so_hop}}" />
                    </div>
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" rows="3" name="ghi_chu">{{ $danh_ba->ghi_chu }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Hủy</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection