<?php
    require_once 'core/init.php';
    $product = new Product();
    $requestType = 'get';
    if(Input::exists($requestType)){
        $product->showProductByReference(Input::get('ref'));
    }
?>

<li>
    
    <a href="#" class="product-photo">
        <img src="assets/images/products/iphone6.jpg" height="160" alt="iPhone 6" />
    </a>

    <div class="product-details">
        <a href="#" class="product-compare">compare</a>

        <h2><a href="#">iPhone 6</a></h2>

        <div class="product-rating">
            <div>
                <span class="product-stars" style="width: 60px" >
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </span>
            </div>

            <span><a href="#">82 reviews</a></span>
        </div>


        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

        <button>Buy Now!</button>
        <p class="product-price">$599.00</p>
    </div>

</li>

<li>

    <a href="#" class="product-photo">
        <img src="assets/images/products/htc-one.jpg" height="160" alt="Sony Xperia Z3" />
    </a>

    <div class="product-details">
        <a href="#" class="product-compare">compare</a>

        <h2><a href="#">HTC One</a></h2>

        <div class="product-rating">
            <div>
                <span class="product-stars" >
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </span>
            </div>

            <span><a href="#">43 reviews</a></span>
        </div>


        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna.</p>

        <button>Buy Now!</button>
        <p class="product-price">$599.00</p>
    </div>

</li>