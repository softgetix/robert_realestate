@extends('admin.common.page')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PROPERTY Offerings</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-property-offerings', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Offering
                                            Purchase</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->offering_purchase ?? old('offering_purchase') }}"
                                                type="number" name="offering_purchase" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Offering Build
                                            Costs</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"
                                                value="{{ $propertyAacf->offering_build_cost ?? old('offering_build_cost') }}"
                                                name="offering_build_cost" id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Offering
                                            Improvements</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->offering_improvements ?? old('offering_improvements') }}"
                                                type="number" name="offering_improvements" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Offering Closing
                                            Costs
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->offering_closing_cost ?? old('offering_closing_cost') }}"
                                                type="number" name="offering_closing_cost" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Offering Sourcing
                                            Fee
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->offering_sourcing_fees ?? old('offering_sourcing_fees') }}"
                                                type="number" name="offering_sourcing_fees" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-pink waves-effect waves-light">
                                                Submit
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
