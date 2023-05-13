@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">hotels</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">hotels</li>

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
            action="{{ route('hotels.update', $row->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

   <!--begin::Thumbnail settings-->
   <div class="card card-flush py-4">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title">
            <h2>Thumbnail</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body text-center pt-0">
       <!--begin::Image input wrapper-->
       <div class="card-body text-center pt-0">
        <!--begin::Image input-->
        <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
            style="background-image: url('{{ asset('uploads/hotels') }}/{{ $row->banner }}')">
            <div class="image-input-wrapper w-150px h-150px"
                style="background-image: url(' {{ asset('uploads/hotels') }}/{{ $row->banner }}')">

            </div>
            <!--end::Preview existing avatar-->
            <!--begin::Edit-->
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <i class="bi bi-pencil-fill fs-7"></i>
                <!--begin::Inputs-->
                <input type="file" name="banner" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="avatar_remove" />
                <!--end::Inputs-->
            </label>
            <!--end::Edit-->

        </div>
        <!--end::Image input-->
    </div>
    <!--end::Image input wrapper-->

    </div>
    <!--end::Card body-->
</div>
<!--end::Thumbnail settings-->

                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="mb-3">
                            <label class="form-label">title</label>
                            <input type="text" id="title" value="{{ $row->title }}"
                                                               name="title"  class="form-control  @error('title') is-invalid @enderror">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">address</label>
                            <input type="text" id="address" value="{{ $row->address }}"
                                                               name="address"  class="form-control  @error('address') is-invalid @enderror">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="form-label"> hotel_brief</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <textarea class="form-control form-control-solid" rows="3" name="trip_brief" placeholder="text">{{ $row->trip_brief  }}</textarea>
                            <!--end::Editor-->

                        </div>


                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label"> overview</label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <textarea class="form-control form-control-solid" rows="3" name="overview" placeholder="text">{{ $row->overview  }}</textarea>
                        <!--end::Editor-->

                    </div>

                    <div class="mb-3">
                        <label class="form-label">cost</label>
                        <input type="text" id="cost" value="{{ $row->cost }}"
                                                           name="cost"  class="form-control  @error('cost') is-invalid @enderror">
                        @error('cost')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                                        placeholder="Youtube Account" value="{{ $row->youtube }}" />
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
                                            placeholder="instagram" value="{{ $row->instagram }}" />
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
                                            placeholder="facebook" value="{{ $row->facebook }}" />
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
                                placeholder="google_plus" value="{{ $row->google_plus }}" />


                        </div>
                        <!--end::Input-->
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label"> linkedin</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="linkedin" class="form-control mb-2"
                                placeholder="linkedin" value="{{ $row->linkedin }}" />


                        </div>
                        <!--end::Input-->


                    </div>
                    <!--end::Input-->
                     <!--begin::Input group-->
                     <div class="d-flex flex-wrap gap-5">
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="email" class="form-control mb-2"
                                placeholder="email" value="{{ $row->email }}" />


                        </div>
                        <!--end::Input-->
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label"> phone</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="phone" class="form-control mb-2"
                                placeholder="phone" value="{{ $row->phone }}" />


                        </div>
                        <!--end::Input-->


                    </div>
                    <!--end::Input-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('hotels.index') }}" id="kt_ecommerce_add_product_cancel"
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $(".dPick").flatpickr();
            $("#kt_datepicker_3").flatpickr();
            $("#kt_datepicker_8").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });

            $("#kt_datepicker_7").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
        });
    </script>
@endsection

