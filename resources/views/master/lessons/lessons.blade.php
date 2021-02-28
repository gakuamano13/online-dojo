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

            <!-- タイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                タイトル
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-sm-6">
                説明
                    <input type="text" name="text" class="form-control">
                </div>
                <!-- file 追加 -->
                <div class="col-sm-6">
                <div>
                    <label>写真</label>
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
                        <th>タイトル</th>
                        <th>説明</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <!-- タイトル -->
                                <td class="table-text">
                                    <div>{{ $lesson->title }}</div>
                                    <div> <img src="upload/{{$lesson->photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->text }}</div>
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

@endsection