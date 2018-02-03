@include('admin.partials.admin_header')
@include('admin.partials.admin_main_menu')

@if($flash = session('success'))
    <div class="alert alert-success" id="success-message">
        {{ $flash }}
    </div>
@endif

@yield('content')

@include('admin.partials.admin_footer')