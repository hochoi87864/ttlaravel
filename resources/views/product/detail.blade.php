@extends('layouts.app') @section('content')
<style>
    .product-tab-content {
        overflow: hidden;
    }
    
    .product-tab-content img {
        margin: 0px auto;
        text-align: center;
        display: block;
        max-width: 100%;
    }
    .list_start i:hover{
        cursor: pointer;
    }
    .list_text{
        
        display: inline-block;
        margin-left: 10px;
        position: relative;
        background: #52b858;
        color: #fff;
        padding: 2px 8px;
        box-sizing: border-box;
        font-size: 12px;
        border-radius: 2px;
        display: none;
    }
    .list_text::after{
        right: 100%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(82,184,88,0);
        border-right-color: #52b858;
        border-width: 6px;
        margin-top: -6px;
    }
    .list_start .rating_active,.pro-rating .active{
        color:#ff9705 !important;
    }
    .content_product_description{
        overflow: hidden;
    }
    .content_product_description img{
        width: 50%;
    }

</style>
<!-- breadcrumbs area start -->
@if (count($errors)>0)
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">
                            {{$err}}<br/>
                        </div>
                    @endforeach
                    @endif  
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
                        <li class="home">
                        <a href="{{route('get.list.product',[$productDetail->categoryc_slug,$productDetail->category->id])}}">{{$productDetail->category->c_name}}</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>{{$productDetail->pro_name}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- product-details Area Start -->
<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="zoomWrapper">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
						<img id="zoom1" style="width:450px;height:450px" src="{{asset('upload/pro_avatar/'.$productDetail->pro_avatar)}}" data-zoom-image="{{asset('upload/pro_avatar/'.$productDetail->pro_avatar)}}" alt="big-1">
						</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="product-content">
                            <h1 class="product-name"><a href="#">{{$productDetail->pro_name}}</a></h1>
                            <div class="rating-price">
                                <?php
                                    $point= 0;
                                    if($productDetail->pro_total_rating>0){
                                        $point= round($productDetail->pro_total_number/$productDetail->pro_total_rating);
                                    }
                                    ?>
                                <div class="pro-rating">
                                    @for($i=1; $i <= 5; $i++)
                                        <i class="fa fa-star {{ $i<=$point ? 'active':''}}" style="color:#999"></i>
                                    @endfor
                                </div>
                                <div class="price-boxes">
                                    @if($productDetail->pro_sale>0)
                                        <span class="new-price"><strike>{{number_format($productDetail->pro_price,0,',','.')}} VNĐ</strike></span><br/>
                                Giảm giá {{$productDetail->pro_sale}}% chỉ còn: <span class="new-price">{{number_format($productDetail->pro_price*(100 - $productDetail->pro_sale)/100,0,',','.')}} VNĐ</span>
                                    @else
                                        <span class="new-price">{{number_format($productDetail->pro_price,0,',','.')}} VNĐ</span>
                                    @endif
                                    {{-- <span class="new-price">{{number_format($productDetail->pro_price,0,',','.')}} VNĐ</span> --}}
                                </div>
                            </div>
                            <div class="product-desc">
                                <p>{{$productDetail->pro_description}}</p>
                            </div>
                            <p class="availability in-stock">Trạng thái:
                                @if($productDetail->pro_number>0)
                                    <span>Còn hàng</span>
                                @else
                                    <span>Hêt hàng</span>
                                @endif
                            </p>
                            <div class="actions-e">
                                <div class="action-buttons-single">
                                    {{-- <div class="inputx-content">
                                        <label for="qty">Quantity:</label>
                                        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                    </div> --}}
                                    <div class="add-to-cart">
                                    <a href="{{route('add.shopping.cart',[$productDetail->id])}}" class="add_product_to_cart" data-pro_id ="{{$productDetail->id}}" data-pro_name="{{$productDetail->pro_name}}" >Thêm vào ví</a>
                                    </div>
                                    <div class="add-to-links">
                                        <div class="add-to-wishlist">
                                            <a href="{{route('get.favorite.product',$productDetail->id)}}" class="add_product_to_favorite_list" data-pro_id ="{{$productDetail->id}}" data-pro_name="{{$productDetail->pro_name}}" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                        {{-- <div class="compare-button">
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="single-product-tab">
                <!-- Nav tabs -->
                <ul class="details-tab">
                    <li class="active"><a href="#home" data-toggle="tab" style="font-weight: bold;">Mô tả</a></li>
                    <li class=""><a href="#messages" data-toggle="tab" style="font-weight: bold;"> Đánh giá ({{$productDetail->Rating->count()}} Lượt)</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="product-tab-content" style="overflow: hidden">
                            <p>{!!$productDetail->pro_content!!}</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="component_rating" style="padding-left:25px; margin-bottom:20px">
                            <h3>Đánh giá sản phẩm</h3>
                            <div class="component_rating_content" style="display:flex; align-items: center; border-radius:5px; border:1px solid #dedede">
                                {{-- /// --}}
                                <div class="rating_item" style="width:20%;position:relative">
                                    <span class="fa fa-star" style="font-size:100px;color:#ff9705;margin:0 auto; text-align:center;display:block"></span>
                                <b style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%); color:white;font-size:25px">
                                @if($productDetail->pro_total_rating>0)
                                    {{Round($productDetail->pro_total_number/$productDetail->pro_total_rating,1)}}
                                @else
                                    
                                @endif
                                </b>
                                </div>
                                <div class="list_rating" style="width:60%;padding:20px">
                                        @for($i=5;$i>=1;$i--) 
                                        <div class="item_rating" style="display:flex; align-items: center;">
                                            <div style="width:10%;font-size:14px">
                                                {{$i}}<span class="fa fa-star"></span>
                                            </div>
                                            <div style="width:60%;margin:0 20px">
                                            @foreach($eachstar as $key => $value)
                                                @if($key == $i)
                                                    @if($productDetail->pro_total_number>0)
                                                        <span style="width:100%;height:8px;display:block;border: 1px solid #dedede;border-radius:5px;background-color:#dedede"><b style="width:{{($key*$value/$productDetail->pro_total_number)*100}}%;background-color:#f25800;display:block;height:100%;border-radius:5px;"></b></span>
                                                    @else
                                                        <span style="width:100%;height:8px;display:block;border: 1px solid #dedede;border-radius:5px;background-color:#dedede"><b style="width:0%;background-color:#f25800;display:block;height:100%;border-radius:5px;"></b></span>
                                                    @endif
                                                @endif
                                            @endforeach
                                            </div>
                                            <div style="width:30%">
                                               @foreach($eachstar as $key => $value)
                                                   @if($key == $i)
                                                        @if($productDetail->pro_total_number>0)
                                                            <a href="#">{{$value}} đánh giá({{round(($key*$value/$productDetail->pro_total_number)*100,2)}}%)</a>
                                                        @else
                                                            <a href="#">{{$value}} đánh giá</a>
                                                        @endif
                                                   @endif
                                               @endforeach
                                            </div>
                                        </div> 
                                        @endfor  
                                </div> 
                                <div style="width:20%">
                                    @if(Auth::check())
                                        <a href="#" class="btn btn-primary js_rating_action"> Gửi đánh giá của bạn </a>
                                    @else
                                <div style="text-align: center"><b>Để đánh giá sản phẩm bạn cần</b> <a href="{{route('get.login')}}" class="btn btn-primary"> Đăng nhập </a></div>
                                    @endif
                                </div>
                                {{-- /// --}}
                        </div>
                            {{-- ----- --}}
                                <div class="form_rating hide">
                                    <div style="display: flex; margin-top:20px">
                                        <p style="margin-bottom:0px" >Chọn đánh giá của bạn:</p>
                                        <span style="margin: 0 15px;" class="list_start">
                                            @for($i=1; $i <=5; $i++)
                                                <i class="fa fa-star" data-key="{{$i}}"></i>
                                            @endfor
                                        </span>
                                        <span class="list_text">Tốt</span>
                                        <input type="hidden" value="" class="number_rating"/>
                                    </div>
                                    <div style="margin-top:15px">
                                        <textarea class="form-control" cols="30" rows="3" id="ra_content"></textarea>
                                    </div>
                                    <div style="margin-top:15px">
                                    <a href="{{route('post.rating.product',$productDetail->id)}}" class="btn btn-primary js_rating_product">Gửi đánh giá</a>
                                    </div>
                                </div>
                            {{-- ----- --}}
                    </div>
                           
                     {{-- show đánh giá --}}
                     <div class="component_list_rating" style="margintop:30px;padding-left:25px ">
                        @if(isset($ratings))
                        @foreach($ratings as $rating)
                            <div class="rating_item" style="margintop:10px;">
                                <div class="pro-rating">
                                    <span><b>{{$rating->User->name}}</b></span> -
                                    @for($i=1; $i <= 5; $i++)
                                    <i class="fa fa-star {{$i<=$rating->ra_number?'active':''}}"></i>
                                     @endfor
                                    <a href="#" style="color:#1cc88a"><i class="fa fa-check-circle-o"></i> Đã đánh giá</a>
                                </div>
                                <p style="margin-top:10px">
                                    <span>
                                        {{$rating->ra_content}}
                                    </span>
                                </p>
                                <div>
                                <span><i class="fa fa-clock-o"></i>{{$rating->created_at}}</span>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                        @endif
                    </div>
                    {{-- end show đánh giá --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-details Area end -->
@endsection
@section('script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        listRatingText = {
            1 : 'Không thích',
            2 : 'Tạm được',
            3 : 'Bình thường',
            4 : 'Tốt',
            5 : 'Tuyệt vời quá',
                };
            $(".list_start .fa").mouseover(function(){
            let $this =$(this);
            let number =$this.attr("data-key");
            $(".list_start .fa").removeClass('rating_active');
            $(".number_rating").val(number);
            $.each($(".list_start .fa"),function(key,value){
                if(key+1<=number){
                    $(this).addClass('rating_active')
                }
            });
            $(".list_text").text('').text(listRatingText[$this.attr("data-key")]).show();
            console.log($this.attr("data-key"));
        });
        $(".js_rating_action").click(function(event){
            event.preventDefault();
            if($(".form_rating").hasClass('hide')){
                $(".form_rating").addClass('active').removeClass('hide');
                $(".js_rating_action").text("").text("Hủy đánh giá");
            }
            else{
                $(".form_rating").addClass('hide').removeClass('active');
                $(".js_rating_action").text("").text("Gửi đánh giá của bạn");
            }
        });
        $(".js_rating_product").click(function(even){
            even.preventDefault();
            let content= $("#ra_content").val();
            let number = $(".number_rating").val();
            if(!number){
                alert('Không chọn sao à bạn ơi ???');
            }
            let url = $(this).attr('href');
            if(content && number){
                $.ajax({
                    url : url,
                    type : 'POST',
                    data :{
                        number: number,
                        content:content
                    }
                }).done(function(result){
                    if(result.code == 1){
                        alert("Gửi đánh giá thành công !!!");
                        location.reload();
                    }
                });
            }
        });
    </script>
    <script>
        $(function(){
            $(".add_product_to_cart").click(function(event){
                var pro_id = $(this).attr('data-pro_id');
                var url1 = $(this).attr('href');
                var name = $(this).attr('data-pro_name');
                console.log(url1);
                event.preventDefault();
                $.ajax({
                    method: "GET",
                    url :url1,
                    data : {id: pro_id}
                }).done(function(result){
                    if(result.success == 1 ){
                        swal("Thành công !", "Bạn đã thêm "+name+" vào giỏ hàng !!", "success");
                        $(".cart-quantity").text(result.cart_count);
                    }
                    else if(result.success == 0){
							swal("Không đủ số lượng hàng !", "Chỉ còn "+result.pro_number_in_stock+" sản phẩm "+name+" trong kho hàng !", "warning");
						}
                    else{
                        alert('lỗi r');
                    }
                });
            });		
        });
    </script>
    <script>
        $(function(){
            $(".add_product_to_favorite_list").click(function(event){
                event.preventDefault();
                var pro_id = $(this).attr('data-pro_id');
                var url1 = $(this).attr('href');
                var name = $(this).attr('data-pro_name');
                $.ajax({
                    method: "GET",
                    url :url1,
                    data : {id: pro_id}
                }).done(function(result){
                    if(result.error) {
                        window.location.href = 'dang-nhap'
                    }
                    else {
                        if(result.success==1){
                            swal("Thành công !", "Bạn đã thêm "+name+" vào danh sách yêu thích của bạn !!", "success");
                        }
                        else{
                            swal("Đã tồn tại !", "Sản phẩm "+name+" đã có trong danh sách yêu thích của bạn !!", "warning");
                        }
                    }
                });
            });
        });
    </script>
@endsection