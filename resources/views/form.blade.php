@extends('layouts.app')
@section('title', 'เขียนบทความ')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form action="/insert" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="">เนื้อหา</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <button class="btn btn-primary my-2">save</button>
        <a href="/blog" class="btn btn-success">all blogs</a>
    </form>
@endsection
