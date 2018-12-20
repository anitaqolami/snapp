<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> فروشگاه لاراول</a>
            <div class="navbar-left">
                <a href="/logut" class="btn btn-sm btn-danger">خروج</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 sidebar">
            <ul class="nav nav-sidbar">
                <li class="active"><a href="{{ Url('admin/panel') }}">پنل اصلی</a></li>
                <li><a href="{{ Url('admin/articles') }}">مقاله ها</a></li>
                <li><a href="{{ Url('admin/courses') }}">دوره ها</a></li>
            </ul>
            <ul class="nav nav-sidbar">
                <li class="active"><a href="{{ Url('admin/comments') }}">همه نظرات<span
                                class="badge">{{  $commentSuccessfulCount }}</span></a></li>
                <li><a href="{{ Url('admin/comments/unsuccessful') }}">نظرات تایید نشده<span
                                class="badge">{{  $commentUnSuccessfulCount }}</span></a></li>
            </ul>
            <ul class="nav nav-sidbar">
                <li><a href="{{Url('/admin/users')}}">کاربران <span class="badge">0</span></a></li>
                <li><a href="{{ Url('admin/payments') }}">پرداختی های موفق <span
                                class="badge">{{ $paymentSuccessfulCount }}</span></a></li>
                <li><a href="{{ Url('admin/payments/unsuccessful') }}">پرداختی های نا موفق <span
                                class="badge">{{ $paymentUnSuccessfulCount }}</span></a>
                </li>
            </ul>
            <ul class="nav nav-sidbar">
                @can('show-comment')
                    <li><a href="#">همه نظرات</a></li>
                    <li><a href="#">نظرات تایید نشده<span class="badge">0</span></a></li>
                @endcan
            </ul>
            <form class="nav nav-sidbar">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</div>