@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="form-group">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            Add New Category
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add New </button>

                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form method="post" id="category_form">

                        <div class="row">
                            <div class="col">
                                <input type="hidden" class="form-control" value="{{ csrf_token() }}" name="_token" id="_token">
                                <input type="text" class="form-control" placeholder="Enter Category" name="category_title" id="category_title">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <textarea name="category_description" placeholder="Enter Description" id="category_description" class="form-control" cols="50" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorydata as $catData)

                    <tr>
                        <td>{{ $catData->id }}</td>
                        <td>{{ $catData->category_title }}</td>
                        <td>{{ $catData->category_description }}</td>
                        <td>
                        <form action="category/{{ $catData->id; }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete">Delete dat</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection