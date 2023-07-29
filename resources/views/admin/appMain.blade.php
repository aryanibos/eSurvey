@include('admin.partials.navbar')
@yield('css')
@include('admin.partials.header')
@include('admin.partials.sidebar')

<div class="page-wrapper">
    <div class="content container-fluid">
        @yield('content')
    </div>
</div>

@yield('script')
@include('admin.partials.footer')
