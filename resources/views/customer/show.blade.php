<x-layouts.app
    :title='$customer->nameCustomer'
    description=''
>

<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-150px symbol-circle mb-7">
                                <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{ $customer->nameCustomer }}</a>
                            <!--end::Name-->
                            <!--begin::Email-->
                            <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">Identificación: {{ $customer->identification }}</a>
                            <!--end::Email-->
                        </div>
                        <!--end::Summary-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bold">Detalles</div>
                            <!--begin::Badge-->
                            
                            @if ($customer->statusCustomer)
                                <div class="badge badge-light-success d-inline">Activo</div> 
                            @else
                                <div class="badge badge-light-danger d-inline">Inactivo</div>
                            @endif  
                            <!--begin::Badge-->
                        </div>
                        <!--end::Details toggle-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--begin::Details content-->
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">ID de la Cuenta</div>
                            <div class="text-gray-600">ID-{{ $customer->encrypt_id  }}</div>

                            <div class="fw-bold mt-5">Email de Contacto</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $customer->emailCustomer }}</a>
                            </div>

                            <div class="fw-bold mt-5">Dirección</div>
                            <div class="text-gray-600">101 Collin Street,
                            <br />Melbourne 3000 VIC
                            <br />Australia</div>

                            <div class="fw-bold mt-5">Creación</div>
                            <div class="text-gray-600">{{ $customer->created_at }}</div>

                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_overview">Cupo y Sucursales</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_general">Movimientos</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_advanced">Advanced Settings</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">

                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
                         <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Sucursale(s) - {{ $customer->nameCustomer }}</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_address">
                                    <i class="ki-outline ki-plus-square fs-3"></i>Nueva Sucursal</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                <div class="accordion accordion-icon-toggle" id="kt_customer_view_payment_method_accordion">
                                    <!--begin::Option-->
                                    <div class="py-0" data-kt-customer-payment-method="row">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="accordion-header d-flex align-items-center" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                <!--begin::Arrow-->
                                                <div class="accordion-icon me-2">
                                                    <i class="ki-outline ki-right fs-4"></i>
                                                </div>
                                                <!--end::Arrow-->
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-gray-800 fw-bold">Mastercard</div>
                                                        <div class="badge badge-light-primary ms-5">Primary</div>
                                                    </div>
                                                    <div class="text-muted">Expires Dec 2024</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Toolbar-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Edit-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                        <i class="ki-outline ki-pencil fs-3"></i>
                                                    </span>
                                                </a>
                                                <!--end::Edit-->
                                                <!--begin::Delete-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                    <i class="ki-outline ki-trash fs-3"></i>
                                                </a>
                                                <!--end::Delete-->
                                                <!--begin::More-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="ki-outline ki-setting-3 fs-3"></i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::More-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method_accordion">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap py-5">
                                                <!--begin::Col-->
                                                <div class="flex-equal me-5">
                                                    <table class="table table-flush fw-semibold gy-1">
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Name</td>
                                                            <td class="text-gray-800">Emma Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Number</td>
                                                            <td class="text-gray-800">**** 7407</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Expires</td>
                                                            <td class="text-gray-800">12/2024</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Type</td>
                                                            <td class="text-gray-800">Mastercard credit card</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                            <td class="text-gray-800">VICBANK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">ID</td>
                                                            <td class="text-gray-800">id_4325df90sdf8</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="flex-equal">
                                                    <table class="table table-flush fw-semibold gy-1">
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                            <td class="text-gray-800">AU</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Phone</td>
                                                            <td class="text-gray-800">No phone provided</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Email</td>
                                                            <td class="text-gray-800">
                                                                <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Origin</td>
                                                            <td class="text-gray-800">Australia
                                                            <div class="symbol symbol-20px symbol-circle ms-2">
                                                                <img src="assets/media/flags/australia.svg" />
                                                            </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                            <td class="text-gray-800">Passed
                                                            <i class="ki-outline ki-check-circle fs-2 text-success"></i></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-0" data-kt-customer-payment-method="row">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="accordion-header d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
                                                <!--begin::Arrow-->
                                                <div class="accordion-icon me-2">
                                                    <i class="ki-outline ki-right fs-4"></i>
                                                </div>
                                                <!--end::Arrow-->
                                                <!--begin::Logo-->
                                                <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-gray-800 fw-bold">American Express</div>
                                                        <div class="badge badge-light-danger ms-5">Expired</div>
                                                    </div>
                                                    <div class="text-muted">Expires Aug 2021</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Toolbar-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Edit-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                                        <i class="ki-outline ki-pencil fs-3"></i>
                                                    </span>
                                                </a>
                                                <!--end::Edit-->
                                                <!--begin::Delete-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
                                                    <i class="ki-outline ki-trash fs-3"></i>
                                                </a>
                                                <!--end::Delete-->
                                                <!--begin::More-->
                                                <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="ki-outline ki-setting-3 fs-3"></i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::More-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_customer_view_payment_method_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method_accordion">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap py-5">
                                                <!--begin::Col-->
                                                <div class="flex-equal me-5">
                                                    <table class="table table-flush fw-semibold gy-1">
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Name</td>
                                                            <td class="text-gray-800">Max Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Number</td>
                                                            <td class="text-gray-800">**** 2248</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Expires</td>
                                                            <td class="text-gray-800">08/2021</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Type</td>
                                                            <td class="text-gray-800">American express credit card</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                            <td class="text-gray-800">USABANK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">ID</td>
                                                            <td class="text-gray-800">id_89457jcje63</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="flex-equal">
                                                    <table class="table table-flush fw-semibold gy-1">
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                            <td class="text-gray-800">US</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Phone</td>
                                                            <td class="text-gray-800">No phone provided</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Email</td>
                                                            <td class="text-gray-800">
                                                                <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Origin</td>
                                                            <td class="text-gray-800">United States of America
                                                            <div class="symbol symbol-20px symbol-circle ms-2">
                                                                <img src="assets/media/flags/united-states.svg" />
                                                            </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                            <td class="text-gray-800">Failed
                                                            <i class="ki-outline ki-cross fs-2 text-danger"></i></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                         <!--end::Card-->      
                    </div>
                    <!--end:::Tab pane-->

                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
                        <!--begin::Card-->
                        <div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
                            <div class="col">
                                <!--begin::Card-->
                                <div class="card pt-4 h-md-100 mb-6 mb-md-0">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold">Reward Points</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="fw-bold fs-2">
                                            <div class="d-flex">
                                                <i class="ki-outline ki-heart text-info fs-2x"></i>
                                                <div class="ms-2">4,571
                                                <span class="text-muted fs-4 fw-semibold">Points earned</span></div>
                                            </div>
                                            <div class="fs-7 fw-normal text-muted">Earn reward points with every purchase.</div>
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <div class="col">
                                <!--begin::Reward Tier-->
                                <a href="#" class="card {{ $customer->statusCustomer ? ' bg-info' : 'bg-danger' }} hoverable h-md-100">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <i class="ki-outline ki-award text-white fs-3x ms-n1"></i>
                                        <div class="text-white fw-bold fs-2 mt-5">Cupo</div>
                                        <div class="fw-semibold text-white">300@</div>
                                    </div>
                                    <!--end::Body-->
                                </a>
                                <!--end::Reward Tier-->
                            </div>
                        </div>
                        
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Transaction History</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                        <tr class="text-start text-muted text-uppercase gs-0">
                                            <th class="min-w-100px">order No.</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th class="min-w-100px">Rewards</th>
                                            <th class="min-w-100px">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15117</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$1,200.00</td>
                                            <td>120</td>
                                            <td>14 Dec 2020, 8:43 pm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15375</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$79.00</td>
                                            <td>7</td>
                                            <td>01 Dec 2020, 10:12 am</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14791</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$5,500.00</td>
                                            <td>550</td>
                                            <td>12 Nov 2020, 2:01 pm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15321</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>$880.00</td>
                                            <td>88</td>
                                            <td>21 Oct 2020, 5:54 pm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15617</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$7,650.00</td>
                                            <td>765</td>
                                            <td>19 Oct 2020, 7:32 am</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14943</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$375.00</td>
                                            <td>37</td>
                                            <td>23 Sep 2020, 12:38 am</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15414</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>$129.00</td>
                                            <td>12</td>
                                            <td>11 Sep 2020, 3:18 pm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15655</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>$450.00</td>
                                            <td>45</td>
                                            <td>03 Sep 2020, 1:08 am</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../../demo50/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14428</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>$8,700.00</td>
                                            <td>870</td>
                                            <td>01 Sep 2020, 4:58 pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->

                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">

                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->							



</x-layouts.app>	
