@extends('layouts.adminapp')

@section('content')

<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>Add New</strong> Category</h1>

    <div class="row">

        <div class="col-12 col-md-12 col-xxl-10 d-flex order-3 order-xxl-2">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h5 class="card-title mb-0">Real-Time</h5>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-sm" href="addnewcategory">Add New </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4">
                    <form action="savecategory" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Enter Category Title" name="category_title" id="category_title">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-8">
                                <textarea class="form-control" placeholder="Enter Category Description" name="category_description" id="category_description" cols="50" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-8">
                                <input type="file" class="form-control" name="category_image" id="category_image">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-8">
                                <input type="submit" class="btn btn-primary" name="save-category" id="save-category">
                                <input type="reset" class="btn btn-danger">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection