<!DOCTYPE html>
<html lang="en-US">
@include('frontend.theme.ui.includes.head')
<body>


@include('frontend.theme.ui.includes.navbar')


@yield('content')


{{-- footer--}}
@include('frontend.theme.ui.includes.footer')

@include('frontend.theme.ui.includes.script')
@stack('script')
<script >
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            dots:false,
            responsiveClass: true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true
        });
    });
</script>
</body>
</html>
