<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::Select('id','c_name')->get();
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index',$viewData);
    }
    public function create(){
        return view('admin::category.create');
    }
    public function store(RequestCategory $requestCategory){
        $this->InsertOrUpdate($requestCategory);
       return redirect()->route('admin.get.list.category')->with('success',"Thêm loại sản phẩm mới thành công !!!");
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin::category.update',compact('category'));
    }
    public function update(RequestCategory $requestCategory,$id){
        $this->InsertOrUpdate($requestCategory,$id);
        return redirect()->route('admin.get.list.category')->with('success',"Sửa loại sản phẩm thành công !!!");
    }
    public function InsertOrUpdate($requestCategory,$id=''){
        $code =1;
        try {
            $category = new Category();
            if($id){
                $category = Category::find($id); 
            }
            $category->c_name = $requestCategory->name;
            $category->c_slug = str_slug($requestCategory->name);
            // $category->c_icon = str_slug($requestCategory->icon);
            $category->save();
        } catch (\Exception $exception) {
            $code = 0;
            Log::error("[Error insertOrUpdate Categories]".$exception->getMessage());
        }
        return $code;
    }
    public function action(Request $request,$action,$id){
        if($action){
            $category = Category::find($id);
            switch ($action) {
                case 'delete':
                    $category->delete();
                    return redirect()->route('admin.get.list.category')->with('success',"Xóa loại sản phẩm thành công !!!");
                    break;
            }
        }
        return redirect()->back();
    }
}
