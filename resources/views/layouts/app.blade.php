{{-- navbar --}}
@include('inc.navbar-common')

<div id="app">
{{-- yield content --}}
 @yield('content')
 
</div>

{{-- footer --}}
@include('inc.footer-common')

