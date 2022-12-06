@extends('layouts.adminapp')

@section('content')

<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>All</strong> Categories</h1>

    <div class="row">

        <div class="col-12 col-md-12 col-xxl-10 d-flex order-3 order-xxl-2">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h5 class="card-title mb-0">Real-Time</h5>
                        </div>
                        <div class="col-2">
                            <!-- <a class="btn btn-primary btn-sm" href="addnewcategory">Add New </a> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add New </button>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>
                <div class="card-body px-4">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr No</th>
                                <th>Product Title</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="dispProd">


                        </tbody>
                    </table>
                    <!-- <div id="world_map" style="height:350px;"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="productform">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter Product Title" name="title" id="title">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <textarea name="description" class="form-control" placeholder="Enter Description" id="description" cols="50" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" id="quantity">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>


    $.ajax({
        type:"get",
        url:"http://localhost:8000/api/allproducts",
        success:function(response){
            // console.log(response);
            let htmltable = ""
            response.forEach(element => {
                htmltable += `<tr>
                    <td>${element.id}</td>
                    <td>${element.title}</td>
                    <td>${element.description}</td>
                    <td>${element.price}</td>
                    <td>${element.quantity}</td>
                </tr>`
                
            });

            $("#dispProd").html(htmltable)
        }
    })

    $("#productform").submit((e)=>{
        alert("called");
        e.preventDefault();
        console.log();
    })
</script>
@endpush