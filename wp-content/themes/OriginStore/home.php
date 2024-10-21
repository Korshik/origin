<?php
/*
Template Name: home

*/
?>
<?php get_header(); ?>

    <main>
      <div class="home-page__welcome">
        <div class="home-page__welcome__inner flex">
          <div class="home-page__welcome__left">
            <div class="slider">
              <div class="slide-track">
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2362.jpg" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2372.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2380.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2370.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2376.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2379.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2389.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2391.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2393.JPG" alt=""></div>
                <div class="slide" ><img src="<?php bloginfo('template_url');  ?>/assets/images/IMG_2379.JPG" alt=""></div>
              </div>
            </div>
          </div>
            <div class="home-page__welcome__right flex flex-align-c" >

            <div class="home-page__welcome__right__inner">
              <div class="home-page__welcome__right__title">
                <h1>Красивый заголовок</h1>
              </div>
              <div class="home-page__welcome__right__text">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, sit sapiente amet labore recusandae temporibus quod ipsam .....</p>
              </div>
              <div class="home-page__welcome__right__button">
                <a
                  href="/about/"
                  class="pag_button"
                  target="_blank"
                  >О нас</a
                >
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>

      <div class="home-page__articles">
        <div class="home-page__articles__inner flex">
          <div class="home-page__article">
            <a href="rozatsea/index.htm">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/1704974535171.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Статья</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать статью
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="home-page__article">
            <a href="peptidy/index.htm?post_type=post&p=112459">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/1704974535164.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Статья</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать статью
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="home-page__article">
            <a href="lipkost/index.htm?post_type=post&p=93748">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/001721-1600x2000-product_popup.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Статья</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать статью
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="home-page__articles__mobile">
          <div class="swiper" id="articles-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="rozatsea/index.htm?post_type=post&p=112471">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('http:///origin/wp-content/themes/OriginStore/assets/images/1704974535171.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Статья</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать статью
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="peptidy/index.htm?post_type=post&p=112459">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('<?php bloginfo('template_url');  ?>/assets/images/1704974535164.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Статья</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать статью
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="lipkost/index.htm?post_type=post&p=93748">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('<?php bloginfo('template_url');  ?>/assets/images/001721-1600x2000-product_popup.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Статья</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать статью
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="home-page__articles">
        <div class="home-page__articles__inner flex">
          <div class="home-page__article">
            <a href="rozatsea/index.htm">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_2389.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Блог</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать блог
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="home-page__article">
            <a href="peptidy/index.htm?post_type=post&p=112459">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_3961.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Блог</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать блог
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="home-page__article">
            <a href="lipkost/index.htm?post_type=post&p=93748">
              <div
                class="home-page__article__inner"
                style="
                  background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_2387.JPG');
                "
              >
                <div class="home-page__article__container">
                  <div class="home-page__article__title">Блог</div>
                  <div class="home-page__article__desc"></div>
                  <div class="home-page__article__button">
                    <button class="button-arrow is--white">
                      Читать блог
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="home-page__articles__mobile">
          <div class="swiper" id="articles-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="rozatsea/index.htm?post_type=post&p=112471">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_2389.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Блог</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать блог
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="peptidy/index.htm?post_type=post&p=112459">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_3961.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Блог</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать блог
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="home-page__article">
                  <a href="lipkost/index.htm?post_type=post&p=93748">
                    <div
                      class="home-page__article__inner"
                      style="
                        background-image: url('<?php bloginfo('template_url');  ?>/assets/images/IMG_2387.JPG');
                      "
                    >
                      <div class="home-page__article__container">
                        <div class="home-page__article__title">Блог</div>
                        <div class="home-page__article__desc"></div>
                        <div class="home-page__article__button">
                          <button class="button-arrow is--white">
                            Читать блог
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel">
        <div class="carousel__inner">
          <div class="carousel__top flex flex-align-c container">
            <div class="carousel__top__title base-heading">
              <div class="base-heading__main">Распродажа</div>
            </div>
            <div class="carousel__top__controls ml-auto">
              <div class="carousel__top__controls__arrows flex flex-align-c">
                <button data-direct="prev">
                <span class="material-icons">&#xe5cb;</span>

                </button>
                <button data-direct="next">
                <span class="material-icons">&#xe5cc;</span>
                </button>
              </div>
            </div>
          </div>
          <div class="carousel__items">
            <div class="swiper" id="carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c">
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c">

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#"
                        class="product-link"
                      >
                        <div class="product-card__image" data-id="302293">
                          <div
                            class="product-card__image__inner"
                            style="
                              background-image: url('<?php bloginfo('template_url');  ?>/assets/images/495_original.jpg');
                            "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">150 р.</span>
                                <span>100 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >

                              <button
                                id="add_to_cart_302293"
                                data-quantity="#"
                                data-product_id="#"
                                data-product_sku="#"
                                data-product_price="#"
                                data-product_name="Маска смываемая с женьшенем I’m from Ginseng Mask 120g"
                                data-product_cat="Уход за лицом / Маски/ Смываемые"
                                data-product_brand=" I`M FROM"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </button>
                            </div>
                            <script>
                              jQuery(function ($) {
                                if (
                                  typeof wc_add_to_cart_params === "undefined"
                                ) {
                                  return false;
                                }
                                $(document).on(
                                  "click",
                                  "#add_to_cart_302293",
                                  function (e) {
                                    e.preventDefault();

                                    var $thisbutton = $(this);

                                    $thisbutton.removeClass("added");
                                    $thisbutton.addClass("loading");

                                    var data = {
                                      product_id:
                                        $thisbutton.data("product_id"),
                                      product_sku:
                                        $thisbutton.data("product_sku"),
                                      quantity: $thisbutton.data("quantity"),
                                    };

                                    // Trigger event.
                                    $(document.body).trigger("adding_to_cart", [
                                      $thisbutton,
                                      data,
                                    ]);

                                    if ("gtag" in window) {
                                      gtag("event", "add_to_cart", {
                                        items: [
                                          {
                                            id: $thisbutton.data("product_id"), // ID товара
                                            name: mb_strimwidth(
                                              $thisbutton.data("product_name"),
                                              0,
                                              40,
                                              "..."
                                            ), // Наименование товара
                                            brand:
                                              $thisbutton.data("product_brand"), // Наименование бренда товара
                                            category:
                                              $thisbutton.data("product_cat"), // Категория товара
                                            variant: "", // Вариант товара (ситуативный)
                                            quantity:
                                              $thisbutton.data("quantity"), // Кол-во товара
                                            price:
                                              $thisbutton.data("product_price"), // Цена товара
                                          },
                                        ],
                                      });
                                    }

                                    // Ajax action.
                                    $.post(
                                      wc_add_to_cart_params.wc_ajax_url
                                        .toString()
                                        .replace("%%endpoint%%", "add_to_cart"),
                                      data,
                                      function (response) {
                                        if (!response) {
                                          return;
                                        }

                                        var this_page =
                                          window.location.toString();

                                        this_page = this_page.replace(
                                          "add-to-cart",
                                          "added-to-cart"
                                        );

                                        if (
                                          response.error &&
                                          response.product_url
                                        ) {
                                          window.location =
                                            response.product_url;
                                          return;
                                        }

                                        // Redirect to cart option.
                                        if (
                                          wc_add_to_cart_params.cart_redirect_after_add ===
                                          "yes"
                                        ) {
                                          window.location =
                                            wc_add_to_cart_params.cart_url;
                                          return;
                                        } else {
                                          $thisbutton.removeClass("loading");

                                          var fragments = response.fragments;
                                          var cart_hash = response.cart_hash;

                                          // Block fragments class.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, val) {
                                                $(key).addClass("updating");
                                              }
                                            );
                                          }

                                          // Block widgets and fragments.
                                          $(
                                            ".shop_table.cart, .updating, .cart_totals"
                                          )
                                            .fadeTo("400", "0.6")
                                            .block({
                                              message: null,
                                              overlayCSS: {
                                                opacity: 0.6,
                                              },
                                            });

                                          // Changes button classes.
                                          $thisbutton.addClass("added");

                                          // View cart text.
                                          if (
                                            !wc_add_to_cart_params.is_cart &&
                                            $thisbutton
                                              .parent()
                                              .find(".added_to_cart").length ===
                                              0
                                          ) {
                                            $thisbutton.after(
                                              ' <a href="' +
                                                wc_add_to_cart_params.cart_url +
                                                '" class="btn add-to-cart mb-2 btn-black added_to_cart wc-forward" title="' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                '">' +
                                                wc_add_to_cart_params.i18n_view_cart +
                                                "</a>"
                                            );
                                          }

                                          // Replace fragments.
                                          if (fragments) {
                                            $.each(
                                              fragments,
                                              function (key, value) {
                                                $(key).replaceWith(value);
                                              }
                                            );
                                          }

                                          // Unblock.
                                          $(".widget_shopping_cart, .updating")
                                            .stop(true)
                                            .css("opacity", "1")
                                            .unblock();

                                          // Cart page elements.
                                          $(".shop_table.cart").load(
                                            this_page +
                                              " .shop_table.cart:eq(0) > *",
                                            function () {
                                              $(".shop_table.cart")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();

                                              $(document.body).trigger(
                                                "cart_page_refreshed"
                                              );
                                            }
                                          );

                                          $(".cart_totals").load(
                                            this_page +
                                              " .cart_totals:eq(0) > *",
                                            function () {
                                              $(".cart_totals")
                                                .stop(true)
                                                .css("opacity", "1")
                                                .unblock();
                                            }
                                          );

                                          // Trigger event so themes can refresh other areas.
                                          $(document.body).trigger(
                                            "added_to_cart",
                                            [fragments, cart_hash, $thisbutton]
                                          );

                                          $(".header-mini-cart").show();
                                        } // End if().
                                      }
                                    );
                                  }
                                );
                              });
                            </script>
                          </div>
                          <div
                            class="product-card__content__brand"
                            data-href="https://patchandgo.ru/brand/im-from/"
                          >
                          I`M FROM
                          </div>
                          <h3 class="product-card__content__title">

                            Маска смываемая с женьшенем I’m from Ginseng Mask 120g
                          </h3>
                        </div>
                        <span class="product-card__labels">
                          <span class="product-card__label is--top"
                            ><svg height="30"
                             viewBox="0 0 30 30"
                              width="40"
                              stroke='white'
                              fill="white"
                              stroke-width="2"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.5 17h9c.277 0 .5.223.5.5s-.223.5-.5.5h-9c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm4.5 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zm0-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM25 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1zM.446 15.67c-.587.58-.583 1.542 0 2.124l11.76 11.76c.58.582 1.542.587 2.123 0L28.855 14.85c.247-.25.532-.48.768-.856.235-.376.376-.87.376-1.544V1.5c0-.823-.678-1.5-1.5-1.5h-11c-1.158 0-1.824.624-2.35 1.145zm.703.712L15.85 1.856c.533-.526.808-.856 1.65-.856H28.5c.285 0 .5.214.5.5v10.952c0 .547-.093.805-.224 1.013-.13.21-.344.394-.63.684l-14.53 14.7c-.197.2-.5.2-.703-.002l-11.76-11.76c-.203-.203-.205-.508-.004-.706z"/></svg></span
                          >
                        </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Бестселлеры(акции)"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Уход за лицом / Маски/ Смываемые"
                      />
                      <input type="hidden" name="product_price" value="4520" />
                      <input type="hidden" name="product_id" value="302293" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="I`M FROM"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-button-container">
          <a class="carousel-button" href="">Смотреть</a>
          </div>
        </div>
      </div>



    </main>
<?php get_footer(); ?>