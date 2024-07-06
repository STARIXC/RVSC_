<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = DB::table('categories')
        // ->latest()
        // ->paginate(9);
        $categories= Category::latest()->paginate('6');
        $trashedCategories=Category::onlyTrashed()->latest()->paginate(5);
        return view('admin.category.category', compact('categories','trashedCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cname' => 'required|max:255',
            'ctype' => 'required',
            'catdes' => 'required',
            'price' => 'required',
            'dprice'=>'required',
        ],
        [
            'cname.required'=>'Please Input Category Name',
            'ctype.required'=>'Please Input Category Type',
            'catdes.required'=>'Please Input Category Description',
            'price.required'=>'Please Input Rooms Price under this category',
            'dprice.required'=>'Please Input Rooms 2pax Price under this category',
        ]
    );
    $data = array();
    $data['category_name']=$request->cname;
    $data['room_type']=$request->ctype;
    $data['description']=$request->catdes;
    $data['size']="";
    $data['price_double']=$request->dprice;
    $data['price']=$request->price;
    $data['created_at']=Carbon::now();
    $rimage=$request->file('image_category');
  
      $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
        Image::make($rimage)->resize(1280,720)->save('backend/assets/images/roomimages/'.$make_name);
        $last_image = 'backend/assets/images/roomimages/'.$make_name;
    $data['category_image']=$last_image;
    DB::table('categories')->insert($data);
    return  redirect()->back()->with('success','Category Inserted Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=  DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $data = array();
        $data['category_name']=$request->cname;
        $data['room_type']=$request->ctype;
        $data['description']=$request->catdes;
        $data['size']="";
        $data['price']=$request->price;
        $data['updated_at']=Carbon::now();
        DB::table('categories')->where('id',$id)->update($data);
        return  redirect()->route('category')->with('success','Category Updated Successfull');
    }
     /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        $delete=Category::find($id)->delete();
        return  redirect()->back()->with('success','Category soft deleted Successfull');
    }
       /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $restore_deleted=Category::withTrashed()->find($id)->restore();
        return  redirect()->route('category')->with('success','Category Restored Successfull');
    }
      /**
     * Complete delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pdelete=Category::onlyTrashed()->find($id)->forceDelete();
        return  redirect()->route('category')->with('success','Category Removed Successfull');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
