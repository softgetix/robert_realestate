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

                                <h4 class="card-title">PROPERTY DETAILS</h4>
                                <form class="row needs-validation" action="{{url('/submit-property')}}" method="post">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Availability</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="availability"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" 
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address1" 
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address2" 
                                            id="example-text-input">
                                    </div>
                                </div>
                           
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Custom Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-pink waves-effect waves-light">
                                                Submit
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