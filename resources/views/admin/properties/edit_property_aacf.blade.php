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
                                    action="{{ route('admin.manage-property.update-property-aacf', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Annual Rent
                                            Amount</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->annual_rent_amount ?? old('annual_rent_amount') }}"
                                                type="number" name="annual_rent_amount" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Annual Rent Gross
                                            Yield</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"
                                                value="{{ $propertyAacf->annual_rent_gross_yield ?? old('annual_rent_gross_yield') }}"
                                                name="annual_rent_gross_yield" id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Aacf
                                            Expences</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->aacf_expences ?? old('aacf_expences') }}"
                                                type="number" name="aacf_expences" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Aacf Net
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyAacf->aacf_net ?? old('aacf_net') }}" type="number"
                                                name="aacf_net" id="example-text-input">
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
