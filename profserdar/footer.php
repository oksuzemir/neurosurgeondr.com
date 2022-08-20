<footer>
            <div class="konten">
                <div class="footer-mid">
                    <div class="footer-mid-content">
                        <div class="footer-logo">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                            </a>
                        </div>
                        <ul>
                            <li><a  rel="nofollow" target="_blank" href="https://www.google.com/maps?ll=41.054648,28.998867&z=17&t=m&hl=tr&gl=TR&mapclient=embed&cid=633727738972231570"><i class="fa fa-map-marker"></i>Teşvikiye Mah. Hakkı Yeten Cad. No: 11 İç
                             Kapı No: 2 Şişli/ İSTANBUL</a></li>
                            <li> <a href="tel:+905304729907"> <i class="fa fa-phone"></i>+905304729907</a></li>
                            <li><a href="mailto:info@neurosurgeondr.com"> <i class="fa fa-envelope"></i>info@neurosurgeondr.com</a></li>
                        </ul>

                    </div>
                    <div class="footer-mid-content">
                        <div class="footer-title"><?php pll_e('Site Map'); ?></div>
                        <?php html5blank_nav(); ?>

                    </div>

                    <div class="footer-mid-content">
                        <div class="footer-title"><?php pll_e('Policy'); ?></div>
                        <?php do_shortcode('[addmenu name="policy-en"]'); ?>

                    </div>
                    <div class="footer-mid-content">
                        <div class="footer-title"><?php pll_e('Google Maps'); ?></div>
                        <a class="footer-map" rel="nofollow" target="_blank" href="https://www.google.com/maps?ll=41.054648,28.998867&z=17&t=m&hl=tr&gl=TR&mapclient=embed&cid=633727738972231570">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" alt="">
                        </a>


                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            <?php pll_e('neurosurgeondr.com © Copyright 2022'); ?> | <a href="https://websitesimark.com/" rel="nofollow" target="_blank">Markon Bilişim </a>
            </div>
        </footer>

    </main>
    <div class="sidebar-menu">
        <div class="konten">
            <div class="logo">
                <a href=""><img src="img/logo-beyaz.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="search-overlay">
        <div class="search-overlay-close"></div>
        <div class="search-form">
            <form method="get" action="http://localhost/profserdar/">
                <input type="text" placeholder="Arayın..." name="s" />
                <button type="submit" role="button">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script type="module">
        var swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            loop: true,
        });
    </script>

    <script type="text/javascript" async>
        (function () {
            var css = document.createElement("link");
            css.href =
                "https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&display=swap";
            css.rel = "stylesheet";
            css.type = "text/css";
            document.getElementsByTagName("head")[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript" async>
        (function () {
            var css = document.createElement("link");
            css.href =
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
            css.rel = "stylesheet";
            css.type = "text/css";
            document.getElementsByTagName("head")[0].appendChild(css);
        })();
    </script>
    <script defer>
        var searchOverlay = document.querySelector(".search-overlay");
        var searchBtn = document.querySelector(".search-button");
        var searchClose = document.querySelector(".search-overlay-close");
        var navigation = document.querySelector(".mobile-menu");
        var burgerMenu = document.getElementById('burger-menu')
        var sideBar = document.querySelector('.sidebar-menu')
        var sideBarinner = document.querySelector('.sidebar-menu .konten')
        var mainContent = document.querySelector('.main-content')
        searchBtn.addEventListener(
            "click",
            function (ev) {
                searchOverlay.classList.add("search-overlay-active");
            },
            false
        );

        searchClose.addEventListener(
            "click",
            function (ev) {
                searchOverlay.classList.remove("search-overlay-active");
            },
            false
        );
        burgerMenu.addEventListener("click", function () {
            this.classList.toggle("close");
            sideBar.classList.toggle("sidebar-menu-active")
            mainContent.classList.toggle("move-to-left")

        });
        if (window.innerWidth < 1100) {
            sideBarinner.appendChild(navigation)
            const list = document.querySelectorAll(".menu-item-has-children");
            for (const el of list) {
                var newEl = '<i class="fa fa-long-arrow-right"></i>';
                el.insertAdjacentHTML(
                    "beforeend",
                    '<i class="fa fa-long-arrow-right"></i>'
                );
            }
            (function () {
                var menuElems = document.querySelectorAll(
                    ".menu-item-has-children .fa-long-arrow-right"
                );
                menuElems.forEach(function (elem) {
                    elem.addEventListener(
                        "click",
                        function () {
                            menuElems.forEach(function (e) {
                                e.previousElementSibling.classList.toggle("sub-menu-active");
                            });
                            this.classList.toggle('rotate-i')
                        },
                        false
                    );
                });
            })();

        }
        const de = document.querySelectorAll(".harf-siniri");
        for (var i = 0; i < de.length; i++) {
            var ben = de[i].innerHTML;
            var den = ben.substr(0, 220);
            de[i].innerHTML = den + "..."; // yazdır

        }
    </script>
    <script>
        /*This script was developed by Codegena.com
        ALL RIGHTS RESERVED
        */
        var i, c, y, v, s, n;
        var im = new Array();
        v = document.getElementsByClassName("youtube");

        for (n = 0; n < v.length; n++) {
            im[n] = v[n].hasAttribute("src") ? v[n].getAttribute("src") : "http://i.ytimg.com/vi/" + v[n].id + "/hqdefault.jpg";
        }

        if (v.length > 0) {
            s = document.createElement("style");
            s.type = "text/css";
            s.innerHTML = '.youtube{background-color:#111;width:100%;overflow:hidden;position:relative;cursor:hand;cursor:pointer}.youtube .thumb{bottom:0;display:block;left:0;width:100%;position:absolute;right:0;top:0;height:100%}.youtube .play{opacity:1;height:77px;left:50%;margin-left:-38px;margin-top:-38px;position:absolute;top:50%;width:77px;background:url("<?php echo get_template_directory_uri(); ?>/img/icons/play-button.png") no-repeat}';
            document.body.appendChild(s);
        }

        for (n = 0; n < v.length; n++) {
            y = v[n];
            i = document.createElement("img");
            i.setAttribute("src", im[n]);
            i.setAttribute("loading", "lazy");
            i.setAttribute("src", im[n]);
            i.setAttribute("class", "thumb");
            c = document.createElement("div");
            c.setAttribute("class", "play");
            y.appendChild(i);
            y.appendChild(c);
            y.onclick = function () {
                var t = document.createElement("iframe");
                t.setAttribute("src", "https://www.youtube.com/embed/" + this.id + param(this));
                t.style.width = this.style.width;
                t.style.height = this.style.height;
                this.parentNode.replaceChild(t, this);
            }
        };
        function param(x) {
            if (x.getAttribute("data-params") !== null) {
                return x.getAttribute("data-params");
            } else {
                return "?autoplay=1";

            }
        }

    </script>
<!-- Lazy img -->
<script defer>
  const imgObserver = new IntersectionObserver((entries, self) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        lazyLoad(entry.target);
        self.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.lazy-picture').forEach((picture) => {
    imgObserver.observe(picture);
  });
  const lazyLoad = (picture) => {
    const img = picture.querySelector('img');
    const sources = picture.querySelectorAll('source');

    sources.forEach((source) => {
      source.srcset = source.dataset.srcset;
      source.removeAttribute('data-srcset');
    });
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  }
</script>

<script defer>
  document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });

      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazy");

      function lazyload() {
        if (lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
            if (img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
          });
          if (lazyloadImages.length == 0) {
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }

      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
  })
</script>
		<?php wp_footer(); ?>
	</body>
</html>