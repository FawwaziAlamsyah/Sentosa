@extends('layouts.main')

@section('container')

    <h1 class='mt-4'>create article</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('manage.store') }}">
        @csrf
        <div class="form-group">
            <label for="">Kategory</label>
            <select class="form-control" name="category">
                <option value="">pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="">Article</label>]
            <textarea class="form-control" name="content" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>


@endsection
