
        <div class="form-group">
            <label for="name">Tên người dùng:</label>
            <input type="text" class="form-control" name="name"
            value="{{old('name',isset($user->name)?$user->name:'')}}"
              placeholder="Tên người dùng">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" class="form-control" name="email" value="{{old('email',isset($user->email)?$user->email:'')}}"  placeholder="Email">
        </div>
        <div class="form-group">
            <label for="name">Phone:</label>
            <input type="text" class="form-control" name="phone" value="{{old('phone',isset($user->phone)?$user->phone:'')}}"  placeholder="Phone">
        </div>
<button type="submit" class="btn btn-success ml-3">Lưu thông tin</button>
