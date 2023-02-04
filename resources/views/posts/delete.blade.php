@extends('layouts.app')

@section('title') delete @endsection

@section('content')

<div class="text-center ">
<div class="container">
<div class="col">
<form method="POST" action="/posts">
        @csrf
<h2 class="mt-5 mb-3">Delete Record</h2>
<div class="card alert-danger">
<p>Are you sure you want to delete this employee record?</p>
<p>
<input type="submit" value="Yes" class="btn btn-danger">
<a href="{{route('posts.index')}}" class="btn btn-secondary">No</a>
</p>
</div>
</form>
</div>
</div>        
</div>
@endsection