{{-- head (meta, title, ..)--}}
@include('common.head')
{{-- header --}}
@include('common.header')
    {{-- main part --}}
    <div class="main-wrapper">
        @yield('content')
    </div>
{{-- footer --}}
@include('common.footer')