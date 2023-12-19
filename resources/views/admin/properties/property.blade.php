@include('admin.common.header')
@include('admin.common.sidebar')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <a href="{{ route('manage-property.create') }}"><button type="button"
                    class="btn btn-primary waves-effect waves-light">
                    ADD PROPERTY</button></a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th>Name</th>
                                        <th>Availability</th>
                                        <th>Description</th>
                                        <th>Management Company</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($property as $prop)
                                        <tr>
                                            <td> {{ $prop->id }}</td>
                                            <td>{{ $prop->availability }}</td>
                                            <td>{{ $prop->name }}</td>
                                            <td>{{ $prop->description }}</td>
                                            <td>{{ $prop->management_company }}</td>
                                            <td>


                                                <a href="{{ route('admin.manage-property.edit-address', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-primary waves-effect waves-light dt-button">Address</a>
                                                <a href="{{ route('admin.manage-property.edit-details', ['id' => $prop->id]) }}"
                                                    class="dt-button btn btn-outline-secondary waves-effect">Details</a>
                                                <a href="{{ route('admin.manage-property.edit-amenities', ['id' => $prop->id]) }}"
                                                    class="dt-button btn btn-outline-success waves-effect waves-light">Amenities</a>
                                                <a href="{{ route('admin.manage-property.edit-market', ['id' => $prop->id]) }}"
                                                    class="dt-button btn btn-outline-info waves-effect waves-light">Market</a>
                                                <a href="{{ route('admin.manage-property.edit-floorplan', ['id' => $prop->id]) }}"
                                                    class="dt-button btn btn-outline-warning waves-effect waves-light">Floorplan</a>
                                                <a href="{{ route('admin.manage-property.edit-property-extra-details', ['id' => $prop->id]) }}"
                                                    class="btn dt-button btn-outline-danger waves-effect waves-light">Extra
                                                    Details</a>
                                                <button type="button"
                                                    class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                                <button type="button"
                                                    class="btn btn-outline-pink waves-effect waves-light">Pink</button>
                                                <button type="button"
                                                    class="btn btn-outline-purple waves-effect waves-light">Purple</button>
                                                <button type="button"
                                                    class="btn btn-outline-light waves-effect waves-light">Light</button>
                                            </td>
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
