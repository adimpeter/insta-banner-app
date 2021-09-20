@section('content')

<div class="process-overlay hide">
    <div class="loading hide">
        <img src="{{ asset('assets/loading.gif') }}" alt="loading">
        
    </div>

    <p class="text">Banner Ready!</p>

    <a href="#" class="btn btn-primary downloadbanner close-overlay"  download>Download Banner</a>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-2 google-ad-banner-side">

            </div> -->


            <div class="col-md-12">

                <div class="row">

                    <!-- <div class="col-md-12 google-ad-banner-top">

                    </div>

                    <div class="col-md-12 site-title">
                        QUICK<span>INSTA</span>BANNER
                        <p>Create instagram sales banners quick and easy!.</p>
                    </div> -->


                    <div class="col-md-12">
                        <div id="app-container">
                            <div id="pic-display-container">
                                <div class="inner-border"></div>
                                <div class="banner-text-container">
                                    <p>
                                        <span>PRODUCT TEXT</span>
                                        <span class="banner-text-primary">HERE</span>
                                    </p>
                                </div>
                                <img src="" alt="instagram-banner-display">
                                <div class="discount-banner">
                                    <div class="discount-inner-banner">
                                        10% OFF
                                    </div>
                                </div>

                                <div class="cta-banner">
                                    SHOP NOW
                                </div>
                                <div class="insta-handle-banner">
                                    @instagramhandle
                                </div>
                            </div>
                            <div id="app-controls-container">
                                <div class="top">
                                    <div class="row">
                                        <div class="col-6 col-md-6 col-lg-3">
                                            <button class="btn btn-primary btn-block promo-add-btn">Promo</button>
                                        </div>

                                        <div class="col-6 col-lg-4 offset-lg-5">
                                            <button class="btn btn-primary btn-block discount-add-btn">Discount</button>
                                        </div>


                                        <div class="col-12">&nbsp;</div>

                                        <div class="col-12 promo-options-display">
                                            <div class="row">
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">Giveaway</button>
                                                </div>
                                                <!-- <div class="col-3">
                                                    <button class="btn btn-primary btn-block add-value-btn">Free Shipping</button>
                                                </div> -->
                                                <!-- <div class="col-3">
                                                    <button class="btn btn-primary btn-block">-20%</button>
                                                </div>
                                                <div class="col-3">
                                                    <button class="btn btn-primary btn-block">-25%</button>
                                                </div> -->
                                            </div>
                                        </div>

                                        <div class="col-12 discount-options-display">
                                            <div class="row">
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">10% OFF</button>
                                                </div>
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">15% OFF</button>
                                                </div>
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">20% OFF</button>
                                                </div>
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">25% OFF</button>
                                                </div>
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block add-value-btn">30% OFF</button>
                                                </div>
                                                <div class="col-6 col-lg-2">
                                                    <button class="btn btn-primary btn-block custom-discount-btn">Custom</button>
                                                </div>

                                                <div class="custom-discount hide">
                                                    

                                                    <div class="input-group mb-3">
                                                        <input type="number" min="10" max="100" class="form-control" placeholder="Add a number" id="customDiscountInput">
                                                        <div class="input-group-append" >
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 50px 50px 0px">% OFF</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="bottom">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="word-count-container">Words: <span class="word-count">30</span></div>
                                                <input type="text" id="productTextInput" placeholder="product text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div id="uploadBarContainer">
                                                <div id="uploadBar"></div>
                                                <div id="uploadStatus"></div>
                                            </div>
                                            <form action="{{ route('upload.image') }}" method="post" encttype="multipart/form-data" id="uploadImageForm">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" required="required" id="imageInput" name="image" accept="image/*">
                                                </div>
                                                <button class="hide">submit</button>
                                            </form>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="" id="instagramHandleInput" class="form-control" placeholder="@instagramhandle">
                                                <input type="hidden" id="filename">
                                                <input type="hidden" id="imageData">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block" id="createBanner">Create Banner</butto>
                                        </div>
                                    </div>
                                </div>
                                <!-- <form action="">
                                    <div class="row">
                                        <div class="col-3">
                                            <button class="btn btn-primary btn-block">click</button>
                                        </div>

                                        <div class="col-4 offset-5">
                                            <button class="btn btn-primary btn-block">click</button>
                                        </div>


                                    
                                    </div>

                                    <div id="bottom-form-container">
                                        <div class="items">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" id="inputGroupFile01">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="text" name="" id="" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block">click</butto>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary downloadbanner margin-top-md hide" download>Download Banner</a>
                    </div>


                </div>

            </div>


            <!-- <div class="col-md-2 google-ad-banner-side">

            </div> -->

            
        </div>
    </div>
</section>


<section class="section section-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h2>Make Instagram Banners Quickly</h2>
                <p class="text-font">
                    With quickinstabanner.com, you dont need some mad graphics skill to get started.
                    Simply upload your image, select the required fields and Vola! Your Banner is Ready.
                    It's That simple.
                </p>
                
            </div>

            <div class="col-md-6">
                <div>
                <img src="{{ asset('assets/insta-banner-asset-examples.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <h2>Perfect Fit</h2>
                <p class="text-font">
                    Our Banners are 650 x 650, the perfect fit for Instagram
                </p>
                
            </div>

            <div class="col-md-4">

                <h2>Easy To Use</h2>
                <p class="text-font">
                    You dont have to be an expert to use quickinstabanner.com. Anyone can get a banner in seconds.
                </p>
                
            </div>

            <div class="col-md-4">

                <h2>Easy Download</h2>
                <p class="text-font">
                    No registration required, No limitations on downloads.
                </p>
                
            </div>
        </div>
    </div>
</section>




@endsection