@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('navis/update') }}" method="POST">

    <div class="form-group">
            <label for="item_name">Name</label>
            <input type="text" id="item_name" name="navis_name" class="form-control" value="{{$navi->navis_name}}">
        </div>

        <div class="form-group">
            <label for="item_number">e-mail</label>
        <input type="text" id="item_number" name="navis_email" class="form-control" value="{{$navi->navis_email}}">
        </div>

        <div class="form-group">
            <label for="item_number">flag</label>
        <input type="text" id="item_number" name="navis_flag" class="form-control" value="{{$navi->navis_flag}}">
        </div>

        <div class="form-group">
            <label for="item_number">login id</label>
        <input type="text" id="item_number" name="navis_login_id" class="form-control" value="{{$navi->navis_login_id}}">
        </div>

        <div class="form-group">
            <label for="item_number">pass</label>
        <input type="text" id="item_number" name="navis_pass" class="form-control" value="{{$navi->navis_pass}}">
        </div>

        <div class="form-group">
            <label for="item_number">tel</label>
        <input type="text" id="item_number" name="navis_tel" class="form-control" value="{{$navi->navis_tel}}">
        </div>

        <!-- file 追加 -->
        <div class="col-sm-6">
            <label>photo</label>
            <input type="file" name="navis_photo">
        </div>

        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/navitop') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
            
            <!-- id値を送信 -->
            <input type="hidden" name="id" value="{{$navi->id}}">
            <!--/ id値を送信 -->
            
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
            
    </form>
    </div>
</div>
@endsection