<!-- product modal -->
<div class="modal fade mt-3" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header header_light_color">
                <h6 class="modal-title" id="exampleModalLabel">প্রোডাক্ট যুক্ত করুন</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="myform" id="myForm">
                    <div class="row ">
                        <div class="col-md-6">

                            <div class="form-group" ‍autocomplite="off">
                                <input autocomplete="off" type="text" class="form-control" id="id" placeholder="প্রোডাক্ট কোড">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" id="product_name" placeholder="এস কে ইউ">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" id="product_name" placeholder="প্রোডাক্ট এর নাম">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" id="old_price" placeholder="পূর্বের দাম">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" id="regular_Price" placeholder="বর্তমান দাম">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" id="weight" placeholder="ওজন">
                            </div>

                            <div class="form-group">
                                <select class="selectpicker" data-live-search="true">
                                    <option data-tokens="ketchup mustard">মেইড ইন</option>
                                    <?php include('parts/country_name.php'); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" multiple data-live-search="true">
                                    <option value="" selected disabled onchange="changeMe(this)">সাইজ</option>
                                    <option data-tokens="XS">XS</option>
                                    <option data-tokens="s">S</option>
                                    <option data-tokens="m">M</option>
                                    <option data-tokens="l">L</option>
                                    <option data-tokens="xl">XL</option>
                                    <option data-tokens="xxl">XXL</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker" multiple>
                                    <option value="" disabled onchange="changeMe(this)" selected>কালার</option>
                                    <option data-tokens="RED">RED</option>
                                    <option data-tokens="GREEN">GREEN</option>
                                    <option data-tokens="BLUE">BLUE</option>
                                    <option data-tokens="YELLOW">YELLOW</option>
                                    <option data-tokens="BLACK">BLACK</option>
                                    <option data-tokens="WHITE">WHITE</option>
                                    <option data-tokens="PINK">PINK</option>

                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group style">
                            <select name="state" id="catagory" size="1" data-live-search="true">
                                        <option value="" selected="selected">ক্যাটাগরি</option>
                                    </select>
                            </div>

                            <div class="form-group">
                            <select name="countrya" id="sub_catagory" size="1">
                                        <option value="" selected="selected">সাব ক্যাটাগরি</option>
                                    </select>
                            </div>
                            <div class="form-group">
                            <select name="district" id="sub_sub_catagory" size="1">
                                        <option value="" selected="selected">উপ-সাব ক্যাটাগরি</option>
                                    </select>
                            </div>

                                

                        </div>
                
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">বাতিল</button>
                    <button  type="submit" class="btn btn-primary">সাবমিট</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- catagory modal -->
    <div class="modal fade" id="catagory_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!--catagory modal end-->

    <!-- sub-catagory modal -->
    <div class="modal fade" id="sub_catagory_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!--sub-catagory modal end-->


    

    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade show" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="quickview">
                    <button class="quickview__close" data-dismiss="modal" aria-label="Close" type="button">
                        <i class="fas fa-times fa-2x"></i>
                    </button>
                    <div class="product product--layout--quickview" data-layout="quickview">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured">
                                        <button class="product-gallery__zoom">
                                            <svg width="24px" height="24px">
                                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                            </svg>
                                        </button>
                                        <div class="owl-carousel owl-loaded owl-drag" id="product-image">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2430px;">
                                                    <div class="owl-item active" style="width: 486px;">
                                                        <a href="images/products/product-16.jpg" target="_blank">

                                                            <img id="zoom_02" src='images/zoom/1.jpeg' data-zoom-image="images/zoom/2.jpeg" alt="">

                                                        </a>
                                                    </div>
                                                    <div class="owl-item" style="width: 486px;">
                                                        <a href="images/products/product-16-1.jpg" target="_blank"><img src="images/products/product-16-1.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item" style="width: 486px;">
                                                        <a href="images/products/product-16-2.jpg" target="_blank"><img src="images/products/product-16-2.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item" style="width: 486px;">
                                                        <a href="images/products/product-16-3.jpg" target="_blank"><img src="images/products/product-16-3.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item" style="width: 486px;">
                                                        <a href="images/products/product-16-4.jpg" target="_blank"><img src="images/products/product-16-4.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__carousel">
                                        <div class="owl-carousel owl-loaded owl-drag" id="product-carousel">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 500px;">
                                                    <div class="owl-item active" style="width: 90px; margin-right: 10px;">
                                                        <a href="images/products/product-16.jpg" class="product-gallery__carousel-item product-gallery__carousel-item--active"><img class="product-gallery__carousel-image" src="images/products/product-16.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item active" style="width: 90px; margin-right: 10px;">
                                                        <a href="images/products/product-16-1.jpg" class="product-gallery__carousel-item"><img class="product-gallery__carousel-image" src="images/products/product-16-1.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item active" style="width: 90px; margin-right: 10px;">
                                                        <a href="images/products/product-16-2.jpg" class="product-gallery__carousel-item"><img class="product-gallery__carousel-image" src="images/products/product-16-2.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item active" style="width: 90px; margin-right: 10px;">
                                                        <a href="images/products/product-16-3.jpg" class="product-gallery__carousel-item"><img class="product-gallery__carousel-image" src="images/products/product-16-3.jpg" alt=""> </a>
                                                    </div>
                                                    <div class="owl-item active" style="width: 90px; margin-right: 10px;">
                                                        <a href="images/products/product-16-4.jpg" class="product-gallery__carousel-item"><img class="product-gallery__carousel-image" src="images/products/product-16-4.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .product__gallery / end -->

                            <!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare">
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </div>
                                <h1 class="product__name">Brandix Screwdriver SCREW1500ACC</h1>
                                <div class="product__rating">
                                    <div class="product__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__rating-legend"><a href="">7 Reviews</a><span>/</span><a href="">Write A Review</a></div>
                                </div>
                                <div class="product__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.</div>
                                <ul class="product__features">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                                <ul class="product__meta">
                                    <li class="product__meta-availability">Availability: <span class="text-success">In Stock</span></li>
                                    <li>Brand: <a href="">Wakita</a></li>
                                    <li>SKU: 83690/32</li>
                                </ul>
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar -->
                            <div class="product__sidebar">
                                <div class="product__availability">Availability: <span class="text-success">In Stock</span></div>
                                <div class="product__prices">$1,499.00</div>
                                <!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option">
                                        <label class="product__option-label">Color</label>
                                        <div class="input-radio-color">
                                            <div class="input-radio-color__list">
                                                <label class="input-radio-color__item input-radio-color__item--white" style="color: #fff;" data-toggle="tooltip" title="White">
                                                    <input type="radio" name="color"> <span></span></label>
                                                <label class="input-radio-color__item" style="color: #ffd333;" data-toggle="tooltip" title="Yellow">
                                                    <input type="radio" name="color"> <span></span></label>
                                                <label class="input-radio-color__item" style="color: #ff4040;" data-toggle="tooltip" title="Red">
                                                    <input type="radio" name="color"> <span></span></label>
                                                <label class="input-radio-color__item input-radio-color__item--disabled" style="color: #4080ff;" data-toggle="tooltip" title="Blue">
                                                    <input type="radio" name="color" disabled="disabled"> <span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option">
                                        <label class="product__option-label">Material</label>
                                        <div class="input-radio-label">
                                            <div class="input-radio-label__list">
                                                <label>
                                                    <input type="radio" name="material"> <span>Metal</span></label>
                                                <label>
                                                    <input type="radio" name="material"> <span>Wood</span></label>
                                                <label>
                                                    <input type="radio" name="material" disabled="disabled"> <span>Plastic</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option">
                                        <label class="product__option-label" for="product-quantity">Quantity</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number product__quantity">
                                                    <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                <button class="btn btn-primary btn-lg">Add to cart</button>
                                            </div>
                                            <div class="product__actions-item product__actions-item--wishlist">
                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Wishlist">
                                                    <i class="fas fa-thumbs-up"></i>
                                                </button>
                                            </div>
                                            <div class="product__actions-item product__actions-item--compare">
                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Compare">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- .product__options / end -->
                            </div>
                            <!-- .product__end -->
                            <div class="product__footer">
                                <div class="product__tags tags">
                                    <div class="tags__list"><a href="">Mounts</a> <a href="">Electrodes</a> <a href="">Chainsaws</a></div>
                                </div>
                                <div class="product__share-links share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item share-links__item--type--like"><a href="">Like</a></li>
                                        <li class="share-links__item share-links__item--type--tweet"><a href="">Tweet</a></li>
                                        <li class="share-links__item share-links__item--type--pin"><a href="">Pin It</a></li>
                                        <li class="share-links__item share-links__item--type--counter"><a href="">4K</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quickview-modal / end -->