@extends('app')
@section('title','Codigo')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3x1 text-center font-bold">Ingrese el codigo</h1>
<form id="login-form" class="form" action="login-with-code" method="POST">
    @csrf
    <input type="hidden" name="email" value="{{$email}}">
        <div class="form-group">
            <input type="number" id="typeEmailX"  class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ingresa el codigo" name="code" required/>
        </div>
        <span style="color:red;">@error('code')
    {{$message}}
    @enderror
</span><br>
    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    @endsection
