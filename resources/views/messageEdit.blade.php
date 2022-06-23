<!--extend layout master.blade.php -->
 
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Message Details:</h2>

<form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('put')    
    <input type="text" name="title" value="{{$message->title}}">
    <input type="text" name="content" value="{{$message->content}}">
    <button class="btn btn-primary" type="submit">Save</button>    
</form>

<form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-primary" type="submit">Delete</button>
</form>
 
@endsection


