
@extends('layouts.app')

@section('title') show @endsection

@section('content')
<div class="text-center "   >
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h1 class="mt-5 mb-3">View Record</h1>
<div class="form-group">
<label>Post title</label>
@foreach ($posts as $post)
@if($post['id']==1)
<p><b>{{$post['title']}}</b></p>
</div>
<div class="form-group">
<label>Posted by</label>
<p><b>{{$post['posted_by']}}</b></p>
</div>
<div class="form-group">
<label>Cearated</label>
<p><b> {{$post['created_at']}}</b></p>
</div>
@endif
@endforeach

<p><a href="{{route('posts.index')}}" class="btn btn-primary">Back</a></p>
</div>
</div>        
</div>
</div>
@endsection