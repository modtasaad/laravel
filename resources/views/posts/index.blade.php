@extends('layouts.app')

@section('title') index @endsection

@section('content')
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="mt-4 btn btn-success">Create Post</a>
    </div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
{{--            @dd($post)--}}
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user ? $post->user->name : 'Not Found'}}</td>
                <td>{{$post->created_at}}</td>
                <td>
               
                <form method="post" action="{{ route('posts.delete', $post->id) }}">
								@csrf
								@method('DELETE')
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    <input type="submit" class="btn btn-danger" value="Delete" />
							</form>
                   
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection