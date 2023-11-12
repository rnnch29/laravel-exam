@extends('layouts.app')
@section('title', 'แก้ไขบทความ')

@section('content')
    <h2 class="text text-center py-2">แก้ไขบทความใหม่</h2>
    <form action="{{route('update',$blog->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control" value="{{$blog->title}}">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="">เนื้อหา</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$blog->content}}</textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <button class="btn btn-primary my-2">Update</button>
        <a href="/blog" class="btn btn-success">all blogs</a>
    </form>
@endsection
