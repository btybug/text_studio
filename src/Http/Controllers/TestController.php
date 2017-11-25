<?php

namespace BtyBugPlugins\Studios\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getIndex()
    {
        return view("studios::test.index");
    }

    public function postCreatePage(Request $request)
    {
        $page = generate_special_page([
            'module_id' => 'BtyBugPlugins\Studios',
            'prefix' => 'studios',
            'slug' => $request->get('slug'),
            'url' => $request->get('url'),
            'file_path' => 'studios/'.$request->get('file_path'),
            'edit_url' => '/admin/studios/test-edit',
            'status' => $request->get('status')
        ]);
        if($page){
            return redirect()->back()->with('message','Success');

        }
        else {
            return redirect()->back()->with('message','Ooop!!! something wrong');
        }
    }

}
