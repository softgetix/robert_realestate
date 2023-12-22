@extends('admin.common.page')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Property Images</h4>

                                <div>
                                    @foreach ($property->propertyImage as $image)
                                        @if (!$image->property_image_key == 'property_image')
                                            @continue
                                        @endif


                                        <a target="_blank" href="{{ asset('storage') . '/' . $image->property_image_value }}">
                                            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;"
                                                src="{{ asset('storage') . '/' . $image->property_image_value }}"
                                                data-holder-rendered="true"> </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Property FloorPlan</h4>

                                <div>
                                    @foreach ($property->propertyFloorplan as $image)
                                        <a target="_blank" href="{{ asset('storage') . '/' . $image->value }}">
                                            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;"
                                                src="{{ asset('storage') . '/' . $image->value }}"
                                                data-holder-rendered="true"> </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Property FloorPlan</h4>

                                <div>
                                    @foreach ($property->propertyDocumentModel as $image)
                                        <a target="_blank" href="{{ asset('storage/' . $image->document_value) }}" class="text-primary">
                                            @php echo ucfirst(str_replace('_', ' ', $image->document_key)) @endphp
                                        </a> |
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Image Rounded & Circle</h4>
                                <p class="card-title-desc">Use classes
                                    <code>.rounded</code> and <code>.rounded-circle avatar-md</code>.
                                </p>

                                <div>
                                    <img class="rounded me-2" alt="200x200" style="width: 200px;"
                                        src="assets/images/small/img-4.jpg" data-holder-rendered="true">
                                    <img class="rounded-circle avatar-md mt-sm-0 mt-3" alt="200x200"
                                        src="assets/images/users/avatar-4.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive images</h4>
                                <p class="card-title-desc">Images in Bootstrap are made responsive with <code
                                        class="highlighter-rouge">.img-fluid</code>. <code
                                        class="highlighter-rouge">max-width: 100%;</code> and <code
                                        class="highlighter-rouge">height: auto;</code> are applied to the image so that
                                    it scales with the parent element.</p>

                                <div>
                                    <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <!-- end row -->

                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aligning images</h4>
                                <p class="card-title-desc">Align images with the helper float classes or text alignment
                                    classes. block-level images can be centered using the .mx-auto margin utility class.
                                </p>
                                <img src="assets/images/small/img-8.jpg" class="img-fluid rounded float-start"
                                    style="width: 300px; height: auto;" alt="...">
                                <img src="assets/images/small/img-9.jpg" class="img-fluid rounded float-end mt-sm-0 mt-3"
                                    style="width: 300px; height: auto;" alt="...">
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
