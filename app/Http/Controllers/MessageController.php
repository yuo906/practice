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
        return view('product.bulletin_board', compact('contents'));
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

            Response::create([
                'response' => $request->response,
                'message_id' => $request->id,
            ]);

        return redirect(route('message.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // dd($content);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $contents = Message::find($id);
        $contents->update([
            'content' => $request->content,
        ]);
        // dd($contents);
        return redirect(route('message.index', compact('contents')));
    }

    public function updateResponse(Request $request, string $id)
    {
        $response = Response::find($id);

        $response->update([
            'response' => $request->response,
        ]);
        // dd($response);
        return redirect(route('message.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $contents = Message::find($id);
        foreach ($contents->message ?? [] as $value) {
            // dd($value);
            $value->delete();
        }
        $contents->delete();

        return redirect(route('message.index'));
    }

    public function destroyResponse(string $id)
    {
        $response = Response::find($id);
        // dd($response);
        $response->delete();

        return redirect(route('message.index'));
    }
}
