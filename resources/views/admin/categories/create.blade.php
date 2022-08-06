@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Create category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center pt-1">Сreating a category</h2>
                    <form action="{{ route('admin.categories.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input name="title" type="text" class="form-control" id="category" placeholder="Enter category">
                        </div>
                        @error('title')
                            <div class="text-danger pb-3">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">Create a new category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
