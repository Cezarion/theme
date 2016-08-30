{{-- head (meta, title, ..)--}}
@include('common.head')
{{-- header --}}
@include('common.header')
    {{-- main part --}}
    <div class="wrap container" role="document">
        <div class="content row">
            <main class="main">
                @yield('content')
            </main>
        </div>
    </div>
{{-- footer --}}
@include('common.footer')