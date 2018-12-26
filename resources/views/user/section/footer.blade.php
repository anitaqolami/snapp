
<!-- Main Footer -->

    {{--<footer class="main-footer">--}}
<footer>
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
    </footer>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{ url('js/admin.js') }}"></script>
<script src="{{ Url('js/app.js') }}"></script>

<!-- Bootstrap 4 -->

{{--<script src="{{ url('js/bootstrap-select.min.js') }}"></script>--}}

<!-- AdminLTE App -->
<script src="{{ url('js/adminlte.min.js') }}"></script>



{{--<script src="{{ Url('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ Url('js/bootstrap.min.js') }}"></script>--}}

<!-- SweetAlert -->

<script src="{{Url('js/sweetalert.min.js')}}"></script>
@yield('script')
{{--@include('sweet::alert')--}}

