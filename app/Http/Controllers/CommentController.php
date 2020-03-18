<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return response()->json(['message'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePostComment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
            'postId' => 'required',
            'name' => 'required'
        ]);

        $comment = new Comment();
        $comment->user_name = $request->name;
        $comment->comment = $request->comment;
        $comment->post_id = $request->postId;

        $comment->save();
        return back()->with(["success"=>"Saved Successfully."]);
    }
    public function storeProjectComment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
            'projectId' => 'required',
            'name' => 'required'
        ]);

        $comment = new Comment();
        $comment->user_name = $request->name;
        $comment->comment = $request->comment;
        $comment->project_id = $request->projectId;

        $comment->save();
        return back()->with(["success"=>"Saved Successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
