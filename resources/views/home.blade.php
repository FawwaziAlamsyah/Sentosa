@extends('layouts.main')

@section('container')
<div>
    <h1>Halaman Home</h1>
    @foreach ($articles as $article)
        {{-- blog post --}}
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="http://placehold.it/900x300" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $articles->title }}</h5>
                <p class="card-text">{{ str::limit($articles->content,200) }}</p>
                <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Kalo Mau Baca Pencet!</a>
            </div>
            <div class="card-footer text-muted">
                {{ date('d M Y', strtotime($articles->created_at)) }}
            </div>
        </div>
    @endforeach
    {{ $articles->render() }}
</div>
@endsection
