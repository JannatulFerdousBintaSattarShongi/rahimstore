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
    <form  action="{{ route('product.update',$product->id) }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Product Name</label>
                <input name="name"type="text" class="form-control" value="{{ $product->name }}" id="name"  >
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price"type="number" class="form-control"value="{{ $product->price }}" id="price" >
            </div>
            <div class="form-group">
                <label for="date">Expiry date</label>
                <input name="date"type="date" class="form-control"value="{{ $product->date }}" id="date" >
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
  @endsection

