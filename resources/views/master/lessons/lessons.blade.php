@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            レッスン一覧
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('lessons') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                タイトル
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-sm-6">
                説明
                    <input type="text" name="text" class="form-control">
                </div>
                <div class="col-sm-6">
                金額
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="col-sm-6">
                開催日
                    <input type="datetime-local" name="date" class="form-control">
                </div>
                <div class="col-sm-6">
                Lesson URL
                    <input type="text" name="url" class="form-control">
                </div>
                <div class="col-sm-6">
                Lesson pass
                    <input type="text" name="pass" class="form-control">
                </div>
                <div class="col-sm-6">
                Teacher ID
                    <input type="text" name="teachers_id" class="form-control">
                </div>
                <div class="col-sm-6">
                Teacher Name
                    <input type="text" name="teachers_name" class="form-control">
                </div>
                <div class="col-sm-6">
                Teacher photo
                    <input type="text" name="teachers_photo" class="form-control">
                </div>
                <div class="col-sm-6">
                Navi ID
                    <input type="text" name="navis_id" class="form-control">
                </div>
                <div class="col-sm-6">
                Navi Name
                    <input type="text" name="navis_name" class="form-control">
                </div>
                <div class="col-sm-6">
                Navi photo
                    <input type="text" name="navis_photo" class="form-control">
                </div>
                <div class="col-sm-6">
                Video URL
                    <input type="text" name="video" class="form-control">
                </div>
                <!-- file 追加 -->
                <div class="col-sm-6">
                <div>
                    <label>Lesson photo</label>
                </div>
                    <input type="file" name="photo">
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
         @if (count($lessons) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>タイトル</th>
                        <th>説明</th>
                        <th>金額</th>
                        <th>開催日</th>
                        <th>LessonURL</th>
                        <th>LessonPass</th>
                        <th>教ID</th>
                        <th>教Name</th>
                        <th>教photo</th>
                        <th>導ID</th>
                        <th>導Name</th>
                        <th>導photo</th>
                        <th>VideoURL</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $lesson->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->title }}</div>
                                    <div> <img src="upload/{{$lesson->photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->text }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->price }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->date }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->url }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->pass }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->teachers_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->name}}</div>
                                </td>


                                <td class="table-text">
                                    <div>{{ $lesson->video }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('lessonsedit/'.$lesson->id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('lesson/'.$lesson->id) }}" method="POST">
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
            {{ $lessons->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/mastertop') }}">Back to Master</a>
    </h2>

@endsection