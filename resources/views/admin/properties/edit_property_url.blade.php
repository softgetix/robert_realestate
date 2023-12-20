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
                                    action="{{ route('admin.manage-property.update-property-urls', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Google Map</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyUrls->google_map ?? old('google_map') }}" type="url"
                                                required name="google_map" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Zillow</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyUrls->zillow ?? old('zillow') }}"
                                                type="url" required name="zillow" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Airbnb</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyUrls->airbnb ?? old('airbnb') }}"
                                                type="url" required name="airbnb" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Vrbo</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyUrls->vrbo ?? old('vrbo') }}"
                                                type="url" required name="vrbo" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing
                                            1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyUrls->alt_listing_1 ?? old('alt_listing_1') }}"
                                                type="url" required name="alt_listing_1" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing
                                            2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyUrls->alt_listing_2 ?? old('alt_listing_2') }}"
                                                type="url" required name="alt_listing_2" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing
                                            3</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                value="{{ $propertyUrls->alt_listing_3 ?? old('alt_listing_3') }}"
                                                type="url" required name="alt_listing_3" id="example-text-input">
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
