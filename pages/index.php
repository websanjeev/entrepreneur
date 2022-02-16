<?php get_partial( 'header' ); ?>

<div
  class="main-banner position-relative bg-image parallax-window"
  data-parallax="scroll"
  data-image-src="assets/images/tmp/main-banner.jpg"
  data-speed="0.7"
>
  <div class="container">
    <div
      class="main-banner-item d-flex align-items-center justify-content-start"
    >
      <div>
        <div
          class="fs-1 fw-bold mb-4 text-body font-heading lh-1 scroll-reveal"
          style="letter-spacing: 1px"
        >
          <span class="text-secondary"></span> <br />
        </div>

        <div
          class="mw-500p position-relative z-10 scroll-reveal"
          data-sr-delay="300"
          style="font-size: 24px"
        >
          <strong
            >You have the power to shape the world through your work.</strong
          >
          Whether you are growing a business, growing an organization or growing
          a community, your work can change the course of history. I will help
          you bring your world-changing ideas to life.
        </div>

        <div class="scroll-reveal" data-sr-delay="600">
          <a href="#" class="btn btn-lg btn-outline-light mt-4">Know More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End of banner-->

<div class="py-6">
  <div class="container">
    <div class="d-flex align-items-center mb-4">
      <div>
        <h3 class="fs-2 underline pb-2">Research</h3>
      </div>

      <div class="flex-grow-1"></div>

      <div>
        <a href="#" class="text-green-light text-decoration-none fs-5"
          >View All Projects</a
        >
      </div>
    </div>

    <div class="swiper" id="research-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="#" class="text-decoration-none text-body">
            <div class="pt-70c bg-light position-relative">
              <img
                src="assets/images/tmp/trans-himalaya.jpg"
                class="img-clip"
              />
            </div>
            <div class="mt-3 fs-4">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="text-decoration-none text-body">
            <div class="pt-70c bg-light position-relative">
              <img src="assets/images/tmp/leopard.jpg" class="img-clip" />
            </div>
            <div class="mt-3 fs-4">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="text-decoration-none text-body">
            <div class="pt-70c bg-light position-relative">
              <img src="assets/images/tmp/leopard.jpg" class="img-clip" />
            </div>
            <div class="mt-3 fs-4">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id="research-slider-pagination" class="slider-pagination mt-5"></div>
  </div>
</div>

<div class="py-6">
  <div class="container">
    <div class="text-center fs-5">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the
      1500s, when an unknown printer took a galley of type and scrambled it to
      make a type specimen book. It has survived not only five centuries, but
      also the leap into electronic typesetting, remaining essentially
      unchanged. It was popularised in the 1960s with the release of Letraset
      sheets containing Lorem Ipsum passages,
    </div>
  </div>

  <div class="mt-6">
    <div class="d-flex justify-content-center mb-5">
      <h3 class="underline underline-center fw-medium pb-4">
        Ongoing Projects
      </h3>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <a href="#" class="o-thumb">
            <img src="assets/images/tmp/trans-himalaya.jpg" />
            <div class="o-thumb-content">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6">
          <a href="#" class="o-thumb">
            <img src="assets/images/tmp/leopard.jpg" />
            <div class="o-thumb-content">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="mt-5 divider-light"></div>

    <div class="container">
      <div class="mt-6">
        <div class="d-flex justify-content-center mb-5">
          <h3 class="underline underline-center fw-medium pb-4">
            Previous Projects
          </h3>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <a href="#" class="d-block pt-70c bg-light position-relative">
              <img
                src="assets/images/tmp/1.jpg"
                class="img-clip"
              />
            </a>

            <a href="#" class="d-block text-decoration-none text-body mt-3 fs-5"
              >Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.</a
            >
          </div>
          <div class="col-12 col-md-4">
            <a href="#" class="d-block pt-70c bg-light position-relative">
              <img src="assets/images/tmp/2.jpg" class="img-clip" />
            </a>
            <a href="#" class="d-block text-decoration-none text-body mt-3 fs-5"
              >Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.</a
            >
          </div>
          <div class="col-12 col-md-4">
            <a href="#" class="d-block pt-70c bg-light position-relative">
              <img
                src="assets/images/tmp/3.jpg"
                class="img-clip"
              />
            </a>
            <a href="#" class="d-block text-decoration-none text-body mt-3 fs-5"
              >Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var home = null;

  jQuery(document).ready(function () {
    home = {
      $researchSlider: $("#research-slider"),

      researchSwiper: null,

      videoPlayer: null,

      initYoutubeScript: function () {
        var tag = document.createElement("script");

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      },

      initResearchSlider: function () {
        this.researchSwiper = new Swiper(this.$researchSlider.get(0), {
          slidesPerView: 1,
          spaceBetween: 5,
          pagination: {
            el: $("#research-slider-pagination").get(0),
            clickable: true,
          },
          breakpoints: {
            720: {
              slidesPerView: 2,
            },
          },
        });
      },

      initVideo() {
        var videoPlayer = null;
        videoPlayer = this.videoPlayer = new YT.Player("player", {
          height: "390",
          width: "640",
          videoId: "zwW4y7oQALU",
          playerVars: {
            playsinline: 1,
            iv_load_policy: 3,
            rel: 0,
            modestbranding: 0,
            loop: 1,
          },
        });

        var $videoModal = $("#video-modal");

        $videoModal.on("shown.bs.modal", function () {
          videoPlayer.playVideo();
        });
        $videoModal.on("hidden.bs.modal", function () {
          videoPlayer.pauseVideo();
        });
      },

      init: function () {
        this.initResearchSlider();
        this.initYoutubeScript();
      },
    };

    home.init();
  });

  function onYouTubeIframeAPIReady() {
    if (home.initVideo) home.initVideo();
  }
</script>

<?php get_partial( 'footer' ); ?>
