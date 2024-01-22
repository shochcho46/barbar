<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend.layout.meta')

        @include('frontend.layout.css')
        @vite('resources/css/app.css')
        @stack('custome-css')



    </head>
    <body id="kt_body" class="app-blank app-blank">
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>

        @yield('content')

        
    </body>
    <!--begin::Javascript-->
        @vite('resources/js/app.js')
		@include('frontend.layout.js')
        @stack('custome-js')
	<!--end::Javascript-->
</html>


