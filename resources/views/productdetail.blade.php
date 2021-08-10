@extends('master')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-8 col-sm-offset-4">    
        <h3>{{$proddata->name}}</h3>
       <img src="{{$proddata->gallery}}">
       <p>{{$proddata->catg}}</p>
       <p>{{$proddata->price}}</p>
       <p>{{$proddata->descp}}</p>
       <form action="{{url('add-to-cart')}}" method="post">
         @csrf
       <input type="hidden" name="product_id" value="{{$proddata->id}}">
       <button type="submit" >Add to cart</button> <br><br>
      </form>
      
       <button>Buy Now</button>

  </div>
  </div>
 
</div>
@endsection