<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('admin/plugins/global/plugins.bundle.js')}}" ></script> 
		<script src="{{ asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		
		<script src="{{ asset('admin/js/widgets.bundle.js')}}"></script>
		<script src="{{ asset('admin/js/custom/widgets.js')}}"></script>
		<script src="{{ asset('admin/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{ asset('admin/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{ asset('admin/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{ asset('admin/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="{{ asset('admin/js/custom/pages/pricing/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->