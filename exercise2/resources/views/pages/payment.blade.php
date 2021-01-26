@extends('layouts.main-layout')

@section('content')
  <ul>
    @forelse ($payments as $payments)
      @php
        if($loop -> even){
          $color = "red";
        } else{
          $color = "green";
        }
      @endphp
      <li class="{{$color}}">
        <h5>payment ID : {{$payments['id']}}</h5>
        <h5>status : {{$payments['status']}}</h5>
        <h5>price : {{$payments['price']}}</h5>
      </li>

    @empty
      <h2 class="red">No payments found!!</h2>
    @endforelse
  </ul>
  @endsection
