<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Comment;

class CommentController extends Controller
{
    function addComment(Request $request) {

        // load message with hidden field message_id
        $message = Message::find($request->message_id);

        // create a new comment object
        $comment = new Comment(); 
        // set attributes for the comment
        $comment->text = $request->comment; 
        $comment->user_name = $request->user_name;         
        // save the new comment in the existing message's comments
        $message->comments()->save($comment);

        // redirect to the same message details page with the message_id
        // from the form 
        return redirect('/message/' . $request->message_id);           
    }    
}
