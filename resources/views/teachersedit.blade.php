@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('teachers/update') }}" method="POST">

        <div class="form-group">
            <label for="item_name">名前</label>
            <input type="text" id="item_name" name="name" class="form-control" value="{{$teacher->name}}">
        </div>

        <div class="form-group">
            <label for="item_number">e-mail</label>
        <input type="text" id="item_number" name="email" class="form-control" value="{{$teacher->email}}">
        </div>

        <!-- file 追加 -->
        <div class="col-sm-6">
            <label>画像</label>
            <input type="file" name="photo">
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/teachertop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$teacher->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection