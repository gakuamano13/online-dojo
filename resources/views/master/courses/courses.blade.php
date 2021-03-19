@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Courses Top
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('courses') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                date
                    <input type="date" name="courses_date" class="form-control">
                </div>
                <div class="col-sm-6">
                time
                    <input type="time" name="courses_time" class="form-control">
                </div>
                <div class="col-sm-6">
                week
                    <input type="text" name="courses_week" class="form-control">
                </div>
                <div class="col-sm-6">
                lessons_id
                    <input type="text" name="courses_lessons_id" class="form-control">
                </div>
                <div class="col-sm-6">
                flag
                    <input type="text" name="courses_flag" class="form-control">
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
         @if (count($courses) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>date</th>
                        <th>time</th>
                        <th>week</th>
                        <th>lessons_id</th>
                        <th>flag</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $course->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $course->courses_date }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $course->courses_time }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $course->courses_week }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $course->courses_lessons_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $course->courses_flag }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('coursesedit/'.$course->id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('course/'.$course->id) }}" method="POST">
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
            {{ $courses->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/mastertop') }}">Back to Master</a>
    </h2>

@endsection