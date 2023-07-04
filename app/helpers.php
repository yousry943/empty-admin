<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileUploader
{
    public static function uploadFile($file, $path, $rules = [])
    {
        $validator = Validator::make(
            [
                'file' => $file,
            ],
            $rules
        );

        if ($validator->fails()) {
            return [
                'errors' => $validator->errors()->all(),
            ];
        }

        $fileName = $file->getClientOriginalName();
        $fileSize = $file->getSize();
        $fileMimeType = $file->getMimeType();

        $fileStored = Storage::disk('local')->putFile($path, $file);

        if ($fileStored) {
            return [
                'fileName' => $fileName,
                'fileSize' => $fileSize,
                'fileMimeType' => $fileMimeType,
                'fileUrl' => Storage::url($path . '/' . $fileName),
            ];
        } else {
            return false;
        }
    }
}