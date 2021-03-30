@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Lesson-Teacher-Navi
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
    

    <!-- 既に登録されてるリスト -->

        <!-- 現在 -->
        @if (count($lessons) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>LessonID</th>
                        <th>タイトル</th>
                        <th>Description</th>
                        <th>金額</th>
                        <th>開催日</th>
                        <th>週</th>
                        <th>LessonURL</th>
                        <th>LessonPass</th>
                        <th>教ID</th>
                        <th>教Name</th>
                        <th>教photo</th>
                        <th>導ID</th>
                        <th>導Name</th>
                        <th>導photo</th>
                        <th>VideoURL</th>
                    </thead>
                    <!-- テーブル本体 -->
                    
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $lesson->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_title }}</div>
                                    <div> <img src="upload/{{$lesson->lessons_photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_text }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_price }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_date }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_week }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_url }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_pass }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->teachers_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->teachers_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div> <img src="upload/{{$lesson->teachers_photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->navis_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->navis_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div> <img src="upload/{{$lesson->navis_photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->lessons_video }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
            {{ $lessons->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/master') }}">Back to Master</a>
    </h2>

@endsection