@extends('admin.common.page')

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
                                                   value="{{ $propertyMarket->market_title ?? old('market_title') }}"
                                                   required type="text" name="market_title" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="market_image"
                                                   accept="image/*" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" required name="market_description">{{ $propertyMarket->market_description ?? old('market_description') }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Tax 1 -->
                                    <div class="mb-3 row">
                                        <label for="tax_1" class="col-sm-2 col-form-label">Tax 1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyMarket->tax_1 ?? old('tax_1') }}" type="text" name="tax_1" id="tax_1">
                                        </div>
                                    </div>

                                    <!-- Tax 2 -->
                                    <div class="mb-3 row">
                                        <label for="tax_2" class="col-sm-2 col-form-label">Tax 2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyMarket->tax_2 ?? old('tax_2') }}" type="text" name="tax_2" id="tax_2">
                                        </div>
                                    </div>

                                    <!-- Tax 3 -->
                                    <div class="mb-3 row">
                                        <label for="tax_3" class="col-sm-2 col-form-label">Tax 3</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{ $propertyMarket->tax_3 ?? old('tax_3') }}" type="text" name="tax_3" id="tax_3">
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
