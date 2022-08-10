<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadsController extends Controller
{
    /*public function index(){
		$images = FileUpload::get();
		$list = array();
		foreach($images as $image){
			$img = new \StdClass;
			$img->url  = $image->path;
			$img->thumb = $image->path;
			$img->id = $image->id;
			$list[] = $img;
		}
		return stripslashes(response()->json($list)->content());
	}
*/
	/**
	 * Stores images uploaded from a Froala enabled form. 
	 * @param  Request $request the POST request
	 * @return JSON     Returns a json link with a url (used to insert image into article/page). DO NOT CHANGE.
	 */
	public function store(Request $request){
		//dd($request->all());die;
    	$input 				= $request->all();
    	//$location 			= $input['location'];

		$fileData 			= $request->file('image'); //this gets the image data for 1st argument
        // $filename 			= $fileData->getClientOriginalName();
        $filename           = $_FILES['image']['name'];
        //$completePath 		= url('/' . $location . '/' . $filename);
        $fileLocation 	= '/blogs/';

        $destinationPath = public_path($fileLocation);    

        $request->file('image')->move($destinationPath, $filename);

		$completePath = url('/public') . $fileLocation . $filename;

		// $fileupload = new FileUpload;
		// $fileupload->title = $filename;
		// $fileupload->path = $completePath;
		// $fileupload->save();
		// if($fileupload->save()){
			return stripslashes(response()->json(['link' => $completePath])->content());
		// }
	}

	/**
	 * Find and delete the deleted image.
	 * @param  Request  $request 	[description]
	 * @param  int  	$id      	Department ID
	 */
    // public function destroy(Request $request){
    // 	$input = $request->all();
    // 	$url = parse_url($input['src']);
    // 	$splitPath = explode("/", $url["path"]);
    // 	$splitPathLength = count($splitPath);
    // 	FileUpload::where('path', 'LIKE', '%' . $splitPath[$splitPathLength-1] . '%')->delete();
    // }
	
	/**
	* upload Video
	*/
	
	public function upload_co_video(Request $request){
		//dd($request->all());die;
		$input 				= $request->all();
    	//$location 			= $input['location'];

		$fileData 			= $request->file('file'); //this gets the image data for 1st argument
        
        $filename           = $_FILES['file']['name'];
       
        $fileLocation 	= '/video/';

        $destinationPath = public_path($fileLocation);    

        $request->file('file')->move($destinationPath, $filename);

		$completePath = url('/public') . $fileLocation . $filename;
		return stripslashes(response()->json(['link' => $completePath])->content());
	}
	
}
