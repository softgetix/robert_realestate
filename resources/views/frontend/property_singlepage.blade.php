@include('frontend.common.header')

<link href="{{asset('front/css/property.css')}}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #property_singlepage .head {font-size: 18px;}
    #property_singlepage .head a {color:black;}
    #property_singlepage .head a:hover {color:blue;}
    .head a::before {content: '\2190';margin-right: 5px;}

    .slider-image {width: 100%;height: 425px;object-fit: cover;}

    .property-basic-list {display:flex;justify-content: flex-start;column-gap:30px;}

    .box_shadow {box-shadow: 0 0px 10px 0 rgb(0 0 0 / 11%);padding: 20px;border-radius: 5px;}
    .property-basic-flex {display: flex;justify-content: flex-start;flex-wrap: wrap;}

    .OfferingExpenses {align-items: center;border-bottom: 1px solid #dcd8d7;display: flex;font-size: 16px;gap: 8px;justify-content: space-between;padding: 15px 0 0;}

    @media only screen and (max-width:768px) {
        .property-basic-list{margin-top:20px;}
    }
</style>

<section id="property_singlepage">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head pb-3">
                    <a href="{{route('properties')}}">View More Investments</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 order-2 order-md-1">
                <div class="slider">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="slider-image" src="http://localhost/robert_realestate/public/front/images/property.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img class="slider-image" src="http://localhost/robert_realestate/public/front/images/property.jpg" alt="Chicago" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img class="slider-image" src="http://localhost/robert_realestate/public/front/images/property.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 order-1 order-md-2">
                <div class="card" style="width:100%">
                    <div class="card-image">
                        <img class="card-img-top" src="http://localhost/robert_realestate/public/front/images/property.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Lorem ipsum</h4>
                        <p class="card-text">Great smoky mountains</p>
                        <hr>
                        <div class="card-price-investor">
                            <span class="card-price">Amount: <strong>$398,340.00</strong></span> | <span class="card-price">Investors: <strong>365</strong></span>
                        </div>
                        <a href="#" class="btn btn-custom btn-rounded">Buy Property</a>
                        <div id="progress-bar">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-bar-label-left">100% funded</div>
                        </div>    
                    </div>
                </div>
            </div> 
        </div>
        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="basic-list">
                    <ul class="property-basic-list">
                        <li>4 bedrooms</li>
                        <li>3 baths</li>
                        <li>1920 Sq.Ft</li>
                        <li>Built 2022</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="property-basic-flex box_shadow">
                    <div class="col-6 col-md-3">
                        <small>Property type</small>
                        <p><b>Single family</b></p>
                    </div>
                    <div class="col-6 col-md-3">
                        <small>Location</small>
                        <p><b>Omaha, Nebraska</b></p>
                    </div>
                    <div class="col-6 col-md-3">
                        <small>Purchase price</small>
                        <p><b>$360,000</b></p>
                    </div>
                    <div class="col-6 col-md-3">
                        <small>Monthly rent</small>
                        <p><b>$3,200</b></p>
                    </div>
                </div>    
            </div>
        </div>
        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="box_shadow">
                    <h3>About this property</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h5>Amenities</h5>
                    <div class="property-basic-flex">
                        <div class="col-4 col-md-3">
                            <img src="{{asset('front/images/garden.png')}}" width="30" height="30" />
                            <p><b>Garden</b></p>
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{asset('front/images/school.png')}}" width="30" height="30" />
                            <p><b>Great Schools</b></p>
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{asset('front/images/store.png')}}" width="30" height="30" />
                            <p><b>Shopping</b></p>
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{asset('front/images/ocean.png')}}" width="30" height="30" />
                            <p><b>Near ocean</b></p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    

        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="box_shadow">
                    <h3>Tenant status</h3>
                    <div class="OfferingExpenses">
                        <p>Property status</p>
                        <p><b>Rent ready</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>First dividend date</p>
                        <p><b>March 15, 2024</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>First dividend yield</p>
                        <p><b>6%</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Avg time to rent</p>
                        <p><b>15 days</b></p>
                    </div>
                </div>
            </div>    
        </div>       

        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="box_shadow">
                    <h3>The Market</h3>
                    <h6 class="mt-3">Western Omaha</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="property-basic-flex">
                        <div class="col-12">
                            <img src="{{asset('front/images/map.png')}}" width="100%" height=" " />
                        </div>
                    </div>
                </div>
            </div>    
        </div>    

        <!--  -->
   
        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="box_shadow">
                    <h3>Offering details</h3>
                    <div class="OfferingExpenses">
                        <p>Mortgage amount</p>
                        <p><b>$0</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Mortgage interest rate</p>
                        <p><b>0%</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Equity raised</p>
                        <p><b>$0</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>IPO share price</p>
                        <p><b>$10</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Total shares</p>
                        <p><b>39,482</b></p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Leverage</p>
                        <p><b>0%</b></p>
                    </div>
                </div>
            </div>    
        </div>    

        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8 mb-3">
                <div class="box_shadow">
                    <h3>Offering Expenses</h3>
                    <div class="OfferingExpenses">
                        <p>Purchase price</p>
                        <p>$360,000</p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Improvements</p>
                        <p>$0</p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Closing, offering & holding costs</p>
                        <p>$16,761</p>
                    </div>
                    <div class="OfferingExpenses">
                        <p>Realbricks sourcing fee </p>
                        <p>$18,068</p>
                    </div>
                    <div class="OfferingExpenses">
                        <p><b>Total property cost</b></p>
                        <p><b>$394,829</b></p>
                    </div>
                </div>
            </div>    
        </div>    

        <!--  -->

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="property-faqs my-3">
                    <h3>FAQs</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>What is Lorem Ipsum?</b>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">  
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>What is Lorem Ipsum?</b>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b>What is Lorem Ipsum?</b>
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@include('frontend.common.footer')