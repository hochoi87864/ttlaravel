@extends('layouts.app')
@section('content')
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
							        <li class="category3"><span>Tin tức</span></li>
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
            <div class="col-sm-12 ">
                @if(isset($articles))
                    @foreach($articles as $article)
                    <div class="article" style="display:flex; padding:10px 0; margin: 10px 0; border-bottom: 1px solid #f2f2f2">
                        <div class="article_avatar">
                            <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}"><img style="width:240px;height:180px;" src="{{asset('upload/a_avatar/'.$article->a_avatar)}}"/></a>
                        </div>
                        <div class="article_info" style="width:80%;margin-left:20px">
                            <h5><a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">{{$article->a_name}}</a></h5>
                            <p>{{$article->a_description}}</p>
                            <p>Lê Tiến Trung - <span><i class="fa fa-clock-o"></i> {{$article->created_at}}</span></p>
                        </div>
                    </div>
                    @endforeach
                @endif
                {{$articles->links()}}
            </div>
        </div>
    </div>
</div>
@endsection