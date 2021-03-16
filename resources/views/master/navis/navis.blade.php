@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Navi Top
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('navis') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                Name
                    <input type="text" name="navis_name" class="form-control">
                </div>
                <div class="col-sm-6">
                e-mail
                    <input type="text" name="navis_email" class="form-control">
                </div>
                <div class="col-sm-6">
                flag
                    <input type="text" name="navis_flag" class="form-control">
                </div>
                <div class="col-sm-6">
                Login ID
                    <input type="text" name="navis_login_id" class="form-control">
                </div>
                <div class="col-sm-6">
                pass
                    <input type="text" name="navis_pass" class="form-control">
                </div>
                <div class="col-sm-6">
                Tel
                    <input type="text" name="navis_tel" class="form-control">
                </div>
                <!-- file 追加 -->
                <div class="col-sm-6">
                <div>
                    <label>photo</label>
                </div>
                    <input type="file" name="navis_photo">
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
         @if (count($navis) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>e-mail</th>
                        <th>flag</th>
                        <th>loginID</th>
                        <th>pass</th>
                        <th>tel</th>
                        <th>更新</th>
                        <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($navis as $navi)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $navi->navis_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_name }}</div>
                                    <div> <img src="upload/{{$navi->navis_photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_flag }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_login_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_pass }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $navi->navis_tel }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('navisedit/'.$navi->navis_id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('navi/'.$navi->navis_id) }}" method="POST">
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
            {{ $navis->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/mastertop') }}">Back to Master</a>
    </h2>

@endsection