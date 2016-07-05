<!DOCTYPE html>
<html lang="en">
<!--header-->
@include('admin.layout.header')
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $title }}
        </h1>
        <ol class="breadcrumb">
            @include('admin.layout.breadcrumb')
        </ol>
    </section>
    <section class="content">
        @yield('content')
    </section>
</div>

<!-- footer -->
@include('admin.layout.footer')
</div>
<!-- srcript -->
@include('javascript')
@if(count($javascript_files))
    @foreach($javascript_files as $file)
        <script type="text/javascript" src="{{ asset($file) }}"></script>
    @endforeach
     @stack('scripts')
@endif

</html>
