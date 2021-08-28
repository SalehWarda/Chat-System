<?php

namespace App\Http\Controllers\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{

    public function index(Request $request)
    {
        //
        $conversations = $request->user()->conversations;
        return view('conversations.index',compact('conversations'));
    }


//
//    public function create(Request $request)
//    {
//        //
//        $conversations = $request->user()->conversations;
//
//        return view('conversations.create',compact('conversations'));
//    }



    public function show(Conversation $conversation ,Request $request)
    {
        //
        $conversations = $request->user()->conversations;

        $request->user()->conversations()->updateExistingPivot($conversation, [

            'read_at' => now()
        ]);

        return view('conversations.show',compact('conversation','conversations'));
    }





    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
