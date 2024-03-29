@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('lessons/update') }}" method="POST">

        <div class="form-group">
            <label for="item_name">タイトル</label>
            <input type="text" id="item_name" name="lessons_title" class="form-control" value="{{$lesson->lessons_title}}">
        </div>

        <div class="form-group">
            <label for="item_number">Description</label>
        <input type="text" id="item_number" name="lessons_text" class="form-control" value="{{$lesson->lessons_text}}">
        </div>

        <div class="form-group">
            <label for="item_number">金額</label>
        <input type="text" id="item_number" name="lessons_price" class="form-control" value="{{$lesson->lessons_price}}">
        </div>

        <div class="form-group">
            <label for="item_number">開催日</label>
        <input type="datetime-local" id="item_number" name="lessons_date" class="form-control" value="{{$lesson->lessons_date}}">
        </div>

        <div class="form-group">
            <label for="item_number">週</label>
        <input type="text" id="item_number" name="lessons_week" class="form-control" value="{{$lesson->lessons_week}}">
        </div>

        <div class="form-group">
            <label for="item_number">Teacher ID</label>
        <input type="text" id="item_number" name="teachers_id" class="form-control" value="{{$lesson->teachers_id}}">
        </div>

        <div class="form-group">
            <label for="item_number">Navi ID</label>
        <input type="text" id="item_number" name="navis_id" class="form-control" value="{{$lesson->navis_id}}">
        </div>

        <div class="form-group">
            <label for="item_number">Video URL</label>
        <input type="text" id="item_number" name="lessons_video" class="form-control" value="{{$lesson->lessons_video}}">
        </div>

        <!-- file 追加 -->
        <div class="col-sm-6">
            <label>Lesson photo</label>
            <input type="file" name="lessons_photo">
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/lessontop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$lesson->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection