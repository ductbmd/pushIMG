<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\File;
class HomeController extends Controller
{
    public function index()
    {
    	return view('frontEnd.index');
    }
    public function uploadIndex()
    {
    	$files=File::where('type',1)->select('url','file_name')->orderBy('created_at', 'desc')->get();
    	return view('upload')->with('files',$files);
    }
    public function store(Request $request)
    {
    	if ( $request->file('file') ) {
    	$fileUploaded=$request->file('file');
    	 Storage::putFileAs( 'public/photos', $fileUploaded, $fileUploaded->getClientOriginalName(), 'public');
    	 $file_link="storage/photos/".$fileUploaded->getClientOriginalName();
    	 $file_name=$fileUploaded->getClientOriginalName();
        $description="Demo";
         File::create([
            'url' => $file_link,
            'file_name' => $file_name,
            'description' =>  $description,
            'type' =>  1,
            
        ]);
    	}
    	return redirect()->back();
    }
    
}
