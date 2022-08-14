@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Posts</a></li>
                        <li class="breadcrumb-item active">Create post</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center pt-1">Сreating a post</h2>
                    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="post" placeholder="Enter title" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Content</label>
                            <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label>Select a category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option
                                        {{ $category->id == old('category_id') ? ' selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label>Select a tags</label>
                            <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{ is_array( old('tag_ids') ) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group w-25">
                            <label for="main_image">Append main image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="main_image" name="main_image">
                                    <label class="custom-file-label" for="main_image">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label for="preview_image">Append preview image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                                    <label class="custom-file-label" for="preview_image">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">Create a new post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
