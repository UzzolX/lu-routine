<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>

	<base href="">
	<meta charset="utf-8" />
	<title>LU Routine - Dashboard @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	@include('admin.partials.global.head')

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">


	@include('admin.layout')

	@include('admin.partials._extras.offcanvas.quick-user')

	@include('admin.partials/_extras/scrolltop')

	@include('admin.partials.global.scripts')

</body>
<!--end::Body-->

</html>