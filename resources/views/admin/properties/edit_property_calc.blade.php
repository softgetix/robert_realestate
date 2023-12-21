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
                                    action="{{ route('admin.manage-property.update-calc-presets', ['id' => $property_id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @for ($i = 1; $i <= 6; $i++)
                                        @php
                                            $presetKey = 'calc_preset_' . $i;
                                            $presetValue = isset($calcPreset[$i-1]->key) && $calcPreset[$i-1]->key === $presetKey ? $calcPreset[$i-1]->value : old($presetKey);
                                        @endphp
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset
                                                {{ $calcPreset[0]->$presetKey }}
                                                {{ $i }}</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" value="{{ $presetValue }}" type="number"
                                                    name="{{ $presetKey }}" id="example-text-input">
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
