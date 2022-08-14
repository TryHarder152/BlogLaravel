@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $post->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="post" placeholder="Enter title" value="{{ $post->title }}">
                            @error('title')
                            <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Content</label>
                            <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                            @error('content')
                            <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label>Select a category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option
                                        {{ $category->id == $post->category->id ? ' selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger pb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <label>Select a tags</label>
                            <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select a tags" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row flex justify-content-start">
                            <div class="form-group w-25 mr-5">
                                <div style="height:200px" class="w-100">
                                    <img class="w-100 h-100" src="{{ asset('/storage/'.$post->main_image) }}" alt="main_image">
                                </div>
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
                                <div style="height:200px" class="w-100">
                                    <img class="w-100 h-100" src="{{ asset('/storage/'.$post->preview_image) }}" alt="preview_image">
                                </div>
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
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">Update the post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
