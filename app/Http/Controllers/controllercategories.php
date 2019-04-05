<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Validator;
use App\modelCategory;
//đường dẫn trỏ tới file model
use App\Http\Requests\categoriesRequest;
//gọi tới đường dẫn file request (TableNewsRequest)
use Auth;
use Illuminate\Support\ServiceProvider;
use Input;
use DB;

class controllercategories extends Controller
{
	// Nhập dữ liệu từ bảng vào form

    public function getForm(){

     return view('addcategories');
     // Tên form: formTableNews
    } 

    public function postForm(categoriesRequest $request){
    	$categoriestable = new modelCategory(); 
    	// $categoriestable:Tên bảng student,
    	// modelCategory: Tên model
    	$categoriestable->Name = $request->name;
    	//$student ->Name: Tên cột của bảng
    	//$request-> name: Tên name của form
    	$categoriestable->Quantity = $request->quantity;
    	$categoriestable->Status = $request->status;
    	$categoriestable->Save();

    	$cate = modelCategory::select('id','Name','Quantity','Status')->get()->toArray();
        return view('selectCategories', compact('cate') );
        //Sau khi điền thông tin từ form vào thì dữ liệu sẽ được hiển thị trong bảng "hiển thị sản phẩm"
    }
    // Nhập dữ liệu từ bảng vào form



    // Hiển thị các sản phẩm category
    public function selectCategory(){
     $cate = modelCategory::select('id','Name','Quantity','Status')->get()->toArray();
		return view('selectCategories', compact('cate') );
        // compact('cate') sẽ liên quan đến @foreach($cate as $value) của file selectCategories
    }
    public function getCategory(){
     //$cate = modelCategory::select('id','Name','Quantity','Status')->get()->toArray();
        return view('selectCategories', compact('cate') );//['categories_data' => $cate]);
    }
    // Hiển thị các sản phẩm category



    // Sửa các thông tin category
    public function getUpdate($id) {
		
		$categories = modelCategory::find($id);
		return view('updateCategories', ['categories_data' => $categories]);
	}
	public function postUpdate($id,Request $request) {
		$categories = modelCategory::find($id);
		$categories->Name = Request::input('txtname');
		$categories->Quantity = Request::input('txtquantity');
		$categories->Status = Request::input('txtstatus');
		$categories->save();
		$cate = modelCategory::select('id','Name','Quantity','Status')->get()->toArray();
        return view('selectCategories', compact('cate') );
        // Sau khi chỉnh sữa thì giá trị vừa được thay đối sẽ được lưu lại.
	}
	// Sửa các thông tin category



    // Xóa 1 sản phẩm (xóa 1 record)
    public function getDelete($id) {
        $categories = modelCategory::find($id);
        $categories->delete($id);
       // categories : Tên biến được dùng cho toàn bộ chương trình
        $cate = modelCategory::select('id','Name','Quantity','Status')->get()->toArray();
        return view('selectCategories', compact('cate') );
        // Sau khi xóa vẫn được hiển thị trong file selectCategories
    }
    // Xóa 1 sản phẩm (xóa 1 record)
}
