@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('lessons/update') }}" method="POST">

        <div class="form-group">
            <label for="item_name">タイトル</label>
            <input type="text" id="item_name" name="title" class="form-control" value="{{$lesson->title}}">
        </div>

        <div class="form-group">
            <label for="item_number">説明</label>
        <input type="text" id="item_number" name="text" class="form-control" value="{{$lesson->text}}">
        </div>

        <!-- file 追加 -->
        <div class="col-sm-6">
            <label>画像</label>
            <input type="file" name="photo">
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