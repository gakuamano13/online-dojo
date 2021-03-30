@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Recommend Top
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('recommends') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                title
                    <input type="text" name="recommends_title" class="form-control">
                </div>
                <div class="col-sm-6">
                lessons_id
                    <input type="text" name="recommends_lessons_id" class="form-control">
                </div>
                <div class="col-sm-6">
                text
                    <input type="text" name="recommends_text" class="form-control">
                </div>
                <div class="col-sm-6">
                flag
                    <input type="text" name="recommends_flag" class="form-control">
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
         @if (count($recommends) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>title</th>
                        <th>lessons_id</th>
                        <th>text</th>
                        <th>flag</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($recommends as $recommend)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $recommend->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $recommend->recommends_title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $recommend->recommends_lessons_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $recommend->recommends_text }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $recommend->recommends_flag }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('recommendsedit/'.$recommend->id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('recommend/'.$recommend->id) }}" method="POST">
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
            {{ $recommends->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/master') }}">Back to Master</a>
    </h2>

@endsection