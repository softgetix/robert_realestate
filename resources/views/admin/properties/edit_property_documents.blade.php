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
                                    action="{{ route('admin.manage-property.update-property-documents', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @for ($i = 1; $i <= 5; $i++)
                                        @php
                                            $documentKey = 'document_' . $i;
                                            $documentValue = old($documentKey);
                                        @endphp
                                        <div class="mb-3 row">
                                            <label for="example-file-input" class="col-sm-2 col-form-label">Document
                                                {{ $i }}</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" accept="application/pdf"
                                                    name="{{ $documentKey }}" id="example-file-input">
                                            </div>
                                        </div>
                                    @endfor

                                    <div class="mb-3 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Expence
                                            Calculations</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Expence_Calculations" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Rent
                                            Calculations</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Rent_Calculations" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Deed
                                            Restrictions</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Deed_Restrictions" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Deed
                                            Example</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Deed_Example" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Closing
                                            Statement Example</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Closing_Statement_Example" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="mb-0 row">
                                        <label for="example-file-input" class="col-sm-2 col-form-label">Documents Master
                                            Deed</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="Documents_Master_Deed" id="example-file-input">
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
