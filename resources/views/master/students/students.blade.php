@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            Student Top
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('students') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                Name
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-sm-6">
                e-mail
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-sm-6">
                flag
                    <input type="text" name="flag" class="form-control">
                </div>
                <div class="col-sm-6">
                Login ID
                    <input type="text" name="login_id" class="form-control">
                </div>
                <div class="col-sm-6">
                pass
                    <input type="text" name="pass" class="form-control">
                </div>
                <div class="col-sm-6">
                Tel
                    <input type="text" name="tel" class="form-control">
                </div>
                <!-- file 追加 -->
                <div class="col-sm-6">
                <div>
                    <label>photo</label>
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
         @if (count($students) > 0)
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
                        @foreach ($students as $student)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $student->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->name }}</div>
                                    <div> <img src="upload/{{$student->photo}}" width="100"></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->flag }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->login_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->pass }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $student->tel }}</div>
                                </td>

                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('studentsedit/'.$student->id) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        update
                                        </button>
                                    </form>
                                </td>
                                <!-- 削除ボタン -->
                                <td>
                                    <form action="{{ url('student/'.$student->id) }}" method="POST">
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
            {{ $students->links()}}
            </div>
        </div>

    @endif

    <h2>
    <a href="{{ url('/mastertop') }}">Back to Master</a>
    </h2>

@endsection