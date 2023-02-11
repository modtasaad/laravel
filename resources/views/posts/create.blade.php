@extends('layouts.app')

@section('title') create @endsection

@section('content')
 <form method="POST" action="{{route('posts.index')}}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label m-2 ">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label m-2 ">Description</label>
            <textarea
                name="description"
                class="form-control"
            ></textarea>
        </div>
        <div class="mb-3">
            <label class="form-check-label m-2 ">Post Creator</label>

            <select  name="Post Creator" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach

            </select>

            <div>
         <label for="formFileLg" class="form-label">choose image</label>
        <input class="form-control form-control-lg"  name='image' id="formFileLg" type="file">
        </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection