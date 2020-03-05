<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestArticle;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::whereRaw(1);
        if($request->name) $articles->where('a_name','like','%'.$request->name.'%');
        $articles = $articles->paginate(10);

        $viewData = [
            'articles'=>$articles
        ];
        return view('admin::article.index',$viewData);
    }
    public function create()
    {
        return view('admin::article.create');
    }
    public function store(RequestArticle $requestArticle){
        // dd($requestArticle->all());
        $this->insertOrUpdate($requestArticle);
        return redirect()->route('admin.get.list.article')->with('success','Thêm tin tức thành công');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('admin::article.update',compact('article'));
    }
    public function update(RequestArticle $requestArticle,$id){
        $this->insertOrUpdate($requestArticle,$id);
        return redirect()->route('admin.get.list.article')->with('success','Cập nhật tin tức thành công');
    }
    public function insertOrUpdate($requestArticle,$id=''){
        $article = new Article();
        if($id) $article = Article::find($id);
        $article->a_name= $requestArticle->a_name;
        $article->a_slug= str_slug($requestArticle->a_name);
        $article->a_description = $requestArticle->a_description;
        $article->a_content = $requestArticle->a_content;
        $article->created_at = Carbon::now();
        $article->updated_at = Carbon::now();
        if($requestArticle->hasFile('a_avatar')){
            $file=$requestArticle->file('a_avatar');
            $name=$file->getClientOriginalName();
            $Hinh = str_random('3')."_".$name;
            while(file_exists("public/upload/a_avatar/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            $file->move("public/upload/a_avatar",$Hinh);
            $article->a_avatar = $Hinh;
        }
        else{
        }
        $article->save();
    }
    public function action(Request $request,$action,$id){
        if($action){
            $arcticle = Article::find($id);
            switch ($action) {
                case 'delete':
                    $arcticle->delete();
                    return redirect()->route('admin.get.list.article')->with('success','Xóa tin tức thành công');
                    break;
                case 'active':
                    $arcticle->a_active= $arcticle->a_active==1?0:1;
                    $arcticle->save();
                    break;
            }
        }
        return redirect()->back();
    }
}
