<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload() 
    {
    	return view('upload');
    }

	public function uploadPost(Request $request)
    {
        $path = public_path('img');

	    if (!file_exists($path)) {
	        mkdir($path, 0777, true);
	    }

	    $file = $request->file('file');

	    $name = uniqid() . '_' . trim($file->getClientOriginalName());

	    $file->move($path, $name);

	    return response()->json([
	        'name'          => $name,
	        'original_name' => $file->getClientOriginalName(),
	    ]);
    }


    public function gallery(Request $request) 
    {
    	$public_images = [];
		$imagesInFolder = \File::files(public_path('img'));

		foreach($imagesInFolder as $key => $path)
		{
		    $public_images[$key] = pathinfo($path);
		}
		$new_images = [];
		foreach($public_images as $image) {
			$new_images[] = $image['basename'];
		}

		$currentPage = Paginator::resolveCurrentPage();
        $col = collect($new_images);
        $perPage = 12;
        $currentPageItems = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $images = new Paginator($currentPageItems, count($col), $perPage);
        $images->setPath($request->url());
        $images->appends($request->all());
                
        return view('gallery', compact('images'));
    }
}
