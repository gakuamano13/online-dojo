@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('courses/update') }}" method="POST">

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_name">date</label>
                <input type="date" id="item_name" name="courses_date" class="form-control" value="{{$course->courses_date}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">time</label>
                <input type="time" id="item_number" name="courses_time" class="form-control" value="{{$course->courses_time}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">week</label>
                <input type="text" id="item_number" name="courses_week" class="form-control" value="{{$course->courses_week}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">lessons_id</label>
                <input type="text" id="item_number" name="courses_lessons_id" class="form-control" value="{{$course->courses_lessons_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">flag</label>
                <input type="text" id="item_number" name="courses_flag" class="form-control" value="{{$course->courses_flag}}">
            </div>
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/coursetop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$course->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection