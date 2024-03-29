@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('notices/update') }}" method="POST">

        <div class="form-group">
            <label for="item_name">title</label>
            <input type="text" id="item_name" name="notices_title" class="form-control" value="{{$notice->notices_title}}">
        </div>

        <div class="form-group">
            <label for="item_number">text</label>
        <input type="text" id="item_number" name="notices_text" class="form-control" value="{{$notice->notices_text}}">
        </div>

        <div class="form-group">
            <label for="item_number">flag</label>
        <input type="text" id="item_number" name="notices_flag" class="form-control" value="{{$notice->notices_flag}}">
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/noticetop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$notice->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection