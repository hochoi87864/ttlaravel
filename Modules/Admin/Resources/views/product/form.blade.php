<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="pro_name"  value="{{old('pro_name',isset($product->pro_name)?$product->pro_name:'')}}" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="name">Mô tả:</label>
            <textarea name="pro_description" id="" class="form-control" cols="30" rows="3" placeholder="Mô tả sản phẩm">{{old('pro_description',isset($product->pro_description)?$product->pro_description:'')}}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Nội dung:</label>
            <textarea name="pro_content" id="ckeditor" class="form-control" cols="30" rows="3" placeholder="Nội dung">{{old('pro_content',isset($product->pro_content)?$product->pro_content:'')}}</textarea>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name">Loại sản phẩm:</label>
            <select name="pro_category_id" id="" class="form-control">
                <option value>---Chọn loại sản phẩm---</option>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                        {{old('pro_category_id',isset($product->pro_category_id)?$product->pro_category_id:'')==$category->id?"selected='selected'":""}}
                        >{{$category->c_name
                         }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="name">Giá sản phẩm:</label>
            <input type="number" class="form-control" name="pro_price" 
            value="{{old('pro_price',isset($product->pro_price)?$product->pro_price:0)}}"  
            placeholder="Giá sản phẩm">
        </div>
        <div class="form-group">
            <label for="name">Số lượng:</label>
            <input type="number" class="form-control" name="pro_number" 
            value="{{old('pro_number',isset($product->pro_number)?$product->pro_number:0)}}"  
            placeholder="Số lượng sản phẩm">
        </div>
        <div class="form-group">
            <label for="name">% Khuyến mại:</label>
            <input type="number" class="form-control" name="pro_sale" placeholder="% Giảm giá" 
            value="{{old('pro_price',isset($product->pro_sale)?$product->pro_sale:'0')}}">
        </div>
        <div class="form-group">
            <label for="name">Avatar:</label><br/>
            @if(isset($product->pro_avatar))
                <img  id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('upload/pro_avatar/'.$product->pro_avatar)}}"/>
            @else
                <img id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('unnamed.jpg')}}"/>
            @endif
            <input type="file" id="img_input" name="pro_avatar" class="form-control">
        </div>
        {{-- <div class="checkbox">
            <label><input type="checkbox" name="hot"> Nổi bật</label>
        </div> --}}
    </div>
    <button type="submit" class="btn btn-success ml-3">Lưu thông tin</button>
</div>
@section('script')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
@endsection

