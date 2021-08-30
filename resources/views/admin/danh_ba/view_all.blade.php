@extends('admin.layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản Lý Danh Bạ
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Số máy</th>
                        <th>Đối tượng sử dụng</th>
                        <th>Hệ máy</th>
                        <th>Trạm BTS</th>
                        <th>Đối số ở trạm</th>
                        <th>Đối số hộp cáp</th>
                        <th>Ghi chú</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($danh_ba as $danh_ba)
                    {{-- expr --}}
                    <tr class="odd gradeX" align="center">
                        <td>{{$danh_ba->ma}}</td>
                        <td>{{$danh_ba->so_may}}</td>
                        <td>{{$danh_ba->doi_tuong}}</td>
                        <td>{{$danh_ba->he_may}}</td>
                        <td>{{$danh_ba->tram_bts}}</td>
                        <td>{{$danh_ba->doi_so_tram}}</td>
                        <td>{{$danh_ba->doi_so_hop}}</td>
                        <td>{{$danh_ba->ghi_chu}}</td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a href="view_update/{{$danh_ba->ma}}">Sửa</a>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a href="delete/{{$danh_ba->ma}}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection