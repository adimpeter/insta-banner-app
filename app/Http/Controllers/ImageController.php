<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image as ImageHandler;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function upload(Request $request){
        $request->validate([
            'image' => 'image'
        ]);

        $image = $request->image;

        // dd($image. $request->file('image'));
        $file_name_with_ext = $image->getClientOriginalName();
        $file_name_to_store = time() . '-banner-' . $file_name_with_ext;

        $image->storeAs('public', $file_name_to_store);

        $data = [
            'filepath'  => 'storage/',
            'filename'  => $file_name_to_store,
            'msg'       => 'upload successfull'
        ];

        ImageHandler::create([
            'name'  => $file_name_to_store,
            'ip'    => $request->ip()
        ]);

        $image = Image::make($data['filepath'] . $data['filename'])->crop(650,650);
        $image->save($data['filepath'] . $data['filename']);

        return response()->json($data, 200);
    }

    public function generateBanner(Request $request){
        $file_path = 'public/';
        $file_full_path = storage_path(). '/app/public/' . $request->file_name;
        $file = Storage::get($file_path . $request->file_name);
        $padding = 20;

        $product_text = $request->product_text;
        $promo_text  = $request->promo;
        

        $image = Image::make($file_full_path);

        // for white rectangle border
        $image->rectangle(25, 25, 625, 625, function ($draw) {
            $draw->border(3, '#fff');
        });


        $rectanglewidth = 150;
        $xAxis = (650 - $rectanglewidth);
        $xAxisRectangle = $xAxis + $rectanglewidth;

        // draw promo and discount rectangle
        $image->rectangle($xAxis, 50, $xAxisRectangle, 100, function ($draw) {
            $draw->background('#ffffff');
        });

        // add discount text
        
        $image->text($promo_text, $xAxis + 10, 90, function($font) {
            $font_path = public_path() . '/fonts/';
            $font->file($font_path . 'Oswald.ttf');
            $font->size(30);
            $font->color('#333');
            $font->align('left');
            // $font->valign('top');
            // $font->angle(45);
        });

        $word = $request->instagram_handle;
        $word_count = strlen($word);
        $rectanglewidth = ($word_count * 10) + 10;
        // draw insta handle background
        // $rectanglewidth = 150;
        $rectangleHeight = 50;
        $xAxis = (650 - $rectanglewidth);
        $yAxis = (650 - $rectangleHeight) - 50;
        $xAxisRectangle = $xAxis + $rectanglewidth;
        $yAxisRectangle = $yAxis + $rectangleHeight;

        $image->rectangle($xAxis, $yAxis, $xAxisRectangle, $yAxisRectangle, function ($draw) {
            $draw->background('#ffffff');
        });

        // $white_bg_path = public_path() . '/assets/insta-handle-white-bg.png';
        // $image->insert($white_bg_path, 'bottom-right', 20, 20);

        // instahandle text
        $image->text($word, $xAxis + 10, $yAxis + 35, function($font) {
            $font_path = public_path() . '/fonts/';
            $font->file($font_path . 'Oswald.ttf');
            $font->size(20);
            $font->color('#333');
            $font->align('left');
            // $font->valign('top');
            // $font->angle(45);
        });

        // draw shop now background
        // draw insta handle background
        $rectanglewidth = 150;
        $rectangleHeight = 50;
        $xAxis = (650 - $rectanglewidth);
        $yAxis = (650 - $rectangleHeight - 50) - 75;
        $xAxisRectangle = $xAxis + $rectanglewidth;
        $yAxisRectangle = $yAxis + $rectangleHeight;

        $image->rectangle($xAxis, $yAxis, $xAxisRectangle, $yAxisRectangle, function ($draw) {
            $draw->background('#333');
        });


        // instahandle text
        $image->text('SHOP NOW', $xAxis + 10, $yAxis + 35, function($font) {
            $font_path = public_path() . '/fonts/';
            $font->file($font_path . 'Oswald.ttf');
            $font->size(24);
            $font->color('#fff');
            $font->align('left');
            // $font->valign('top');
            // $font->angle(45);
        });

        $banner_width = 650;
        $banner_height = 650;

        $xAxis = $banner_width - 600;
        $yAxis = $banner_height / 2;

        // convert text into array so it can be added with style
        $product_text_array = explode(' ', $product_text);
        $text_color = "#fff";

        // if word is more than one, calculate where word should start
        $yAxis = $banner_height / count($product_text_array);

        foreach($product_text_array as $text){
            // product text
            $image->text($text, $xAxis, $yAxis, function($font) use ($text_color) {
                $font_path = public_path() . '/fonts/';
                
                $font->file($font_path . 'Oswald.ttf');
                $font->size(55);
                $font->color($text_color);
                $font->align('left');
                // $font->valign('top');
                // $font->angle(45);
            });

            $text_color = (($text_color == '#fff')? '#333' : '#fff'); 
            $yAxis+=60;
        }

        

        // delete file and save again
        if(\File::exists($file_full_path)){
            // \Log::debug('file found');
            \File::delete($file_full_path);
        }

        $image->save($file_full_path);

        

        $data = [
            'msg' => 'success',
            'filename' => $request->file_name,
            'downloadPath' => 'storage/' . $request->file_name
        ];

        return response()->json($data, 200);
    }
}
