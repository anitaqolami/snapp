@extends('Admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="page-header head-section">
                    <h2>مدیران سایت</h2>
                    <div class="btnbtn-group">
                        <a href="{{ route('level.create') }}" class="btn btn-sm btn-primary">سطح مقام برای کاربر</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>نام کاربر</th>
                            <th>ایمیل</th>
                            <th>مقام</th>
                            <th>تنظیمات</th>
                            <th>ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            @if(count($role->users))
                                @foreach($role->users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $role->name }}-{{ $role->label }}</td>
                                        <td>
                                        <td>
                                            <form action="{{ route('level.destroy' , ['id'=>$user->id]) }}" method='post'>
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{ route('level.edit' , ['id'=>$user->id]) }}"
                                                       class="btn btn-primary">ویرایش</a>
                                                    <button type="submit" class="btn btn-danger">حذف</button>
                                                </div>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center">{{ $roles->render() }}</div>
                {{--<div style="text-align: center">{!! $roles->render() !!}</div>--}}
                {{--<div style="text-align: center">{{ $roles->links() }}</div>--}}
            </div>
        </div>
    </div>
@endsection