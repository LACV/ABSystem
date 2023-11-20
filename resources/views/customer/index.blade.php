<x-layouts.app
    title='Customers'
    description=''
>
<!--begin::Card-->
<div class="card">

    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                <input 
                    type="text" 
                    data-table-filter="search" 
                    class="form-control form-control-solid w-250px ps-13" 
                    placeholder="Buscar Clientes" 
                />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <!--begin::Filter-->
                <div class="w-150px me-3">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Estado" data-kt-ecommerce-order-filter="status">
                        <option></option>
                        <option value="all">Todos</option>
                        <option value="active">Activo</option>
                        <option value="locked">Desactivado</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--end::Filter-->
                <!--begin::Export
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                <i class="ki-outline ki-exit-up fs-2"></i>Export</button>
               end::Export-->
                <!--begin::Add customer-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Nuevo Cliente</button>
                <!--end::Add customer-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                <div class="fw-bold me-5">
                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Seleccionado</div>
                <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Cliente</th>
                    <th class="min-w-125px">Identificación</th>
                    <th class="min-w-125px">Email</th>
                    <th class="min-w-125px">Estado</th>
                    <th class="min-w-125px">Fecha de Creación</th>
                    <th class="text-end min-w-70px">Acciones</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach ($customers as $customer)
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <a href="{{ route("customer.show",$customer->encrypt_id) }}" class="text-gray-800 text-hover-primary mb-1">{{ $customer->nameCustomer }}</a>
                        </td>
                        <td>
                            {{ $customer->identification }}
                        </td>
                        <td>
                            <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $customer->emailCustomer }}</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            @if ($customer->statusCustomer)
                                <div class="badge badge-light-success d-inline">Activo</div> 
                            @else
                                <div class="badge badge-light-danger d-inline">Inactivo</div>
                            @endif          
                            <!--end::Badges-->
                        </td>
                        <td>
                            {{ $customer->created_at }}
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acción
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Ver</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Desactivar</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr> 
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->									

    <!--begin::forms modal customers-->
        <x-customers.frmcustomer
            formTitle='Nuevo Cliente'
        >
        </x-customers.frmcustomer>   
        <x-customers.exportcustomer/>
    <!--end::forms modal customers-->

</x-layouts.app>
    

<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/absystem/customers/listing.js"></script>
        <script src="assets/js/custom/absystem/customers/p.js"></script>
	<!--begin::file to validate and close form-->
        <script src="assets/js/custom/absystem/customers/add.js"></script>
    <!--end::file to validate and close form-->   
		<script src="assets/js/custom/absystem/customers/export.js"></script>
<!--end::Custom Javascript-->		