@extends('layouts.template')
@section('content')
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">International Sitagu Buddhist University Founder</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
    @foreach($posts as $post)
    <h4>{{$post->title}}</h4>

    <div class="col-lg-3 col-md-4 col-6">
      <img class="img-fluid" src="/images/{{$post->file}}" alt=""><span class="text-center"></span><br><br>
      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary">Read More &rarr;</a>
    </div>
    @endforeach
  </div>

</div>
<div class="row mt-4"></div>
<!-- /.container -->

@endsection