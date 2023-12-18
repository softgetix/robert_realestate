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
                                    action="{{ route('admin.manage-property.update-address', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Address 1</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" value="" name="address_1" required>{{ $propertyAddress['address_1'] ?? old('address_1') }}</textarea>

                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Address 2</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="address_2" required>{{ $propertyAddress['address_1'] ?? old('address_1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"
                                                value="{{ $propertyAddress['city'] ?? old('city') }}" name="city"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">State</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="state">
                                                <option selected disabled value="">Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Zip</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="zip"
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
