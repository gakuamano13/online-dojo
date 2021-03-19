@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('bookings/update') }}" method="POST">

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_name">students_id</label>
                <input type="text" id="item_name" name="bookings_students_id" class="form-control" value="{{$booking->bookings_students_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">datetime</label>
                <input type="datetime-local" id="item_number" name="bookings_datetime" class="form-control" value="{{$booking->bookings_datetime}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">lessons_id</label>
                <input type="text" id="item_number" name="bookings_lessons_id" class="form-control" value="{{$booking->bookings_lessons_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">courses_id</label>
                <input type="text" id="item_number" name="bookings_courses_id" class="form-control" value="{{$booking->bookings_courses_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">flag</label>
                <input type="text" id="item_number" name="bookings_flag" class="form-control" value="{{$booking->bookings_flag}}">
            </div>
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/bookingtop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$booking->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection