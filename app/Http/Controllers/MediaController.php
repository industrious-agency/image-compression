<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MediaRequest;

/**
 * MediaController
 */
class MediaController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
    	return view('welcome');
    }

    /**
     * Store
     *
     * @param  MediaRequest $request
     */
    public function store(MediaRequest $request)
    {
        $file = $request->file;

        $path = $file
            ->compress()
            ->storePublicly('files', [
                'mimetype' => $file->getClientMimeType()
            ]);

        return redirect()->back()
            ->with('success', 'Image compressed and stored (' . $path . ').');
    }
}
