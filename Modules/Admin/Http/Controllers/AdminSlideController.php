<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminSlideController extends Controller
{
    public function index(){
        $slides = Slide::all();
        $viewData = [
            'slides'=>$slides
        ];
        return view("admin::slide.index",$viewData);
    }
    public function create(){
        return view("admin::slide.create");
    }
    public function store(Request $request){
        // dd($request->all());
        $this->insertOrUpdate($request);
        return redirect()->route('admin.get.list.slide')->with('success','Thêm Slide thành công');
    }
    public function edit($id){
        $slide = Slide::find($id);
        return view("admin::slide.update",compact('slide'));
    }
    public function update(Request $request,$id){
        $this->insertOrUpdate($request,$id);
        return redirect()->route('admin.get.list.slide')->with('success','Cập nhật Slide thành công');
    }
    public function insertOrUpdate($request,$id=''){
        $slide = new Slide();
        if($id) $slide = Slide::find($id);
        $slide->s_name= $request->s_name;
        $slide->s_url= $request->s_url;
        // $slide->s_active = $request->s_active?1:0;
        $slide->created_at = Carbon::now();
        $slide->updated_at = Carbon::now();
        if($request->hasFile('s_avatar')){
            $file=$request->file('s_avatar');
            $name=$file->getClientOriginalName();
            $Hinh = str_random('3')."_".$name;
            while(file_exists("public/upload/s_avatar/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            $file->move("public/upload/s_avatar",$Hinh);
            $slide->s_avatar = $Hinh;
        }
        else{
        }
        $slide->save();
    }
    public function action(Request $request,$action,$id){
        if($action){
            $slide = Slide::find($id);
            switch ($action) {
                case 'delete':
                    $slides = Slide::all()->count();
                    if($slides<3)
                    return redirect()->route('admin.get.list.slide')->with('warning','Ít nhất 2 slide hiển thị');
                    $slide->delete();
                    return redirect()->route('admin.get.list.slide')->with('success','Xóa sản phẩm thành công');
                    break;
            }
        }
        return redirect()->back();
    }
}
