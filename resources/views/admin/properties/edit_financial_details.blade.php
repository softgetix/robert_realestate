@extends('admin.common.page')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PROPERTY Management</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-financial-details', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Management
                                            Fee</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->management_fee ?? old('management_fee') }}"
                                                type="number" name="management_fee" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Cash Reserve</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"
                                                value="{{ $propertyAacf->cash_reserve ?? old('cash_reserve') }}"
                                                name="cash_reserve" id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Hold Period</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->hold_period ?? old('hold_period') }}"
                                                type="number" name="hold_period" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Annual Appreciation
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->annual_appreciation ?? old('annual_appreciation') }}"
                                                type="number" name="annual_appreciation" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 1
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->aum_fee_1 ?? old('aum_fee_1') }}" type="number"
                                                name="aum_fee_1" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 2
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->aum_fee_2 ?? old('aum_fee_2') }}" type="number"
                                                name="aum_fee_2" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 3
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->aum_fee_3 ?? old('aum_fee_3') }}" type="number"
                                                name="aum_fee_3" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Average Time to Rent
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->average_time_to_rent ?? old('average_time_to_rent') }}"
                                                type="number" name="average_time_to_rent" id="example-text-input">
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
