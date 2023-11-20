<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
   
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary">
        <!--begin::Logo-->
        <div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 pb-2" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            <a href="{{ route('home') }}">
                <img alt="Logo" src="{{ asset('assets/media/logos/demo50.svg') }}" class="h-30px" />
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Logo-->
        <!--begin::Primary menu-->
        <div class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-ms my-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                    <!--begin:Menu link-->
                    <span class="menu-link menu-center">
                        <span class="menu-icon me-0">
                            <i class="ki-outline ki-handcart fs-1"></i>
                        </span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu content-->
                            <div class="menu-content">
                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">Basico</span>
                            </div>
                            <!--end:Menu content-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-outline ki-rocket fs-2"></i>
                                </span>
                                <span class="menu-title">Titulo</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="{{ route('customer.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Clientes</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Primary menu-->

        <!--begin::Footer menu User and close-->
                <x-layouts.usermenu/>
        <!--end::Footer-->
    </div>
    <!--end::Sidebar primary-->


    <!--begin::Sidebar secondary-->
    <div class="app-sidebar-secondary">
        <!--begin::Sidebar secondary menu-->
        <div class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 py-4 py-lg-6" id="kt_app_sidebar_secondary_menu" data-kt-menu="true">
            <div id="kt_app_sidebar_secondary_menu_wrapper" class="hover-scroll-y mx-3 px-4" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_sidebar_secondary_menu" data-kt-scroll-offset="20px">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link active" href="../../demo50/dist/index.html">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Default</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="../../demo50/dist/dashboards/ecommerce.html">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">eCommerce</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
            </div>
        </div>
        <!--end::Sidebar secondary menu-->
    </div>
    <!--end::Sidebar secondary-->
    
    <!--begin::Sidebar secondary toggle-->
    <button id="kt_app_sidebar_secondary_toggle" class="app-sidebar-secondary-toggle btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-color-primary position-absolute translate-middle z-index-1 start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-4" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-secondary-collapse">
        <i class="ki-outline ki-arrow-left fs-2 rotate-180"></i>
    </button>
    <!--end::Sidebar secondary toggle-->
    
</div>