@extends ('master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Product List</h1>
                <table class="table">
                    <form  action="{{ route('backend.product.search') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="date">Date From:</label>
                        <input name="date"type="date" value="" class="" id="date" >
                    </div>
                    <div class="form-group">
                        <label for="date1">Date To:</label>
                        <input name="date1"type="date" value="" class="align:right" id="date1" >
                    </div>

                    <button type="submit" class="btn btn-primary">Search</button>
                 </form>

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Product Name</th>
                        <th scope="col"> Price</th>
                        <th scope="col"> Expiry Date</th>
                        <th>Shongi</th>
                        <th>Alvi</th>
                        {{-- <th scope="col"> Password</th> --}}

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($list as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->date}}</td>
                        {{-- <td>{{$data->password}}</td> --}}



                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('backend.product.edit',$data->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('backend.product.delete',$data->id) }}">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="">View</a>

                        </td>
                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection


