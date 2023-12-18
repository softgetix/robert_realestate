
@extends('admin.common.page')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">PROPERTY DETAILS</h4>
                                <form class="row needs-validation" action="{{ route('manage-property.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Availability</label>
                                        <div class="col-sm-10">

                                            <select class="form-control" name="availability" id="availability">
                                                <option disabled selected>Select Availability</option>
                                                <option value="Available">Available</option>
                                                <option value="Not Available"> Not Available</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="name"
                                                id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Propert Images
                                            </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" required name="property_images[]" accept="image/*" id="example-text-input" multiple>

                                        </div>
                                    </div>
                                    {{-- 

                                    <!-- <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label">Type</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="type">
                                                                    <option>Select</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div> -->


                                    <!-- 

                                                        

                                                       
                                    {{-- 

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Amenities
                                            (list)</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="amenities"
                                                id="example-text-input">
                                        </div>
                                    </div> --}}

                                    <div class="mb-3 row">
                                        <label for="example-text-input"
                                            class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" required name="description"></textarea>

                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Management
                                            Company</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="management_company"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> Market
                                            Description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="market_description"
                                                id="example-text-input">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Market
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="market_file"
                                                id="example-text-input">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan
                                            1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="floorplan_1"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan
                                            2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="floorplan_2"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Floorplan
                                            3</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" required name="floorplan_3"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fractions
                                            1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="deed_fractions_1"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Deed Fractions
                                            2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="deed_fractions_2"
                                                id="example-text-input">
                                        </div>
                                    </div> --}}

                                    <!-- <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Leveraged</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Leverage amount</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Leverage Percent</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Rent Rate</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Market Rent Rate</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Occupancy Rate</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="deed_fractions_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label">Occupancy Status</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="occupancy_status">
                                                                    <option>Select</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">AACF (Anticipated Annual Cash Flow) - Annual Rent Amount</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_rent_amount"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>


                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">AACF Annual Rent Gross Yield</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_rent_gross_yield"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">AACF Expences</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="expences"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">AACF Net</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="net"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Image URLs (seperate table?)</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Property Taxes (Seperate table?)</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Google Map</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Zillow</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="zillow"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">AirBNB Listing URL</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">VRBO Listing URL</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing URL 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing URL 2</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Alt Listing URL 3</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Offering Purchase</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Offering Build Costs</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Offering Improvements</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Offering Closing Costs</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Offering Sourcing Fee</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Equity Raise</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Price Per Share-Deed</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Total Developer Shares-Deeds</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Total Raise Sahres-Deeds</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Total Shares-Deeds</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Management Fee</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Cash Reserves</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Hold Period</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="annual_appreciation"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div> -->





                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Annual
                                            Appreciation</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text"
                                                name="annual_appreciation" id="example-text-input">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 1</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="aum_fee_1"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> AUM Fee 2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="aum_fee_2"
                                                id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">AUM Fee 3</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="text" name="aum_fee_3"
                                                id="example-text-input">
                                        </div>
                                    </div> --}}

                                    <!-- <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">1st Dividend Date</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="1st_dividend_Date"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">1st Dividend Yield</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="1st_dividend_yield"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Average Time To Rent</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="average_time_to_rent"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Management Company</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="management_company"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div> -->




                                    {{-- <div class="mb-3 row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Documents
                                            2</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required type="file" name="images[]"
                                                accept="image/*" id="example-text-input">
                                        </div>
                                    </div> --}}

                                    <!-- <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div> -->

                                    <!-- <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Expence Calculations</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Rent Calculations</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Deed Restrictions</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Deed Example</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Closing Statement Example</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Documents Master Deed</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div> -->






                                    <!-- <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 1</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_1"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 2</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_2"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>


                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 3</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_3"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 4</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_4"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 5</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_5"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-2 col-form-label">Calc Preset 6</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" name="calc_preset_6"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div> -->




                                    <!-- <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label">Select</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>Large select</option>
                                                                    <option>Small select</option>
                                                                </select>
                                                            </div>
                                                        </div> -->

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
    @endsection
