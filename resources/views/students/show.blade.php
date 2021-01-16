@extends('students.layout')
 
@section('content')
<div class="pull-left">
   <h2>Information of Student</h2>
</div>


        <label>No: {{$student->id}}</label><br>
        <label>Name: {{$student-> studname}} </label><br>
        <label>Coure: {{$student-> course}}  </label><br>
        <label>Fee: {{$student->fee}} </label><br>

        <div class="row">
            <div class="col-lg-12 margin-tb">
              <div class="pull-right">
                  <a class="btn btn-success" href="{{route('students.index')}}"> back</a>
              </div>
            </div>
        </div>
@stop
