@extends('layouts.main')

@section('container')

    <h1 class='mt-4'>tai</h1>
    <p class="lead"><a href="{{ route('manage.create') }}">Tambah Article</a></p>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategory</th>
                <th scope="col">Article</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $index => $article)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <th scope="row"><a href ="{{ route('article.show', $article->id) }}">{{ $article->title }}</th>
                    <th scope="row">{{ $article->category->name }}</th>
                    <th scope="row">{{  \Illuminate\Support\Str::limit(($article->content),150) }}</th>
                    <th scope="row"><a href ="{{ route('manage.edit', $article->id) }}">Edit</th>
                    <th scope="row"><a href ="{{ route('manage.delete', $article->id) }}">Delete</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $articles->render() }}
@endsection
