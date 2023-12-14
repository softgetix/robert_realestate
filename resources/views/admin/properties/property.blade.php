@include('admin.common.header')
@include('admin.common.sidebar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
      
        <div class="page-content">
            <div class="container-fluid">
                <!-- <a href="{{url('/add-property')}}"><button type="button" class="btn btn-primary waves-effect waves-light">
                    ADD PROPERTY</button></a> -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th>Availability</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Address 2</th>
                                            <th>Images</th>
                                            <th>Updated</th>
                                            <th>Created</th>
                                            <th> Edit </th>
                                            <th> Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <pre>
                                    {{print_r($property)}}
                                    </pre> -->
                                    @foreach ($property as $prop)
                                  
                                        <tr>
                                            <td> {{$prop->id}}</td>
                                            <td>{{$prop->availability}}</td>
                                            <td>{{$prop->name}}</td>
                                            <td>{{$prop->address1}}</td>
                                            <td>{{$prop->address2}}</td>
                                            <td>
                                            <img src="{{ asset('property_documents/' . $prop->property_document_1) }}" style="width: 200px; height: 200px;">
                                            {{$prop->property_document_1}}</td>
                                            <td>{{$prop->updated_at}}</td>
                                            <td>{{$prop->created_at}}</td>
                                            <!-- <td><a href="{{ url('edit-property' . $prop->id) }}">Edit</a></td> -->
                                            <td><a href="{{ url('edit-property/' . $prop->id) }}">Edit</a></td>
                                          
                                            <td><a href="{{url('delete-property/' . $prop->id)}}">Delete </a></td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>

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