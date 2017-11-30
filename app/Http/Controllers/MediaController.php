<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MediaRequest;

class MediaController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function store(MediaRequest $request)
    {
        $file = $request->file;

        $path = $file
            ->compress()
            ->storePublicly('files', [
                'mimetype' => $file->getClientMimeType()
            ]);

            echo "<pre>";
            print_r($path);
            echo "</pre>";
            die;
		echo "<pre>";
    	print_r($request->allFiles());
    	echo "</pre>";
    	die;
    }
}
