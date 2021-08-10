@extends('master')
@section('content')
<div class="container-fluid">
<div class="row">
    @foreach($proddata as $pdata)
    <div class="col-sm-4 col-sm-offset-4">    
        <h3>{{$pdata->name}}</h3>
       <img src="{{$pdata->gallery}}">
       <p>{{$pdata->catg}}</p>
       <p>{{$pdata->price}}</p>
       <p>{{$pdata->descp}}</p>
       <button>Add to cart</button>
       <button>Buy Now</button>

  </div>
  @endforeach
  </div>
 
</div>
@endsection