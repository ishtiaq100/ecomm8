@extends('master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($proddata as $prod)
    <div class="item {{$prod['id']==6 ? 'active ': ''}} ">
      <?php $id= $prod['id'] ?>
      <a href="{{url('detail/'.$id)}}"><img src="{{$prod['gallery']}}" alt="{{$prod['name']}}"></a>
    </div>
    @endforeach
    
  </div>

 
</div>
@endsection