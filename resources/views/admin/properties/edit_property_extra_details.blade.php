@extends('admin.common.page')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PROPERTY ADDRESS</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-property-extra-details', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fraction
                                            1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->deed_fraction_1 ?? old('deed_fraction_1') }}"
                                                type="text" name="deed_fraction_1" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fraction
                                            2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"
                                                value="{{ $PropertyExtraDetails->deed_fraction_1 ?? old('deed_fraction_2') }}"
                                                name="deed_fraction_2" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Leveraged</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" name="leveraged"
                                                {{ $PropertyExtraDetails->leveraged ?? old('leveraged') ? 'checked' : '' }}
                                                id="switch3" switch="bool" value="1">
                                            <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Leverage
                                            Amount</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->leverage_amount ?? old('leverage_amount') }}"
                                                type="number" name="leverage_amount" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Leverage Percent
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->leverage_percent ?? old('leverage_percent') }}"
                                                type="number" name="leverage_percent" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Rent Rate</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->rent_rate ?? old('rent_rate') }}"
                                                type="number" name="rent_rate" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market Rent
                                            Rate</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->rent_rate ?? old('rent_rate') }}"
                                                type="number" name="market_rent_rate" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Occupancy
                                            Rate</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $PropertyExtraDetails->occupancy_rate ?? old('occupancy_rate') }}"
                                                type="number" name="occupancy_rate" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Occupancy Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="occupancy_status">
                                                <option selected disabled value="">Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
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
