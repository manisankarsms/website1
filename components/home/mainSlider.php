<style>
    .hero_slider .content{max-width: 720px;margin: 0 auto;text-align: center;width: 100%;}
    .hero_slider h2{font-size: 55px;color: #130942;font-weight: 800;}
    .hero_slider p{font-weight: 400;font-size: 17px;color: #6d7a8c;}
    .carousel-item > div{background-size: cover;background-position: center;background-repeat: no-repeat;
        display: flex;align-items: center;height: 100vh;width:100%;}
    .slide1, .slide4{background-image: url(media/s.jpg);}
    .slide2{background-image: url(media/slide1.jpg);}
    .slide3{background-image: url(media/slide2.jpg);}
    .slide1 .content{transform: translateX(-30%);}
    @media screen and (max-width: 1024px) {
        .carousel-item > div{height: 80vh;}
        .slide1 .content{transform: translateX(0);}
        .hero_slider .content h2{font-size: 40px;}
        .slide1, .slide4{background-image: url(media/ms.jpg);}
        .slide2{background-image: url(media/mslide1.jpg);}
        .slide3{background-image: url(media/mslide2.jpg);}
    }
    @media screen and (max-width: 756px) {
        .carousel-item > div{height: 60vh;}
        .slide1 .content{transform: translateX(0);}
        .hero_slider .content h2{font-size: 40px;}
        .slide1, .slide4{background-image: url(media/ms.jpg);}
        .slide2{background-image: url(media/mzslide1.jpg);}
        .slide3{background-image: url(media/mzslide2.jpg);}
    }
</style>

<div id="heroSlider" class="hero_slider carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="slide1">
            <div class="content">
                <h2>Take the world’s best<br>Quality Treatment</h2>
                <p>More than Medicine… It’s Personal!!!</p>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="slide2"></div>
    </div>
    <div class="carousel-item">
        <div class="slide3"></div>
    </div>
    <div class="carousel-item">
        <div class="slide4">
            <div class="content">
                <h2>Take the world’s best<br>Quality Treatment</h2>
                <p>More than Medicine… It’s Personal!!!</p>
            </div>
        </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon me-5 bg-secondary" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroSlider"  data-bs-slide="next">
    <span class="carousel-control-next-icon bg-secondary ms-5" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

