@extends('admin.common.page')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">PROPERTY Calc Presets</h4>
                                <form class="row needs-validation"
                                    action="{{ route('admin.manage-property.update-property-taxes', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @for ($i = 1; $i <= 3; $i++)
                                        @php
                                            $taxKey = 'tax_' . $i;
                                            $taxValue = isset($propertyTax[$i - 1]->tax_key) && $propertyTax[$i - 1]->tax_key === $taxKey ? $propertyTax[$i - 1]->tax_value : old($taxKey);
                                        @endphp
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tax
                                                {{ $i }}</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" value="{{ $taxValue }}" type="number"
                                                    name="{{ $taxKey }}" id="{{ $taxKey }}">
                                            </div>
                                        </div>
                                    @endfor

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
