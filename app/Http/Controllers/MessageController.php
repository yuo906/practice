<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Response;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Message::all();
        $responses = Response::all();
        return view('product.bulletin_board', compact('contents', 'responses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        Message::create([
            'content' => $request->content,
        ]);
        return redirect(route('message.index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        // if ($request->content ?? '') {



        // } else {
            Response::create([
                'response' => $request->response,
                'message_id' => $request->id,
            ]);
        // }
        // dd($response);
        // }

        return redirect(route('message.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        
    }
}
