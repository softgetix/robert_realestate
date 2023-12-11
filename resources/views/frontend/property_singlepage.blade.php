@include('frontend.common.header')

<link href="{{asset('front/css/property.css')}}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #property_singlepage .head {font-size: 18px;}
    #property_singlepage .head a{color:black;}
    #property_singlepage .head a:hover{color:blue;}
    .head a::before {content: '\2190';margin-right: 5px;}

    .slider-image {width: 100%;height: 425px;object-fit: cover;}
</style>

<section id="property_singlepage">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head pb-3">
                    <a href="{{route('properties')}}">View More Investments</a>
                </div>
            </div>
            <div class="col-12 col-md-8">
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
            
            <div class="col-12 col-md-4">
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
                <div class="property-faqs my-5">
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