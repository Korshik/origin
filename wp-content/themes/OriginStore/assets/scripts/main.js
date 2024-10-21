const containerWidth = 1344,
  sortButtonWidth = 257;
let navbarMenus = { catalog: !1, brands: !1, search: !1, blog: !1 },
  bagModalOpen = !1,
  mobileMenu = !1,
  lastMobileMenuId = 0,
  headerPadding = 33;
const bagModalClickEvent = new Event("bagButtonClicked"),
  bagModalOpenEvent = new Event("bagModalOpen"),
  bagModalClosedEvent = new Event("bagModalClosed"),
  searchRequestEvent = new Event("searchRequest");
var lifeStyleBlock3Carousel = new Swiper(".ls__block3__carousel.swiper", {
  slidesPerView: "auto",
  spaceBetween: 8,
  breakpoints: { 768: { slidesPerView: 3, spaceBetween: 0 } },
});

jQuery(document).ready(function($) {
  function handleLifeStyleBlock4CarouselChange(e, t) {
  const n = $(
      '.ls__carousel__top__controls button[data-direct="prev"][data-id="' +
        t +
        '"]'
    ),
    o = $(
      '.ls__carousel__top__controls button[data-direct="next"][data-id="' +
        t +
        '"]'
    );
  0 === e.activeIndex ? n.hide() : n.css({ display: "inline-block" }),
    e.isEnd
      ? (o.addClass("is--disabled"), n.css({ display: "inline-block" }))
      : o.removeClass("is--disabled");
}
var lifeStyleBlock4CarouselMorning = new Swiper(
    ".ls__carousel__carousel.swiper.morning",
    {
      slidesPerView: "auto",
      spaceBetween: 16,
      breakpoints: { 768: { spaceBetween: 40 } },
      on: {
        afterInit(e) {
          handleLifeStyleBlock4CarouselChange(e, "morning");
        },
        slideChangeTransitionEnd(e) {
          handleLifeStyleBlock4CarouselChange(e, "morning");
        },
        update(e) {
          handleLifeStyleBlock4CarouselChange(e, "morning");
        },
      },
    }
  ),
  lifeStyleBlock4CarouselEvening = new Swiper(
    ".ls__carousel__carousel.swiper.evening",
    {
      slidesPerView: "auto",
      spaceBetween: 16,
      breakpoints: { 768: { spaceBetween: 40 } },
      on: {
        afterInit(e) {
          handleLifeStyleBlock4CarouselChange(e, "evening");
        },
        slideChangeTransitionEnd(e) {
          handleLifeStyleBlock4CarouselChange(e, "evening");
        },
        update(e) {
          handleLifeStyleBlock4CarouselChange(e, "evening");
        },
      },
    }
  ),
  swiper = new Swiper("#carousel", { slidesPerView: "auto", spaceBetween: 16 }),
  productSameCarousel = new Swiper("#product-same", {
    slidesPerView: "auto",
    spaceBetween: 16,
  }),
  productRecomendedCarousel = new Swiper("#product-recommended", {
    slidesPerView: "auto",
    spaceBetween: 16,
  }),
  abCarousel = new Swiper(".ab-carousel", {
    slidesPerView: "auto",
    spaceBetween: 16,
  });
let articlesSwiper = new Swiper("#articles-carousel", {
    slidesPerView: 1,
    spaceBetween: 0,
    breakpoints: { 576: { spaceBetween: 8, slidesPerView: 1 } },
  }),
  instagramSwiper = new Swiper("#instagram-carousel", {
    slidesPerView: 1,
    spaceBetween: 8,
  }),
  productCarousel = new Swiper("#productCarousel", {
    pagination: {
      el: ".product-page__image__carousel__controls",
      clickable: !0,
    },
  }),
  productMobileCarousel = new Swiper("#productMobileCarousel", {
    pagination: {
      el: ".product-page__main__carousel__controls",
      clickable: !0,
    },
  });
function setStoryCarousel(e) {
  $(".about-page__carousel").hide(),
    $('.about-page__carousel[data-id="' + e + '"]').show();
}
let storiesCarousel = new Swiper("#stories-carousel", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoHeight: !0,
  on: {
    init: (e) => {
      setStoryCarousel(e.realIndex);
    },
    slideChange: (e) => {
      setStoryCarousel(e.realIndex),
        abCarousel.forEach((e) => {
          e.slideTo(0);
        });
    },
  },
});
$(".header__main__left > ul > li").hover(
  function (e) {
    var t = this.dataset.id;
    closeNavbarMenu(), t && (e.preventDefault(), openNavbarMenu(t));
  },
  function () {}
),
  $(".header").hover(null, function () {
    closeNavbarMenu();
  }),
  $(".about-page__carousel .carousel__top__controls__arrows > button").click(
    function () {
      const t = this.dataset.direct;
      abCarousel.forEach((e) => {
        "next" === t ? e.slideNext() : "prev" === t && e.slidePrev();
      });
    }
  ),
  $('.ls__carousel__top__controls > button[data-id="morning"]').click(
    function () {
      var e = this.dataset.direct;
      "next" === e
        ? lifeStyleBlock4CarouselMorning.slideNext()
        : "prev" === e && lifeStyleBlock4CarouselMorning.slidePrev(),
        lifeStyleBlock4CarouselMorning.update();
    }
  ),
  $('.ls__carousel__top__controls > button[data-id="evening"]').click(
    function () {
      var e = this.dataset.direct;
      "next" === e
        ? lifeStyleBlock4CarouselEvening.slideNext()
        : "prev" === e && lifeStyleBlock4CarouselEvening.slidePrev(),
        lifeStyleBlock4CarouselEvening.update();
    }
  ),
  $(".carousel__top__controls__arrows > button").click(function () {
    var t = this.dataset.direct,
      e = this.dataset.def,
      n = this.dataset.id;
    if (n) {
      let e;
      switch (n) {
        case "product-same":
          e = productSameCarousel;
          break;
        case "product-recommended":
          e = productRecomendedCarousel;
      }
      if (e)
        return void ("next" === t
          ? e.slideNext()
          : "prev" === t && e.slidePrev());
    }
    "false" === e ||
      abCarousel.length ||
      ("next" === t ? swiper.slideNext() : "prev" === t && swiper.slidePrev());
  }),
  $(".about-page__stories__controls button").click(function () {
    var e = this.dataset.direct;
    "next" === e
      ? storiesCarousel.slideNext()
      : "prev" === e && storiesCarousel.slidePrev();
  }),
  $(".sort-button > button").dropdown({
    offset: `50% - ${sortButtonWidth / 2}px`,
  }),
  $(document).on("click", ".form-elem__dropdown__menu__item", function (e) {
    const t = $('button[data-id="' + $(this).attr("data-id") + '"]');
    var n = $(this).find("span.is--text"),
      o = $(this).find("span.is--right");
    let i = `<span>${this.outerText}</span>`;
    n.length &&
      (o.length &&
        (i = `<span>${n[0].outerText}</span><span class='is--right'>${o[0].outerText}</span>`),
      t.html(i),
      $(`input[name="${$(this).attr("data-id")}"]`)
        .val($(this).attr("data-val"))
        .trigger("change"));
  }),
  $(".dropdown-multi").on("hide.bs.dropdown", function (e) {
    return (
      !e.clickEvent ||
      (!$(".form-elem__dropdown-multi__menu__item").is(e.clickEvent.target) &&
        0 ===
          $(".form-elem__dropdown-multi__menu__item").has(e.clickEvent.target)
            .length)
    );
  }),
  $(".collapse").collapse({ toggle: !1 });
const catalogPageFilterButton = $("#catalogPageFilterButton"),
  catalogPageAside = $("#catalogPageAside"),
  catalogPageMain = $("#catalogPageMain");
function openNavbarMenu(t) {
  Object.keys(navbarMenus).forEach((e) => {
    navbarMenus[e] = e === t;
  }),
    closeSearchPanel(),
    updateNavbarState();
}
function closeNavbarMenu() {
  Object.keys(navbarMenus).forEach((e) => {
    navbarMenus[e] = !1;
  }),
    updateNavbarState();
}
function disableNavbarTransparent() {
  const e = document.querySelector(".header");
  e.classList.add("is--sub-open");
}
function enableNavbarTransparent() {
  const e = document.querySelector(".header");
  e.classList.remove("is--sub-open");
}
function updateNavbarState() {
  enableNavbarTransparent(),
    Object.entries(navbarMenus).forEach((e) => {
      const t = document.querySelector(
          '.header__main__left > ul > li[data-id="' + e[0] + '"]'
        ),
        n = document.querySelector('.header-menu[data-id="' + e[0] + '"]');
      e[1]
        ? n &&
          t &&
          (disableNavbarTransparent(),
          n.classList.add("is--show"),
          t.classList.add("is--active"))
        : n &&
          t &&
          (n.classList.remove("is--show"), t.classList.remove("is--active"));
    });
}


  function openMobileMenu() {
  $(".header__main__mobile__menu > button").addClass("is--open"),
    $(".header").addClass("is--mobile-open"),
    disableBodyScroll();
}
function closeMobileMenu() {
  $(".header__main__mobile__menu > button").removeClass("is--open"),
    $(".header").removeClass("is--mobile-open"),
    closeMobileMenuItems(),
    enableBodyScroll();
}
function updateMobileMenuState() {
  (mobileMenu ? openMobileMenu : closeMobileMenu)();
}


function openCatalogPageAside() {
  catalogPageMain.removeClass("col").addClass("col-9"),
    catalogPageMain
      .children(".row")
      .children(".catalog-page__card-container")
      .removeClass("col-lg-3")
      .addClass("col-lg-4");
}
function closeCatalogPageAside() {
  catalogPageMain.removeClass("col-9").addClass("col"),
    catalogPageMain
      .children(".row")
      .children(".catalog-page__card-container")
      .removeClass("col-lg-4")
      .addClass("col-lg-3");
}
function openCatalogPageAsideMobile() {
  openOverlay();
}
function closeCatalogPageAsideMobile() {
  catalogPageMain.removeClass("col-9").addClass("col"), closeOverlay();
}
function setCatalogPageState() {
  992 <= document.body.clientWidth
    ? (catalogPageAside.hasClass("is--hidden")
        ? closeCatalogPageAside
        : openCatalogPageAside)()
    : catalogPageAside.length &&
      (catalogPageAside.hasClass("is--hidden")
        ? closeCatalogPageAsideMobile
        : openCatalogPageAsideMobile)();
}
992 <= document.body.clientWidth && closeCatalogPageAside(),
  catalogPageFilterButton.on("click", function () {
    catalogPageAside.toggleClass("is--hidden"), setCatalogPageState();
  });
const sliderElem = ".form-elem__range__slider";
for (let e = 0; e < $(sliderElem).length; e++) {
  const O = $(sliderElem)[e],
    P = $(O).children(".ui-slider-handle.is--max"),
    Q = $(O).children(".ui-slider-handle.is--min"),
    R = parseInt(O.dataset.max),
    S = parseInt(O.dataset.min),
    T = parseInt(O.dataset.cMax),
    U = parseInt(O.dataset.cMin),
    V = $('input[id="' + $(O).attr("data-id") + '_min"]'),
    W = $('input[id="' + $(O).attr("data-id") + '_max"]');
  let n = !1,
    o = !1;
  const Z = (e) => V.val(e),
    _ = (e) => W.val(e),
    aa = (e, t) => {
      Z(e), _(t);
    },
    ba = (e, t, n) => {
      const o = $(e.target)
        .siblings(".form-elem__range__labels")
        .find('input[type="text"]');
      o &&
        o.length &&
        2 === o.length &&
        ((o[0].value = t + " р."), (o[1].value = n + " р."));
    };
  aa(U || S, T || R),
    $(O).slider({
      range: !0,
      min: S,
      max: R,
      values: [U || S, T || R],
      slide: function (e, t) {
        Q.children("span").text(t.values[0] + " р."),
          P.children("span").text(t.values[1] + " р."),
          ba(e, t.values[0], t.values[1]);
      },
      change: function (e, t) {
        switch (t.handleIndex) {
          case 0:
            n ? Z(t.values[0]).trigger("change") : Z(t.values[0]), (n = !0);
            break;
          case 1:
            o ? _(t.values[1]).trigger("change") : _(t.values[1]), (o = !0);
        }
      },
      create: function (i, e) {
        function a(e, t) {
          $(i.target).slider("values", [e, t]), aa(`${e}`, `${t}`);
        }
        const t = $(i.target)
          .siblings(".form-elem__range__labels")
          .find('input[type="text"]');
        t.each((e) => {
          t[e].addEventListener("keypress", function (e) {
            var t,
              e = e || window.event;
            t =
              "paste" === e.type
                ? i.clipboardData.getData("text/plain")
                : ((t = e.keyCode || e.which), String.fromCharCode(t));
            /[0-9]|\./.test(t) ||
              ((e.returnValue = !1), e.preventDefault && e.preventDefault());
          }),
            t[e].addEventListener("keyup", function (e) {
              var t, n, o;
              (n = (t = e).currentTarget),
                (o = parseInt(t.target.value)),
                (e = n.dataset.type),
                (t = $(i.target).slider("values")),
                (n = Object.freeze({ MIN: "min", MAX: "max" })),
                (o = o || (e === n.MIN ? S : R)),
                e === n.MIN &&
                  a((o = (o = o < S ? S : o) > t[1] ? t[1] : o), t[1]),
                e === n.MAX &&
                  ((o = o > R ? R : o) < t[0] && (o = t[0]), a(t[0], o));
            }),
            t[e].addEventListener("focusout", function (e) {
              (e = e.target.value), (e = parseInt(e));
              this.value = e + " р.";
            });
        }),
          ba(i, U || S, T || R),
          a(U || S, T || R);
      },
    });
}
function isOnScreen(e) {
  const t = document.querySelector(e);
  if (t) {
    e = t.getBoundingClientRect();
    return (
      0 <= e.top &&
      0 <= e.left &&
      e.bottom - e.height <
        (window.innerHeight || document.documentElement.clientHeight)
    );
  }
  return !1;
}
function isOnHigher(e) {
  const t = document.querySelector(e);
  return !!t && t.getBoundingClientRect().top < 0;
}
const productPageImage = document.querySelector(".product-page__image");
function makeSpaceClasses() {
  var e =
    (document.body.clientWidth - $(".header__main__inner").innerWidth()) / 2 +
    12;
  $(".container-space-right").css({ paddingRight: e }),
    $(".container-space-left").css({ paddingLeft: e });
}
function setOverContainerImages() {
  const e = document.querySelector(".brand-right-image"),
    t = document.querySelector(".blog-page__top__article__background");
  var n;
  e &&
    ((n = e.getBoundingClientRect()),
    (n = document.body.clientWidth - n.x),
    $(".brand-right-image__inner").css({ width: n + "px" })),
    t &&
      ((n = t.getBoundingClientRect()),
      (n = document.body.clientWidth - n.x),
      $(".blog-page__top__article__background__inner").css({
        width: n + "px",
      }));
}
function setProductPageImageAbsolute() {
  productPageImage.classList.add("is--absolute");
}
function setProductPageImageFixed() {
  var e;
  productPageImage &&
    (productPageImage.classList.remove("is--absolute"),
    (e = productPageImage.getBoundingClientRect()),
    $(".product-page__image__inner").css({
      width: e.width,
      height: window.innerHeight,
    }));
}
function prepareProductPageImage() {
  var e;
  productPageImage &&
    ((e = productPageImage.getBoundingClientRect()),
    $(".product-page__image__inner").css({
      width: e.width,
      height: window.innerHeight,
    }),
    (e =
      $(".product-page__main__container").innerHeight() +
      $(".header").innerHeight()),
    (window.pageYOffset + window.innerHeight > e
      ? setProductPageImageAbsolute
      : setProductPageImageFixed)());
}
function disableBodyScroll() {
  document.body.style.overflow = "hidden";
}
function enableBodyScroll() {
  document.body.style.overflow = "auto";
}
function openOverlay() {
  disableBodyScroll(), $("#overlay").addClass("is--active");
}
function closeOverlay() {
  enableBodyScroll(), $("#overlay").removeClass("is--active");
}
function openBagModal() {
  992 <= document.body.clientWidth &&
    (document.body.dispatchEvent(bagModalOpenEvent),
    $(".bag-modal").addClass("is--show"),
    openOverlay(),
    setBagModalContentHeight());
}
function closeBagModel() {
  document.body.dispatchEvent(bagModalClosedEvent),
    $(".bag-modal").removeClass("is--show"),
    closeOverlay();
}
function setBagModalState() {
  (bagModalOpen ? openBagModal : closeBagModel)();
}
let headingImagesBlockId = 1;
function hideHeadingImagesBlock() {
  $(".header-menu__catalog__right__list").removeClass("is--active");
}
function setHeadingImagesBlock() {
  hideHeadingImagesBlock(),
    $(
      '.header-menu__catalog__right__list[data-id="' +
        headingImagesBlockId +
        '"]'
    ).addClass("is--active");
}
const headerMenuMobile = $(".header-menu-mobile"),
  headerMenuMobileCatalog = $(".header-menu-mobile__main__catalog__inner"),
  headerMenuLevel2Open = "is--tw-open",
  headerMenuLevel3Open = "is--th-open";
function closeMobileMenuItems(e) {
  function t() {
    document
      .querySelector(".header-menu-mobile")
      .classList.remove("is--sub-open-catalog"),
      document
        .querySelector(".header-menu-mobile")
        .classList.remove("is--sub-open-brands"),
      document
        .querySelector(".header-menu-mobile")
        .classList.remove("is--sub-open-blog");
  }
  e && "catalog" === e
    ? headerMenuMobileCatalog.hasClass(headerMenuLevel3Open)
      ? (headerMenuMobileCatalog
          .removeClass(headerMenuLevel3Open)
          .addClass(headerMenuLevel2Open),
        mobileMenuCatalogShowList(lastMobileMenuId))
      : headerMenuMobileCatalog.hasClass(headerMenuLevel2Open)
      ? (headerMenuMobileCatalog.removeClass(headerMenuLevel2Open),
        setMobileCatalogCloseText("Каталог"))
      : t()
    : t();
}
function openMobileMenuItem(e) {
  $(".header-menu-mobile").addClass(`is--sub-open-${e}`);
}
function closeMobileMenuCatalogItem() {
  $(".header-menu-mobile__main__catalog__inner").removeClass([
    "is--tw-open",
    "is--th-open",
  ]);
}
function mobileMenuCatalogShowList(e) {
  (lastMobileMenuId = $(".catalog-sub-menu:not(.is--hidden)")
    .parent()
    .attr("data-id")),
    $(".catalog-sub-menu").addClass("is--hidden"),
    $(
      '.header-menu-mobile__main__catalog__inner li[data-id="' + e + '"] > ul'
    ).removeClass("is--hidden"),
    $(
      ".header-menu-mobile__main__catalog > .header-menu-mobile__main__sub-close span"
    ).html(
      $(
        '.header-menu-mobile__main__catalog__inner li[data-id="' + e + '"]'
      ).attr("data-title")
    );
}
function openMobileMenuCatalogItem(e, t, n) {
  let o = "";
  2 === n ? (o = "is--tw-open") : 3 === n && (o = "is--th-open"),
    o &&
      (closeMobileMenuCatalogItem(),
      mobileMenuCatalogShowList(e),
      $(".header-menu-mobile__main__catalog__inner").addClass(o),
      setMobileCatalogCloseText(t));
}
function setMobileCatalogCloseText(e) {
  const t = $(
    ".header-menu-mobile__main__catalog > .header-menu-mobile__main__sub-close > span"
  );
  t.html(e);
}
function setHeadingScrollMode() {
  992 <= document.body.clientWidth &&
    (this.scrollY >= headerPadding
      ? $(".header").addClass("is--hidden")
      : $(".header").removeClass("is--hidden"));
}
function openSearchPanel() {
  $(".header").addClass("is--search-open"), disableNavbarTransparent();
}
function closeSearchPanel() {
  $(".header").removeClass("is--search-open"), enableNavbarTransparent();
}
function toggleSearchPanel() {
  $(".header").toggleClass("is--search-open"),
    (document.querySelector(".header").classList.contains("is--search-open")
      ? disableNavbarTransparent
      : enableNavbarTransparent)();
}
function updateHeaderMessageState() {
  sessionStorage.getItem("header_message")
    ? ($(".header-message").remove(),
      $(".header").removeClass("is--message"),
      (headerPadding = 33))
    : document.querySelector(".header-message") &&
      ((headerPadding = 65), $(".header").addClass("is--message")),
    updatePaddingTopBody(),
    setAuthPagesHeight(),
    updateCertsPageHeight();
}
function updatePaddingTopBody() {
  var e = $(".header").innerHeight();
  (document.body.style.paddingTop = e + "px"),
    (headerPadding = e - $(".header__main").innerHeight());
}
function setAuthPagesHeight() {
  const e = $(".header"),
    t = $(".footer");
  $(".auth-page").css({
    minHeight: window.innerHeight - (e.innerHeight() + t.innerHeight()),
  });
}
function setAdaptiveCatalog() {
  document.body.clientWidth <= 992 && catalogPageAside.addClass("is--hidden"),
    setCatalogPageState();
}
function openMobileCatalogSort() {
  openOverlay(), $(".catalog-sort-mobile").addClass("is--open");
}
function closeMobileCatalogSort() {
  closeOverlay(), $(".catalog-sort-mobile").removeClass("is--open");
}
function drawSearchResults(e) {
  const o = document.querySelector(".header-menu__search__dropdown__products");
  clearSearch(),
    e.forEach(function (e) {
      const t = document.createElement("div");
      let n;
      (n = e.f_sale
        ? `
                <span class="is--old">${e.r_price} р.</span>
                <span>${e.f_price} р.</span>
            `
        : `<span>${e.f_price} р.</span>`),
        (t.className = "header-menu__search__dropdown__product"),
        (t.innerHTML = `
            <a href="${e.link}">
                    <div class="header-menu__search__dropdown__product__inner">
                        <div class="header-menu__search__dropdown__product__image">
                            <span
                                style="background-image: url('${e.image}');"
                            ></span>
                        </div>
                        <div class="header-menu__search__dropdown__product__price">
                            ${n}
                        </div>
                        <div class="header-menu__search__dropdown__product__brand">${e.brand}</div>
                        <div class="header-menu__search__dropdown__product__title">
                            ${e.title}
                        </div>
                    </div>
                </a>
        `),
        o.appendChild(t);
    });
}
function search(e) {
  enableSearchLoading();
  var t = window.location.origin,
    n = window.location.href;
  const o = new FormData();
  o.append("action", "aws_action"),
    o.append("keyword", e),
    o.append("aws_page", 9),
    o.append("pageurl", n),
    o.append("typedata", "json"),
    axios({ method: "post", url: `${t}/?wc-ajax=aws_action`, data: o })
      .then(function (e) {
        disableSearchLoading(),
          e && e.data && e.data.products && drawSearchResults(e.data.products);
      })
      .catch(() => {
        disableSearchLoading();
      }),
    document.body.dispatchEvent(searchRequestEvent);
}
function clearSearch() {
  const e = document.querySelector(".header-menu__search__dropdown__products");
  e.innerHTML = null;
}
function enableSearchLoading() {
  $(".loader-container").addClass("is--active");
}
function disableSearchLoading() {
  $(".loader-container").removeClass("is--active");
}
function setUpArrowPosition() {
  200 <= window.scrollY
    ? $(".arrow-up").addClass("is--show")
    : $(".arrow-up").removeClass("is--show");
}
prepareProductPageImage(),
  $(document).ready(function () {
    updateNavbarState(),
      updateMobileMenuState(),
      setOverContainerImages(),
      makeSpaceClasses(),
      prepareProductPageImage(),
      setCatalogPageState(),
      setHeadingScrollMode(),
      updateHeaderMessageState(),
      updatePaddingTopBody(),
      setAuthPagesHeight(),
      setAdaptiveCatalog(),
      setGlossaryPosition(),
      setGlossaryActiveItem(),
      stickyOrderAside(),
      setDropdownAllMenusHeight(),
      setUpArrowPosition(),
      setLifeStyleBannerHeight();
    var e = document.getElementById("glossaryTopMobile");
    e && new SimpleBar(e);
  }),
  window.addEventListener("scroll", function () {
    setHeadingScrollMode(),
      prepareProductPageImage(),
      setGlossaryPosition(),
      setGlossaryActiveItem(),
      stickyOrderAside(),
      setUpArrowPosition();
  });
var oldHeight = window.innerHeight;
window.addEventListener("resize", function () {
  setOverContainerImages(),
    makeSpaceClasses(),
    prepareProductPageImage(),
    setHeadingScrollMode(),
    setAuthPagesHeight(),
    setCatalogPageState(),
    setGlossaryPosition(),
    setGlossaryActiveItem(),
    stickyOrderAside(),
    updateCertsPageHeight(),
    setUpArrowPosition(),
    setBagModalContentHeight(),
    window.mobileAndTabletCheck() || setLifeStyleBannerHeight(),
    oldHeight === window.innerHeight &&
      (setAdaptiveCatalog(),
      document.body.clientWidth < 992 &&
        ((bagModalOpen = !1), setBagModalState())),
    (oldHeight = window.innerHeight);
});
const headingBagModal = document.getElementById("headingBagButton");
headingBagModal &&
  headingBagButton.addEventListener("click", function (e) {
    992 <= document.body.clientWidth &&
      (e.preventDefault(),
      document.body.dispatchEvent(bagModalClickEvent),
      (bagModalOpen = !bagModalOpen),
      setBagModalState());
  }),
  $(".bag-modal__heading__right > button.is--close").click(function () {
    (bagModalOpen = !1), setBagModalState();
  }),
  $(".product-page__dolyami button").click(function () {
    $("#dolyamiModal").modal("show");
  }),
  $("#overlay").click(function () {
    closeOverlay(),
      document.body.clientWidth < 992 &&
        catalogPageAside.addClass("is--hidden"),
      (bagModalOpen = !1),
      setBagModalState(),
      closeCatalogPageAsideMobile(),
      setCatalogPageState(),
      closeMobileCatalogSort();
  }),
  $(".header-menu__catalog__left li").hover(
    function () {
      (headingImagesBlockId = this.dataset.id),
        headingImagesBlockId && hideHeadingImagesBlock(),
        setHeadingImagesBlock();
    },
    function () {}
  ),
  $(".header-menu-mobile__main__list > li").click(function (e) {
    var t = this.dataset.id;
    closeMobileMenuItems(), t && (e.preventDefault(), openMobileMenuItem(t));
  }),
  $(".header-menu-mobile__main__catalog__inner li a").click(function (e) {
    var t = $(this).parent().attr("data-id"),
      n = $(this).parent().attr("data-title"),
      o = parseInt($(this).parent().parent().attr("data-level"));
    t &&
      $(this).siblings("ul.catalog-sub-menu").length &&
      (e.preventDefault(), openMobileMenuCatalogItem(t, n, o + 1));
  }),
  $(".header__main__mobile__menu > button").click(function () {
    (mobileMenu = !mobileMenu), updateMobileMenuState();
  }),
  $(".header-menu-mobile__main__sub-close").click(function () {
    closeMobileMenuItems(this.dataset.type);
  }),
  $("#headerSearch").click(function (e) {
    e.preventDefault(), toggleSearchPanel();
  }),
  $(".header-menu__search__field__close").click(function () {
    closeSearchPanel();
  }),
  $(".header-message__close").click(function () {
    sessionStorage.setItem("header_message", "true"),
      updateHeaderMessageState();
  }),
  $(document).on("click", ".form-elem__password > button", function () {
    $(this).parent().toggleClass("is--open");
    const e = $(this).siblings("input");
    e &&
      e[0] &&
      ("password" === e[0].getAttribute("type")
        ? e[0].setAttribute("type", "text")
        : e[0].setAttribute("type", "password"));
  }),
  $(".modal-rating-block__buttons button").click(function () {
    const n = this.dataset.rating,
      e = $(this).parent().siblings("input");
    e && e[0] && e[0].setAttribute("value", n),
      Object.values($(this).parent().children("button")).forEach((e) => {
        if (e && e.dataset && e.dataset.rating) {
          const t = $(e);
          e.dataset.rating <= n
            ? t.addClass("is--active")
            : t.removeClass("is--active");
        }
      });
  }),
  $("#mobileFilterCloseButton").click(function () {
    catalogPageAside.addClass("is--hidden"),
      closeCatalogPageAsideMobile(),
      setCatalogPageState();
  }),
  $("#mobileSortCloseButton").click(function () {
    closeMobileCatalogSort();
  }),
  $("#mainSortButton").click(function () {
    document.body.clientWidth < 992 && openMobileCatalogSort();
  }),
  $("#excerpt_accordion").on("hidden.bs.collapse", function () {
    prepareProductPageImage();
  }),
  $("#excerpt_accordion").on("shown.bs.collapse", function () {
    prepareProductPageImage();
  });
let searchInputTimeout;
$('.header-menu__search__field__input input[type="text"]').on(
  "input",
  function (e) {
    clearTimeout(searchInputTimeout);
    const t = e.target.value;
    t && 2 <= t.length
      ? (searchInputTimeout = setTimeout(function () {
          search(t);
        }, 500))
      : clearSearch();
  }
),
  $(document).ready(function () {
    $("body").addClass("is--loaded");
  });
const reviewNameField = document.getElementById("review_author"),
  reviewEmailField = document.getElementById("review_email"),
  reviewModalFormRules =
    reviewNameField && reviewEmailField
      ? {
          review_author: { required: !0 },
          review_email: { required: !0 },
          review_age: { required: !0 },
          review_skin: { required: !0 },
          review_comment: { required: !0 },
        }
      : {
          review_age: { required: !0 },
          review_skin: { required: !0 },
          review_comment: { required: !0 },
        };
function setGlossaryPosition() {
  if (992 <= document.body.clientWidth) {
    let e = document.querySelector(".glossary__top");
    if (e) {
      const o = document.querySelector(".glossary__wrapper");
      var t;
      o &&
        ((n = o.getBoundingClientRect()),
        (t = document.querySelector(".header__main").clientHeight),
        (e.style.left = `${n.left}px`),
        (e.style.width = `${n.width}px`),
        (e.style.top = `${n.top < t ? t - 1 : n.top}px`),
        (e.style.height = "140px"));
    }
  } else {
    let e = document.querySelector(".glossary__top__mobile");
    var n;
    e &&
      ((n = document.querySelector(".footer")).offsetTop <=
      window.scrollY + window.innerHeight
        ? ((n = window.scrollY + window.innerHeight - n.offsetTop),
          (e.style.bottom = `${n}px`),
          (e.style.top = "auto"),
          (e.style.height = `calc(100vh - ${n}px)`))
        : ((e.style.bottom = "auto"),
          (e.style.top = "0px"),
          (e.style.height = "100vh")));
  }
}
function setGlossaryActiveItem() {
  if (document.querySelector(".glossary__wrapper")) {
    const i = document.querySelectorAll(".glossary__row");
    document.querySelector(".glossary__wrapper").getBoundingClientRect();
    const a = [],
      l = (e) => {
        const t = document.querySelectorAll(
          '.glossary__wrapper li[data-symbol="' + e + '"]'
        );
        $(".glossary__wrapper li").removeClass("is--active"),
          t.forEach((e) => {
            e.classList.add("is--active");
          });
      };
    for (var e = 0; e < i.length; ++e)
      i[e].getBoundingClientRect().top < 0 && a.push(i[e]);
    i.forEach((e, t) => {
      var n = e.dataset.symbol,
        e = e.getBoundingClientRect();
      let o = { top: null };
      a.length
        ? ((o = 0 < t ? i[t - 1].getBoundingClientRect() : { top: null }),
          o.top < 0 && 0 <= e.top && l(n))
        : ((n = i[0].dataset.symbol), l(n));
    });
  }
}
function setActiveBySymbol(e) {
  const t = document.querySelector('.glossary__row[data-symbol="' + e + '"]');
  $(".glossary__row").removeClass("is--active"),
    t.classList.add("is--active"),
    992 <= document.body.clientWidth
      ? window.scrollTo(
          0,
          t.offsetTop -
            document.querySelector(".glossary__top").clientHeight +
            10
        )
      : window.scrollTo(0, t.offsetTop);
}
function setBagLoadedState(e) {
  e
    ? ($(".bag-modal .loader-container").addClass("is--active"),
      $(".bag-modal__inner").addClass("is--loading"))
    : ($(".bag-modal .loader-container").removeClass("is--active"),
      $(".bag-modal__inner").removeClass("is--loading"));
}
function animate(o) {
  var i = performance.now();
  requestAnimationFrame(function e(t) {
    var n = (t - i) / o.duration,
      t = o.timing((n = 1 < n ? 1 : n));
    o.draw(t), n < 1 && requestAnimationFrame(e);
  });
}
function makeEaseOut(t) {
  return function (e) {
    return 1 - t(1 - e);
  };
}
function back(e, t) {
  return Math.pow(t, 2) * ((e + 1) * t - e);
}
function addToCartWithMagic(e) {
  var e = document.querySelector(e),
    o = e.getBoundingClientRect(),
    i = document.getElementById("headingBagButton"),
    a = i.getBoundingClientRect();
  const l = $(e).clone();
  l.appendTo("body").css({
    width: `${o.width}px`,
    height: `${o.height}px`,
    margin: 0,
    position: "fixed",
    top: `${o.top}px`,
    left: `${o.left}px`,
    zIndex: 9999999,
  });
  const t = setTimeout(() => {
      l.addClass("is--clone"), clearTimeout(t);
    }, 200),
    n = setTimeout(() => {
      i.classList.add("is--bubble"), clearTimeout(n);
    }, 450);
  animate({
    duration: 700,
    timing: back.bind(null, 1.5),
    draw(e) {
      var t = a.left + a.width / 2,
        n = a.top + a.height / 2;
      (l[0].style.left = o.left + (t - o.left - o.width / 2) * e + "px"),
        (l[0].style.top = o.top + (n - o.top - o.height / 2) * e + "px"),
        1 === e && (l.remove(), i.classList.remove("is--bubble"));
    },
  });
}
$(".review-modal-form").validate({
  rules: reviewModalFormRules,
  messages: {
    review_author: { required: "Обязательно" },
    review_email: { required: "Обязательно" },
    review_age: { required: "Обязательно" },
    review_skin: { required: "Обязательно" },
    review_comment: { required: "Обязательно" },
  },
}),
  $('.dropdown-multi input[type="checkbox"]').change(function (e) {
    const t = $(this)
      .closest(".dropdown-multi")
      .children('button[data-toggle="dropdown"]')
      .children("span");
    var n = $(this)
      .closest(".dropdown-multi")
      .find('input[type="checkbox"]:checked');
    let o = [];
    for (let e = 0; e < n.length; e++)
      o.push($(n[e]).parent().siblings("label")[0].innerText);
    o.length ? t.html(o.join(", ")) : t.html(t.attr("data-title")),
      $(
        `input[name="${$(this)
          .closest(".dropdown-multi")
          .children('button[data-toggle="dropdown"]')
          .attr("id")}"]`
      ).val(o.join(", "));
  }),
  $(".glossary__top ul li, .glossary__top__mobile ul li").click(function () {
    setActiveBySymbol(this.innerHTML);
  }),
  $(".modal-dw__button button").click(function () {
    $("#deliveryWarningModal").modal("hide");
  });
const POINT_TYPE = Object.freeze({
    BOXBERRY: "boxberry",
    CDEK: "cdek",
    RUSSIAN_POST: "russian-post",
    ALL: "all",
  }),
  POINTS_DISPLAY_MODE = Object.freeze({ MAP: "map", LIST: "list" }),
  MAP_CONTAINER_FRAME = "delivery-map",
  COUNT_PER_PAGE = 30;
let MAP_OBJECT_MANAGER = null,
  CUSTOM_BALLOON_LAYOUT = null,
  DELIVERY_MAP = null,
  DELIVERY_SEARCH_FIELD = null;
const MAPS_BASE_PATH = window.map_base_path || "public/images/",
  YANDEX_MAP_API_KEY = (
    document.currentScript ||
    document.querySelector('script[src^="js/main.js"]')
  ).src.split("apikey=")[1];
let __MAIN_DW_STATE__ = {
  widgetInitialComplete: !1,
  listCurrentPage: 0,
  points: [],
  city: null,
  currentDisplayMode: POINTS_DISPLAY_MODE.MAP,
  currentPointsFilter: [POINT_TYPE.ALL],
  currentOpenedBalloon: null,
  currentFoundPoint: null,
  currentSearchItemCoordinates: null,
};
function updateDeliveryWidgetState(e) {
  __MAIN_DW_STATE__ = { ...__MAIN_DW_STATE__, ...e };
}
function getPointsArray() {
  return isFilterParamAll()
    ? __MAIN_DW_STATE__.points
    : __MAIN_DW_STATE__.points.filter(
        (t) =>
          !!__MAIN_DW_STATE__.currentPointsFilter.filter((e) => e === t.type)
            .length
      );
}
function isFilterParamAll() {
  return !!__MAIN_DW_STATE__.currentPointsFilter.filter(
    (e) => e === POINT_TYPE.ALL
  ).length;
}
function getDeliveryPoints(o) {
  return new Promise((t, n) => {
    const e = new FormData();
    e.append("action", "get_pvz_list"),
      o && e.append("country_code", o),
      $.ajax({
        url: "/wp-admin/admin-ajax.php",
        type: "POST",
        data: e,
        processData: !1,
        contentType: !1,
        success: (e) => {
          t((e.pvz || []).map((e, t) => ({ id: t + 1, ...e })));
        },
        error: (e) => {
          n(e);
        },
      });
  });
}
function makePaymentMethodsString(e) {
  const t = [];
  return (
    e.payment_card && t.push("оплата картой"),
    e.payment_cash && t.push("оплата наличными"),
    t.join(", ")
  );
}
function num_word(e, t) {
  var n = (e = Math.abs(e) % 100) % 10;
  return 10 < e && e < 20 ? t[2] : 1 < n && n < 5 ? t[1] : 1 == n ? t[0] : t[2];
}
function makeShippingPeriodString(e) {
  if (e) return e + " " + num_word(e, ["день", "дня", "дней"]);
}
function makeDeliveryWidgetPhotosContainer(e) {
  let t = `<div class="delivery-widget__point-info__photos__inner is--${
    e.length <= 3 ? e.length : "high"
  }">`;
  return (
    e.forEach((e) => {
      t += `<div class="delivery-widget__point-info__photos__item">
                    <div class="delivery-widget__point-info__photos__item__inner" style="background-image:url(${e})"></div>
                </div>`;
    }),
    (t += "</div>"),
    t
  );
}
function getPvzInfo(o, i) {
  return new Promise((t, n) => {
    const e = new FormData();
    e.append("action", "get_pvz_info"),
      e.append("type", i),
      e.append("code", o),
      $.ajax({
        url: "/wp-admin/admin-ajax.php",
        type: "POST",
        data: e,
        processData: !1,
        contentType: !1,
        success: (e) => {
          t({
            ...e.pvz_info,
            photos: makeDeliveryWidgetPhotosContainer(e.pvz_info.photos),
            paymentMethodsString: makePaymentMethodsString(e.pvz_info),
            shippingPeriod: makeShippingPeriodString(
              e.pvz_info.shipping_period || 0
            ),
          });
        },
        error: (e) => {
          n(e);
        },
      });
  });
}
function makeDeliveryMap(t, e) {
  const n = (e) => {
    e && "function" == typeof e && e();
  };
  ymaps.geolocation.get().then(
    function (e) {
      const t = $(`#${MAP_CONTAINER_FRAME}`);
      (e = e.geoObjects.get(0).properties.get("boundedBy")),
        (e = ymaps.util.bounds.getCenterAndZoom(e, [t.width(), t.height()]));
      o(e);
    },
    function () {
      o({ center: [55.76, 37.64], zoom: 7 });
    }
  );
  const o = (e) => {
    (DELIVERY_MAP = new ymaps.Map(MAP_CONTAINER_FRAME, { ...e, controls: [] })),
      (MAP_OBJECT_MANAGER = new ymaps.ObjectManager({
        clusterize: !0,
        gridSize: 64,
      })),
      MAP_OBJECT_MANAGER.clusters.options.set(
        "preset",
        "islands#orangeClusterIcons"
      ),
      DELIVERY_MAP.geoObjects.add(MAP_OBJECT_MANAGER),
      setMapPoints(),
      addDeliveryMapEvents(),
      mapChangeHandler(e.center),
      n(t.bind(this));
  };
}
function removeDeliveryMapEvents() {
  DELIVERY_MAP.events.remove("boundschange", mapBoundsChangeEventHandler),
    DELIVERY_MAP.events.remove("click", mapClickEventHandler);
}
function addDeliveryMapEvents() {
  removeDeliveryMapEvents(),
    DELIVERY_MAP.events.add("boundschange", mapBoundsChangeEventHandler),
    DELIVERY_MAP.events.add("click", mapClickEventHandler);
}
function mapBoundsChangeEventHandler(e) {
  e = e.get("newCenter");
  e && mapChangeHandler(e);
}
function mapClickEventHandler() {
  var e = MAP_OBJECT_MANAGER.objects.balloon.getData();
  e &&
    e.properties &&
    e.properties.fetched &&
    (MAP_OBJECT_MANAGER.objects.balloon.close(), userClosePointHandler());
}
function mapChangeHandler(e) {
  getCurrentCity(e).then(
    (e) => {
      e = ((e) => {
        try {
          return e.GeoObjectCollection.featureMember[0].GeoObject
            .metaDataProperty.GeocoderMetaData.Address.Components;
        } catch (e) {
          return null;
        }
      })(e);
      (e = e && getCityComponent(e)) && e.name
        ? updateDeliveryWidgetState({ city: e.name })
        : updateDeliveryWidgetState({ city: null });
    },
    function () {
      updateDeliveryWidgetState({ city: null });
    }
  );
}
function getCityComponent(e) {
  var t = e.find((e) => "locality" === e.kind);
  let n = e.filter((e) => "province" === e.kind);
  return n && 1 < n.length && (n = n[n.length - 1]), t || n;
}
function getCurrentCity(e) {
  return ymaps.geocode(e, { kind: "locality", json: !0, results: 1 });
}
function clearObjectManager() {
  MAP_OBJECT_MANAGER &&
    MAP_OBJECT_MANAGER.removeAll &&
    "function" == typeof MAP_OBJECT_MANAGER.removeAll &&
    MAP_OBJECT_MANAGER.removeAll();
}
function setMapPoints() {
  const t = ymaps.templateLayoutFactory.createClass(`
        <div class="delivery-widget__point-info__title">$[properties.customTitle]</div>   
        {% if properties.photos %} 
        <div class="delivery-widget__point-info__photos">
            $[properties.photos]
        </div>
        {% endif %}
        {% if properties.customAddress %}
        <div class="delivery-widget__point-info__row">
            <b>Адрес:</b><br>
            $[properties.customAddress]
        </div>
        {% endif %}
        {% if properties.customPhone %}
        <div class="delivery-widget__point-info__row">
            <b>Телефон:</b><br>
            $[properties.customPhone]
        </div>
        {% endif %}
        {% if properties.customSchedule %}
        <div class="delivery-widget__point-info__row">
            <b>Режим работы:</b><br>
            $[properties.customSchedule]
        </div>
        {% endif %}
        {% if properties.paymentMethodsString %}
        <div class="delivery-widget__point-info__row">
            <b>Тип оплаты:</b>
            $[properties.paymentMethodsString]
        </div>
        {% endif %}
        {% if properties.address_comment %}
        <div class="delivery-widget__point-info__row">
            $[properties.address_comment]
        </div>
        {% endif %}
        {% if properties.shippingPeriod %}
        <div class="delivery-widget__point-info__row">
            <b>Сроки доставки:</b>
            $[properties.shippingPeriod]
        </div>
        {% endif %}
        <div class="delivery-widget__point-info__button">
            <button class="button">Выбрать пункт</button>
        </div>
    `);
  clearObjectManager(),
    MAP_OBJECT_MANAGER.add({
      type: "FeatureCollection",
      features: getPointsArray().map((e) => ({
        type: "Feature",
        id: e.id,
        geometry: { type: "Point", coordinates: [e.lat, e.lon] },
        options: {
          iconColor: "#000000",
          balloonLayout: getOrMakeCustomBalloonLayout(),
          balloonContentLayout: t,
          balloonPanelMaxMapArea: 0,
          iconLayout: "default#image",
          iconImageHref: `${MAPS_BASE_PATH}/balloon.png`,
          iconImageSize: [40, 40],
          balloonAutoPan: !1,
        },
        properties: {
          id: e.id,
          customCode: e.code,
          customTitle: e.name,
          customAddress: e.address,
          customPhone: e.phone,
          customCity: e.city_name,
          customSchedule: e.work_shedule,
          customType: e.type,
          customPaymentMethods: "5",
          fetched: !1,
        },
      })),
    }),
    setBalloonDrawContainerMode(),
    addObjectManagerEvents();
}
function setBalloonOptionsOutside() {
  MAP_OBJECT_MANAGER &&
    MAP_OBJECT_MANAGER.objects.options.set({
      balloonPane: "outerBalloon",
      balloonShadowPane: "outerBalloon",
    });
}
function setBalloonOptionsInside() {
  MAP_OBJECT_MANAGER &&
    MAP_OBJECT_MANAGER.objects.options.set({
      balloonPane: "balloon",
      balloonShadowPane: "shadows",
    });
}
function setBalloonDrawContainerMode() {
  (document.body.clientWidth <= 576
    ? setBalloonOptionsOutside
    : setBalloonOptionsInside)();
}
function removeAllObjectManagerEvents() {
  MAP_OBJECT_MANAGER.objects.events.remove(
    ["balloonopen"],
    balloonClickEventHandler
  ),
    MAP_OBJECT_MANAGER.objects.events.remove(
      ["balloonclose"],
      balloonCloseEventHandler
    );
}
function addObjectManagerEvents() {
  removeAllObjectManagerEvents(),
    MAP_OBJECT_MANAGER.objects.events.add(
      ["balloonopen"],
      balloonClickEventHandler
    ),
    MAP_OBJECT_MANAGER.objects.events.add(
      ["balloonclose"],
      balloonCloseEventHandler
    );
}
function removeObjectManagerBalloonEvents() {
  MAP_OBJECT_MANAGER.objects.balloon.events.remove(
    "userclose",
    userClosePointHandler
  );
}
function addObjectManagerBalloonEvents() {
  removeObjectManagerBalloonEvents(),
    MAP_OBJECT_MANAGER.objects.balloon.events.add(
      "userclose",
      userClosePointHandler
    );
}
function userClosePointHandler() {
  updateDeliveryWidgetState({ currentOpenedBalloon: null });
}
function initYandexMap() {
  return new Promise((e, t) => {
    DELIVERY_MAP
      ? (updateDeliveryWidgetAllState(), e())
      : ymaps.ready(
          makeDeliveryMap.bind(
            this,
            () => {
              e();
            },
            () => {
              t();
            }
          )
        );
  });
}
function initDeliveryWidget() {
  return initYandexMap();
}
function balloonCloseEventHandler() {
  updateDeliveryWidgetState({ currentOpenedBalloon: null });
}
function balloonClickEventHandler(e) {
  const t = e.get("objectId"),
    n = MAP_OBJECT_MANAGER.objects.getById(t),
    o = () => {
      $(".delivery-widget__point-info .loader-container").removeClass(
        "is--active"
      );
    };
  if (
    !__MAIN_DW_STATE__.currentOpenedBalloon ||
    __MAIN_DW_STATE__.currentOpenedBalloon !== t
  ) {
    if (n.properties.fetched)
      return (
        updateDeliveryWidgetState({ currentOpenedBalloon: t }),
        o(),
        void MAP_OBJECT_MANAGER.objects.balloon.autoPan()
      );
    MAP_OBJECT_MANAGER.objects.balloon.autoPan(),
      getPvzInfo(n.properties.customCode, n.properties.customType)
        .then((e) => {
          updateDeliveryWidgetState({ currentOpenedBalloon: t }),
            e
              ? ((n.properties = { ...n.properties, ...e, fetched: !0 }),
                MAP_OBJECT_MANAGER.objects.balloon.setData(n).then(() => {
                  o(), MAP_OBJECT_MANAGER.objects.balloon.autoPan();
                }))
              : o();
        })
        .catch(() => {
          o();
        });
  }
}
function getOrMakeCustomBalloonLayout() {
  return (
    CUSTOM_BALLOON_LAYOUT ||
      ((CUSTOM_BALLOON_LAYOUT = ymaps.templateLayoutFactory.createClass(
        `
            <div class="delivery-widget__point-info">
                <div class="delivery-widget__point-info__inner">
                    $[[options.contentLayout observeSize minWidth=308 maxWidth=308 maxHeight=430]]
                    <div class="delivery-widget__point-info__close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3334 13.3333L2.66675 2.66663M13.3334 2.66663L2.66675 13.3333" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <div class="loader-container is--active">
                    <div class="pag_loader">Loading...</div>
                </div>
                <div class="delivery-widget__point-info__arrow"></div>
            </div>
        `,
        {
          build: function () {
            this.constructor.superclass.build.call(this),
              (this._$element = $(
                ".delivery-widget__point-info",
                this.getParentElement()
              )),
              this.applyElementOffset(),
              this._$element
                .find(".delivery-widget__point-info__close")
                .on("click", $.proxy(this.onCloseClick, this)),
              this._$element
                .find(".delivery-widget__point-info__button button")
                .on("click", $.proxy(this.onSelectPoint, this));
          },
          clear: function () {
            this._$element
              .find(".delivery-widget__point-info__close")
              .off("click"),
              this._$element
                .find(".delivery-widget__point-info__button button")
                .off("click"),
              this.constructor.superclass.clear.call(this);
          },
          onSublayoutSizeChange: function () {
            CUSTOM_BALLOON_LAYOUT.superclass.onSublayoutSizeChange.apply(
              this,
              arguments
            ),
              this._isElement(this._$element) &&
                (this.applyElementOffset(), this.events.fire("shapechange"));
          },
          applyElementOffset: function () {
            this._$element.css({
              left: -this._$element[0].offsetWidth / 2,
              top: -(
                this._$element[0].offsetHeight +
                this._$element.find(".delivery-widget__point-info__arrow")[0]
                  .offsetHeight
              ),
            });
          },
          onCloseClick: function (e) {
            e.preventDefault(), this.events.fire("userclose");
          },
          onSelectPoint: function (e) {
            e.preventDefault();
            e = this.getData();
            e &&
              Object.prototype.hasOwnProperty.call(e, "object") &&
              e.object &&
              Object.prototype.hasOwnProperty.call(e.object, "properties") &&
              callSelectPointCallback(e.object.properties.customCode),
              this.events.fire("userclose");
          },
          getShape: function () {
            if (!this._isElement(this._$element))
              return CUSTOM_BALLOON_LAYOUT.superclass.getShape.call(this);
            var e = this._$element.position();
            return new ymaps.shape.Rectangle(
              new ymaps.geometry.pixel.Rectangle([
                [e.left, e.top],
                [
                  e.left + this._$element[0].offsetWidth,
                  e.top +
                    this._$element[0].offsetHeight +
                    this._$element.find(
                      ".delivery-widget__point-info__arrow"
                    )[0].offsetHeight,
                ],
              ])
            );
          },
          _isElement: function (e) {
            return (
              e && e[0] && e.find(".delivery-widget__point-info__arrow")[0]
            );
          },
        }
      )),
      addObjectManagerBalloonEvents()),
    CUSTOM_BALLOON_LAYOUT
  );
}
function setDeliveryMapLoader() {
  $(".delivery-widget__loader-container").addClass("is--active");
}
function removeDeliveryMapLoader() {
  $(".delivery-widget__loader-container").removeClass("is--active");
}
function setDeliveryListItems() {
  const l = document.querySelector(
    ".delivery-widget__tabs-content__list__inner ul"
  );
  var e = getCurrentPage(),
    t = getNextCount();
  const n = (e, t) =>
    distance(
      parseFloat(e),
      parseFloat(t),
      __MAIN_DW_STATE__.currentSearchItemCoordinates[0],
      __MAIN_DW_STATE__.currentSearchItemCoordinates[1]
    );
  getPointsByCityOrAll()
    .sort((e, t) => {
      if (__MAIN_DW_STATE__.currentSearchItemCoordinates) {
        (e = n(e.lat, e.lon)), (t = n(t.lat, t.lon));
        return t < e ? 1 : e < t ? -1 : 0;
      }
      return 1;
    })
    .slice(e, t)
    .forEach((e) => {
      let t = null;
      var n, o, i, a;
      __MAIN_DW_STATE__.currentSearchItemCoordinates &&
        (t = distance(
          e.lat,
          e.lon,
          __MAIN_DW_STATE__.currentSearchItemCoordinates[0],
          __MAIN_DW_STATE__.currentSearchItemCoordinates[1]
        )),
        l.insertAdjacentHTML(
          "beforeend",
          ((n = e.id),
          (o = e.name),
          (i = e.address),
          (a = e.work_shedule),
          e.city_name,
          (e = e.code),
          t,
          `<li class="delivery-widget__tabs-content__list__item" data-id="${n}" data-code="${e}">
                        <div class="delivery-widget__tabs-content__list__item-heading">${o}</div>
                        <div class="delivery-widget__tabs-content__list__item-address">${i}</div>
                        <div class="delivery-widget__tabs-content__list__item-schedule">${a}</div>
                        <div class="delivery-widget__tabs-content__list__item-collapse">
                            <div class="delivery-widget__tabs-content__list__item-row delivery-widget__tabs-content__list__item-payment-methods"></div>
                            <div class="delivery-widget__tabs-content__list__item-row delivery-widget__tabs-content__list__item-description"></div>
                            <div class="delivery-widget__tabs-content__list__item-row delivery-widget__tabs-content__list__item-photos"></div>
                            <div class="delivery-widget__tabs-content__list__item-row delivery-widget__tabs-content__list__item-button"></div>
                        </div>
                    </li>`)
        );
    });
}
function getPointsByCityOrAll() {
  const e = __MAIN_DW_STATE__.points.filter(
    (e) =>
      prepareCityString(e.city_name) ===
      prepareCityString(__MAIN_DW_STATE__.city)
  );
  return e && e.length
    ? isFilterParamAll()
      ? e
      : e.filter(
          (t) =>
            !!__MAIN_DW_STATE__.currentPointsFilter.filter((e) => e === t.type)
              .length
        )
    : getPointsArray();
}
function prepareCityString(e) {
  return e && e.replace(/ё/g, "е");
}
function getCurrentPage() {
  return __MAIN_DW_STATE__.listCurrentPage * COUNT_PER_PAGE;
}
function getNextCount() {
  return COUNT_PER_PAGE * (__MAIN_DW_STATE__.listCurrentPage + 1);
}
function initDeliveryList() {
  return new Promise((e, t) => {
    setDeliveryListItems(), e();
  });
}
function deliveryWidgetScrollTop() {
  const e = document.querySelector(".delivery-widget__tabs-content__list");
  e.scrollTo(0, 0);
}
function clearDeliveryListItems() {
  const e = document.querySelector(
    ".delivery-widget__tabs-content__list__inner ul"
  );
  (e.innerHTML = ""),
    updateDeliveryWidgetState({ listCurrentPage: 0 }),
    deliveryWidgetScrollTop(),
    closeAllDeliveryPointCollapse();
}
function deliveryListScrollHandler(e) {
  var t = e.target.offsetHeight,
    n = e.target.scrollHeight;
  t + e.target.scrollTop + 100 >= n &&
    (updateDeliveryWidgetState({
      listCurrentPage: __MAIN_DW_STATE__.listCurrentPage + 1,
    }),
    initDeliveryList().then(() => {}));
}
function openDeliveryWidget(e, t) {
  $(".delivery-widget").show(),
    setDeliveryWidgetContainerHeight(),
    setDeliveryMapLoader(),
    disableBodyScroll(),
    deliveryWidgetRemoveAllEvents(),
    setDeliveryWidgetDisplayMode(),
    initDeliveryWidgetCheckboxesState(),
    getDeliveryPoints(e).then((e) => {
      updateDeliveryWidgetState({ points: e }),
        Promise.all([initDeliveryWidget(), initDeliveryList()])
          .then(() => {
            createSearchField(),
              removeDeliveryMapLoader(),
              updateDeliveryWidgetState({ widgetInitialComplete: !0 }),
              document
                .querySelector(".delivery-widget__tabs-content__list")
                .addEventListener("scroll", deliveryListScrollHandler);
          })
          .catch(() => {
            alert("Произошла ошибка. Попробуйте позже");
          });
    }),
    t && "function" == typeof t && (window.onSelectPoint = t);
}
function deliveryWidgetRemoveAllEvents() {
  document
    .querySelector(".delivery-widget__tabs-content__list")
    .removeEventListener("scroll", deliveryListScrollHandler);
}
function setDeliveryWidgetListDisplayMode() {
  $('.delivery-widget__tabs__right button[data-mode="list"]').hide(),
    $('.delivery-widget__tabs__right button[data-mode="map"]').css({
      display: "inline-flex",
    }),
    $(".delivery-widget__tabs-content__map").hide(),
    $(".delivery-widget__tabs-content__list").show();
}
function setDeliveryWidgetMapDisplayMode() {
  $('.delivery-widget__tabs__right button[data-mode="map"]').hide(),
    $('.delivery-widget__tabs__right button[data-mode="list"]').css({
      display: "inline-flex",
    }),
    $(".delivery-widget__tabs-content__list").hide(),
    $(".delivery-widget__tabs-content__map").show();
}
function getPointByCode(t) {
  return getPointsArray().find((e) => e.code === t);
}
function setDeliveryWidgetDisplayMode() {
  switch (__MAIN_DW_STATE__.currentDisplayMode) {
    case POINTS_DISPLAY_MODE.MAP:
      setDeliveryWidgetMapDisplayMode();
      break;
    case POINTS_DISPLAY_MODE.LIST:
      setDeliveryWidgetListDisplayMode(), deliveryWidgetScrollTop();
  }
}
function generateDeliveryPointCollapse(e, t) {
  const n = $(e).find(
      ".delivery-widget__tabs-content__list__item-payment-methods"
    ),
    o = $(e).find(".delivery-widget__tabs-content__list__item-description"),
    i = $(e).find(".delivery-widget__tabs-content__list__item-photos"),
    a = $(e).find(".delivery-widget__tabs-content__list__item-button");
  n.append(`Тип оплаты ${t.paymentMethodsString}`),
    i.append(t.photos),
    o.append(t.address_comment),
    a.append(
      `<button type="button" class="button" data-code="${t.code}">Выбрать пункт</button>`
    ),
    openDeliveryPointCollapse(e, t.id),
    $(e).addClass("is--loaded");
}
function openDeliveryPointCollapse(e, t) {
  closeDeliveryPointCollapseAll();
  const n = $(e).find(".delivery-widget__tabs-content__list__item-collapse");
  n.slideDown(),
    $(e).addClass("is--opened"),
    updateDeliveryWidgetState({ currentOpenedBalloon: t });
}
function closeDeliveryPointCollapseAll() {
  $(".delivery-widget__tabs-content__list__item-collapse").slideUp(),
    $(".delivery-widget__tabs-content__list__item").removeClass("is--opened"),
    updateDeliveryWidgetState({ currentOpenedBalloon: null });
}
function closeDeliveryPointCollapse(e) {
  const t = $(e).find(".delivery-widget__tabs-content__list__item-collapse");
  t.slideUp(), $(e).removeClass("is--opened");
}
function closeAllDeliveryPointCollapse() {
  $(".delivery-widget__tabs-content__list__item-collapse").hide(),
    $(".delivery-widget__tabs-content__list__item").removeClass("is--opened");
}
function setDeliveryWidgetContainerHeight() {
  var e = document.querySelector(".delivery-widget__inner"),
    t = document.querySelector(".delivery-widget__static");
  const n = document.querySelector(".delivery-widget__tabs-content");
  n.style.height = `${e.clientHeight - t.clientHeight}px`;
}
function callSelectPointCallback(t) {
  var e;
  !window.onSelectPoint ||
    "function" != typeof window.onSelectPoint ||
    ((e = __MAIN_DW_STATE__.points.find((e) => e.code === t)) &&
      onSelectPoint(e)),
    closeDeliveryWidget();
}
function createSearchField() {
  var e = "deliveryWidgetSearchField";
  const t = document.getElementById(e);
  const n = document.getElementById("deliveryWidgetSearchFieldForm");
  (DELIVERY_SEARCH_FIELD = new ymaps.SuggestView(e)),
    n.addEventListener("submit", function (e) {
      e.preventDefault();
      e = t.value;
      e && deliveryWidgetSearchHandler(e);
    }),
    DELIVERY_SEARCH_FIELD.events.remove(
      ["optionschange", "select"],
      deliverySearchChangeEventHandler
    ),
    DELIVERY_SEARCH_FIELD.events.add(
      ["optionschange", "select"],
      deliverySearchChangeEventHandler
    );
}
function deliverySearchChangeEventHandler(e) {
  ymaps.geocode(e.get("item").value, { results: 1 }).then((e) => {
    const t = e.geoObjects.get(0),
      n = t.properties.get("text");
    deliveryWidgetSearchHandler(n);
  });
}
function deliveryWidgetSearchHandler(e) {
  setDeliveryMapLoader(),
    ymaps
      .geocode(e, { results: 1 })
      .then(function (e) {
        removeDeliveryMapLoader();
        const t = e.geoObjects.get(0),
          n = t.properties.get("boundedBy"),
          o = t.properties.get("metaDataProperty"),
          i = t.geometry.getCoordinates(),
          a = (e) => {
            t.options.set("preset", "islands#darkBlueDotIconWithCaption"),
              t.properties.set("iconCaption", t.getAddressLine()),
              e
                ? DELIVERY_MAP.setBounds(n, { checkZoomRange: !0 })
                : MAP_OBJECT_MANAGER.objects.balloon.autoPan();
          };
        if (o && o.GeocoderMetaData && o.GeocoderMetaData.Address) {
          e = o.GeocoderMetaData.Address.Components;
          if (e && e.length) {
            e = getCityComponent(e);
            if (
              e &&
              e.name &&
              (updateDeliveryWidgetState({
                city: e.name,
                currentSearchItemCoordinates: i,
                currentFoundPoint: getBalloonFromCoordinates(...i),
              }),
              clearDeliveryListItems(),
              setDeliveryListItems(),
              __MAIN_DW_STATE__.currentFoundPoint)
            )
              return void (__MAIN_DW_STATE__.currentDisplayMode ===
              POINTS_DISPLAY_MODE.MAP
                ? openBalloonById(__MAIN_DW_STATE__.currentFoundPoint.id).then(
                    () => {
                      a(!1);
                    }
                  )
                : __MAIN_DW_STATE__.currentDisplayMode ===
                    POINTS_DISPLAY_MODE.LIST &&
                  openDeliveryPointCollapseById(
                    __MAIN_DW_STATE__.currentFoundPoint.id
                  ));
          }
        }
        updateDeliveryWidgetState({
          currentFoundPoint: null,
          currentOpenedBalloon: null,
        }),
          a(!0);
      })
      .catch(() => {
        updateDeliveryWidgetState({
          currentFoundPoint: null,
          currentSearchItemCoordinates: null,
          currentOpenedBalloon: null,
        }),
          removeDeliveryMapLoader();
      });
}
function getBalloonFromCoordinates(o, i) {
  return getPointsArray().find((e) => {
    try {
      var t = parseFloat(e.lat),
        n = parseFloat(e.lon);
      return distance(o, i, t, n) <= 0.01;
    } catch (e) {
      return !1;
    }
  });
}
function openBalloonById(n) {
  return new Promise((e, t) => {
    __MAIN_DW_STATE__.currentOpenedBalloon &&
    __MAIN_DW_STATE__.currentOpenedBalloon === n
      ? t()
      : __MAIN_DW_STATE__.currentOpenedBalloon &&
        (MAP_OBJECT_MANAGER.objects.balloon.close(),
        updateDeliveryWidgetState({ currentOpenedBalloon: null })),
      MAP_OBJECT_MANAGER.objects.balloon.open(n).then(e, t);
  });
}
function distance(e, t, n, o, i) {
  if (e === n && t === o) return 0;
  (e = (Math.PI * e) / 180),
    (n = (Math.PI * n) / 180),
    (o = (Math.PI * (t - o)) / 180),
    (o = Math.sin(e) * Math.sin(n) + Math.cos(e) * Math.cos(n) * Math.cos(o));
  return (
    1 < o && (o = 1),
    (o = 60 * (o = (180 * (o = Math.acos(o))) / Math.PI) * 1.1515),
    "K" === i && (o *= 1.609344),
    "N" === i && (o *= 0.8684),
    o
  );
}
function updateDeliveryWidgetAllState() {
  setDeliveryWidgetDisplayMode(),
    setMapPoints(),
    clearDeliveryListItems(),
    setDeliveryListItems();
}
function updateDisplayMode(t) {
  __MAIN_DW_STATE__.widgetInitialComplete &&
    Object.values(POINTS_DISPLAY_MODE).find((e) => e === t) &&
    (updateDeliveryWidgetState({ currentOpenedBalloon: null }),
    updateDeliveryWidgetState({ currentDisplayMode: t }),
    updateDeliveryWidgetAllState());
}
function initDeliveryWidgetCheckboxesState() {
  __MAIN_DW_STATE__.currentPointsFilter.forEach((e) => {
    $(
      '.catalog-page__filter__container__checklist input[value="' + e + '"]'
    ).prop("checked", !0);
  }),
    changeDeliveryWidgetFilterCounter();
}
function listItemClickHandler(t, e, n) {
  $(t).hasClass("is--opened")
    ? closeDeliveryPointCollapse(t)
    : $(t).hasClass("is--loaded")
    ? openDeliveryPointCollapse(t, n.id)
    : (setDeliveryMapLoader(),
      getPvzInfo(e, n.type)
        .then((e) => {
          removeDeliveryMapLoader(),
            e && generateDeliveryPointCollapse(t, { ...n, ...e });
        })
        .catch(() => {
          removeDeliveryMapLoader();
        }));
}
function openDeliveryPointCollapseById(t) {
  var e = document.querySelector(
      `.delivery-widget__tabs-content__list__item[data-id="${t}"]`
    ),
    n = getPointsArray().find((e) => e.id === t);
  e && n && listItemClickHandler(e, n.code, n);
}
function updateMapFromFilter(e) {
  const t = $(".delivery-widget__mobile-filter__inner").serializeArray(),
    n = () => {
      $(
        '.catalog-page__filter__container__checklist input[type="checkbox"]'
      ).prop("checked", !1),
        __MAIN_DW_STATE__.currentPointsFilter.forEach((e) => {
          $(
            '.catalog-page__filter__container__checklist input[type="checkbox"][value="' +
              e +
              '"]'
          ).prop("checked", !0);
        });
    },
    o = () => {
      n(), updateDeliveryWidgetAllState(), changeDeliveryWidgetFilterCounter();
    };
  var i = () => {
    updateDeliveryWidgetState({ currentPointsFilter: [POINT_TYPE.ALL] }), o();
  };
  if (e) i();
  else {
    const a = t
      .filter((e) => "delivery_mobile_variant" === e.name)
      .map((e) => e.value);
    e = a.filter((e) => e !== POINT_TYPE.ALL);
    e.length
      ? a.length && (updateDeliveryWidgetState({ currentPointsFilter: e }), o())
      : i();
  }
}
function changeDeliveryWidgetFilterCounter() {
  var e = __MAIN_DW_STATE__.currentPointsFilter.filter(
    (e) => e !== POINT_TYPE.ALL
  ).length;
  $(".delivery-widget__sort-button span.is--count").html(
    e ? `(${__MAIN_DW_STATE__.currentPointsFilter.length})` : ""
  );
}
function closeDeliveryWidget() {
  $(".delivery-widget").hide(),
    enableBodyScroll(),
    (window.onSelectPoint = null);
}
function elementInViewport(e) {
  for (
    var t = e.offsetTop,
      n = e.offsetLeft,
      o = e.offsetWidth,
      i = e.offsetHeight;
    e.offsetParent;

  )
    (t += (e = e.offsetParent).offsetTop), (n += e.offsetLeft);
  return (
    t < window.pageYOffset + window.innerHeight &&
    n < window.pageXOffset + window.innerWidth &&
    t + i > window.pageYOffset &&
    n + o > window.pageXOffset
  );
}
function elementInViewportHandler() {
  const e = $(".product-card");
  e.each((e, l) => {
    var r = $(l).attr("data-viewed");
    if (elementInViewport(l) && !r) {
      $(l).attr("data-viewed", !0);
      var s = $(l).find(".product-card__content__title"),
        d = $(l).find('input[name="product_price"]'),
        c = $(l).find('input[name="product_id"]'),
        _ = $(l).find('input[name="product_brand"]'),
        u = $(l).find('input[name="product_list_name"]'),
        r = $(l).find('input[name="product_cat"]');
      let e, t, n, o, i, a;
      s && s.length && (e = s[0].innerHTML),
        d && d.length && (t = d[0].value),
        c && c.length && (n = c[0].value),
        _ && _.length && (o = _[0].value),
        u && u.length && (i = u[0].value),
        r && r.length && (a = r[0].value),
        document.body.dispatchEvent(
          new CustomEvent("productCardViewed", {
            detail: {
              elem: l,
              name: e,
              price: t,
              id: n,
              brand: o,
              listName: i,
              cat: a,
            },
          })
        );
    }
  });
}
function showMainLoader() {
  const e =
      '<div class="loader-container is--active"><div class="pag_loader">Loading...</div></div>',
    t = document.createElement("div");
  t.classList.add("main-loader"),
    (t.innerHTML = e.trim()),
    document.body.appendChild(t),
    disableBodyScroll();
}
function hideMainLoader() {
  const e = document.querySelector(".main-loader");
  e && e.remove(), enableBodyScroll();
}
function stickyOrderAside() {
  const e = document.querySelector(".order-page__aside"),
    t = document.querySelector(".order-page__aside__inner"),
    n = document.querySelector(".header.header");
  var o, i, a, l, r, s;
  e &&
    t &&
    n &&
    ((o = e.getBoundingClientRect()),
    (i = t.getBoundingClientRect()),
    (a = (l = n.getBoundingClientRect()).height + l.top),
    (l = (e, t) => {
      $(".order-page__aside__inner").css({
        position: "absolute",
        width: e,
        top: t,
      });
    }),
    o.top - a <= 0
      ? o.top + o.height - a <= i.height
        ? l(o.width, o.height - i.height)
        : ((r = o.width),
          (s = a),
          $(".order-page__aside__inner").css({
            position: "fixed",
            width: r,
            top: s,
          }))
      : l("100%", 0));
}
function updateCertsPageHeight() {
  const e = document.querySelector(".header");
  if (e) {
    var t = e.getBoundingClientRect();
    const n = document.querySelector(".cer-page .product-page__image__inner");
    n && (n.style.paddingTop = t.height + "px");
  }
}
function setDropdownMenuHeight(e) {
  var t = e.offsetHeight;
  t && (e.style.height = t + "px"), e.classList.remove("is--loading");
}
function setDropdownAllMenusHeight() {
  const e = document.querySelectorAll(".form-elem__dropdown__menu.is--loading");
  e.forEach((e) => {
    setDropdownMenuHeight(e);
  });
}
function setBagModalContentHeight() {
  $(".bag-modal__body__inner").css({ height: `${window.innerHeight - 156}px` });
}
function setLifeStyleBannerHeight() {
  var e = window.innerHeight - $(".header").innerHeight(),
    t = 0.56 * e;
  $(".ls__banner__right").css({
    height: e + "px",
    minWidth: t + "px",
    width: t + "px",
  });
}
$("#deliveryTab a").on("click", function (e) {
  e.preventDefault(),
    $(this).hasClass("active") ||
      (updateDeliveryWidgetState({
        currentPointsFilter: $(this).attr("aria-controls"),
      }),
      updateDeliveryWidgetAllState());
}),
  $(".delivery-widget__tabs__right button").click(function () {
    updateDisplayMode($(this).attr("data-mode"));
  }),
  $(document).on(
    "click",
    ".delivery-widget__tabs-content__list__item",
    function (e) {
      var t = $(this).attr("data-code");
      listItemClickHandler(this, t, getPointByCode(t));
    }
  ),
  $(document).on(
    "click",
    ".delivery-widget__tabs-content__list__item-button button",
    function (e) {
      e.preventDefault(), e.stopPropagation();
      e = $(this).attr("data-code");
      e && callSelectPointCallback(e);
    }
  ),
  $(".delivery-widget__mobile-filter__inner").on("change", function (e) {
    e.preventDefault(), updateMapFromFilter("all" === e.target.value);
  }),
  $(".delivery-widget__mobile-filter__footer button").click(function (e) {
    $(".delivery-widget__sort-button > button").dropdown("hide");
  }),
  $(
    ".delivery-widget__overlay, .delivery-widget__heading__right button.is--close"
  ).click(function () {
    closeDeliveryWidget();
  }),
  $(".delivery-widget__sort-button > button").dropdown({ offset: "0px" }),
  $(".delivery-widget__sort-button > button").on(
    "hide.bs.dropdown",
    function (e) {
      e.preventDefault(), e.stopPropagation();
    }
  ),
  $(document).on(
    "click",
    ".delivery-widget__tabs__left .dropdown-menu",
    function (e) {
      e.stopPropagation();
    }
  ),
  $(".delivery-widget__mobile-filter__heading").click(function () {
    $(".delivery-widget__sort-button > button").dropdown("hide");
  }),
  $(window).on("load resize scroll", elementInViewportHandler),
  $(".form-control.is--date-mask").on("keypress paste", (e) => {
    e.preventDefault();
  }),
  document.querySelectorAll(".form-control.is--date-mask").forEach((e) => {
    const t = new Date();
    var n = new Date(t.getFullYear(), t.getMonth(), t.getDate());
    $(e).datepicker({
      minDate: n,
      monthNames: [
        "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь",
      ],
      monthNamesShort: [
        "Янв.",
        "Февр.",
        "Март",
        "Апр.",
        "Май",
        "Июнь",
        "Июль",
        "Авг.",
        "Сен.",
        "Окт.",
        "Нояб.",
        "Дек.",
      ],
      dayNames: [
        "Воскресенье",
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
      ],
      dayNamesShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
      dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
      firstDay: 1,
      dateFormat: "yy-mm-dd",
    });
  }),
  document.querySelectorAll(".form-control.is--email-mask").forEach((e) => {
    IMask(e, { mask: Date, min: new Date(1990, 0, 1), lazy: !1 });
  }),
  $(document).on("click", ".cer-page__design-block ul li img", function (t) {
    const e = document.querySelectorAll(".cert-big-image"),
      n = document.querySelector(".cer-page__mobile-big-image img"),
      o = $(t.target).parent();
    var i, a;
    $(".cer-page__design-block ul li").removeClass("is--active"),
      o &&
        ((i = o.data("value")),
        (a = o.data("name")),
        i &&
          a &&
          (a = document.querySelector('input[name="' + a + '"]')) &&
          $(a).val(i).trigger("change"),
        o.addClass("is--active"),
        e &&
          e.length &&
          e.forEach((e) => {
            e.style.backgroundImage = `url('${t.target.getAttribute("src")}')`;
          }),
        n && n.setAttribute("src", t.target.getAttribute("src")));
  }),
  $(".arrow-up").on("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }),
  $(document).on("click", ".is--arrow", function () {
    const e = $(this).closest(".lk-page__orders-table__row");
    e && e.toggleClass("is--open");
  }),
  $(document).ready(function () {
    const t = $("#auth-form__login"),
      n = $("#auth-form__register"),
      o = $("#auth-form__heading");
    function i() {
      n.hide(), t.show(), o.text("Войти в аккаунт");
    }
    $(document).on("click", "#auth-form__login-link", function (e) {
      e.preventDefault(), i();
    }),
      $(document).on("click", "#auth-form__register-link", function (e) {
        e.preventDefault(), t.hide(), n.show(), o.text("Создать аккаунт");
      }),
      n.length && i();
  }),
  (window.mobileAndTabletCheck = function () {
    let e = !1;
    var t;
    return (
      (t = navigator.userAgent || navigator.vendor || window.opera),
      (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
        t
      ) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
          t.substr(0, 4)
        )) &&
        (e = !0),
      e
    );
  });

});
