@section('content')

<div class="process-overlay hide">
    <div class="loading hide">
        <img src="{{ asset('assets/loading.gif') }}" alt="loading">
        
    </div>

    <p class="text">Banner Ready!</p>

    <a href="#" class="btn btn-primary downloadbanner close-overlay"  download>Download Banner</a>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="app-container">
                    <div id="pic-display-container">
                        <div class="inner-border"></div>
                        <div class="banner-text-container">
                            <p>
                                <span>CHILDRENS</span>
                                <span class="banner-text-primary">CLOTHINGS</span>
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
                                <div class="col-3">
                                    <button class="btn btn-primary btn-block promo-add-btn">Promo</button>
                                </div>

                                <div class="col-4 offset-5">
                                    <button class="btn btn-primary btn-block discount-add-btn">Discount</button>
                                </div>


                                <div class="col-12">&nbsp;</div>

                                <div class="col-12 promo-options-display">
                                    <div class="row">
                                        <div class="col-3">
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
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn">10% OFF</button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn">15% OFF</button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn">20% OFF</button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn">25% OFF</button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn">30% OFF</button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary btn-block add-value-btn" disabled="disabled">Custom</button>
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
                                    <form action="{{ route('upload.image') }}" method="post" encttype="multipart/form-data" id="uploadImageForm">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="imageInput" name="image" accept="image/*">
                                        </div>
                                        <button class="hide">submit</button>
                                    </form>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="" id="instagramHandleInput" class="form-control" placeholder="@instagramhandle">
                                        <input type="hidden" id="filename">
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
</section>




@endsection