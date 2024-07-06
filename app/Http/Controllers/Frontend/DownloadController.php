<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Downloads;

class DownloadController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = DB::table('downloads')->latest()->paginate('6');
        return view('frontend.pages.news.downloads',['downloads' => $downloads]);
    }

    public function adminView()
    {
        $downloads = DB::table('downloads')->latest()->paginate('6');
        $trashedDownloads=Download::onlyTrashed()->latest()->paginate(5);
        return view('admin.downloads.index',['downloads' => $downloads,'trashedDownloads'=>$trashedDownloads]);
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
            'name' => 'required|max:255',
            'subject' => 'required',
            'document' => 'required|mimes:pdf|max:2048',
          
        ],
        [
            'name.required'=>'Please Input Download Name',
            'subject.required'=>'Document Summary',
            'document.required'=>'Please Input Download Description',
            
        ]
    );
    $data = array();
    $data['name']=$request->name;
    $data['subject']=$request->subject;
    $data['created_at']=Carbon::now();
    $path=$request->file('document');
  
    $make_name = $path->getClientOriginalName();
    $upload_path = 'backend/uploads/documentations/'.$make_name;
    // upload document
    $path->move('backend/uploads/documentations/',$make_name);
    $data['document']=$upload_path;
    DB::table('downloads')->insert($data);
    return  redirect()->back()->with('success','Download Inserted Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file=DB::table('downloads')->find($id);
        $headers=['Content-Type: application/pdf'];
        $filePath=$file->document;
        $fileName=$file->name.'.pdf';

      return response()->download($filePath, $fileName, $headers);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=  DB::table('downloads')->where('id',$id)->first();
        return view('admin.downloads.edit', compact('categories'));
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
        $data['name']=$request->cname;
        $data['subject']=$request->catdes;
       
        $data['updated_at']=Carbon::now();
        DB::table('downloads')->where('id',$id)->update($data);
        return  redirect()->route('download')->with('success','Download Updated Successfull');
    }
     /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        $delete=DB::table('downloads')->find($id)->delete();
        return  redirect()->back()->with('success','Download soft deleted Successfull');
    }
       /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $restore_deleted=DB::table('downloads')->withTrashed()->find($id)->restore();
        return  redirect()->route('Download')->with('success','Download Restored Successfull');
    }
      /**
     * Complete delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pdelete=DB::table('downloads')->onlyTrashed()->find($id)->forceDelete();
        return  redirect()->route('Download')->with('success','Download Removed Successfull');
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
