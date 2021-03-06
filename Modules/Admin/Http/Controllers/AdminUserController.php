<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::whereRaw(1);
        $users = $users->orderBy('id','DESC')->paginate(10);
        $viewData = [
            'users'=>$users
        ];
        return view('admin::user.index',$viewData);
    }
    public function create(){
        return view('admin::user.create');
    }
    public function store(RequestUser $request){
        $this->insertOrUpdate($request);
        return redirect()->route('admin.get.list.user')->with('success',"Thêm thành viên thành công");
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin::user.create',compact('user'));
    }
    public function update(RequestUser $request, $id){
        $this->insertOrUpdate($request, $id);
        return redirect()->route('admin.get.list.user')->with('success',"Cập nhật thành viên thành công");
    }
    public function insertOrUpdate(RequestUser $request,$id=''){
        $user = new User();
        if($id) $user = User::find($id);
        $user->name= $request->name;
        $user->email= $request->email ;
        $user->phone = $request->phone;
        $user->role = 0;
        $user->save();
    }
    public function action(Request $request,$action,$id){
        if($action){
            $user = User::find($id);
            switch ($action) {
                case 'delete':
                    if($user->id==1) return redirect()->route('admin.get.list.user')->with('error',"Không được xóa Trung vì Trung nắm quyền cao nhất");
                    $user->delete();
                    return redirect()->route('admin.get.list.user')->with('success',"Xóa thành viên thành công");
                    break;
                case 'changerole':
                    if($user->id==1) return redirect()->route('admin.get.list.user')->with('error',"Không được xóa Trung vì Trung nắm quyền cao nhất");
                    $user->role= $user->role==1?0:1;
                    $user->save();
                break;
            }
        }
        return redirect()->back();
    }
    public function getchangePassword($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('admin::user.changepassword',$data);
    }
    public function changePassword(Request $request,$id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->new_password);
        $user->save();
        return redirect()->route('admin.get.list.user')->with("changePassword","Thay đổi mật khẩu tài khoản ".$user->email." thành công !!!");
    }
}
