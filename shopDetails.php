<!DOCTYPE html>
<html lang="en">

<?php
    $pageTitle = "Our Product Details";
    $pageDes = "";
?>

<?php include './includes/header.php'?>


<section class="mt-5 shopDeatailspage">
    <div class="container customCon">
        <div class="row">
            <div class="col-lg-6">
                <div class="productImages">
                    <div class="mainSlider">
                        <a data-fancybox="gallery" href="./assets/images/products/01.webp"><img src="./assets/images/products/01.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/products/02.webp"><img src="./assets/images/products/02.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/products/03.webp"><img src="./assets/images/products/03.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/products/04.webp"><img src="./assets/images/products/04.webp" class="img-fluid"></a>
                    </div>

                    <ul class="thumbNav">
                        <li>
                            <img src="./assets/images/products/01.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/products/02.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/products/03.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/products/04.webp" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="productBreif">
                    <h4>Sample Product</h4>
                    <span class="mt-3 Head">OVERVIEW</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odio incidunt voluptate iure, adipisci iusto soluta blanditiis.
                        Vero recusandae voluptatem voluptates!
                    </p>
                    <a href="" class="border-bottom pb-3">$50.00</a>

                    <div class="flexBox2">
                        <div class="sizeBox">
                            <span class="mt-3">size</span>
                            <div class="radio__button">
                                <input type="checkbox" id="small" name="small" value="small">
                                <label for="small">S</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="medium" name="medium" value="medium">
                                <label for="medium">M</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="large" name="large" value="large">
                                <label for="large">L</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="extraLarge" name="extraLarge" value="extraLarge">
                                <label for="extraLarge">XL</label>
                            </div>
                        </div>

                        <div class="colorBox">
                            <span class="mt-3">color</span>
                            <div class="radio__button">
                                <input type="checkbox" id="maroon" name="maroon" value="maroon">
                                <label for="maroon"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="grey" name="grey" value="grey">
                                <label for="grey"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="blue" name="blue" value="blue">
                                <label for="blue"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="black" name="black" value="black">
                                <label for="black"></label>
                            </div>
                        </div>
                    </div>

                    <div class="quantity">
                        <a href="#" class="quantity__minus"><span>-</span></a>
                        <input name="quantity" type="text" class="quantity__input" value="1">
                        <a href="#" class="quantity__plus"><span>+</span></a>
                    </div>

                    <div class="addToCartBtnBox">
                        <button class="cartBtn">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <div class="productDetails">
                    <h4 class="productHead border-bottom pb-5"> Product details</h4>
                    <p class="productDes">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas velit saepe repudiandae placeat
                        ducimus. Temporibus, quidem. Aperiam veritatis aspernatur fugit consequuntur, doloribus nostrum
                        eveniet at quae nihil in quisquam exercitationem reprehenderit minima! Recusandae est modi
                        rerum, veritatis, nihil, qui sint in neque iusto consequuntur eius. Dolore ipsum placeat ab rem.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas velit saepe repudiandae placeat
                        ducimus. Temporibus, quidem. Aperiam veritatis aspernatur fugit consequuntur, doloribus nostrum
                        eveniet at quae nihil in quisquam exercitationem reprehenderit minima! Recusandae est modi
                        rerum, veritatis, nihil, qui sint in neque iusto consequuntur eius. Dolore ipsum placeat ab rem.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topRatedSlider">
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/05.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Augue adipiscing euismod</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$199.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                            </div>
                            <div class="buyBtnBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                                <a href="">Add to cart</a>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/01.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$299.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/Layer-52-copy.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$10.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/Layer-57-copy.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$10.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/senectus-tincidunt-2.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$10.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/iphone-dock-2-430x491.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$399.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/panton-tunior-chair-2-430x491.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$99.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/smart-watches-wood-edition-2-430x491.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$429.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/wine-bottle-lantern-2-430x491.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$349.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prodCarrd">
                        <a href="shopDetails.php" class="linkTag">
                            <div class="img-box">
                                <img src="./assets/images/products/Layer-56-copy.webp" alt="">
                            </div>
                            <div class="desProd">
                                <h4>Classic wooden chair</h4>
                                <span class="itemsAcc">Accessories</span>
                                <li class="priceWrap">
                                    <span>$349.00</span>
                                </li>
                                <li class="retingsWrap">
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                    <i data-retings="★"></i>
                                </li>
                                <p class="parah">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste esse sequi magni eius nulla, hic accusamus nihil culpa dolorum totam deserunt voluptate quod in delectus inventore, dolor sed nemo.
                                </p>
                                <div class="buyBtnBox">
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <a href="">Add to cart</a>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include './includes/footer.php'?>
</body>
</html>