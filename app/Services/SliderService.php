<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class SliderService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/slider/' . $model->file))) {
                File::delete(public_path('uploads/slider/' . $model->file));
            }
            if (File::isFile(public_path('uploads/slider/thumbs/' . $model->file))) {
                File::delete(public_path('uploads/slider/thumbs/' . $model->file));
            }
        }

        $file_name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $file->storeAs('slider', $file_name, 'public_uploads');

        $filepath = public_path('uploads/slider/' . $file_name);
        $thumb_filepath = public_path('uploads/slider/thumbs/' . $file_name);

        Image::make($filepath)
            ->fit(
                config('images.slider.big_width'),
                config('images.slider.big_height')
            )->save($filepath);

        Image::make($filepath)
            ->fit(
                config('images.slider.thumb_width'),
                config('images.slider.thumb_height')
            )->save($thumb_filepath);

        $model->update(['file' => $file_name]);
    }
}
