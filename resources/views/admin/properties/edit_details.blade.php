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
                                    action="{{ route('admin.manage-property.update-details', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Property Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="type">
                                                <option selected disabled value="">Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Bedrooms</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="bedrooms"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Baths</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="baths"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Half baths</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="half_baths"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Sleeps</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="sleeps"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Garage</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="garages"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">SqFt</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="square_feets"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Stories</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="stories" id="example-text-input"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Units</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="units"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Lot size</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="lot_size"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Year Built</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="year_built"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Zoning</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="zoning"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> Value</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="number" name="value"
                                                id="example-text-input">
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
