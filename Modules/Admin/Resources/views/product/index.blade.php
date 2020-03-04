@extends('admin::layouts.master')
@section('content')
<style>
    .rating .active{
      color: #ff9705 !important;
    }
</style>
<div class="container-fluid">
  <div class="page-header">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
    </ol>
</div>
<!-- Page Heading -->
{{-- <h1 class="h3 mb-2 text-gray-800">Quản lý Sản phẩm</h1> --}}
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Quản lý sản phẩm</h6>
  </div>
  <div class="card-body">
      {{-- <form class=" form-inline" style="justify-content: center;" action="">
      <div class="form-group">
            <select name="cate" class="form-control">
            <option value=''>Tất cả</option>
              @if($categories)
                @foreach($categories as $category)
                   <option value="{{$category->id}}" {{\Request::get('cate') == $category->id?"selected":""}}>{{$category->c_name}}</option>
                @endforeach
              @endif
            </select>
          </div>
            <div class="input-group col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Search for..." value="{{\Request::get('name')}}">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>   
      </form> --}}
    <div class="table-responsive mt-3">
      @if(\Session::has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thành công! </strong> {{\Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(\Session::has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Thất bại! </strong> {{\Session::get('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		  @endif
      <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th style="width:30%;">Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Avatar</th>
            <th>Trạng thái</th>
            <th>Nổi bật</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>#</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Avatar</th>
            <th>Trạng thái</th>
            <th>Nổi bật</th>
            <th>Thao tác</th>
          </tr>
        </tfoot>
        <tbody>
          @if(isset($products))
            @foreach($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>
                {{$product->pro_name}}
                <ul style="padding:0px">
                  <li><span>Số lượng: {{$product->pro_number}}</span></li>
                  <li><span>{{number_format($product->pro_price,0,',','.')}} VNĐ</span></li>
                  <li><span>Giảm giá({{$product->pro_sale}}%)</span></li>
                  <li>
                    <?php
                      $point= 0;
                      if($product->pro_total_rating>0){
                        $point= round($product->pro_total_number/$product->pro_total_rating);
                      }
                      ?>
                    <span>Đánh giá : </span>
                    <span class="rating">
                      @for($i=1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i<=$point ? 'active':''}}" style="color:#999"></i>
                      @endfor
                    </span>
                    <span>{{$point}} sao</span>
                  </li>
                </ul>
                </td>
                <td>{{isset($product->category->c_name)?$product->category->c_name:'[N\A]'}}</td>
                <td><img style="width:80px;height:80px" src="{{asset('upload/pro_avatar/'.$product->pro_avatar)}}" alt="No Avatar"/></td>
                <td><a href="{{route('admin.get.acion.product',['active',$product->id])}}"><span class="{{$product->getStatus($product->pro_active)['class']}}">{{$product->getStatus($product->pro_active)['name']}}</span></a></td>
                <td><a href="{{route('admin.get.acion.product',['hot',$product->id])}}"><span class="{{$product->getHot($product->pro_hot)['class']}}">{{$product->getHot($product->pro_hot)['name']}}</span></a></td>
                <td>
                  <a href="{{route('admin.get.edit.product',$product->id)}}" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a> 
                  <a href="{{route('admin.get.acion.product',['delete',$product->id])}}" class="btn btn-danger btn-circle sweet_delete"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
@section('script')
  <script>
    $(document).ready( function () {
    $('#dataTable').DataTable({
      "order": [[ 0, "desc" ]]
    });
  });
  </script>
  <script>
    $(document).ready( function () {
      $(".sweet_delete").click(function(event){
        var url = $(this).attr('href');
        console.log(url);
        event.preventDefault();
        swal({
          title: "Bạn muốn xóa sản phẩm này chứ ?",
          text: "Điều này sẽ ảnh hưởng đến một số dữ liệu liên quan như đánh giá, đơn hàng...!! Nếu thực sự không cần thiết để xóa sản phẩm này bạn có thể đổi trạng thái hoạt động của sản phẩm thành private !!!",
          type: "warning",
          showCancelButton: true,
          cancelButtonClass: 'btn-success',
          cancelButtonText: "Thôi không xóa đâu !",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Tôi vẫn muốn Xóa !",
          closeOnConfirm: false
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = url;
            swal("Đã xóa!", "Xóa thành công rồi nhé.", "success");
          }
        });
      });
    });
  </script>
@endsection