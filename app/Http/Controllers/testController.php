<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {

        return view('test');
    }
    public function add(Request $request)
    {
        $fileUploader = new FileUploader();
        $uploadedFile = $fileUploader->uploadFile($request->file('file'), 'uploads/employee', [
            'file' => 'required|file|max:10000',
            'mimes' => 'image/jpeg|image/png|image/gif',
        ]);

        if (empty($uploadedFile['errors'])) {
            dd('uploaded');
            // The file was uploaded successfully.
        } else {
            dd('not uploaded');

            // The file upload failed.
            // $uploadedFile['errors'] will contain an array of error messages.
        }
        return redirect()->route('test.index');
    }
}
