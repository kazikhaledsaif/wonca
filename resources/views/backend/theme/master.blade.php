<!DOCTYPE html>
<html lang="en">

@include('backend.theme.ui.includes.head')
<body id="page-top">

@include('backend.theme.ui.includes.navbar')

<div id="wrapper">

    @include('backend.theme.ui.includes.sidebar')
    <div id="content-wrapper">

        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->

        @include('backend.theme.ui.includes.footer')
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('backend.theme.ui.includes.modal')
<!-- Bootstrap core JavaScript-->
@include('backend.theme.ui.includes.script')
@stack('script')

</body>

</html>
