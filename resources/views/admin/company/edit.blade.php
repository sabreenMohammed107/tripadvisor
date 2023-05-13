@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Company</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Company</li>

                    <li class="breadcrumb-item text-dark">All</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->

        </div>
    </div>
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                action="{{ route('company.update', $company->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">About Us</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_advanced">Home Banner</a>
                        </li>
                        <!--end:::Tab item-->

                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_fixed_advanced">Home Sections</a>
                        </li>
                        <!--end:::Tab item-->


                        <!--begin:::Tab item-->
                        {{-- <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_days_advanced">Days</a>
                        </li> --}}
                        <!--end:::Tab item-->
                    </ul>

                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>About Us</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Where</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="where" class="form-control mb-2"
                                                    placeholder="where" value="{{ $company->where }}" />


                                            </div>
                                            <!--end::Input-->

                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> When</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="when" class="form-control mb-2"
                                                    placeholder="when" value="{{ $company->when }}" />


                                            </div>
                                        </div>
                                        <!--end::Input-->




                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">

                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">what_we_are</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <textarea class="form-select form-select-solid" id="kt_docs_tinymce_basic2" name="what_we_are">{{ $company->what_we_are }}</textarea>
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">

                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">google map</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <textarea class="form-select form-select-solid" id="kt_docs_tinymce_basic2" name="google_map">{{ $company->google_map }}</textarea>
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--begin::Social options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Social links</h2>
                                                </div>
                                                <!--begin::Row-->

                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                    data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">


                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <!--begin::Label-->
                                                        <label class="form-label">Youtube Account</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control mb-2" name="youtube"
                                                            placeholder="Youtube Account" value="{{ $company->youtube }}" />
                                                        <!--end::Input-->
                                                        <!--end::Option-->
                                                    </div>

                                                    <!--begin::Tax-->
                                                    <div class="col">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row w-100 flex-md-root">
                                                            <label class=" form-label">Instagram</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="instagram" class="form-control mb-2"
                                                                placeholder="instagram" value="{{ $company->instagram }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col">
                                                        <div class="fv-row w-100 flex-md-root">
                                                            <!--begin::Label-->
                                                            <label class=" form-label">Fb Account</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="facebook" class="form-control mb-2"
                                                                placeholder="facebook" value="{{ $company->facebook }}" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end:Tax-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <!--end::Card header-->


                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Social options-->



                                        <!--begin::checkbox-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">google_plus</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="google_plus" class="form-control mb-2"
                                                    placeholder="google_plus" value="{{ $company->google_plus }}" />


                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> linkedin</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="linkedin" class="form-control mb-2"
                                                    placeholder="linkedin" value="{{ $company->linkedin }}" />


                                            </div>
                                            <!--end::Input-->


                                        </div>
                                        <!--end::Input-->


                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->

                                <!--end::General options-->
                            </div>
                        </div>
                        {{-- tab 2  --}}
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Home Banner</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Banner Title</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" required name="title" class="form-control mb-2"
                                                    placeholder=" Title" value="{{ $company->title }}" />


                                            </div>
                                            <!--end::Input-->


                                        </div>
                                        <!--end::Input-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Banner Sub Title</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="subtitle" class="form-control mb-2"
                                                    placeholder="  Sub Title" value="{{ $company->subtitle }}" />


                                            </div>
                                            <!--end::Input-->


                                        </div>
                                        <!--end::Input-->










                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_ecommerce_add_fixed_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Contact Sections</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">Overview</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <textarea class="form-select form-select-solid" id="kt_docs_tinymce_basic" name="overview">{{ $company->overview }}</textarea>
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">Address</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <textarea class="form-select form-select-solid" id="kt_docs_tinymce_basic2" name="address">{{ $company->address }}</textarea>
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <!--begin::Input group-->
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">Phone</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <input type="text" name="phone" class="form-control mb-2"
                                                    placeholder="phone" value="{{ $company->phone }}" />
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="form-label">Email</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <input type="text" name="email" class="form-control mb-2"
                                                    placeholder="email" value="{{ $company->email }}" />
                                                <!--end::Editor-->

                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <!--begin::Input group-->




                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('company.edit', $company->id) }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>

    <!--end::Post-->
@endsection
