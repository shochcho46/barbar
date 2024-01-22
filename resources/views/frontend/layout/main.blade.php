<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        @include('admin.layout.meta')
        @vite('resources/css/app.css')
        @include('admin.layout.css')
        @stack('custome-css')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">




		<!--begin::Javascript-->
        @vite('resources/js/app.js')
		@include('admin.layout.js')
        @stack('custome-js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
