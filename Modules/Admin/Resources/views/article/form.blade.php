
        <div class="form-group">
            <label for="name">Tên bài viết:</label>
            <input type="text" class="form-control" name="a_name"  value="{{old('a_name',isset($article->a_name)?$article->a_name:'')}}" placeholder="Tên bài viết">
        </div>
        <div class="form-group">
            <label for="name">Mô tả:</label>
            <textarea name="a_description" id="" class="form-control" cols="30" rows="3" placeholder="Mô tả sản phẩm">{{old('a_description',isset($article->a_description)?$article->a_description:'')}}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Nội dung:</label>
            <textarea name="a_content" id="ckeditor" class="form-control" cols="30" rows="3" placeholder="Nội dung">{{old('a_content',isset($article->a_content)?$article->a_content:'')}}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Avatar:</label><br/>
            @if(isset($article->a_avatar))
                <img  id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('upload/a_avatar/'.$article->a_avatar)}}"/>
            @else
                <img id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('unnamed.jpg')}}"/>
            @endif
            <input type="file" id="img_input" name="a_avatar" class="form-control">
        </div>
<button type="submit" class="btn btn-success ml-3">Lưu thông tin</button>
@section('script')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
@endsection
