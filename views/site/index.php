<?php

/** @var yii\web\View $this */

$this->title = "Skillforge - Home page"; ?>


<section id="hero" class="mt-4">
    <div class="container">
        <div class="swiper" id="home-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="https://i.pinimg.com/736x/9f/e1/dd/9fe1dd26a09273a0ff18abd66c18777c.jpg"
                            alt="Placeholder image"
                          />
                        </figure>
                      </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="https://i.pinimg.com/736x/6b/dd/55/6bdd55bf381cc36dae07ffca4b4a36d3.jpg"
                            alt="Placeholder image"
                          />
                        </figure>
                      </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image">
                          <img
                            src="https://i.pinimg.com/736x/bd/ae/ad/bdaead7da6238c031a98e81aedeb48ac.jpg"
                            alt="Placeholder image"
                          />
                        </figure>
                      </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
window.addEventListener('load', () => {
  const swiper = new Swiper('#home-banner', {
    loop: true,

    pagination: {
      el: '.swiper-pagination'
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
  });
});
</script>
