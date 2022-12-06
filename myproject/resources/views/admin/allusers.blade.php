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
                    <table class="table table-bordered table-striped">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allUsers as $users)
                            <tr>
                                <td>{{ $users->id }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>
                                    <a href="edituser/{{ $users->id }}"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                    <a href="deleteuser/{{ $users->id }}"> <i class="fa-solid fa-trash-can"></i> </a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- <div id="world_map" style="height:350px;"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection