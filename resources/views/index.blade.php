@extends('layouts.master')
@section('title', 'Cat List')

@section('header', 'Cat List')



@section('content')



            @foreach($cats as $cat)




                <ul>

         <li>Index: {{$cat->id}}   Name: <strong>{{$cat->name}}</strong></li>


                </ul>


    @endforeach


@endsection
