@extends('layout');
@section('content')
<div class="wrapper">
    <div class="content">
        <body class="bg-light py-5">



    <center><td><a href="dashboard" class="btn btn-sm btn-primary">Back To Home</a></td></center>
            <div class="container">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Employee Data Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">salary</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col" colspan="2">Opertion</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($coll as $item)


                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->age}}</td>
                                        <td>{{$item->salary}}</td>
                                        <td>  <img src="{{url('storage/public/' . $item->image)}}" alt="Image" width="100px" height="100px"></td>
                                        <td><a href="{{ url('show/' . $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                        <td><a href="{{ url('delete/' . $item->id) }}" class="btn btn-sm btn-primary">delete</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            </body>
            </html>

    </div>

@endsection



