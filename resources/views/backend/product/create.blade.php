shongi
kkkk

@extends ('master')
@section('content')
@if(session('message'))
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
        </div>
    </div>

@endif

<div class="row justify-content-center">
    <div class="col-md-10">
        <h1>Product Add</h1>
        <form  action="{{ route('product.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Product Name</label>
                <input name="name"type="text" class="form-control" id="name" placeholder="Enter product name"required >
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price"type="number" class="form-control" id="price" placeholder="Enter price"required >
            </div>
            <div class="form-group">
                <label for="date">Expiry date</label>
                <input name="date"type="date" class="form-control" id="date" required>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection

