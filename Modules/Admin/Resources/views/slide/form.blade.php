<div class="form-group">
        <label for="name">Tên Slide:</label>
        <input type="text" class="form-control" name="s_name"  value="{{old('s_name',isset($slide->s_name)?$slide->s_name:'')}}" placeholder="Nhập tên slide...">
</div>
<div class="form-group">
    <label for="name">Url:</label>
    <input type="text" class="form-control" name="s_url"  value="{{old('s_url',isset($slide->s_url)?$slide->s_url:'')}}" placeholder="Nhập đường dẫn...">
</div>
<div class="form-group">
        <label for="name">Ảnh:</label><br/>
        @if(isset($slide->s_avatar))
            <img  id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('upload/s_avatar/'.$slide->s_avatar)}}"/>
        @else
            <img id="img_output" style="width:240px;height:180px; margin-bottom:10px" src="{{asset('unnamed.jpg')}}"/>
        @endif
        <input type="file" id="img_input" name="s_avatar" class="form-control">
</div>

{{-- <div class="checkbox">
    @if(isset($slide))
        <label><input type="checkbox" name="s_active" {{($slide->s_active==1)?'checked':''}}> Hoạt dộng</label>
    @else
        <label><input type="checkbox" name="s_active"> Hoạt dộng</label>
    @endif
</div> --}}
