@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-5">{{ $post->title }}</h1>
                    <a class="mr-3" href="{{ route('admin.posts.edit', $post->id) }}">Edit <i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 bg-transparent text-primary">Delete <i class="fas fa-minus-square text-danger"></i></button>

                    </form>
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
                <div class="col-6">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $post->id }}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>{{ $post->content }}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <p>{{ $category->title }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
