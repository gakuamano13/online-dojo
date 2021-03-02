@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('helps/update') }}" method="POST">

        <div class="form-group">
            <label for="item_name">title</label>
            <input type="text" id="item_name" name="title" class="form-control" value="{{$help->title}}">
        </div>

        <div class="form-group">
            <label for="item_number">text</label>
        <input type="text" id="item_number" name="text" class="form-control" value="{{$help->text}}">
        </div>

        <div class="form-group">
            <label for="item_number">flag</label>
        <input type="text" id="item_number" name="flag" class="form-control" value="{{$help->flag}}">
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/helptop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$help->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection