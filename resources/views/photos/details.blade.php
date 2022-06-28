<!--extend layout master.blade.php -->
 
@extends('layouts.master')
 

@section('title', 'Photo Viewer')
 
<!--starts section content, defines some html for section content and end section content-->
@section('content')
 
<h2>Photo Details:</h2>

<h3>{{$photo->title}}</h3>
<p>{{$photo->photo_created}}</p>
<p>
    <img src = "data:image/png;base64,{{ base64_encode($photo->binary)}}" width = "50px" height = "50px"/>
</p>

 
@endsection
