@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Booking Top
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('bookings') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                students_id
                    <input type="text" name="bookings_students_id" class="form-control">
                </div>
                <div class="col-sm-6">
                datetime
                    <input type="datetime-local" name="bookings_datetime" class="form-control">
                </div>
                <div class="col-sm-6">
                lessons_id
                    <input type="text" name="bookings_lessons_id" class="form-control">
                </div>
                <div class="col-sm-6">
                courses_id
                    <input type="text" name="bookings_courses_id" class="form-control">
                </div>
                <div class="col-sm-6">
                flag
                    <input type="text" name="bookings_flag" class="form-control">
                </div>
            </div>

            <!-- 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- 既に登録されてるリスト -->

         <!-- 現在 -->
         @if (count($bookings) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>students_id</th>
                        <th>datetime</th>
                        <th>lessons_id</th>
                        <th>courses_id</th>
                        <th>flag</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $booking->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->bookings_students_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->bookings_datetime }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->bookings_lessons_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->bookings_courses_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $booking->bookings_flag }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('bookingsedit/'.$booking->id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('booking/'.$booking->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger">
                                            del
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
            {{ $bookings->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/mastertop') }}">Back to Master</a>
    </h2>

@endsection