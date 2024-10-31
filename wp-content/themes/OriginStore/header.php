<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"  />
    <meta name="mobile-web-app-capable" content="yes" width="1000"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Origin Store"/>
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="Description" content="Origin – интернет-магазин уходовой косметики"/>

    <script>
      document.documentElement.className =
        document.documentElement.className + " yes-js js_active js";
    </script>
    <title>Origin</title>

    <?php wp_head(); ?>

  </head>

  <body class="commerce-no-js">
   <script>
      function sendFilterEvent(event_label) {
        try {
          gtag("event", "choose", {
            event_category: "catalogue_filter",
            event_label: event_label,
          });
          ym(56793582, "reaachGoal", "catalogue_filter_" + event_label);
        } catch (exceptionVar) {
          console.error(exceptionVar);
        }
      }
      jQuery(document).ready(function($) {
    // Внутри этой функции $() будет работать как синоним jQuery()
        $(document).on("change", 'input[name="price_min"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="price_max"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="skin_type"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="skin_condition[]"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="ingredient[]"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="effect[]"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("change", 'input[name="brand[]"]', function (e) {
          const event_label = $(this).data("event_label");
          sendFilterEvent(event_label);
        });
        $(document).on("click", ".reset-filter-btn", function (e) {
          sendFilterEvent("clear");
        });
        $(document).on("click", ".apply-filter-btn", function (e) {
          sendFilterEvent("apply");
        });
        $(document).on("click", "#place_order", function (e) {
          try {
            gtag("event", "click", {
              event_category: "checkout",
              event_label: "to_purchase",
            });
            ym(56793582, "reachGoal", "checkout_back_to_purchase");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", "a.checkout_input_back_btn", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "checkout",
              event_label: "back_to_cart",
            });
            ym(56793582, "reachGoal", "checkout_back_to_cart");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        $(document).on("focusout", ".checkout_input_contact", function (e) {
          if ($(e.currentTarget).val().length > 0) {
            try {
              gtag("event", "add", {
                event_category: "checkout",
                event_label: "contact_info",
              });
              ym(56793582, "reachGoal", "checkout_add_contact_info");
            } catch (exceptionVar) {
              console.error(exceptionVar);
            }
          }
        });
        $(document).on("click", "a.reg_auth_link", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "checkout",
              event_label: "auth",
            });
            ym(56793582, "reachGoal", "checkout_auth");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        $(document).on("click", "a.main_menu_link", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "menu",
            });
            ym(56793582, "reachGoal", "menu_click");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        $(document).on("click", "a.proceed_to_checkout_button", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "cart",
              event_label: "to_checkout",
            });
            ym(56793582, "reachGoal", "cart_to_checkout");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        document.body.addEventListener("couponApplied", function (e) {
          try {
            gtag("event", "click", {
              event_category: "cart",
              event_label: "promocode",
            });
            ym(56793582, "reachGoal", "cart_promocode");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        const elsReviewsContainer = document.getElementsByClassName(
          "product-page__reviews__container"
        );
        document.addEventListener("scroll", function (e) {
          if (elsReviewsContainer.length > 0) {
            if (
              elsReviewsContainer[0].getBoundingClientRect().y -
                window.innerHeight <
              0
            ) {
              try {
                gtag("event", "view", {
                  event_category: "product_card",
                  event_label: "review_view",
                });
                ym(56793582, "reachGoal", "review_view");
              } catch (exceptionVar) {
                console.error(exceptionVar);
              }
            }
          }
        });
        document.body.addEventListener("searchRequest", function (e) {
          try {
            gtag("event", "add", {
              event_category: "seacrh",
            });
            ym(56793582, "reachGoal", "search_add");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", "#load_more_btn", function (e) {
          try {
            gtag("event", "click", {
              event_category: "catalogue",
              event_label: "show_more",
            });
            ym(56793582, "reachGoal", "catalogue_show_more");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", "a.dolyami_link", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "dolyame_link",
            });
            ym(56793582, "reachGoal", "product_card_list_dolyame_link");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        $(document).on("click", ".dolyami_button", function (e) {
          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "dolyami_pay",
            });
            ym(56793582, "reachGoal", "product_card_list_dolyami_pay");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".write_review_button", function (e) {
          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "write_review",
            });
            ym(56793582, "reachGoal", "product_card_write_review");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".card-header", function (e) {
          try {
            const id = $(this).attr("id");
            var event_label = "";
            switch (id) {
              case "whatDoHeader":
                event_label = "list_what_doing";
                break;
              case "toWhowHeader":
                event_label = "list_for_whom";
                break;
              case "howToUseHeader":
                event_label = "list_how_use";
                break;
              case "compositionHeader":
                event_label = "list_composition";
                break;
              case "safetyHeader":
                event_label = "list_measures";
                break;
            }
            gtag("event", "click", {
              event_category: "product_card",
              event_label: event_label,
            });
            ym(56793582, "reachGoal", "product_card_" + event_label);
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", "a.product_card_brand_link", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";

          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "to_brand",
            });
            ym(56793582, "reachGoal", "product_card_to_brand");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        $(document).on("click", "a.add_to_wishlist", function (e) {
          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "add_to_wishlist",
            });
            ym(56793582, "reachGoal", "product_card_add_to_wishlist");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".btn-spn-up.from-button", function (e) {
          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "up_quantity",
            });
            ym(56793582, "reachGoal", "product_card_up_quantity");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".btn-spn-down.from-button", function (e) {
          try {
            gtag("event", "click", {
              event_category: "product_card",
              event_label: "low_quantity",
            });
            ym(56793582, "reachGoal", "product_card_low_quantity");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", "a.social_link_event", function (e) {
          e.preventDefault();
          const url = $(this).attr("href");
          const target = $(this).attr("target") || "_self";
          const social = $(this).data("social");

          try {
            gtag("event", "click", {
              event_category: "social_media",
              event_label: social,
            });
            ym(56793582, "reachGoal", "social_media_click_" + social);
          } catch (exceptionVar) {
            console.error(exceptionVar);
          } finally {
            if (url) window.open(url, target);
          }
        });
        document.body.addEventListener("productCardViewed", function (e) {
          if ("gtag" in window) {
            gtag("event", "view_item_list", {
              items: [
                {
                  id: e.detail.id, // ID товара
                  name: mb_strimwidth(e.detail.name, 0, 40, "..."), // Наименование товара
                  list_name: e.detail.listName, // Наименование списка товаров
                  brand: e.detail.brand, // Наименование бренда товара
                  category: e.detail.cat, // Категория товара
                  variant: "", // Вариант товара (ситуативный)
                  list_position: 1, // Позиция товара в списке
                  price: e.detail.price, // Цена товара
                },
              ],
            });
          }
        });
        document.body.addEventListener("bagModalOpen", function () {
          if ("gtag" in window) {
            gtag("event", "begin_checkout", {
              items: [],
              coupon: "", // Промокод
            });
            gtag("event", "set_checkout_option", {
              checkout_step: 1, // Шаг оформления заказа
              checkout_option: "cart open", // Наименование шага
              value: 0, // Цена корзины
            });
          }
          VK.Retargeting.Event("cart");
        });
        $(document).on("click", "a.product-link", function (e) {
          try {
            const product_price = $(this)
              .parents(".product-card__inner")
              .find('input[name="product_price"]')
              .val();
            const product_id = $(this)
              .parents(".product-card__inner")
              .find('input[name="product_id"]')
              .val();
            const product_brand = $(this)
              .parents(".product-card__inner")
              .find('input[name="product_brand"]')
              .val();
            const product_name = $(this)
              .parents(".product-card__inner")
              .find(".product-card__content__title")
              .text();
            const product_list_name = $(this)
              .parents(".product-card__inner")
              .find('input[name="product_list_name"]')
              .val();
            const product_cat = $(this)
              .parents(".product-card__inner")
              .find('input[name="product_cat"]')
              .val();
            gtag("event", "select_content", {
              items: [
                {
                  id: product_id, // ID товара
                  name: mb_strimwidth(product_name, 0, 40, "..."), // Наименование товара
                  list_name: product_list_name, // Наименование списка товаров
                  brand: product_brand, // Наименование бренда товара
                  category: product_cat, // Категория товара
                  variant: "", // Вариант товара (ситуативный)
                  list_position: 1, // Позиция товара в списке
                  price: product_price, // Цена товара
                },
              ],
            });
            gtag("event", "click", {
              event_category: "catalogue",
              event_label: "to_product_cart",
            });
            ym(56793582, "reachGoal", "catalogue_to_product_cart");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".btn-spn-up.from-mini-cart", function (e) {
          try {
            var $thisbutton = $(this);
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
                  brand: $thisbutton.data("product_brand"), // Наименование бренда товара
                  category: $thisbutton.data("product_cat"), // Категория товара
                  variant: "", // Вариант товара (ситуативный)
                  quantity: 1, // Кол-во товара
                  price: $thisbutton.data("product_price"), // Цена товара
                },
              ],
            });
            gtag("event", "click", {
              event_category: "cart",
              event_label: "up_quantity",
            });
            ym(56793582, "reachGoal", "cart_up_quantity");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".btn-spn-down.from-mini-cart", function (e) {
          try {
            var $thisbutton = $(this);
            gtag("event", "remove_from_cart", {
              items: [
                {
                  id: $thisbutton.data("product_id"), // ID товара
                  name: mb_strimwidth(
                    $thisbutton.data("product_name"),
                    0,
                    40,
                    "..."
                  ), // Наименование товара
                  brand: $thisbutton.data("product_brand"), // Наименование бренда товара
                  category: $thisbutton.data("product_cat"), // Категория товара
                  variant: "", // Вариант товара (ситуативный)
                  quantity: 1, // Кол-во товара
                  price: $thisbutton.data("product_price"), // Цена товара
                },
              ],
            });
            gtag("event", "click", {
              event_category: "cart",
              event_label: "low_quantity",
            });
            ym(56793582, "reachGoal", "cart_low_quantity");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on("click", ".btn-spn-up.from-cart", function (e) {
          gtag("event", "click", {
            event_category: "cart",
            event_label: "up_quantity",
          });
          ym(56793582, "reachGoal", "cart_up_quantity");
        });
        $(document).on("click", ".btn-spn-down.from-cart", function (e) {
          gtag("event", "click", {
            event_category: "cart",
            event_label: "low_quantity",
          });
          ym(56793582, "reachGoal", "cart_low_quantity");
        });
        $(document).on(
          "click",
          ".product-type-simple form .single_add_to_cart_button",
          function (e) {
            try {
              var $thisbutton = $(this);
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
                    brand: $thisbutton.data("product_brand"), // Наименование бренда товара
                    category: $thisbutton.data("product_cat"), // Категория товара
                    variant: "", // Вариант товара (ситуативный)
                    quantity: $(".quantity .qty").val(), // Кол-во товара
                    price: $thisbutton.data("product_price"), // Цена товара
                  },
                ],
              });
              gtag("event", "click", {
                event_category: "product_card",
                event_label: "add_to_cart",
              });
              ym(56793582, "reachGoal", "product_card_add_to_cart");
            } catch (exceptionVar) {
              console.error(exceptionVar);
            }
          }
        );
        $(document).on("click", ".mini_cart_item_remove", function (e) {
          try {
            var $thisbutton = $(this);
            gtag("event", "remove_from_cart", {
              items: [
                {
                  id: $thisbutton.data("product_id"), // ID товара
                  name: mb_strimwidth(
                    $thisbutton.data("product_name"),
                    0,
                    40,
                    "..."
                  ), // Наименование товара
                  brand: $thisbutton.data("product_brand"), // Наименование бренда товара
                  category: $thisbutton.data("product_cat"), // Категория товара
                  variant: "", // Вариант товара (ситуативный)
                  quantity: 1, // Кол-во товара
                  price: $thisbutton.data("product_price"), // Цена товара
                },
              ],
            });
            gtag("event", "click", {
              event_category: "cart",
              event_label: "low_quantity",
            });
            ym(56793582, "reachGoal", "cart_low_quantity");
          } catch (exceptionVar) {
            console.error(exceptionVar);
          }
        });
        $(document).on(
          "change",
          'input[type=radio][name="shipping_method[0]"]',
          function (e) {
            try {
              gtag("event", "checkout_progress", {
                items: [],
                coupon: "", // Промокод
              });
              gtag("event", "set_checkout_option", {
                checkout_step: 3, // Шаг оформления заказа
                checkout_option: "shipping: " + this.value, // Значение шага
                value: 0, // Цена корзины
              });
              gtag("event", "add", {
                event_category: "checkout",
                event_label: "delivery_info",
              });
              ym(56793582, "reachGoal", "checkout_add_delivery_info");
            } catch (exceptionVar) {
              console.error(exceptionVar);
            }
          }
        );
        $(document).on(
          "change",
          'input[type=radio][name="payment_method"]',
          function (e) {
            try {
              gtag("event", "checkout_progress", {
                items: [],
                coupon: "", // Промокод
              });
              gtag("event", "set_checkout_option", {
                checkout_step: 4, // Шаг оформления заказа
                checkout_option: "pay method: " + this.value, // Значение шага
                value: 0, // Цена корзины
              });
              gtag("event", "add", {
                event_category: "checkout",
                event_label: "payment_info",
              });
              ym(56793582, "reachGoal", "checkout_add_payment_info");
            } catch (exceptionVar) {
              console.error(exceptionVar);
            }
          }
        );
      });

    </script>
  <header class="header">
  <nav class="navbar">
  <div class="container">
    <div class="navbar__wrap">
      <div class="hamb">
        <div class="hamb__field" id="hamb">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
          <a href="/home/" class="logo" id="logo"><svg width="194" height="44" viewBox="0 0 194 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.514 8.64062C26.1692 8.64062 30.5377 10.0862 33.6194 12.9773C36.7012 15.8685 38.2421 20.0781 38.2421 25.6062C38.2421 31.1344 36.7012 35.344 33.6194 38.2352C30.5377 41.1263 26.1692 42.5719 20.514 42.5719C14.8588 42.5719 10.4903 41.1422 7.4085 38.2828C4.3585 35.3917 2.8335 31.1661 2.8335 25.6062C2.8335 20.0464 4.3585 15.8367 7.4085 12.9773C10.4903 10.0862 14.8588 8.64062 20.514 8.64062ZM20.514 16.5039C18.2582 16.5039 16.5426 17.187 15.3671 18.5531C14.1916 19.9193 13.6038 21.762 13.6038 24.0812V27.1312C13.6038 29.4505 14.1916 31.2932 15.3671 32.6594C16.5426 34.0255 18.2582 34.7086 20.514 34.7086C22.7697 34.7086 24.4853 34.0255 25.6608 32.6594C26.8681 31.2932 27.4718 29.4505 27.4718 27.1312V24.0812C27.4718 21.762 26.8681 19.9193 25.6608 18.5531C24.4853 17.187 22.7697 16.5039 20.514 16.5039ZM75.0331 19.268C75.0331 21.2695 74.493 23.0805 73.4128 24.7008C72.3326 26.3211 70.7599 27.5125 68.6948 28.275L75.9862 42H64.1675L58.3534 30.0383H54.4456V42H43.9136V9.2125H63.9768C66.3279 9.2125 68.3294 9.67318 69.9815 10.5945C71.6654 11.4841 72.9203 12.7073 73.7464 14.2641C74.6042 15.7891 75.0331 17.457 75.0331 19.268ZM64.3104 19.6969C64.3104 18.8391 64.0245 18.1242 63.4526 17.5523C62.8807 16.9805 62.1818 16.6945 61.3557 16.6945H54.4456V22.7469H61.3557C62.1818 22.7469 62.8807 22.4609 63.4526 21.8891C64.0245 21.2854 64.3104 20.5547 64.3104 19.6969ZM81.4819 42V9.2125H92.014V42H81.4819ZM116.017 8.64062C119.162 8.64062 121.99 9.11719 124.5 10.0703C127.01 11.0234 128.995 12.4372 130.457 14.3117C131.95 16.1544 132.697 18.4102 132.697 21.0789H122.641C122.641 19.7128 122.038 18.6167 120.83 17.7906C119.623 16.9328 118.162 16.5039 116.446 16.5039C113.968 16.5039 112.093 17.1711 110.823 18.5055C109.552 19.8081 108.916 21.6667 108.916 24.0812V27.1312C108.916 29.5458 109.552 31.4203 110.823 32.7547C112.093 34.0573 113.968 34.7086 116.446 34.7086C118.162 34.7086 119.623 34.3115 120.83 33.5172C122.038 32.6911 122.641 31.6427 122.641 30.3719H115.207V23.7H132.697V42H127.264L126.216 38.7594C123.229 41.301 119.321 42.5719 114.492 42.5719C109.059 42.5719 104.977 41.1581 102.244 38.3305C99.5121 35.4711 98.146 31.2297 98.146 25.6062C98.146 20.0464 99.6869 15.8367 102.769 12.9773C105.882 10.0862 110.298 8.64062 116.017 8.64062ZM139.703 42V9.2125H150.235V42H139.703ZM181.196 42L167.423 26.0828V42H157.749V9.2125H166.946L180.719 25.368V9.2125H190.393V42H181.196Z" fill="#FF1919"/>
          <path d="M33.6194 12.9773L33.6729 12.9204L33.6194 12.9773ZM33.6194 38.2352L33.566 38.1782L33.566 38.1782L33.6194 38.2352ZM7.4085 38.2828L7.35475 38.3395L7.35536 38.3401L7.4085 38.2828ZM7.4085 12.9773L7.46193 13.0343L7.46195 13.0343L7.4085 12.9773ZM15.3671 18.5531L15.4263 18.6041L15.4263 18.6041L15.3671 18.5531ZM15.3671 32.6594L15.3079 32.7103L15.3671 32.6594ZM25.6608 32.6594L25.6023 32.6076L25.6016 32.6084L25.6608 32.6594ZM25.6608 18.5531L25.6016 18.6041L25.6023 18.6049L25.6608 18.5531ZM20.514 8.71875C26.1562 8.71875 30.503 10.1608 33.566 13.0343L33.6729 12.9204C30.5723 10.0116 26.1822 8.5625 20.514 8.5625V8.71875ZM33.566 13.0343C36.6276 15.9065 38.164 20.0927 38.164 25.6062H38.3202C38.3202 20.0635 36.7749 15.8305 33.6729 12.9204L33.566 13.0343ZM38.164 25.6062C38.164 31.1198 36.6276 35.306 33.566 38.1782L33.6729 38.2921C36.7749 35.382 38.3202 31.149 38.3202 25.6062H38.164ZM33.566 38.1782C30.503 41.0517 26.1562 42.4938 20.514 42.4938V42.65C26.1822 42.65 30.5723 41.2009 33.6729 38.2921L33.566 38.1782ZM20.514 42.4938C14.8715 42.4938 10.5246 41.0674 7.46163 38.2255L7.35536 38.3401C10.456 41.2169 14.846 42.65 20.514 42.65V42.4938ZM7.46224 38.2261C4.43238 35.3541 2.91162 31.1519 2.91162 25.6062H2.75537C2.75537 31.1804 4.28462 35.4293 7.35475 38.3395L7.46224 38.2261ZM2.91162 25.6062C2.91162 20.0605 4.4324 15.8745 7.46193 13.0343L7.35506 12.9203C4.2846 15.7989 2.75537 20.0322 2.75537 25.6062H2.91162ZM7.46195 13.0343C10.5249 10.1608 14.8717 8.71875 20.514 8.71875V8.5625C14.8458 8.5625 10.4556 10.0116 7.35504 12.9204L7.46195 13.0343ZM20.514 16.4258C18.2417 16.4258 16.5018 17.1146 15.3079 18.5022L15.4263 18.6041C16.5834 17.2594 18.2748 16.582 20.514 16.582V16.4258ZM15.3079 18.5022C14.117 19.8862 13.5257 21.7488 13.5257 24.0812H13.6819C13.6819 21.7752 14.2661 19.9524 15.4263 18.6041L15.3079 18.5022ZM13.5257 24.0812V27.1312H13.6819V24.0812H13.5257ZM13.5257 27.1312C13.5257 29.4637 14.117 31.3263 15.3079 32.7103L15.4263 32.6084C14.2661 31.2601 13.6819 29.4373 13.6819 27.1312H13.5257ZM15.3079 32.7103C16.5018 34.0979 18.2417 34.7867 20.514 34.7867V34.6305C18.2748 34.6305 16.5834 33.9531 15.4263 32.6084L15.3079 32.7103ZM20.514 34.7867C22.7863 34.7867 24.5261 34.0979 25.7201 32.7103L25.6016 32.6084C24.4446 33.9531 22.7531 34.6305 20.514 34.6305V34.7867ZM25.7194 32.7111C26.9424 31.3271 27.5499 29.4642 27.5499 27.1312H27.3937C27.3937 29.4368 26.7938 31.2593 25.6023 32.6076L25.7194 32.7111ZM27.5499 27.1312V24.0812H27.3937V27.1312H27.5499ZM27.5499 24.0812C27.5499 21.7483 26.9424 19.8854 25.7194 18.5014L25.6023 18.6049C26.7938 19.9532 27.3937 21.7757 27.3937 24.0812H27.5499ZM25.7201 18.5022C24.5261 17.1146 22.7863 16.4258 20.514 16.4258V16.582C22.7531 16.582 24.4446 17.2594 25.6016 18.6041L25.7201 18.5022ZM73.4128 24.7008L73.3478 24.6574L73.3478 24.6574L73.4128 24.7008ZM68.6948 28.275L68.6677 28.2017L68.5839 28.2327L68.6258 28.3117L68.6948 28.275ZM75.9862 42V42.0781H76.1162L76.0552 41.9633L75.9862 42ZM64.1675 42L64.0972 42.0342L64.1186 42.0781H64.1675V42ZM58.3534 30.0383L58.4237 30.0041L58.4023 29.9602H58.3534V30.0383ZM54.4456 30.0383V29.9602H54.3675V30.0383H54.4456ZM54.4456 42V42.0781H54.5237V42H54.4456ZM43.9136 42H43.8354V42.0781H43.9136V42ZM43.9136 9.2125V9.13437H43.8354V9.2125H43.9136ZM69.9815 10.5945L69.9435 10.6628L69.945 10.6636L69.9815 10.5945ZM73.7464 14.2641L73.6773 14.3007L73.6783 14.3024L73.7464 14.2641ZM63.4526 17.5523L63.3974 17.6076L63.3974 17.6076L63.4526 17.5523ZM54.4456 16.6945V16.6164H54.3675V16.6945H54.4456ZM54.4456 22.7469H54.3675V22.825H54.4456V22.7469ZM63.4526 21.8891L63.5079 21.9443L63.5093 21.9428L63.4526 21.8891ZM74.955 19.268C74.955 21.2546 74.4192 23.0503 73.3478 24.6574L73.4778 24.7441C74.5668 23.1106 75.1112 21.2845 75.1112 19.268H74.955ZM73.3478 24.6574C72.2779 26.2623 70.7195 27.4442 68.6677 28.2017L68.7219 28.3483C70.8004 27.5808 72.3872 26.3799 73.4778 24.7441L73.3478 24.6574ZM68.6258 28.3117L75.9172 42.0367L76.0552 41.9633L68.7638 28.2383L68.6258 28.3117ZM75.9862 41.9219H64.1675V42.0781H75.9862V41.9219ZM64.2377 41.9658L58.4237 30.0041L58.2831 30.0724L64.0972 42.0342L64.2377 41.9658ZM58.3534 29.9602H54.4456V30.1164H58.3534V29.9602ZM54.3675 30.0383V42H54.5237V30.0383H54.3675ZM54.4456 41.9219H43.9136V42.0781H54.4456V41.9219ZM43.9917 42V9.2125H43.8354V42H43.9917ZM43.9136 9.29062H63.9768V9.13437H43.9136V9.29062ZM63.9768 9.29062C66.3178 9.29062 68.3055 9.74929 69.9435 10.6628L70.0196 10.5263C68.3534 9.59706 66.338 9.13437 63.9768 9.13437V9.29062ZM69.945 10.6636C71.6162 11.5465 72.8593 12.7589 73.6774 14.3007L73.8154 14.2274C72.9814 12.6557 71.7146 11.4217 70.018 10.5255L69.945 10.6636ZM73.6783 14.3024C74.5293 15.8152 74.955 17.47 74.955 19.268H75.1112C75.1112 17.4441 74.6791 15.7629 73.8145 14.2258L73.6783 14.3024ZM64.3886 19.6969C64.3886 18.8197 64.0953 18.0846 63.5079 17.4971L63.3974 17.6076C63.9536 18.1639 64.2323 18.8584 64.2323 19.6969H64.3886ZM63.5079 17.4971C62.921 16.9102 62.202 16.6164 61.3557 16.6164V16.7727C62.1616 16.7727 62.8405 17.0507 63.3974 17.6076L63.5079 17.4971ZM61.3557 16.6164H54.4456V16.7727H61.3557V16.6164ZM54.3675 16.6945V22.7469H54.5237V16.6945H54.3675ZM54.4456 22.825H61.3557V22.6687H54.4456V22.825ZM61.3557 22.825C62.202 22.825 62.921 22.5312 63.5079 21.9443L63.3974 21.8338C62.8405 22.3907 62.1616 22.6687 61.3557 22.6687V22.825ZM63.5093 21.9428C64.0954 21.3241 64.3886 20.574 64.3886 19.6969H64.2323C64.2323 20.5354 63.9536 21.2467 63.3959 21.8353L63.5093 21.9428ZM81.4819 42H81.4038V42.0781H81.4819V42ZM81.4819 9.2125V9.13437H81.4038V9.2125H81.4819ZM92.014 9.2125H92.0921V9.13437H92.014V9.2125ZM92.014 42V42.0781H92.0921V42H92.014ZM81.5601 42V9.2125H81.4038V42H81.5601ZM81.4819 9.29062H92.014V9.13437H81.4819V9.29062ZM91.9359 9.2125V42H92.0921V9.2125H91.9359ZM92.014 41.9219H81.4819V42.0781H92.014V41.9219ZM124.5 10.0703L124.472 10.1433L124.472 10.1433L124.5 10.0703ZM130.457 14.3117L130.395 14.3598L130.396 14.3609L130.457 14.3117ZM132.697 21.0789V21.157H132.775V21.0789H132.697ZM122.641 21.0789H122.563V21.157H122.641V21.0789ZM120.83 17.7906L120.785 17.8543L120.786 17.8551L120.83 17.7906ZM110.823 18.5055L110.878 18.56L110.879 18.5593L110.823 18.5055ZM110.823 32.7547L110.766 32.8086L110.767 32.8092L110.823 32.7547ZM120.83 33.5172L120.873 33.5825L120.874 33.5817L120.83 33.5172ZM122.641 30.3719H122.719V30.2937H122.641V30.3719ZM115.207 30.3719H115.129V30.45H115.207V30.3719ZM115.207 23.7V23.6219H115.129V23.7H115.207ZM132.697 23.7H132.775V23.6219H132.697V23.7ZM132.697 42V42.0781H132.775V42H132.697ZM127.264 42L127.19 42.024L127.207 42.0781H127.264V42ZM126.216 38.7594L126.29 38.7353L126.254 38.6241L126.165 38.6999L126.216 38.7594ZM102.244 38.3305L102.188 38.3844L102.188 38.3848L102.244 38.3305ZM102.769 12.9773L102.822 13.0346L102.822 13.0346L102.769 12.9773ZM116.017 8.71875C119.155 8.71875 121.973 9.19411 124.472 10.1433L124.528 9.99728C122.008 9.04026 119.17 8.5625 116.017 8.5625V8.71875ZM124.472 10.1433C126.97 11.0921 128.944 12.498 130.395 14.3598L130.519 14.2637C129.047 12.3765 127.049 10.9548 124.528 9.99728L124.472 10.1433ZM130.396 14.3609C131.877 16.188 132.619 18.4257 132.619 21.0789H132.775C132.775 18.3946 132.024 16.1209 130.518 14.2625L130.396 14.3609ZM132.697 21.0008H122.641V21.157H132.697V21.0008ZM122.719 21.0789C122.719 19.6849 122.101 18.5655 120.874 17.7261L120.786 17.8551C121.974 18.6678 122.563 19.7406 122.563 21.0789H122.719ZM120.876 17.7269C119.653 16.8583 118.175 16.4258 116.446 16.4258V16.582C118.148 16.582 119.593 17.0073 120.785 17.8543L120.876 17.7269ZM116.446 16.4258C113.954 16.4258 112.056 17.0969 110.766 18.4516L110.879 18.5593C112.131 17.2452 113.982 16.582 116.446 16.582V16.4258ZM110.767 18.4509C109.477 19.7724 108.838 21.6531 108.838 24.0812H108.994C108.994 21.6802 109.626 19.8438 110.878 18.56L110.767 18.4509ZM108.838 24.0812V27.1312H108.994V24.0812H108.838ZM108.838 27.1312C108.838 29.5595 109.477 31.4556 110.766 32.8086L110.879 32.7008C109.626 31.385 108.994 29.5322 108.994 27.1312H108.838ZM110.767 32.8092C112.057 34.1317 113.955 34.7867 116.446 34.7867V34.6305C113.981 34.6305 112.13 33.9829 110.878 32.7001L110.767 32.8092ZM116.446 34.7867C118.174 34.7867 119.651 34.3866 120.873 33.5825L120.787 33.4519C119.595 34.2363 118.149 34.6305 116.446 34.6305V34.7867ZM120.874 33.5817C122.099 32.7436 122.719 31.6727 122.719 30.3719H122.563C122.563 31.6127 121.976 32.6387 120.786 33.4527L120.874 33.5817ZM122.641 30.2937H115.207V30.45H122.641V30.2937ZM115.285 30.3719V23.7H115.129V30.3719H115.285ZM115.207 23.7781H132.697V23.6219H115.207V23.7781ZM132.619 23.7V42H132.775V23.7H132.619ZM132.697 41.9219H127.264V42.0781H132.697V41.9219ZM127.338 41.976L126.29 38.7353L126.141 38.7834L127.19 42.024L127.338 41.976ZM126.165 38.6999C123.196 41.2269 119.307 42.4938 114.492 42.4938V42.65C119.335 42.65 123.263 41.3752 126.266 38.8189L126.165 38.6999ZM114.492 42.4938C109.072 42.4938 105.013 41.0835 102.301 38.2762L102.188 38.3848C104.94 41.2327 109.046 42.65 114.492 42.65V42.4938ZM102.301 38.2765C99.5874 35.4368 98.2241 31.2181 98.2241 25.6062H98.0679C98.0679 31.2413 99.4368 35.5054 102.188 38.3844L102.301 38.2765ZM98.2241 25.6062C98.2241 20.0607 99.7606 15.8749 102.822 13.0346L102.716 12.9201C99.6131 15.7986 98.0679 20.032 98.0679 25.6062H98.2241ZM102.822 13.0346C105.917 10.1609 110.311 8.71875 116.017 8.71875V8.5625C110.286 8.5625 105.848 10.0115 102.715 12.9201L102.822 13.0346ZM139.703 42H139.624V42.0781H139.703V42ZM139.703 9.2125V9.13437H139.624V9.2125H139.703ZM150.235 9.2125H150.313V9.13437H150.235V9.2125ZM150.235 42V42.0781H150.313V42H150.235ZM139.781 42V9.2125H139.624V42H139.781ZM139.703 9.29062H150.235V9.13437H139.703V9.29062ZM150.157 9.2125V42H150.313V9.2125H150.157ZM150.235 41.9219H139.703V42.0781H150.235V41.9219ZM181.196 42L181.136 42.0511L181.16 42.0781H181.196V42ZM167.423 26.0828L167.482 26.0317L167.345 25.8731V26.0828H167.423ZM167.423 42V42.0781H167.501V42H167.423ZM157.749 42H157.671V42.0781H157.749V42ZM157.749 9.2125V9.13437H157.671V9.2125H157.749ZM166.946 9.2125L167.006 9.16181L166.982 9.13437H166.946V9.2125ZM180.719 25.368L180.66 25.4187L180.797 25.58V25.368H180.719ZM180.719 9.2125V9.13437H180.641V9.2125H180.719ZM190.393 9.2125H190.471V9.13437H190.393V9.2125ZM190.393 42V42.0781H190.471V42H190.393ZM181.255 41.9489L167.482 26.0317L167.364 26.1339L181.136 42.0511L181.255 41.9489ZM167.345 26.0828V42H167.501V26.0828H167.345ZM167.423 41.9219H157.749V42.0781H167.423V41.9219ZM157.827 42V9.2125H157.671V42H157.827ZM157.749 9.29062H166.946V9.13437H157.749V9.29062ZM166.887 9.26318L180.66 25.4187L180.778 25.3173L167.006 9.16181L166.887 9.26318ZM180.797 25.368V9.2125H180.641V25.368H180.797ZM180.719 9.29062H190.393V9.13437H180.719V9.29062ZM190.315 9.2125V42H190.471V9.2125H190.315ZM190.393 41.9219H181.196V42.0781H190.393V41.9219Z" fill="black"/>
        </svg></a>
          <ul class="menu" id="menu">
            <li><a href="/delivery/">Доставка и оплата</a></li>
            <li><a href="/refund/">Возврат</a></li>
            <li><a href="https://t.me">Консультация косметолога</a></li>
            <li><a href="/contacts/">Контакты</a></li>
            <li><a href="#">Мы в соцсетях</a>
              <a class="free-consultation" href="https://t.me/originstoreprice">
                <svg
                  width="16"
                  height="16"
                  viewbox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M20 10C20 15.5225 15.5225 20 10 20C4.4775 20 0 15.5225 0 10C0 4.4775 4.4775 0 10 0C15.5225 0 20 4.4775 20 10ZM10.3583 7.3825C9.38583 7.78667 7.44167 8.62417 4.52667 9.89417C4.05333 10.0825 3.805 10.2667 3.7825 10.4467C3.74417 10.7517 4.12583 10.8717 4.64417 11.0342C4.715 11.0567 4.78833 11.0792 4.86333 11.1042C5.37417 11.27 6.06083 11.4642 6.4175 11.4717C6.74167 11.4783 7.10333 11.345 7.5025 11.0717C10.2258 9.2325 11.6317 8.30333 11.72 8.28333C11.7825 8.26917 11.8692 8.25083 11.9275 8.30333C11.9858 8.355 11.98 8.45333 11.9742 8.48C11.9358 8.64083 10.4408 10.0317 9.66583 10.7517C9.42417 10.9758 9.25333 11.135 9.21833 11.1717C9.14 11.2525 9.06 11.33 8.98333 11.4042C8.50833 11.8608 8.15333 12.2042 9.00333 12.7642C9.41167 13.0333 9.73833 13.2558 10.0642 13.4775C10.42 13.72 10.775 13.9617 11.235 14.2633C11.3517 14.34 11.4633 14.4192 11.5725 14.4967C11.9867 14.7925 12.3592 15.0575 12.8192 15.0158C13.0858 14.9908 13.3625 14.74 13.5025 13.9908C13.8333 12.2192 14.485 8.3825 14.6358 6.80083C14.645 6.66951 14.6394 6.53757 14.6192 6.4075C14.607 6.30244 14.5559 6.20578 14.4758 6.13667C14.3567 6.03917 14.1717 6.01833 14.0883 6.02C13.7125 6.02667 13.1358 6.2275 10.3583 7.3825Z"
                  fill="#828282">
                </path>
                </svg>
              </a>
              <a class="free-consultation" href="https://instagram.com/_origin__store?igshid=NzZlODBkYWE4Ng==" class="social_link_event" data-social="instagram">
                <svg
                  style="color: rgb(130, 130, 130);"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="#828282"></path>
                </svg>
              </a>
            </li>
            <li>
              <a href="/catalogue/">Каталог</a>
            </li>
            <li><a href="/brands/">Бренды</a></li>
            <li><a href="#">Акции</a></li>
            <li><a href="/blog/">Блог</a></li>
            <li><a href="/about/">О нас</a></li>
            <li class="search_field"><a href="#">
              <div class="box">
                <div class="container-2">
                    <span class="icon" >
                      <span class="material-icons">search</span>
                    </span><input type="search" id="search" placeholder="Поиск..." />
                </div>
              </div>
            </a></li>
            <li>

              <a href=""><i class="material-icons">&#xe7ff </i></a>
              <a href=""><i class="material-icons">shopping_bag</i></a>
             </li>
          </ul>

        </div>
  </div>
 </nav>
  <div class="popup" id="popup"></div>
</header>



