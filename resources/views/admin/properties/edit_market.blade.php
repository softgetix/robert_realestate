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
                                    action="{{ route('admin.manage-property.update-market', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market Title</label>

                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyMarket->market_title ?? old('market_title') }}" required
                                                type="text" name="market_title" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="market_image"
                                                accept="image/*" id="example-text-input">

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" required name="market_description">{{ $propertyMarket->market_description ?? old('market_description') }}</textarea>

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
