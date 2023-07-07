<!-- Header -->
<?php
$title = "Homepage";
include_once 'partial/header.php';
include_once 'partial/navbar.php';
?>
<!-- ! Header -->

<div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/waste.avif" class="d-block w-100 animate__animated animate__zoomIn" alt="...">
            <div class="carousel-caption">
                <div class="col-xl-6 col-lg-8 col-md-12 col-12 animate__animated animate__fadeInRight">
                    <div class="card text-black p-5">
                        <h1>FOOD WASTE</h1>
                        <p>From Plate to Planet: Fight Food Waste for a Sustainable Future!</p>
                        <button class="btn btn-theme mb-0">More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/arrangement-compost-made-rotten-food-with-copy-space_23-2149073776.avif" class="d-block w-100 animate__animated animate__zoomIn" alt="...">
            <div class="carousel-caption">
                <div class="col-xl-6 col-lg-8 animate__animated animate__fadeInRight">
                    <div class="card text-black p-5">
                        <h1>FOOD WASTE</h1>
                        <p>Rescue, Revive, Reuse: Join the Movement Against Food Waste</p>
                        <button class="btn btn-theme outline mb-0">More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/food-waste.jpeg" class="d-block w-100 animate__animated animate__zoomIn" alt="...">
            <div class="carousel-caption">
                <div class="col-xl-6 col-lg-8 animate__animated animate__fadeInRight">
                    <div class="card text-black p-5">
                        <h1>FOOD WASTE</h1>
                        <p>Savor Every Morsel: Combat Food Waste and Nourish the Planet</p>
                        <button class="btn btn-theme outline mb-0">More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="aboutSection">
    <div class="container">
        <div class="col-md-9 mx-auto text-center">
            <h1>We Fight Food Waste!</h1>
            <p>Our mission at Stop Food Waste Day is to ignite change regarding the global food waste issue. We do
                this by drawing attention to the problem, at the same time educating through engaging with society
                at all levels and sharing practical,
                creative, and impactful ways we can all change our behavior to minimize food waste.
            </p>
            <button class="btn btn-theme outline mb-0">About</button>
        </div>
    </div>
</section>

<section class="showcaseSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="data col-lg-2 col-md-4 col-sm-6">
                <div class="">
                    <h1 class="display-3">22%</h1>
                    <p>of all food produced globally is lost or wasted every year</p>
                </div>
            </div>
            <div class="data col-lg-2 col-md-4 col-sm-6">
                <div class="">
                    <h1 class="display-3">45%</h1>
                    <p>of root crops, fruit and vegetables produced globally is lost or wasted per year</p>
                </div>
            </div>
            <div class="data col-lg-2 col-md-4 col-sm-6">
                <div class="">
                    <h1 class="display-3">$1,86</h1>
                    <p>of all food produced globally is lost or wasted every year</p>
                </div>
            </div>
            <div class="data col-lg-2 col-md-4 col-sm-6">
                <div class="">
                    <h1 class="display-3">25%</h1>
                    <p>of all food produced globally is lost or wasted every year</p>
                </div>
            </div>
            <div class="data col-lg-2 col-md-4 col-sm-6">
                <div class="">
                    <h1 class="display-3">8%</h1>
                    <p>of all food produced globally is lost or wasted every year</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="infoSection">
    <div class="container">
        <div class="row">
            <div class=" col-lg-5 col-md-6 col-sm-8 col-12 ">
                <div class="card border-0 shadow-lg p-5">
                    <p>You’re obviously keen to get involved, so here you’ll find suggestions for how to do so along
                        with downloadable resources.</p>
                    <button class="btn btn-theme outline mb-0">TOOLKIT</button>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card border-0 shadow-lg p-5">
                    <p>You’re obviously keen to get involved, so here you’ll find suggestions for how to do so along
                        with downloadable resources.</p>
                    <button class="btn btn-theme outline mb-0">TOOLKIT</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="moreSection">
    <h1 class="mb-4 text-center">LEARN MORE</h1>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mt-4">
                <div class="bg-white d-flex flex-md-row flex-column">
                    <div class="col-md-6  p-4 d-flex flex-column">
                        <h4>OUR STORIES</h4>
                        <p>Learn from our global colleagues and partners about their innovative approaches to
                            reducing food waste.</p>
                        <button class="btn btn-dark btn-theme mt-auto">OUR STORIES</button>
                    </div>

                    <div class="col-md-6">
                        <img src="assets/img/yyyy.avif" class="w-100" alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 mt-4">
                <div class="bg-white d-flex flex-md-row flex-column">
                    <div class="col-md-6 p-4 d-flex flex-column">
                        <h4>OUR STORIES</h4>
                        <p>Our digital food waste cookbook features recipes which give a second life to ingredients
                            that most commonly go to waste in home kitchens, including stale bread, bruised fruit &
                            vegetables, and discarded peels.</p>
                        <button class="btn btn-dark btn-theme mt-auto px-4">DOWNLOAD IT HERE</button>
                    </div>

                    <div class="col-md-6">
                        <img src="assets/img/yyyy.avif" class="w-100" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include_once 'partial/footer.php'; ?>
<!-- ! Footer -->