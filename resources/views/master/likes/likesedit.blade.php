@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('likes/update') }}" method="POST">

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_name">students_id</label>
                <input type="text" id="item_name" name="likes_students_id" class="form-control" value="{{$like->likes_students_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">teachers_id</label>
                <input type="text" id="item_number" name="likes_teachers_id" class="form-control" value="{{$like->likes_teachers_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">navis_id</label>
                <input type="text" id="item_number" name="likes_navis_id" class="form-control" value="{{$like->likes_navis_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">lessons_id</label>
                <input type="text" id="item_number" name="likes_lessons_id" class="form-control" value="{{$like->likes_lessons_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">courses_id</label>
                <input type="text" id="item_number" name="likes_courses_id" class="form-control" value="{{$like->likes_courses_id}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="item_number">flag</label>
                <input type="text" id="item_number" name="likes_flag" class="form-control" value="{{$like->likes_flag}}">
            </div>
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/liketop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$like->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection