<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataFormRequest;
use App\Models\DataForm;
use Exception;

class DataFormController extends Controller
{
    public function index()
    {
        $data = DataForm::all();
        return view('outputpage',['datas' => $data]);
    }

    public function store(DataFormRequest $request)
    {
        try {
            $file_path = null;
            
            if ($request->hasFile('file_upload')){
                $file = $request->file('file_upload');
                $folder = 'files';
                $file_path = $file->store($folder, 'public');
            }

            DataForm::create(array_merge($request->validated(), ['file_upload' => $file_path]));
            return Redirect()->route('input.page')->with('success','Data successfully stored');
        } catch (Exception $e) {
            return back()->with('error', 'Error storing data: ' . $e->getMessage())->withInput();
        }
    }
}
