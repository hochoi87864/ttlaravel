@extends('admin::layouts.master')
@section('content')
<h3><center>Đổi mật khẩu {{$user->email}}</center></h3>
<form action="{{route('admin.post.change.password',$user->id)}}" method="POST" class="col-6 mx-auto">
    @csrf
    <div class="form-group">
        Mật khẩu mới:
        <input type="password" required minlength="5" class="form-control" name="new_password"/>
    </div>
    <input type="submit" class="btn btn-success ml-2" value="Đổi mật khẩu">
</form>
@endsection