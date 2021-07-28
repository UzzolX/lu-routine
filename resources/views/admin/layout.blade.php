<!--begin::Main-->
@include('admin.partials/_header-mobile')
<div class="d-flex flex-column flex-root">

	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">

		
		@include('admin.partials/_aside')
		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

			
			@include('admin.partials/_header')

			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">


				<!--Content area here-->
				@yield('content')
				
			</div>
			<!--end::Content-->
			
		</div>

		<!--end::Wrapper-->
	</div>

	<!--end::Page-->
</div>

<!--end::Main-->