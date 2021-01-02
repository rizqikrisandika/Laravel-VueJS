<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articel;

class ArticelController extends Controller
{
    public function index()
    {
        $articel = Articel::all();

        return response()->json($articel,200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $articel = new Articel();
        $articel->title =  $request->title;
        $articel->content = $request->content;
        $articel->save();

        $message = [
            'success' => true,
            'message' => 'Articel created successfully'
        ];

        return response()->json($message);
    }

    public function getShow($id)
    {
        $articel = Articel::find($id);

        return response()->json($articel);
    }

    public function getEdit($id)
    {
        $articel = Articel::find($id);

        return response()->json($articel);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $articel = Articel::find($id);
        $articel->title = $request->title;
        $articel->content = $request->content;
        $articel->save();

        $message = [
            'success' => true,
            'message' => 'Articel Updated Successfully'
        ];

        return response()->json($message);
    }

    public function delete($id)
    {
        $articel = Articel::find($id);

        if(!empty($articel))
        {
            $articel->delete();

            $message = [
                'success' => true,
                'message' => 'Articel deleted successfully'
            ];

            return response()->json($message);
        }else{
            $message = [
                'success' => false,
                'message' => 'Articel deleted failed'
            ];
        }
    }
}
