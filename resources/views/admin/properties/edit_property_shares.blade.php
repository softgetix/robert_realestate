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
                                    action="{{ route('admin.manage-property.update-property-shares', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="offering_purchase" class="col-sm-2 col-form-label">Equity Raise</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->equity_raise ?? old('equity_raise') }}"
                                                type="number" name="equity_raise" id="offering_purchase">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="offering_build_cost" class="col-sm-2 col-form-label">Price Per Share
                                            Deed</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"
                                                value="{{ $propertyAacf->price_per_share_deed ?? old('price_per_share_deed') }}"
                                                name="price_per_share_deed" id="offering_build_cost">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="offering_improvements" class="col-sm-2 col-form-label">Total Developer
                                            Share Deeds</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->total_developer_share_deeds ?? old('total_developer_share_deeds') }}"
                                                type="number" name="total_developer_share_deeds"
                                                id="offering_improvements">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="offering_closing_cost" class="col-sm-2 col-form-label">Total Raise Share
                                            Deeds</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->total_raise_share_deeds ?? old('total_raise_share_deeds') }}"
                                                type="number" name="total_raise_share_deeds" id="offering_closing_cost">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="offering_sourcing_fees" class="col-sm-2 col-form-label">Total Share
                                            Deeds</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->total_share_deeds ?? old('total_share_deeds') }}"
                                                type="number" name="total_share_deeds" id="offering_sourcing_fees">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="first_dividend_date" class="col-sm-2 col-form-label">First Dividend
                                            Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->first_dividend_date ?? old('first_dividend_date') }}"
                                                type="date" name="first_dividend_date" id="first_dividend_date">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="seccond_dividend_date" class="col-sm-2 col-form-label">Second Dividend
                                            Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->seccond_dividend_date ?? old('seccond_dividend_date') }}"
                                                type="date" name="seccond_dividend_date" id="seccond_dividend_date">
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
