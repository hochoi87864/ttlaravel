@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
        </ol>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary" style="text-align:center; font-size:26px">Thống kê - Báo cáo</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div>
            <form class="form-inline col-sm-12" style="margin: 0 auto" action="{{route('admin.get.list.statistical')}}">
            <div class="form-group">
                <label>Ngày bắt đầu: &nbsp</label>
                <input type="datetime-local" value="02/27/2020 00:00:00" name="statistical_date_start" required id="statistical_date_start" class="form-control mr-4"/>
            </div>
            <a href="{{route('admin.get.list.statistical')}}" value="Thống kê" class="btn btn-primary ml-5 mr-5" id="button_statistical">Thống kê</a>
            <div class="form-group">
                <label>Ngày kết thúc: &nbsp</label>
                <input type="datetime-local" value="02/27/2020 23:59:59" name="statistical_date_end" required id="statistical_date_end" class="form-control ml-4"/>
            </div>
            {{-- <input type="submit" value="Xuất pdf" class="btn btn-success" style=""/> --}}
            </form>
            <hr/>
            <a href="#" class="btn btn-success mb-2" id="export_pdf" style="float:right;display:none">Xuất báo cáo</a>
            <div style="clear: both"></div>
            <div id="list_render_statistical">Không có dữ liệu !!!</div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    $(function(){
      $("#button_statistical").click(function(event){
        event.preventDefault();
        var statistical_date_start = $("#statistical_date_start").val();
        var statistical_date_end = $("#statistical_date_end").val();
        var form = $(this).parents("form:first");
        var url = form.attr("action");
        console.log(statistical_date_start);
        console.log(statistical_date_end);
        if(statistical_date_start === statistical_date_end){
          if(statistical_date_start == '' || statistical_date_end == ''){
            swal("Nhập dữ liệu sai!", "Kiểm tra lại dữ liệu nhập có đầy đủ hay không!", "warning");
          }
          else{
            swal("Nhập dữ liệu sai!", "Ngày bắt đầu và ngày kết thúc cùng 1 thời điểm!", "error");
          }
        }
        else if(statistical_date_start > statistical_date_end){
          swal("Nhập dữ liệu sai!", "Ngày bắt đầu không thể trước ngày kết thúc!", "error");
        }
        else if(statistical_date_start < statistical_date_end){
        $.ajax({
          type : "GET",
          url : url,
          data : {
            statistical_date_start : statistical_date_start,
            statistical_date_end   : statistical_date_end
          }
        }).done(function(result){

          $("#list_render_statistical").html('').append(result);
          $("#export_pdf").css({'display':''})

        });              
      }
      else{
        console.log("Giá trị nhập sai kiểm tra lại");
      }
      });
      $("#export_pdf").click(function(event){
        event.preventDefault();
        var statistical_date_start_pdf = $("#data-statistical-date-start").attr('data-statistical-date-start');
        var statistical_date_end_pdf = $("#data-statistical-date-end").attr('data-statistical-date-end');
        var url = "{{route('admin.get.statistical.pdf')}}";
        window.location.href = url+'?statistical_date_start_pdf='+statistical_date_start_pdf+'&&'+'statistical_date_end_pdf='+statistical_date_end_pdf;
        // $.ajax({
        //   type: "GET",
        //   url : url,
        //   data : {
        //     statistical_date_start_pdf : statistical_date_start_pdf,
        //     statistical_date_end_pdf : statistical_date_end_pdf
        //   }
        // }).done(function(result){
        // });
      });
    });
  </script>
@endsection