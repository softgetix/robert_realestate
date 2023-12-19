@extends('admin.common.page')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PROPERTY Amenities</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-aminities', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Amenities
                                            (list)</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" required name="property_amenities" id="example-text-input">
                                                {{ $propertyAmenities[0]->property_amenities ?? old('property_amenities') }}
                                                
                                                </textarea>
                                            <span class="text-info">Seprate the list value with commas (,) like 1,2,3
                                            </span>
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
