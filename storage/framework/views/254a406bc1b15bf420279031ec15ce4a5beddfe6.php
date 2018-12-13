<?php $__env->startSection('title', "Home page"); ?>

<?php $__env->startSection('content'); ?>
<!-- home -->
<section id="home" class="home">
    <!-- home slider -->
    <div class="owl-carousel home__slider">
        <!-- slide -->
        <div class="item" data-bg="<?php echo e(asset('img/home/slide.jpg')); ?>"></div>
        <!-- end slide -->

        <!-- slide -->
        <div class="item" data-bg="<?php echo e(asset('img/home/slide2.jpg')); ?>"></div>
        <!-- end slide -->

        <!-- slide -->
        <div class="item" data-bg="<?php echo e(asset('img/home/slide3.jpg')); ?>"></div>
        <!-- end slide -->
    </div>
    <!-- end home slider -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- home content -->
                <div class="home__content-wrap">
                    <div class="home__content">
                        <h1 class="home__title">BuyCoin Landing Page</h1>

                        <p class="home__text">Secure & Easy Way To Trade</p>

                        <a data-scroll href="#about" class="home__btn">Learn More</a>

                        <a data-scroll href="#about" class="home__btn home__btn--color">Learn More</a>
                    </div>
                </div>
                <!-- end home content -->
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- about -->
<section id="about" class="about about--angle2 section--gradient">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title section__title--white section__title--margin">About BuyCoin</h2>
            </div>
            <!-- end section title -->

            <div class="col-xs-12">
                <!-- about text -->
                <div class="about__text">
                    <p><b>There are many variations of passages</b> of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or <b>randomised words</b> which don't look even slightly believable.</p>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. <b>All the Lorem Ipsum generators on the Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- get started -->
<section class="section section--pt0">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">How To Get Started</h2>
                <span class="section__tagline">Your tagline</span>
            </div>
            <!-- end section title -->

            <div class="col-xs-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">01</span>
                    <h3 class="box6__title">Sign up for BuyCoin</h3>
                    <p class="box6__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or <b>randomised words</b> which don't look even slightly.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <div class="col-xs-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">02</span>
                    <h3 class="box6__title">Connect Your Bank Account</h3>
                    <p class="box6__text">There are many variations of passages of Lorem Ipsum available, <b>but the majority have suffered</b> alteration in some form, by injected humour, or randomised words which don't look even slightly.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <div class="col-xs-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">03</span>
                    <h3 class="box6__title">Buy and Sell Coin</h3>
                    <p class="box6__text">There are many variations of passages of Lorem Ipsum available, but the majority <a href="#">have suffered</a> alteration in some form, by injected humour, or randomised words which don't look even slightly.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <!-- section button -->
            <div class="col-xs-12">
                <a href="#" class="section__btn">Sign Up</a>
            </div>
            <!-- end section button -->
        </div>
    </div>
</section>
<!-- end get started -->

<!-- ticker -->
<div class="ticker section--gradient">
    <!-- ticker list -->
    <ul class="ticker__list clearfix">
        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>GNT</b> / BTC</span>
            <span class="price">0.00002861</span>
            <span class="change change--red">-2.81%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>ITC</b> / BTC</span>
            <span class="price">0.00006148</span>
            <span class="change change--red">-1.85%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>QASH</b> / BTC</span>
            <span class="price">0.000010281</span>
            <span class="change change--green">+4.34%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>DGD</b> / BTC</span>
            <span class="price">0.009051</span>
            <span class="change change--red">-2.67%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>PAY</b> / BTC</span>
            <span class="price">0.000216</span>
            <span class="change change--red">-1.81%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>BCC</b> / BTC</span>
            <span class="price">0.130641</span>
            <span class="change change--red">-1.44%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>ETH</b> / BTC</span>
            <span class="price">0.0422283</span>
            <span class="change change--red">-1.02%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>XRP</b> / BTC</span>
            <span class="price">0.00002266</span>
            <span class="change change--red">-3.49%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>LTC</b> / BTC</span>
            <span class="price">0.009269</span>
            <span class="change change--green">+6.54%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>BTG</b> / BTC</span>
            <span class="price">0.024681</span>
            <span class="change change--red">-2.78%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>DASH</b> / BTC</span>
            <span class="price">0.069507</span>
            <span class="change change--red">-3.52%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>ETC</b> / BTC</span>
            <span class="price">0.002737</span>
            <span class="change change--green">+0.81%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>EOS</b> / BTC</span>
            <span class="price">0.00032227</span>
            <span class="change change--green">+12.93%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>OMG</b> / BTC</span>
            <span class="price">0.000874</span>
            <span class="change change--green">+5.30%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>RDN</b> / BTC</span>
            <span class="price">0.00036004</span>
            <span class="change change--red">-4.62%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>SNT</b> / BTC</span>
            <span class="price">0.00000678</span>
            <span class="change change--green">+27.68%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>KNC</b> / BTC</span>
            <span class="price">0.00010116</span>
            <span class="change change--green">+0.59%</span>
        </li>
        <!-- end ticker item -->

        <!-- ticker item -->
        <li class="ticker__item">
            <span class="name"><b>ZRX</b> / BTC</span>
            <span class="price">0.00001867</span>
            <span class="change change--red">-2.35%</span>
        </li>
        <!-- end ticker item -->
    </ul>
    <!-- end ticker list -->
</div>
<!-- end ticker -->

<!-- offers -->
<section id="offers" class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Our Offers</h2>
                <p class="section__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly.</p>
            </div>
            <!-- end section title -->

            <!-- offers list -->
            <div class="col-xs-12">
                <ul class="offers offers--single">
                    <li class="offers__item">
                        <span class="get">Get 0.0082 BTC</span>
                        <span class="for">for</span>
                        <span class="value">$100</span>
                        <a class="button" href="#">Buy</a>
                    </li>
                    <li class="offers__item">
                        <span class="get">Get 0.0165 BTC</span>
                        <span class="for">for</span>
                        <span class="value">$200</span>
                        <a class="button" href="#">Buy</a>
                    </li>
                    <li class="offers__item">
                        <span class="get">Get 0.0412 BTC</span>
                        <span class="for">for</span>
                        <span class="value">$500</span>
                        <a class="button" href="#">Buy</a>
                    </li>
                    <li class="offers__item">
                        <span class="get">Get 0.0825 BTC</span>
                        <span class="for">for</span>
                        <span class="value">$1000</span>
                        <a class="button" href="#">Buy</a>
                    </li>
                    <li class="clearfix"></li>
                </ul>
            </div>
            <!-- end offers list -->
        </div>
    </div>
</section>
<!-- end offers -->

<!-- features -->
<section class="section section--grey">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">BuyCoin Template</h2>
                <span class="section__tagline">Excellent for your business</span>
            </div>
            <!-- end section title -->

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-diamond box5__icon"></span>
                    <h3 class="box5__title">Modern Design</h3>
                    <p class="box5__text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <!-- end box (style 5) -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-magic-wand box5__icon"></span>
                    <h3 class="box5__title">Easy Costomize</h3>
                    <p class="box5__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                </div>
                <!-- end box (style 5) -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-leaf box5__icon"></span>
                    <h3 class="box5__title">Clean Code</h3>
                    <p class="box5__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <!-- end box (style 5) -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-laptop-phone box5__icon"></span>
                    <h3 class="box5__title">Fully Responsive</h3>
                    <p class="box5__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                </div>
                <!-- end box (style 5) -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-layers box5__icon"></span>
                    <h3 class="box5__title">20+ Color Schemes</h3>
                    <p class="box5__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <!-- end box (style 5) -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- box (style 5) -->
                <div class="box5">
                    <span class="lnr lnr-rocket box5__icon"></span>
                    <h3 class="box5__title">Excellent purchase</h3>
                    <p class="box5__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                </div>
                <!-- end box (style 5) -->
            </div>
        </div>
    </div>
</section>
<!-- end features -->

<!-- counter -->
<div class="section counter section--bg" data-bg="<?php echo e(asset('img/section-bg/section-bg3.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="counter__box">
                    <span class="counter__value">5.7</span>
                    <span class="counter__title">mln transactions</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="counter__box">
                    <span class="counter__value">70</span>
                    <span class="counter__title">online consultants</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="counter__box">
                    <span class="counter__value">23</span>
                    <span class="counter__title">countries served</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="counter__box">
                    <span class="counter__value">2.5</span>
                    <span class="counter__title">mln bitcoin wallets</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end counter -->

<!-- safety -->
<section id="safety" class="section section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title section__title--underline">It is safe</h2>
            </div>
            <!-- end section title -->

            <div class="col-xs-12 col-sm-4">
                <!-- box (style 3) -->
                <div class="box3 box3--line">
                    <div class="box3__icon">
                        <span class="lnr lnr-lock"></span>
                    </div>
                    <h3 class="box3__title">Security</h3>
                    <p class="box3__text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <!-- end box (style 3) -->
            </div>

            <div class="col-xs-12 col-sm-4">
                <!-- box (style 3) -->
                <div class="box3 box3--line">
                    <div class="box3__icon">
                        <span class="lnr lnr-license"></span>
                    </div>
                    <h3 class="box3__title">License</h3>
                    <p class="box3__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                </div>
                <!-- end box (style 3) -->
            </div>

            <div class="col-xs-12 col-sm-4">
                <!-- box (style 3) -->
                <div class="box3">
                    <div class="box3__icon">
                        <span class="lnr lnr-thumbs-up"></span>
                    </div>
                    <h3 class="box3__title">Result</h3>
                    <p class="box3__text">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
                <!-- end box (style 3) -->
            </div>
            <!-- section button -->
            <div class="col-xs-12">
                <a href="https://themeforest.net/user/dmitryvolkov/portfolio?ref=DmitryVolkov" target="_blank" class="section__btn">purchase now</a>
            </div>
            <!-- end section button -->
        </div>
    </div>
</section>
<!-- end safety -->

<!-- video -->
<section class="section video section--bg" data-bg="<?php echo e(asset('img/section-bg/section-bg2.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <a href="https://vimeo.com/45830194" class="video__btn"><i class="fa fa-play-circle"></i></a>
                <h4 class="video__title">Video Review</h4>
                <p class="video__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
        </div>
    </div>
</section>
<!-- end video -->

<!-- roadmap -->
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Roadmap</h2>
                <span class="section__tagline">Thorny path</span>
            </div>
            <!-- end section title -->

            <!-- roadmap -->
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
                <ul class="roadmap">
                    <li>
                        <span>Q3 2016</span>
                        <p>Project start-up. Product conception. System architecture development.</p>
                    </li>
                    <li>
                        <span>Q4 2016</span>
                        <p>Connection to stock exchanges. Development of trading platform and the system’s core elements.</p>
                    </li>
                    <li>
                        <span>Q1 2017</span>
                        <p>Test environment launch for algorithm creators. Development of the first algorithms.</p>
                    </li>
                    <li>
                        <span>Q2 2017</span>
                        <p>Tradingene public product launch for algorithm creators. Broadening of financial instruments for algorithm creation.</p>
                    </li>
                    <li>
                        <span>Q3 2018</span>
                        <p>Development of user interface prototype for investors.</p>
                    </li>
                </ul>
            </div>
            <!-- end roadmap -->

            <!-- section button -->
            <div class="col-xs-12">
                <a href="https://themeforest.net/user/dmitryvolkov/portfolio?ref=DmitryVolkov" target="_blank" class="section__btn">purchase now</a>
            </div>
            <!-- end section button -->
        </div>
    </div>
</section>
<!-- end roadmap -->

<!-- info -->
<section class="section section--grey">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Template Features</h2>
                <span class="section__tagline">Your tagline</span>
            </div>
            <!-- end section title -->

            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <!-- info content -->
                <div class="info__text">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

                    <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
                <!-- end info content -->
            </div>

            <!-- section button -->
            <div class="col-xs-12">
                <a href="https://themeforest.net/user/dmitryvolkov/portfolio?ref=DmitryVolkov" target="_blank" class="section__btn">purchase now</a>
            </div>
            <!-- end section button -->
        </div>
    </div>
</section>
<!-- end info -->

<!-- team -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Our Team</h2>
                <span class="section__tagline">Your tagline</span>
            </div>
            <!-- end section title -->
        </div>
    </div>

    <!-- slider -->
    <div class="owl-carousel team team--grey">
        <div class="item">
            <img class="team__img" src="img/team/member.png" alt="">
            <div class="team__meta">
                <p>Mark</p>
                <span>CEO</span>
                <ul class="clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="item">
            <img class="team__img" src="<?php echo e(asset('img/team/member2.png')); ?>" alt="">
            <div class="team__meta">
                <p>Jonathan</p>
                <span>Founder</span>
                <ul class="clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="item">
            <img class="team__img" src="<?php echo e(asset('img/team/member4.png')); ?>" alt="">
            <div class="team__meta">
                <p>John</p>
                <span>Technologist</span>
                <ul class="clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="item">
            <div class="team__meta">
                <p>Gregory</p>
                <span>Economist</span>
                <ul class="clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="item">
            <img class="team__img" src="<?php echo e(asset('img/team/member5.png')); ?>" alt="">
            <div class="team__meta">
                <p>Emily</p>
                <span>Marketer</span>
                <ul class="clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end slider -->
</section>
<!-- end team -->

<!-- blog -->
<section id="blog" class="section section--grey">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Blog</h2>
                <span class="section__tagline">Our publications</span>
            </div>
            <!-- end section title -->

            <!-- article -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="article">
                    <figure class="article__img">
                        <a href="#">
                            <img src="img/blog/1.jpg" alt="">
                        </a>
                    </figure>

                    <header class="article__header">
                        <h3 class="article__title">
                            <a href="#">Blockchain</a>
                        </h3>
                    </header>

                    <div class="article__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
                    </div>
                </article>
            </div>
            <!-- end article -->

            <!-- article -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="article">
                    <figure class="article__img">
                        <a href="#">
                            <img src="img/blog/2.jpg" alt="">
                        </a>
                    </figure>

                    <header class="article__header">
                        <h3 class="article__title">
                            <a href="#">Finance</a>
                        </h3>
                    </header>

                    <div class="article__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
                    </div>
                </article>
            </div>
            <!-- end article -->

            <!-- article -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="article">
                    <figure class="article__img">
                        <a href="#">
                            <img src="img/blog/3.jpg" alt="">
                        </a>
                    </figure>

                    <header class="article__header">
                        <h3 class="article__title">
                            <a href="#">Business</a>
                        </h3>
                    </header>

                    <div class="article__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
                    </div>
                </article>
            </div>
            <!-- end article -->
        </div>
    </div>
</section>
<!-- end blog -->

<!-- get in touch -->
<section id="contacts" class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title">Get in Touch</h2>
                <p class="section__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
            </div>
            <!-- end section title -->

            <div class="col-xs-12 col-sm-6">
                <!-- contacts -->
                <div class="contacts">
                    <ul class="contacts__list">
                        <li>
                            <span class="lnr lnr-map"></span>
                            The BuyCoin Company, LLC <br>
                            32 Barnard St. #145 Savannah, GA 80634
                        </li>
                        <li>
                            <span class="lnr lnr-calendar-full"></span>Mon - Fri 08:00 - 19:00
                        </li>
                        <li>
                            <span class="lnr lnr-inbox"></span>
                            <a href="mailto:support@buycoin.com">support@buycoin.com</a>
                        </li>
                        <li>
                            <span class="lnr lnr-phone-handset"></span>
                            <a href="tel:+18002345678">+1 (800) 234-5678</a>
                        </li>
                    </ul>
                </div>
                <!-- end contacts -->
            </div>

            <div class="col-xs-12 col-sm-6">
                <!-- form -->
                <form action="#" class="form form--contacts">
                    <input type="text" class="form__input" placeholder="Name">
                    <input type="text" class="form__input" placeholder="Email">
                    <textarea class="form__textarea" placeholder="Message"></textarea>
                    <button class="form__btn" type="button">Send</button>
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
</section>
<!-- end get in touch -->

<!-- partners -->
<div class="partners section--grey">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- partners slider -->
                <div class="owl-carousel partners__slider">
                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/activeden-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/audiojungle-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/codecanyon-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/graphicriver-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/photodune-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/themeforest-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/videohive-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->

                    <!-- slider item -->
                    <div class="item">
                        <a href="#">
                            <img src="<?php echo e(asset('img/partners/3docean-light-background.png')); ?>" alt="">
                        </a>
                    </div>
                    <!-- end slider item -->
                </div>
                <!-- end partners slider -->
            </div>
        </div>
    </div>
</div>
<!-- end partners -->

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-xs-12">
                <h2 class="section__title section__title--white">Subscribe For Our Newsletter</h2>
            </div>
            <!-- end section title -->

            <div class="col-xs-12">
                <form action="#" class="subscribe">
                    <input type="text" class="subscribe__input" placeholder="Enter your Email">
                    <button type="button" class="subscribe__btn"><i class="fa fa-paper-plane-o"></i></button>
                </form>
            </div>

            <div class="col-xs-12">
                <!-- social list -->
                <ul class="footer__social clearfix">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                <!-- end social list -->
            </div>

            <div class="col-xs-12">
                <!-- copyright -->
                <small class="footer__copyright">© 2018 <a href="#">BuyCoin</a>. Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio?ref=DmitryVolkov" target="_blank">Dmitry Volkov</a></small>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- sign in -->
<div id="signin" class="mfp-hide modal">
    <button class="modal__close" type="button">
        <span class="lnr lnr-cross"></span>
    </button>

    <h6 class="modal__title">Sign In</h6>

    <form class="form form--modal" action="#">
        <input type="text" class="form__input" placeholder="Username">
        <input type="password" class="form__input" placeholder="Password">
        <button class="form__btn" type="button">Sign In</button>
    </form>

    <a href="#signup" class="modal__link modal-btn">Sign Up</a>
</div>
<!-- end sign in -->

<!-- sign up -->
<div id="signup" class="mfp-hide modal">
    <button class="modal__close" type="button">
        <span class="lnr lnr-cross"></span>
    </button>

    <h6 class="modal__title">Sign Up</h6>

    <form class="form form--modal" action="<?php echo e(route('register')); ?>">

        <input  id="email" type="email" class="form__input <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
        <?php if($errors->has('email')): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>

        <input type="password" id="password" class="form__input <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password" name="password" required>

        <?php if($errors->has('password')): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('password')); ?></strong>
        </span>
        <?php endif; ?>

        <input id="password-confirm" type="password" placeholder="Confirm password" class="form__input" name="password_confirmation" required>

        <button class="form__btn" type="submit">Sign Up</button>
    </form>

    <a href="#signin"  class="modal__link modal-btn">Sign In</a>
</div>
<!-- end sign up -->

<!-- preloader -->
<div class="preloader">
    <div class="preloader__logo">
        <img src="img/logo--dark.png" alt="">
    </div>
    <div class="preloader__spinner">
        <div class="preloader__bounce1"></div>
        <div class="preloader__bounce2"></div>
    </div>
</div>
<!-- end preloader -->


<!-- end style switcher -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
 ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>