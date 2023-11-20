<!DOCTYPE html>
<html lang="en">
    
<!--begin::Head-->
<head>
	<base href=""/>
	<title>{{ $title ?? 'appName' }}</title>
	<meta charset="utf-8" />
	<meta name="description" content="{{ $description ?? 'appDescription' }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="{{ $locale ?? 'es_CO' }}" />
	<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets--> 
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) 
		//if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-sidebar-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
  
	<script>
		var defaultThemeMode = "light"; 
		var themeMode; 
			if ( document.documentElement ) { 
				if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { 
					themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
				} else {
					 if ( localStorage.getItem("data-bs-theme") !== null ) {
						 themeMode = localStorage.getItem("data-bs-theme"); 
						} else { themeMode = defaultThemeMode; } 
					} if (themeMode === "system") { 
						themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
					 } document.documentElement.setAttribute("data-bs-theme", themeMode); }
	</script>
	
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		
			<!--begin::Header-->
			   <x-layouts.header/>               
			<!--end::Header-->

			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				
				<!--begin::Sidebar-->
					<x-layouts.navigation/>
				<!--end::Sidebar-->

				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar mb-5 mb-lg-0">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap"></div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								{{--begin::agregamos el contenido principal en el view --}}
									{{ $slot }}
								{{--end::agregamos el contenido principal en el view --}}
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
						
					</div>
					<!--end::Content wrapper-->

					<!--begin::Footer-->
						<x-layouts.footer
							urlFooter='absystem.com'
						/>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-outline ki-arrow-up"></i>
	</div>
	<!--end::Scrolltop-->

	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

	<!--begin::Redimencion de tabla-->
	<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
	<!--end::Redimencion de tabla-->
	
	<!--end::Javascript-->
</body>
<!--end::Body-->	
</html>