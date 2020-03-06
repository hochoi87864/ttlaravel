<div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input type="text" class="form-control" name="name"  value="{{old('name',isset($category->c_name)?$category->c_name:'')}}" placeholder="Nhập tên danh mục...">
    </div>
    {{-- <div class="form-group">
        <label for="name">Icon:</label>
        <input type="text" class="form-control" name="icon"  value="{{old('icon',isset($category->c_icon)?$category->c_icon:'')}}" placeholder="fa fa-home">
    </div> --}}
    <div class="checkbox">
        {{-- <label><input type="checkbox" name="hot"> Nổi bật</label> --}}
 </div>
