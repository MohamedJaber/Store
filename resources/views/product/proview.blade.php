@extends('layouts.app')
@section('content')
  <body style="background-color: #f5f5f5">
    <fieldset style='margin-bottom: 300px;'>
  <table class="table font-weight-bold" style="font-size: 10px;font-weight: bold;color: black;">
    <tr style="font-size: 20px">
      <th>name</th>
      <th>image</th>
      <th>price</th>
      <th>description</th>
      <th>discounted</th>
      @if(Auth::user()->type==1)
      <th>Edit</th>
      <th>DELETE</th>
      @else
      <th> Add To Cart </th>
        @endif
    </tr>
@foreach($products_items as $product)
  <tr>
    <td>{{$product->name}} </td>
    <td><img src="{{asset('images/'.$product->img)}}" style="width:100px;height: 100px;border-radius: 12px;"></td>
    <td>${{$product->price}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->discounted}}</td>
    @if(Auth::user()->type==1)
    <td><a class="btn btn-primary" style="background-color: black" href="{{route('editoldproduct',$product->id)}}">Edit</a></td>
    <td><a class="btn btn-primary" style="background-color: black" href="{{route('delproduct',$product->id)}}">DELETE</a></td>
      @else
      <td><a class="btn btn-primary" style="background-color: black" href="{{route('addtocart',$product->id)}}">Add To Cart</a></td>
     
      @endif
  </tr>
@endforeach
    @if(Auth::user()->type==1)
    <tr><td colspan="6" align="center"><a class="btn btn-primary" style="background-color: black"  href="{{route('add')}}">ADD product</a></td></tr>
 @else
 <tr><td colspan="6" align="center"><a class="btn btn-primary" style="background-color: black" href="{{route('showcart')}}">Show Cart</a></td></tr>

  @endif
  </table>
</fieldset>
</body>
@endsection