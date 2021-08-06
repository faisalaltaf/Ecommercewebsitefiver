@extends('dashboard.patient.layout.main')

@section('content')


<h1>Pateint {{Auth::guard('web')->user()->name}}</h1>      
    <p>{{Auth::guard('web')->user()->email}}</p>



    @endsection