@extends('master')

@section('title','MESG')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    MESG du centre {{ "191" }}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown">
                            <i class="flaticon2-plus"></i>
                            <span class="kt-nav__link-text">Ajouter</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Search Form -->
            <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="row align-items-center">
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Status:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Canceled</option>
                                            <option value="4">Success</option>
                                            <option value="5">Info</option>
                                            <option value="6">Danger</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Type:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <select class="form-control bootstrap-select" id="kt_form_type">
                                            <option value="">All</option>
                                            <option value="1">Online</option>
                                            <option value="2">Retail</option>
                                            <option value="3">Direct</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                        <a href="#" class="btn btn-default kt-hidden">
                            <i class="la la-cart-plus"></i> New Order
                        </a>
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                    </div>
                </div>
            </div>

            <!--end: Search Form -->

            <!--begin: Selected Rows Group Action Form -->
            <div class="kt-form kt-form--label-align-right kt-margin-t-20 collapse" id="kt_datatable_group_action_form1">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="kt-form__group kt-form__group--inline">
                            <div class="kt-form__label kt-form__label-no-wrap">
                                <label class="kt-font-bold kt-font-danger-">Selected
                                    <span id="kt_datatable_selected_number1">0</span> records:</label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="btn-toolbar">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-brand btn-sm dropdown-toggle" data-toggle="dropdown">
                                                Update status
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Pending</a>
                                                <a class="dropdown-item" href="#">Delivered</a>
                                                <a class="dropdown-item" href="#">Canceled</a>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-sm btn-danger" type="button" id="kt_datatable_delete_all1">Delete All</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_modal_fetch_id_server">Fetch Selected Records</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Selected Rows Group Action Form -->
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                <!--begin: Datatable -->
                <div class="kt-datatable" id="server_record_selection"></div>

                <!--end: Datatable -->
            </div>
        </div>
</div>

@endsection

@section('scripts')
  <script src="js/mesgs-script.js" type="text/javascript"></script>
@endsection
