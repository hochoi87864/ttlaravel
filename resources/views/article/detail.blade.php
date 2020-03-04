@extends('layouts.app')
@section('content')
<style>
    .article_content h1, h2, h3, h4, h5{
        font-size:16px;
    }
	.article_content img{
		position: relative;
		left: 50%;
		transform: translateX(-50%);
	}
</style>
<!-- breadcrumbs area start -->
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
								<a href="{{route('get.list.article')}}">Tin tức</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>{{$article->a_name}}</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- breadcrumbs area end -->
<div class="main-article-area">
    <div class= "container">
        <div class="row">
            <div class="col-sm-8" style="margin-top:20px" style="border-right: 1px solid #black">
                <h3 style="font-size:26px">{{$article->a_name}}</h3>
               <p>Tác giả -<span>{{$article->a_created_at}}</span></p> 
               <hr/>
               <p><i>{{$article->a_description}}</i></p>
                <img style="margin-bottom:30px;position: relative;left: 50%;transform: translateX(-50%);" src="{{asset('upload/a_avatar/'.$article->a_avatar)}}"/>
               <div class="article_content">{!!$article->a_content!!}</div>
               <hr/>
            </div>
            <div class="col-sm-4">
				<div style="text-align: center; font-weight: bold; font-size: 18px;margin-top:122px;padding-left:26px">Tin tức khác</div>
				@foreach($articles as $article1)
					<div class="row" style="display:flex;padding-left:50px;display: flex;margin-top: 25px;">
						<div style="width:40%"><a href="{{route('get.detail.article',[$article1->a_slug,$article1->id])}}"><img style="min-width: 126px;max-width: 125px;height: 100px;max-height: 100px;" src="{{asset('upload/a_avatar/'.$article1->a_avatar)}}"/></a></div>
						<div style="width:60%"> <a href="{{route('get.detail.article',[$article1->a_slug,$article1->id])}}">➤ {{$article1->a_name}}</a></div>
					</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
@endsection