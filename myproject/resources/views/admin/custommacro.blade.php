@extends('layouts.adminapp')

@section('content')

<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>All</strong> Users</h1>

    <div class="row">

        <div class="col-12 col-md-12 col-xxl-10 d-flex order-3 order-xxl-2">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Real-Time</h5>
                </div>
                <div class="card-body px-4">
                    <div class="form-group">
                        <label for="bank_name">Bank Name</label>
                        {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection