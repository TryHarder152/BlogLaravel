@extends('admin/layouts/'.$template)

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tags</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tags</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-block btn-primary">Create Tag</a>
                </div>
            </div>

            <div class="card mt-4 col-6">
                <div class="card-header">
                    <h3 class="card-title">Tags</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th colspan="3" class="w-25">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->title }}</td>
                                    <td><a href="{{ route('admin.tags.show', $tag->id) }}">View <i class="fas fa-eye"></i></a></td>
                                    <td><a href="{{ route('admin.tags.edit', $tag->id) }}">Edit <i class="fas fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent text-primary">Delete <i class="fas fa-minus-square text-danger"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div>{{ $tags->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
