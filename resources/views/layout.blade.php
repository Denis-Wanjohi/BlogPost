@include('partials/_meta')
<body >
    @include('partials/_header')
    @yield('content')
    <footer class="footer mt-auto">
           <div class="row">
            
            <i class="text-center">Copyright <a href="mailto:gightkingss@gmail.com">@csboys</a></i>
           </div>
    </footer>
    {{-- <script src="node_modules/@popperjs/core/dist/cjs/popper.js"></script> --}}
   
</body>
</html>