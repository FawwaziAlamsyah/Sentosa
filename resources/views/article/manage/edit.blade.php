@extends('layouts.main')

@section('container')

    <h1 class='mt-4'>ubah article</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('manage.update',$articles->id) }}">
        @csrf
        <div class="form-group">
            <label for="">Kategory</label>
            <select class="form-control" name="category">
                <option value="">pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if(old('category',$articles->category_id)==$category->id) selected="selected" @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="title" value="{{ old('title',$articles->title) }}">
        </div>
        <div class="form-group">
            <label for="">Article</label>]
            <textarea class="form-control" name="content" rows="4">{{ old('content',$articles->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>


@endsection
