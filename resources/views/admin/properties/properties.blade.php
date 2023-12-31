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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Availability</th>
                                        <th>Description</th>
                                        <th>Management Company</th>
                                        <th>Action</th>
                                        <th>Other</th>


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
                                            <td><a href="{{ route('manage-property.show', ['manage_property' => $prop->id]) }}"
                                                    class="btn btn-primary waves-effect waves-light ">View</a>&nbsp;<a
                                                    href="{{ route('manage-property.edit', ['manage_property' => $prop->id]) }}"
                                                    class="btn btn-warning waves-effect waves-light ">Edit</a>
                                                <a href="{{ route('manage-property.destroy', ['manage_property' => $prop->id]) }}"
                                                    class="btn btn-danger waves-effect waves-light"
                                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) document.getElementById('delete-form').submit();">
                                                    Delete
                                                </a>

                                                <form id="delete-form"
                                                    action="{{ route('manage-property.destroy', ['manage_property' => $prop->id]) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
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
                                                <a href="{{ route('admin.manage-property.edit-property-aacf', ['id' => $prop->id]) }}"
                                                    class="btn dt-button btn-outline-dark waves-effect waves-light">AACF</a>
                                                <a href="{{ route('admin.manage-property.edit-property-urls', ['id' => $prop->id]) }}"
                                                    class="btn dt-button btn-outline-pink waves-effect waves-light">Url`s</a>
                                                <a href="{{ route('admin.manage-property.edit-property-offerings', ['id' => $prop->id]) }}"
                                                    class="btn dt-button btn-outline-purple waves-effect waves-light">Offerings</a>
                                                <a href="{{ route('admin.manage-property.edit-property-shares', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-light dt-button waves-effect waves-light">Shares</a>
                                                <a href="{{ route('admin.manage-property.edit-property-financial-details', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-purple dt-button waves-effect waves-light">Financial</a>
                                                <a href="{{ route('admin.manage-property.edit-property-calc-presets', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-purple dt-button waves-effect waves-light">Calc</a>
                                                <a href="{{ route('admin.manage-property.edit-property-documents', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-purple dt-button waves-effect waves-light">Documents</a><a
                                                    href="{{ route('admin.manage-property.edit-property-taxes', ['id' => $prop->id]) }}"
                                                    class="btn btn-outline-purple dt-button waves-effect waves-light">Taxes</a>







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
