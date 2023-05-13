@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">trips</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">trips</li>

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
                action="{{ route('trips.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
        <!--begin::Image input-->
        <div class="image-input image-input-empty image-input-outline mb-3"
            data-kt-image-input="true"
            style="background-image: url(assets/media/svg/files/blank-image.svg)">
            <!--begin::Preview existing avatar-->
            <div class="image-input-wrapper w-150px h-150px"></div>
            <!--end::Preview existing avatar-->
            <!--begin::Label-->
            <label
                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <!--begin::Icon-->
                <i class="bi bi-pencil-fill fs-7"></i>
                <!--end::Icon-->
                <!--begin::Inputs-->
                <input type="file" name="banner" accept=".png, .jpg, .jpeg" />
                <input type="hidden" name="avatar_remove" />
                <!--end::Inputs-->
            </label>
            <!--end::Label-->
            <!--begin::Cancel-->
            <span
                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <!--end::Cancel-->
            <!--begin::Remove-->
            <span
                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <!--end::Remove-->
        </div>
        <!--end::Image input-->

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
                            <input type="text" id="title" value="{{ old('title') }}"
                                                               name="title"  class="form-control  @error('title') is-invalid @enderror">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

 <!--begin::Input group-->
 <div class="mb-10 fv-row">
    <!--begin::Label-->
    <label class="required form-label">trip Date</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control  form-control-solid dPick" name="trip_date"
        value="{{ old('trip_date') }}" placeholder="Pick date" id="kt_datepicker_3" />


</div>
<!--end::Input-->

                        <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="form-label"> trip_brief</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <textarea class="form-control form-control-solid" rows="3" name="trip_brief" placeholder="text">{{ old('trip_brief')  }}</textarea>
                            <!--end::Editor-->

                        </div>


                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label"> overview</label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <textarea class="form-control form-control-solid" rows="3" name="overview" placeholder="text">{{ old('overview')  }}</textarea>
                        <!--end::Editor-->

                    </div>

                    <div class="mb-3">
                        <label class="form-label">cost</label>
                        <input type="text" id="cost" value="{{ old('cost') }}"
                                                           name="cost"  class="form-control  @error('title') is-invalid @enderror">
                        @error('cost')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('trips.index') }}" id="kt_ecommerce_add_product_cancel"
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

