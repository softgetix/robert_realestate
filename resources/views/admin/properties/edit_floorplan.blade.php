@extends('admin.common.page')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">PROPERTY MARKET DETAILS</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-floorplan', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floor Plan 1
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="floor_plan_1"
                                                accept="image/*" id="example-text-input">

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floor Plan 2
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="floor_plan_2"
                                                accept="image/*" id="example-text-input">

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floor Plan 3
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="floor_plan_1"
                                                accept="image/*" id="example-text-input">

                                        </div>
                                    </div>



                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-pink waves-effect waves-light">
                                                Submit
                                            </button>

                                        </div>
                                    </div>
                                    <form>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
