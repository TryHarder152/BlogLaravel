@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $tag->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                        <li class="breadcrumb-item active">{{ $tag->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.tags.update', $tag->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="tag">Title</label>
                            <input name="title" type="text" class="form-control" id="tag" placeholder="Enter tag" value="{{ $tag->title }}">
                        </div>
                        @error('title')
                            <div class="text-danger pb-3">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">Edit a tag</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
