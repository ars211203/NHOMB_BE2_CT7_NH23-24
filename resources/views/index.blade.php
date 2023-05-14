@extends('admin.dashboard')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Quản lý người dùng</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bodered">
                <thead>
                    <th>STT</th>
                    <th>Tên người dùng</th>
                    <th>Tên Đăng nhập</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Loại tài khoản</th>
                    <th>Version</th>
                    <th>Avatar</th>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$user->user_fullname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->user_password}}</td>
                        <td>{{$user->user_type}}</td>
                        <td>{{$user->user_version}}</td>
                        <td><img src="{{asset('/storage/images/users/'.$user->user_image)}}" alt="" height="50px"></td>
                        <td>
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-info">Sửa</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection