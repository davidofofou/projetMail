@extends('students.layout')

@section('content')
<div class="col-lg-12 margin-tp">
    <div class="pull-left">
        <h2>Edit Product</h2>
    </div>
    <div class="pull-right">
     <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    </div>
</div> 
<form action="{{route('students.update',$student->id)}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudName</strong>
            <input type="text" name="studname" value="{{$student->sudname}}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <strong>Course</strong>
            <input type="text" name="course" value="{{$student->course}}" class="form-control" placeholder="Course">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee</strong>
            <input type="text" name="fee" value="{{$student->fee}}" class="form-control" placeholder="Fee">
        </div>
        <br>
        <div class="col-xd-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
