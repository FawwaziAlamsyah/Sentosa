@extends('layouts.main')

@section('container')
<div class="col-lg-8">
{{-- tiitle --}}
<h1 class="mt-4">{{ $articles->title }}</h1>

{{-- author --}}
<p class="lead">
    <a href="#">{{ $articles->category->name }}</a>
</p>
<hr>
{{-- date time --}}
<p>{{ date('d M Y', strtotime($articles->created_at)) }}</p>
<hr>

{{-- preview image --}}
<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
<hr>

<p>{{ $articles->content }}</p>

</div>
@endsection
