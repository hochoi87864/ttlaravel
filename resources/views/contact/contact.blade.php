@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                        <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Liên hệ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width:80%;margin:0 auto; margin-top:50px">
    <div class="panel panel-default">            
        <div class="panel-heading" style="background-color:#337AB7; color:white;" >
            <h2 style="margin-top:0px; margin-bottom:0px;">
                <span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
            </h2>
        </div>

        <div class="panel-body">
            <!-- item -->
            <h3>
            
            <div class="break"></div>
               <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
            <p>238 Hoàng Quốc Việt, Cổ Nhuế, Cầu Giấy, Hà Nội</p>

            <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
            <p>trungle87864@gmail.com </p>

            <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
            <p> 0942674663 </p>



            <br><br>
            <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
            <div class="break"></div><br>
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7477.312474778786!2d106.37590002281655!3d20.43822289876026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135fb10659a536b%3A0x909dfa60811d109e!2zVUJORCB4w6MgVsWpIEzhuqFj!5e0!3m2!1svi!2s!4v1569123628138!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14894.63040185405!2d105.7834509!3d21.046382!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1583290267979!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection