<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function crop(Request $request)
	{
		$filename = explode('/', $request->imgUrl)[2];
		$img = Image::make(public_path() . $request->imgUrl);
		$img->resize($request->imgW, $request->imgH);
		$img->crop($request->cropH, $request->cropW, $request->imgX1, $request->imgY1);
		$img->save(public_path() . '/images/crop/' . $filename);
		return response()->json([
		"status" => "success",
		"url" => '/images/crop/' . $filename
		]);
	}
	
	public function upload(Request $request)
	{
		if(isset($request->img)){
			$request->img->move(public_path() . '/images', $request->img->getClientOriginalName());
			$img = Image::make(public_path() . '/images/' . $request->img->getClientOriginalName());
			$width = $img->width();
			$height = $img->height();
			return response()->json([
			"status" => "success",
			"url" => '/images/' . $request->img->getClientOriginalName(),
			'width' => $width,
			'height' => $height
			]);
		}
	}
}
