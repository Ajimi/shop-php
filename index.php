<?php 
    require_once 'config.php';
    require_once 'core/init.php';
    $product = new Product();

?>
    
     <?php include TEMPLATE_FRONT . DS . 'header_index.php';?>
   
    <main>
        <ul class="product-list-basic">
            <?php $product->show(); ?>
            
            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/iphone6.jpg" height="130" alt="iPhone 6"/>
                </a>
                
                <h2><a href="#">iPhone 6</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">82 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button >Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>
            
            
            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/htc-one.jpg" height="130" alt="Galaxy Alpha">
                </a>

                <h2><a href="#">HTC One</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">90 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button>Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/sony-xperia-z3.jpg" height="130" alt="Nokia Lumia" />
                </a>

                <h2><a href="#">Sony Xperia</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">123 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <span class="product-out-of-stock">Out of stock</span>
                <p class="product-price">$299.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/iphone6.jpg" height="130" alt="iPhone 6"/>
                </a>
                
                <h2><a href="#">iPhone 6</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">82 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button >Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>
            
            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/htc-one.jpg" height="130" alt="Galaxy Alpha">
                </a>

                <h2><a href="#">HTC One</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">90 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button>Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/sony-xperia-z3.jpg" height="130" alt="Nokia Lumia" />
                </a>

                <h2><a href="#">Sony Xperia</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">123 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <span class="product-out-of-stock">Out of stock</span>
                <p class="product-price">$299.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/iphone6.jpg" height="130" alt="iPhone 6"/>
                </a>
                
                <h2><a href="#">iPhone 6</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">82 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button >Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>
            
            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/htc-one.jpg" height="130" alt="Galaxy Alpha">
                </a>

                <h2><a href="#">HTC One</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">90 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button>Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/sony-xperia-z3.jpg" height="130" alt="Nokia Lumia" />
                </a>

                <h2><a href="#">Sony Xperia</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">123 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <span class="product-out-of-stock">Out of stock</span>
                <p class="product-price">$299.00</p>
            </li>

            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/iphone6.jpg" height="130" alt="iPhone 6"/>
                </a>
                
                <h2><a href="#">iPhone 6</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars" style="width: 60px" >
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">82 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button >Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>
            
            <li>

                <a href="#" class="product-photo">
                    <img src="assets/images/products/htc-one.jpg" height="130" alt="Galaxy Alpha">
                </a>

                <h2><a href="#">HTC One</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                            <span class="product-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                    </div>

                    <span><a href="#">90 reviews</a></span>
                </div>

                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

                <button>Buy Now!</button>
                <p class="product-price">$599.00</p>
            </li>
            
        </ul>
    </main>

    <div id="cd-shadow-layer"></div>

    <div id="cd-cart">
        <h2>Cart</h2>
        <ul class="cd-cart-items">
            <li>
                <span class="cd-qty">1x</span> Product Name
                <div class="cd-price">$9.99</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>

            <li>
                <span class="cd-qty">2x</span> Product Name
                <div class="cd-price">$19.98</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>

            <li>
                <span class="cd-qty">1x</span> Product Name
                <div class="cd-price">$9.99</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>
        </ul> <!-- cd-cart-items -->

        <div class="cd-cart-total">
            <p>Total <span>$39.96</span></p>
        </div> <!-- cd-cart-total -->

        <a href="#0" class="checkout-btn">Checkout</a>
        
        <p class="cd-go-to-cart"><a href="#0">Go to cart page</a></p>
    </div> <!-- cd-cart -->
    
<?php include TEMPLATE_FRONT.DS.'footer_index.php'; ?>