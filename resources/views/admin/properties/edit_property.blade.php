@include('admin.common.header')
@include('admin.common.sidebar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <!-- <pre>
                                {{print_r($property)}}
                                </pre> -->
                                <h4 class="card-title">PROPERTY DETAILS</h4>
                                <form class="row needs-validation" action="{{ route('update-property', $property->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Availability</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="availability" value="{{$property->availability}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$property->name}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address1" value="{{$property->address1}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address2" value="{{$property->address2}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                           
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Zoning</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="zoning" value="{{$property->zoning}}"  
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Value</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="value" value="{{$property->value}}"  
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Amenities (list)</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="amenities" value="{{$property->amenities}}"  
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="description" value="{{$property->description}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Market Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="market_title" value="{{$property->market_title}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Market Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="market_description" value="{{$property->market_description}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Market Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="market_file" value="{{$property->market_file}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="floorplan_1" value="{{$property->floorplan_1}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="floorplan_2" value="{{$property->floorplan_2}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan 3</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="floorplan_3" value="{{$property->floorplan_3}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fractions 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="deed_fractions_1" value="{{$property->deed_fractions_1}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fractions 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="deed_fractions_2" value="{{$property->deed_fractions_2}}"
                                            id="example-text-input">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Annual Appreciation</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="annual_appreciation" value="{{$property->annual_appreciation}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="aum_fee_1" value="{{$property->aum_fee_1}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> AUM Fee 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="aum_fee_2" value="{{$property->aum_fee_2}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 3</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="aum_fee_3" value="{{$property->aum_fee_3}}"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Documents 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="images[]" accept="image/*" id="example-text-input">
                                       
                                        <img src="{{ asset('property_documents/' . $property->property_document_1) }}" style="width: 100px; height: 100px;">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Documents 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="images[]" accept="image/*"
                                            id="example-text-input">
                                    </div>
                                </div>



                                <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-pink waves-effect waves-light">
                                                Update
                                            </button>
                                          
                                        </div>
                                    </div>
                             <form>
                             
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

     @include('admin.common.footer')