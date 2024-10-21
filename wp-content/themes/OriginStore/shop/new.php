<?php
/*
Template Name: new

*/
?>
<?php get_header(); ?>
<div class="catalog-page">
  <div class="catalog-page__inner is--rt-c">
    <div class="container">
      <div class="row catalog-page__desc">
        <div class="col col-lg-7">
          <div class="catalog-page__heading">
            <div class="catalog-page__heading__title">
              <div class="base-heading">
                <h1 class="base-heading__main">Магазин</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row catalog-page__filters">
        <div class="col">
          <div class="row">
            <div class="col-6">
              <div class="filter-button">
                <button class="fs-button" id="catalogPageFilterButton">
                  <span>
                    <svg
                      width="24"
                      height="24"
                      viewbox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        x="3"
                        y="6"
                        width="18"
                        height="2"
                        rx="1"
                        fill="#111111"
                      ></rect>
                      <rect
                        x="6"
                        y="11"
                        width="12"
                        height="2"
                        rx="1"
                        fill="#111111"
                      ></rect>
                      <rect
                        x="9"
                        y="16"
                        width="6"
                        height="2"
                        rx="1"
                        fill="#111111"
                      ></rect>
                    </svg>
                  </span>
                  Фильтр
                </button>
              </div>
            </div>
            <div class="col-6 flex">
              <div class="sort-button ml-auto">
                <button
                  class="fs-button"
                  type="button"
                  id="mainSortButton"
                  data-toggle="dropdown"
                >
                  <span>
                    <svg
                      width="24"
                      height="24"
                      viewbox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M6 3L2 7M6 3V21V3ZM6 3L10 7L6 3Z"
                        stroke="#111111"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                      <path
                        d="M18 21L14 17M18 21V3V21ZM18 21L22 17L18 21Z"
                        stroke="#111111"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </span>
                  По новизне
                </button>
                <div
                  class="dropdown-menu is--mobile"
                  aria-labelledby="mainSortButton"
                >
                  <div class="sort-button__title">Сортировать по:</div>
                  <div class="sort-button__list">
                    <form class="sort-form" method="get">
                      <ul>
                        <li>
                          <div class="form-elem__radio flex flex-align-c">
                            <label
                              class="form-elem__radio__input"
                              for="order-date"
                            >
                              <input
                                class="order-radio"
                                id="order-date"
                                type="radio"
                                name="orderby"
                                value="date"
                                checked="checked"
                              />
                              <span></span>
                            </label>
                            <label
                              class="form-elem__radio__label"
                              for="order-date"
                            >
                              Новизне
                            </label>
                          </div>
                        </li>
                        <li>
                          <div class="form-elem__radio flex flex-align-c">
                            <label
                              class="form-elem__radio__input"
                              for="order-price"
                            >
                              <input
                                class="order-radio"
                                id="order-price"
                                type="radio"
                                name="orderby"
                                value="price"
                              />
                              <span></span>
                            </label>
                            <label
                              class="form-elem__radio__label"
                              for="order-price"
                            >
                              Возрастанию цены
                            </label>
                          </div>
                        </li>
                        <li>
                          <div class="form-elem__radio flex flex-align-c">
                            <label
                              class="form-elem__radio__input"
                              for="order-price-desc"
                            >
                              <input
                                class="order-radio"
                                id="order-price-desc"
                                type="radio"
                                name="orderby"
                                value="price-desc"
                              />
                              <span></span>
                            </label>
                            <label
                              class="form-elem__radio__label"
                              for="order-price-desc"
                            >
                              Убыванию цены
                            </label>
                          </div>
                        </li>
                        <li>
                          <div class="form-elem__radio flex flex-align-c">
                            <label
                              class="form-elem__radio__input"
                              for="order-title"
                            >
                              <input
                                class="order-radio"
                                id="order-title"
                                type="radio"
                                name="orderby"
                                value="title"
                              />
                              <span></span>
                            </label>
                            <label
                              class="form-elem__radio__label"
                              for="order-title"
                            >
                              Названию
                            </label>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="catalog-sort-mobile">
        <div class="catalog-sort-mobile__inner">
          <div class="catalog-sort-mobile__heading mobile-aside__heading">
            <div class="mobile-aside__heading__left">Сортировать по:</div>
            <div class="mobile-aside__heading__right">
              <button type="button" id="mobileSortCloseButton">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20 20L4 4M20 4L4 20"
                    stroke="#828282"
                    stroke-width="2"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="sort-button__list">
            <form class="sort-form" method="get">
              <ul>
                <li>
                  <div class="form-elem__radio flex flex-align-c">
                    <label class="form-elem__radio__input" for="order-date">
                      <input
                        class="order-radio"
                        id="order-date"
                        type="radio"
                        name="orderby"
                        value="date"
                        checked="checked"
                      />
                      <span></span>
                    </label>
                    <label class="form-elem__radio__label" for="order-date">
                      Новизне
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-elem__radio flex flex-align-c">
                    <label class="form-elem__radio__input" for="order-price">
                      <input
                        class="order-radio"
                        id="order-price"
                        type="radio"
                        name="orderby"
                        value="price"
                      />
                      <span></span>
                    </label>
                    <label class="form-elem__radio__label" for="order-price">
                      Возрастанию цены
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-elem__radio flex flex-align-c">
                    <label
                      class="form-elem__radio__input"
                      for="order-price-desc"
                    >
                      <input
                        class="order-radio"
                        id="order-price-desc"
                        type="radio"
                        name="orderby"
                        value="price-desc"
                      />
                      <span></span>
                    </label>
                    <label
                      class="form-elem__radio__label"
                      for="order-price-desc"
                    >
                      Убыванию цены
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-elem__radio flex flex-align-c">
                    <label class="form-elem__radio__input" for="order-title">
                      <input
                        class="order-radio"
                        id="order-title"
                        type="radio"
                        name="orderby"
                        value="title"
                      />
                      <span></span>
                    </label>
                    <label class="form-elem__radio__label" for="order-title">
                      Названию
                    </label>
                  </div>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="row catalog-page__list">
        <div class="col">
          <div class="row">
            <div id="catalogPageAside" class="col-3">
              <form action="http://origin/shop-new/" method="get">
                <input type="hidden" name="sale" value="1" />
                <input type="hidden" name="hits" value="0" />
                <input
                  type="hidden"
                  name="orderby"
                  id="filterOrderBy"
                  value="date"
                />
                <div class="catalog-page__filter__mobile-heading">
                  <div
                    class="catalog-page__filter__mobile-heading__inner mobile-aside__heading"
                  >
                    <div class="mobile-aside__heading__left">Фильтр</div>
                    <div class="mobile-aside__heading__right">
                      <button type="button" id="mobileFilterCloseButton">
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M20 20L4 4M20 4L4 20"
                            stroke="#828282"
                            stroke-width="2"
                            stroke-linecap="round"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse1"
                    aria-expanded="false"
                    aria-controls="filter_collapse1"
                  >
                    Цена
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse1"
                  >
                    <div class="form-elem__range">
                      <div class="form-elem__range__title">
                        От 1 р. до 42600 р.
                      </div>
                      <div class="form-elem__range__inner">
                        <input
                          type="text"
                          class="is--hidden"
                          id="form_filter_price_min"
                          name="price_min"
                          data-event_label="price"
                        />
                        <input
                          type="text"
                          class="is--hidden"
                          id="form_filter_price_max"
                          name="price_max"
                          data-event_label="price"
                        />
                        <div
                          class="form-elem__range__slider"
                          data-min="1"
                          data-max="42600"
                          data-c-min="1"
                          data-c-max="42600"
                          data-id="form_filter_price"
                        ></div>
                        <div class="form-elem__range__labels">
                          <div class="ui-slider-handle is--min">
                            <input type="text" data-type="min" value="1" />
                          </div>
                          <div class="ui-slider-handle is--max">
                            <input type="text" data-type="max" value="42600" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse2"
                    aria-expanded="false"
                    aria-controls="filter_collapse2"
                  >
                    Тип кожи
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse2"
                  >
                    <input
                      type="hidden"
                      name="skin_type"
                      value=""
                      data-event_label="skin_type"
                    />
                    <div class="form-elem__dropdown">
                      <button
                        type="button"
                        data-toggle="dropdown"
                        data-id="skin_type"
                      >
                        <span>Все типы</span>
                      </button>
                      <div
                        class="form-elem__dropdown__menu dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <div
                          class="form-elem__dropdown__menu__item"
                          data-val=""
                          data-id="skin_type"
                        >
                          Все типы
                        </div>
                        <div
                          class="form-elem__dropdown__menu__item"
                          data-val="zhirnaya"
                          data-id="skin_type"
                        >
                          <span class="is--text">Жирная</span>
                        </div>
                        <div
                          class="form-elem__dropdown__menu__item"
                          data-val="kombinirovannaya"
                          data-id="skin_type"
                        >
                          <span class="is--text">Комбинированная</span>
                        </div>
                        <div
                          class="form-elem__dropdown__menu__item"
                          data-val="normalnaya"
                          data-id="skin_type"
                        >
                          <span class="is--text">Нормальная</span>
                        </div>
                        <div
                          class="form-elem__dropdown__menu__item"
                          data-val="suhaya"
                          data-id="skin_type"
                        >
                          <span class="is--text">Сухая</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse3"
                    aria-expanded="false"
                    aria-controls="filter_collapse3"
                  >
                    Состояние кожи
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse3"
                  >
                    <ul class="catalog-page__filter__container__checklist">
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_vozrastnye-izmeneniya"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_vozrastnye-izmeneniya"
                              value="vozrastnye-izmeneniya"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_vozrastnye-izmeneniya"
                          >
                            Возрастные изменения
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_kuperoz"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_kuperoz"
                              value="kuperoz"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_kuperoz"
                          >
                            Купероз
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_obezvozhennost"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_obezvozhennost"
                              value="obezvozhennost"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_obezvozhennost"
                          >
                            Обезвоженность
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_pereodicheskie-vysypaniya"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_pereodicheskie-vysypaniya"
                              value="pereodicheskie-vysypaniya"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_pereodicheskie-vysypaniya"
                          >
                            Периодические высыпания
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_pigmentatsiya-postakne"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_pigmentatsiya-postakne"
                              value="pigmentatsiya-postakne"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_pigmentatsiya-postakne"
                          >
                            Пигментация/постакне
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_povrezhdennaya"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_povrezhdennaya"
                              value="povrezhdennaya"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_povrezhdennaya"
                          >
                            Поврежденная
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_problemnaya-akne"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_problemnaya-akne"
                              value="problemnaya-akne"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_problemnaya-akne"
                          >
                            Проблемная/акне
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_rozatsea"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_rozatsea"
                              value="rozatsea"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_rozatsea"
                          >
                            Розацеа
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_sklonnaya-k-zhirnosti"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_sklonnaya-k-zhirnosti"
                              value="sklonnaya-k-zhirnosti"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_sklonnaya-k-zhirnosti"
                          >
                            Склонная к жирности
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_tusklyj-seryj-tsvet-litsa"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_tusklyj-seryj-tsvet-litsa"
                              value="tusklyj-seryj-tsvet-litsa"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_tusklyj-seryj-tsvet-litsa"
                          >
                            Тусклый/серый цвет лица
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="skin_condition_chuvstvitelnaya"
                          >
                            <input
                              type="checkbox"
                              name="skin_condition[]"
                              id="skin_condition_chuvstvitelnaya"
                              value="chuvstvitelnaya"
                              data-event_label="skin_condition"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="skin_condition_chuvstvitelnaya"
                          >
                            Чувствительная
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse4"
                    aria-expanded="false"
                    aria-controls="filter_collapse4"
                  >
                    Ключевые ингредиенты
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse4"
                  >
                    <ul class="catalog-page__filter__container__checklist">
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_lha-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_lha-kislota"
                              value="lha-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_lha-kislota"
                          >
                            LHA кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_azelainovaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_azelainovaya-kislota"
                              value="azelainovaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_azelainovaya-kislota"
                          >
                            Азелаиновая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_aloe-sok-ekstrakt"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_aloe-sok-ekstrakt"
                              value="aloe-sok-ekstrakt"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_aloe-sok-ekstrakt"
                          >
                            Алое сок/экстракт
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_alfa-lipoevaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_alfa-lipoevaya-kislota"
                              value="alfa-lipoevaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_alfa-lipoevaya-kislota"
                          >
                            Альфа-липоевая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_arbutin"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_arbutin"
                              value="arbutin"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_arbutin"
                          >
                            Арбутин
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_benzoilperoksid"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_benzoilperoksid"
                              value="benzoilperoksid"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_benzoilperoksid"
                          >
                            Бензоилпероксид
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_beta-glyukan"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_beta-glyukan"
                              value="beta-glyukan"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_beta-glyukan"
                          >
                            Бета-глюкан
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_vinnaya-kislota-aha"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_vinnaya-kislota-aha"
                              value="vinnaya-kislota-aha"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_vinnaya-kislota-aha"
                          >
                            Винная кислота (AHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_vitamin-e"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_vitamin-e"
                              value="vitamin-e"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_vitamin-e"
                          >
                            Витамин Е
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_vitamin-k"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_vitamin-k"
                              value="vitamin-k"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_vitamin-k"
                          >
                            Витамин К
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_vitamin-s"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_vitamin-s"
                              value="vitamin-s"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_vitamin-s"
                          >
                            Витамин С
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_vodorosli-ekstrakty-vodoroslej"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_vodorosli-ekstrakty-vodoroslej"
                              value="vodorosli-ekstrakty-vodoroslej"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_vodorosli-ekstrakty-vodoroslej"
                          >
                            Водоросли/Экстракты водорослей
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_gialuronovaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_gialuronovaya-kislota"
                              value="gialuronovaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_gialuronovaya-kislota"
                          >
                            Гиалуроновая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_glikolevaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_glikolevaya-kislota"
                              value="glikolevaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_glikolevaya-kislota"
                          >
                            Гликолевая кислота (AHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_glutation"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_glutation"
                              value="glutation"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_glutation"
                          >
                            Глутатион
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_glyukonolakton-pha"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_glyukonolakton-pha"
                              value="glyukonolakton-pha"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_glyukonolakton-pha"
                          >
                            Глюконолактон (PHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_zelenyj-chaj"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_zelenyj-chaj"
                              value="zelenyj-chaj"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_zelenyj-chaj"
                          >
                            Зеленый чай
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_kalamin"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_kalamin"
                              value="kalamin"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_kalamin"
                          >
                            Каламин
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_kaolin"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_kaolin"
                              value="kaolin"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_kaolin"
                          >
                            Каолин
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_keramidy"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_keramidy"
                              value="keramidy"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_keramidy"
                          >
                            Керамиды
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_kojevaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_kojevaya-kislota"
                              value="kojevaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_kojevaya-kislota"
                          >
                            Койевая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_kollagen"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_kollagen"
                              value="kollagen"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_kollagen"
                          >
                            Коллаген
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_koenzim-q10"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_koenzim-q10"
                              value="koenzim-q10"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_koenzim-q10"
                          >
                            Коэнзим Q10
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_laktobionovaya-kislota-pha"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_laktobionovaya-kislota-pha"
                              value="laktobionovaya-kislota-pha"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_laktobionovaya-kislota-pha"
                          >
                            Лактобионовая кислота (PHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_limonnaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_limonnaya-kislota"
                              value="limonnaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_limonnaya-kislota"
                          >
                            Лимонная кислота (AHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_maslo-zhozhoba"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_maslo-zhozhoba"
                              value="maslo-zhozhoba"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_maslo-zhozhoba"
                          >
                            Масло жожоба
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_maslo-shi"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_maslo-shi"
                              value="maslo-shi"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_maslo-shi"
                          >
                            Масло ши
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_mindalnaya-kislota-aha"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_mindalnaya-kislota-aha"
                              value="mindalnaya-kislota-aha"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_mindalnaya-kislota-aha"
                          >
                            Миндальная кислота (AHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_mineralnoe-maslo"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_mineralnoe-maslo"
                              value="mineralnoe-maslo"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_mineralnoe-maslo"
                          >
                            Минеральное масло
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_molochnaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_molochnaya-kislota"
                              value="molochnaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_molochnaya-kislota"
                          >
                            Молочная кислота (AHA)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_niatsinamid"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_niatsinamid"
                              value="niatsinamid"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_niatsinamid"
                          >
                            Ниацинамид
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_pantenol"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_pantenol"
                              value="pantenol"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_pantenol"
                          >
                            Пантенол
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_peptidy-faktory-rosta"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_peptidy-faktory-rosta"
                              value="peptidy-faktory-rosta"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_peptidy-faktory-rosta"
                          >
                            Пептиды/Факторы роста
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_polinukleotidy"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_polinukleotidy"
                              value="polinukleotidy"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_polinukleotidy"
                          >
                            Полинуклеотиды
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_polyn"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_polyn"
                              value="polyn"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_polyn"
                          >
                            Полынь
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_pro-prebiotiki"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_pro-prebiotiki"
                              value="pro-prebiotiki"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_pro-prebiotiki"
                          >
                            Про/пребиотики
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_provitamin-d"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_provitamin-d"
                              value="provitamin-d"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_provitamin-d"
                          >
                            Провитамин D
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_propolis"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_propolis"
                              value="propolis"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_propolis"
                          >
                            Прополис
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_retinol"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_retinol"
                              value="retinol"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_retinol"
                          >
                            Ретинол
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_ris"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_ris"
                              value="ris"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_ris"
                          >
                            Рисовый экстракт
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_romashka-azulen"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_romashka-azulen"
                              value="romashka-azulen"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_romashka-azulen"
                          >
                            Ромашка/Азулен
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_salitsilovaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_salitsilovaya-kislota"
                              value="salitsilovaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_salitsilovaya-kislota"
                          >
                            Салициловая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_skvalan"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_skvalan"
                              value="skvalan"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_skvalan"
                          >
                            Сквалан
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_traneksamovaya-kislota"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_traneksamovaya-kislota"
                              value="traneksamovaya-kislota"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_traneksamovaya-kislota"
                          >
                            Транексамовая кислота
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_fizicheskie-filtry"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_fizicheskie-filtry"
                              value="fizicheskie-filtry"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_fizicheskie-filtry"
                          >
                            Физические фильтры
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_himicheskie-filtry"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_himicheskie-filtry"
                              value="himicheskie-filtry"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_himicheskie-filtry"
                          >
                            Химические фильтры
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_tsentella-aziatskaya"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_tsentella-aziatskaya"
                              value="tsentella-aziatskaya"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_tsentella-aziatskaya"
                          >
                            Центелла азиатская
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_tsink"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_tsink"
                              value="tsink"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_tsink"
                          >
                            Цинк
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_chajnoe-derevo"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_chajnoe-derevo"
                              value="chajnoe-derevo"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_chajnoe-derevo"
                          >
                            Чайное дерево
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="ingredient_ekstrakt-solodki"
                          >
                            <input
                              type="checkbox"
                              name="ingredient[]"
                              id="ingredient_ekstrakt-solodki"
                              value="ekstrakt-solodki"
                              data-event_label="ingredients"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="ingredient_ekstrakt-solodki"
                          >
                            Экстракт солодки
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse5"
                    aria-expanded="false"
                    aria-controls="filter_collapse5"
                  >
                    Действие
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse5"
                  >
                    <ul class="catalog-page__filter__container__checklist">
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_antibakterialnoe"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_antibakterialnoe"
                              value="antibakterialnoe"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_antibakterialnoe"
                          >
                            Антибактериальное
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_antiejdzh"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_antiejdzh"
                              value="antiejdzh"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_antiejdzh"
                          >
                            Антиэйдж
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_vosstanovlenie-barera"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_vosstanovlenie-barera"
                              value="vosstanovlenie-barera"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_vosstanovlenie-barera"
                          >
                            Восстановление барьера
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_vyravnivanie-relefa"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_vyravnivanie-relefa"
                              value="vyravnivanie-relefa"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_vyravnivanie-relefa"
                          >
                            Выравнивание рельефа
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_zashhita-ot-solnca"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_zashhita-ot-solnca"
                              value="zashhita-ot-solnca"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_zashhita-ot-solnca"
                          >
                            Защита от солнца
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_lifting-povyshenie-elastichnosti"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_lifting-povyshenie-elastichnosti"
                              value="lifting-povyshenie-elastichnosti"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_lifting-povyshenie-elastichnosti"
                          >
                            Лифтинг/повышение эластичности
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_osvetlenie-vyravnivanie-tona"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_osvetlenie-vyravnivanie-tona"
                              value="osvetlenie-vyravnivanie-tona"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_osvetlenie-vyravnivanie-tona"
                          >
                            Осветление/выравнивание тона
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_posttravmaticheskoe"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_posttravmaticheskoe"
                              value="posttravmaticheskoe"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_posttravmaticheskoe"
                          >
                            Посттравматическое
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_seboreguliruyushhee"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_seboreguliruyushhee"
                              value="seboreguliruyushhee"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_seboreguliruyushhee"
                          >
                            Себорегулирующее
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_siyanie"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_siyanie"
                              value="siyanie"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_siyanie"
                          >
                            Сияние
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_uvlazhnenie"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_uvlazhnenie"
                              value="uvlazhnenie"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_uvlazhnenie"
                          >
                            Увлажнение
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_uspokaivayushhee"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_uspokaivayushhee"
                              value="uspokaivayushhee"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_uspokaivayushhee"
                          >
                            Успокаивающее
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="effect_uhod-az-porami"
                          >
                            <input
                              type="checkbox"
                              name="effect[]"
                              id="effect_uhod-az-porami"
                              value="uhod-az-porami"
                              data-event_label="effect"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="effect_uhod-az-porami"
                          >
                            Уход за порами
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse6"
                    aria-expanded="false"
                    aria-controls="filter_collapse6"
                  >
                    Бренды
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse6"
                  >
                    <ul class="catalog-page__filter__container__checklist">
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_a-g-e-stop-switzerland"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_a-g-e-stop-switzerland"
                              value="a-g-e-stop-switzerland"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_a-g-e-stop-switzerland"
                          >
                            A.G.E.STOP SWITZERLAND
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_acwell"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_acwell"
                              value="acwell"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_acwell"
                          >
                            ACWELL
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_allies-of-skin"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_allies-of-skin"
                              value="allies-of-skin"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_allies-of-skin"
                          >
                            ALLIES OF SKIN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_amos"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_amos"
                              value="amos"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_amos"
                          >
                            AMOS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_amraderm"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_amraderm"
                              value="amraderm"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_amraderm"
                          >
                            AMRADERM
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_apothe"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_apothe"
                              value="apothe"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_apothe"
                          >
                            APOTHE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_banila"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_banila"
                              value="banila"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_banila"
                          >
                            BANILA CO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_bella-aura"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_bella-aura"
                              value="bella-aura"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_bella-aura"
                          >
                            BELLA AURA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_biologi"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_biologi"
                              value="biologi"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_biologi"
                          >
                            BIOLOGI
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_blithe"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_blithe"
                              value="blithe"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_blithe"
                          >
                            BLITHE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_bns-biolab"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_bns-biolab"
                              value="bns-biolab"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_bns-biolab"
                          >
                            BNS BIOLAB
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_botanity"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_botanity"
                              value="botanity"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_botanity"
                          >
                            BOTANITY
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_bueno"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_bueno"
                              value="bueno"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_bueno"
                          >
                            BUENO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_by-wishtrend"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_by-wishtrend"
                              value="by-wishtrend"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_by-wishtrend"
                          >
                            BY WISHTREND
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_byredo"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_byredo"
                              value="byredo"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_byredo"
                          >
                            BYREDO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_celimax"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_celimax"
                              value="celimax"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_celimax"
                          >
                            CELIMAX
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_zhivoj-kollagen"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_zhivoj-kollagen"
                              value="zhivoj-kollagen"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_zhivoj-kollagen"
                          >
                            COLLA GEN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_comfort-zone"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_comfort-zone"
                              value="comfort-zone"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_comfort-zone"
                          >
                            Comfort Zone
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_cosrx"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_cosrx"
                              value="cosrx"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_cosrx"
                          >
                            COSRX
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_cu-skin"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_cu-skin"
                              value="cu-skin"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_cu-skin"
                          >
                            CUSKIN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_d-recipe"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_d-recipe"
                              value="d-recipe"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_d-recipe"
                          >
                            D.RECIPE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_davines"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_davines"
                              value="davines"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_davines"
                          >
                            DAVINES
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_dear-klairs"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_dear-klairs"
                              value="dear-klairs"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_dear-klairs"
                          >
                            DEAR, KLAIRS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_der-a"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_der-a"
                              value="der-a"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_der-a"
                          >
                            Der. A
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_diptyque"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_diptyque"
                              value="diptyque"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_diptyque"
                          >
                            Diptyque
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_dpu"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_dpu"
                              value="dpu"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_dpu"
                          >
                            DPU
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_dr-ceuracle"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_dr-ceuracle"
                              value="dr-ceuracle"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_dr-ceuracle"
                          >
                            DR. CEURACLE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_dr-althea"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_dr-althea"
                              value="dr-althea"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_dr-althea"
                          >
                            DR.ALTHEA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_elizabeta-zefi"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_elizabeta-zefi"
                              value="elizabeta-zefi"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_elizabeta-zefi"
                          >
                            Elizabeta Zefi
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_elmt"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_elmt"
                              value="elmt"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_elmt"
                          >
                            ELMT
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_emma-hardie"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_emma-hardie"
                              value="emma-hardie"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_emma-hardie"
                          >
                            EMMA HARDIE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_etemia"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_etemia"
                              value="etemia"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_etemia"
                          >
                            ETEMIA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_evo"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_evo"
                              value="evo"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_evo"
                          >
                            EVO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_fiona-franchimon"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_fiona-franchimon"
                              value="fiona-franchimon"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_fiona-franchimon"
                          >
                            FIONA FRANCHIMON
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_framar"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_framar"
                              value="framar"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_framar"
                          >
                            Framar
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_frankly"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_frankly"
                              value="frankly"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_frankly"
                          >
                            FRANKLY
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_g-love"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_g-love"
                              value="g-love"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_g-love"
                          >
                            G.LOVE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_geltec"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_geltec"
                              value="geltec"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_geltec"
                          >
                            GELTEK
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_guam"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_guam"
                              value="guam"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_guam"
                          >
                            GUAM
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_health-quartet"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_health-quartet"
                              value="health-quartet"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_health-quartet"
                          >
                            HEALTH QUARTET
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_heimish"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_heimish"
                              value="heimish"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_heimish"
                          >
                            HEIMISH
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_holifrog"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_holifrog"
                              value="holifrog"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_holifrog"
                          >
                            HOLIFROG
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_huxley"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_huxley"
                              value="huxley"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_huxley"
                          >
                            HUXLEY
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_hygger"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_hygger"
                              value="hygger"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_hygger"
                          >
                            HYGGEE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_im-from"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_im-from"
                              value="im-from"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_im-from"
                          >
                            I`M FROM
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_icon-skin"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_icon-skin"
                              value="icon-skin"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_icon-skin"
                          >
                            ICON SKIN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_is-clinical"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_is-clinical"
                              value="is-clinical"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_is-clinical"
                          >
                            Is Clinical
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_jan-marini"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_jan-marini"
                              value="jan-marini"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_jan-marini"
                          >
                            JAN MARINI
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_jayjun"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_jayjun"
                              value="jayjun"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_jayjun"
                          >
                            JAYJUN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_jm-solution"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_jm-solution"
                              value="jm-solution"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_jm-solution"
                          >
                            JM SOLUTION
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_jsderma"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_jsderma"
                              value="jsderma"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_jsderma"
                          >
                            JsDERMA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_juice-to-cleanse"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_juice-to-cleanse"
                              value="juice-to-cleanse"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_juice-to-cleanse"
                          >
                            JUICE TO CLEANSE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_k-secret"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_k-secret"
                              value="k-secret"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_k-secret"
                          >
                            K-SECRET
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_k18"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_k18"
                              value="k18"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_k18"
                          >
                            K18
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_lagom"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_lagom"
                              value="lagom"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_lagom"
                          >
                            LAGOM
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_manyo-factory"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_manyo-factory"
                              value="manyo-factory"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_manyo-factory"
                          >
                            MANYO FACTORY
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_marvis"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_marvis"
                              value="marvis"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_marvis"
                          >
                            MARVIS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_masil"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_masil"
                              value="masil"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_masil"
                          >
                            MASIL
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_medi-peel"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_medi-peel"
                              value="medi-peel"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_medi-peel"
                          >
                            MEDI-PEEL
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_miamitats"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_miamitats"
                              value="miamitats"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_miamitats"
                          >
                            MIAMITATS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_nyce"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_nyce"
                              value="nyce"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_nyce"
                          >
                            NYCE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_olaplex"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_olaplex"
                              value="olaplex"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_olaplex"
                          >
                            OLAPLEX
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_ormonde-jayne"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_ormonde-jayne"
                              value="ormonde-jayne"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_ormonde-jayne"
                          >
                            Ormonde Jayne
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_patch-and-go"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_patch-and-go"
                              value="patch-and-go"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_patch-and-go"
                          >
                            PATCH AND GO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_peter-thomas-roth"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_peter-thomas-roth"
                              value="peter-thomas-roth"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_peter-thomas-roth"
                          >
                            PETER THOMAS ROTH
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_philosophy-by-alex-kontier"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_philosophy-by-alex-kontier"
                              value="philosophy-by-alex-kontier"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_philosophy-by-alex-kontier"
                          >
                            Philosophy By Alex Kontier
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_phyto-c"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_phyto-c"
                              value="phyto-c"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_phyto-c"
                          >
                            PHYTO-C
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_psa"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_psa"
                              value="psa"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_psa"
                          >
                            PSA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_q-a"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_q-a"
                              value="q-a"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_q-a"
                          >
                            Q+A
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_r-a-w-life"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_r-a-w-life"
                              value="r-a-w-life"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_r-a-w-life"
                          >
                            R.A.W. Life
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_r-co"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_r-co"
                              value="r-co"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_r-co"
                          >
                            R+Co
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_re-feel"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_re-feel"
                              value="re-feel"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_re-feel"
                          >
                            Re-feel
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_rejudicare"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_rejudicare"
                              value="rejudicare"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_rejudicare"
                          >
                            REJUDICARE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_rever"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_rever"
                              value="rever"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_rever"
                          >
                            REVER
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_romanovamakeup"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_romanovamakeup"
                              value="romanovamakeup"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_romanovamakeup"
                          >
                            Romanovamakeup
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_rovectin"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_rovectin"
                              value="rovectin"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_rovectin"
                          >
                            ROVECTIN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_sa-alco"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_sa-alco"
                              value="sa-alco"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_sa-alco"
                          >
                            SA.AL&amp;CO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_sachajuan"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_sachajuan"
                              value="sachajuan"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_sachajuan"
                          >
                            SACHAJUAN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_saltrain"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_saltrain"
                              value="saltrain"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_saltrain"
                          >
                            SALTRAIN
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_sioris"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_sioris"
                              value="sioris"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_sioris"
                          >
                            SIORIS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_skin-regimen"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_skin-regimen"
                              value="skin-regimen"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_skin-regimen"
                          >
                            Skin Regimen
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_skinlab"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_skinlab"
                              value="skinlab"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_skinlab"
                          >
                            SKIN&amp;LAB
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_skintellectual-solutions"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_skintellectual-solutions"
                              value="skintellectual-solutions"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_skintellectual-solutions"
                          >
                            SKINTELLECTUAL SOLUTIONS
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_so-natural"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_so-natural"
                              value="so-natural"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_so-natural"
                          >
                            SO NATURAL
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_some-by-mi"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_some-by-mi"
                              value="some-by-mi"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_some-by-mi"
                          >
                            SOME BY MI
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_sunkiller-isehan"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_sunkiller-isehan"
                              value="sunkiller-isehan"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_sunkiller-isehan"
                          >
                            Sunkiller (Isehan)
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_tiam"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_tiam"
                              value="tiam"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_tiam"
                          >
                            TIAM
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_timeless-skin-care"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_timeless-skin-care"
                              value="timeless-skin-care"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_timeless-skin-care"
                          >
                            TIMELESS SKIN CARE
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_timeless-truth-mask"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_timeless-truth-mask"
                              value="timeless-truth-mask"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_timeless-truth-mask"
                          >
                            Timeless Truth Mask
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_tizo"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_tizo"
                              value="tizo"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_tizo"
                          >
                            TIZO
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_tajger"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_tajger"
                              value="tajger"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_tajger"
                          >
                            TАЙGER
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_ubuna"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_ubuna"
                              value="ubuna"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_ubuna"
                          >
                            UBUNA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_usolab"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_usolab"
                              value="usolab"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_usolab"
                          >
                            USOLAB
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_uteki"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_uteki"
                              value="uteki"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_uteki"
                          >
                            UTEKI
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_va"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_va"
                              value="va"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_va"
                          >
                            V&amp;А
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_veronique-gabai"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_veronique-gabai"
                              value="veronique-gabai"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_veronique-gabai"
                          >
                            Veronique Gabai
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_vilhelm-parfumerie"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_vilhelm-parfumerie"
                              value="vilhelm-parfumerie"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_vilhelm-parfumerie"
                          >
                            Vilhelm Parfumerie
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_wellderma"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_wellderma"
                              value="wellderma"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_wellderma"
                          >
                            WELLDERMA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_whamisa"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_whamisa"
                              value="whamisa"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_whamisa"
                          >
                            WHAMISA
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_wish-formula"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_wish-formula"
                              value="wish-formula"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_wish-formula"
                          >
                            Wish Formula
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_paulas-choice"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_paulas-choice"
                              value="paulas-choice"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_paulas-choice"
                          >
                            Бренд, который нельзя называть
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_dtk-farm"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_dtk-farm"
                              value="dtk-farm"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_dtk-farm"
                          >
                            ДТК Фарм
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="brand_ruketo"
                          >
                            <input
                              type="checkbox"
                              name="brand[]"
                              id="brand_ruketo"
                              value="ruketo"
                              data-event_label="brands"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="brand_ruketo"
                          >
                            РУКЕТО
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="catalog-page__filter">
                  <button
                    class="catalog-page__filter__title flex flex-align-c"
                    type="button"
                    data-toggle="collapse"
                    data-target="#filter_collapse7"
                    aria-expanded="false"
                    aria-controls="filter_collapse7"
                  >
                    Тип продукта
                    <span class="is--icon ml-auto">
                      <svg
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M4 9L12 17L20 9"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </span>
                  </button>
                  <div
                    class="catalog-page__filter__container collapse"
                    id="filter_collapse7"
                  >
                    <ul class="catalog-page__filter__container__checklist">
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_aksessuary"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_aksessuary"
                              value="aksessuary"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_aksessuary"
                          >
                            Аксессуары
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_aromaty"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_aromaty"
                              value="aromaty"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_aromaty"
                          >
                            Ароматы
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_aromaty-dlya-doma-i-dushi"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_aromaty-dlya-doma-i-dushi"
                              value="aromaty-dlya-doma-i-dushi"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_aromaty-dlya-doma-i-dushi"
                          >
                            Ароматы для дома и души
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_balzamy-dlya-gub"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_balzamy-dlya-gub"
                              value="balzamy-dlya-gub"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_balzamy-dlya-gub"
                          >
                            Бальзамы для губ
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_byuti-upcycle"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_byuti-upcycle"
                              value="byuti-upcycle"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_byuti-upcycle"
                          >
                            Бьюти Upcycle
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_volosy"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_volosy"
                              value="volosy"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_volosy"
                          >
                            Волосы
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_geli-dlya-dusha"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_geli-dlya-dusha"
                              value="geli-dlya-dusha"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_geli-dlya-dusha"
                          >
                            Гели для душа
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_gigiena-polosti-rta"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_gigiena-polosti-rta"
                              value="gigiena-polosti-rta"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_gigiena-polosti-rta"
                          >
                            Гигиена полости рта
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_gidrofilnoe-maslo-balzam-ochishhayushhaya-voda"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_gidrofilnoe-maslo-balzam-ochishhayushhaya-voda"
                              value="gidrofilnoe-maslo-balzam-ochishhayushhaya-voda"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_gidrofilnoe-maslo-balzam-ochishhayushhaya-voda"
                          >
                            Гидрофильное масло/бальзам/очищающая вода
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_glaza"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_glaza"
                              value="glaza"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_glaza"
                          >
                            Глаза
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_guby"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_guby"
                              value="guby"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_guby"
                          >
                            Губы
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_domashnij-tekstil"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_domashnij-tekstil"
                              value="domashnij-tekstil"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_domashnij-tekstil"
                          >
                            Домашний текстиль
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_konditsioner"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_konditsioner"
                              value="konditsioner"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_konditsioner"
                          >
                            Кондиционер
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_krasota-vnutri"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_krasota-vnutri"
                              value="krasota-vnutri"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_krasota-vnutri"
                          >
                            Красота внутри
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_kremy"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_kremy"
                              value="kremy"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_kremy"
                          >
                            Кремы
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_kremy-dlya-litsa"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_kremy-dlya-litsa"
                              value="kremy-dlya-litsa"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_kremy-dlya-litsa"
                          >
                            Кремы для лица
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_kremy-dlya-ruk"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_kremy-dlya-ruk"
                              value="kremy-dlya-ruk"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_kremy-dlya-ruk"
                          >
                            Кремы для рук
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_kremy-dlya-tela"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_kremy-dlya-tela"
                              value="kremy-dlya-tela"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_kremy-dlya-tela"
                          >
                            Кремы для тела
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_makiyazh"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_makiyazh"
                              value="makiyazh"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_makiyazh"
                          >
                            Макияж
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_maski"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_maski"
                              value="maski"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_maski"
                          >
                            Маски
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_miniatyury-trevel-format"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_miniatyury-trevel-format"
                              value="miniatyury-trevel-format"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_miniatyury-trevel-format"
                          >
                            Миниатюры/трэвел формат
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_nabory"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_nabory"
                              value="nabory"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_nabory"
                          >
                            Наборы
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_nesmyvaemye"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_nesmyvaemye"
                              value="nesmyvaemye"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_nesmyvaemye"
                          >
                            Несмываемые
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_ochishhenie"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_ochishhenie"
                              value="ochishhenie"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_ochishhenie"
                          >
                            Очищение
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_parfyumeriya"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_parfyumeriya"
                              value="parfyumeriya"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_parfyumeriya"
                          >
                            Парфюмерия
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_patchi"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_patchi"
                              value="patchi"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_patchi"
                          >
                            Патчи
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_penki-geli-dlya-umyvaniya"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_penki-geli-dlya-umyvaniya"
                              value="penki-geli-dlya-umyvaniya"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_penki-geli-dlya-umyvaniya"
                          >
                            Пенки/гели для умывания
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_pilingi-pedy-skraby"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_pilingi-pedy-skraby"
                              value="pilingi-pedy-skraby"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_pilingi-pedy-skraby"
                          >
                            Пилинги/пэды/скрабы
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_podarochnye-sertifikaty"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_podarochnye-sertifikaty"
                              value="podarochnye-sertifikaty"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_podarochnye-sertifikaty"
                          >
                            Подарочные сертификаты
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_sanskrin-uf-zashhita"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_sanskrin-uf-zashhita"
                              value="sanskrin-uf-zashhita"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_sanskrin-uf-zashhita"
                          >
                            Санскрин/УФ-защита
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_skraby-dlya-tela"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_skraby-dlya-tela"
                              value="skraby-dlya-tela"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_skraby-dlya-tela"
                          >
                            Скрабы для тела
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_smyvaemye"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_smyvaemye"
                              value="smyvaemye"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_smyvaemye"
                          >
                            Смываемые
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_spetsialnyj-uhod-volosy"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_spetsialnyj-uhod-volosy"
                              value="spetsialnyj-uhod-volosy"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_spetsialnyj-uhod-volosy"
                          >
                            Специальный уход
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_spetsialnyj-uhod"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_spetsialnyj-uhod"
                              value="spetsialnyj-uhod"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_spetsialnyj-uhod"
                          >
                            Специальный уход
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_sredstva-dlya-intimnoj-gigieny"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_sredstva-dlya-intimnoj-gigieny"
                              value="sredstva-dlya-intimnoj-gigieny"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_sredstva-dlya-intimnoj-gigieny"
                          >
                            Средства для интимной гигиены
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_stajling"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_stajling"
                              value="stajling"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_stajling"
                          >
                            Стайлинг
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_syvorotki"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_syvorotki"
                              value="syvorotki"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_syvorotki"
                          >
                            Сыворотки
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_syvorotki-serumy"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_syvorotki-serumy"
                              value="syvorotki-serumy"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_syvorotki-serumy"
                          >
                            Сыворотки/серумы
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_tkanevye"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_tkanevye"
                              value="tkanevye"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_tkanevye"
                          >
                            Тканевые
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_ton-kozhi"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_ton-kozhi"
                              value="ton-kozhi"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_ton-kozhi"
                          >
                            Тон кожи
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_tonery-toniki-misty"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_tonery-toniki-misty"
                              value="tonery-toniki-misty"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_tonery-toniki-misty"
                          >
                            Тонеры/тоники/мисты
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_uhod-za-zonoj-vokrug-glaz"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_uhod-za-zonoj-vokrug-glaz"
                              value="uhod-za-zonoj-vokrug-glaz"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_uhod-za-zonoj-vokrug-glaz"
                          >
                            Уход за зоной вокруг глаз
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_uhod-za-kozhej-golovy"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_uhod-za-kozhej-golovy"
                              value="uhod-za-kozhej-golovy"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_uhod-za-kozhej-golovy"
                          >
                            Уход за кожей головы
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_uhod-za-litsom"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_uhod-za-litsom"
                              value="uhod-za-litsom"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_uhod-za-litsom"
                          >
                            Уход за лицом
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_uhod-za-telom"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_uhod-za-telom"
                              value="uhod-za-telom"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_uhod-za-telom"
                          >
                            Уход за телом
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_shampun"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_shampun"
                              value="shampun"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_shampun"
                          >
                            Шампунь
                          </label>
                        </div>
                      </li>
                      <li style="display: none">
                        <div class="form-elem__checkbox flex flex-align-c">
                          <label
                            class="form-elem__checkbox__input"
                            for="catalogs_filter_enzimnye-kosmeticheskie-pudry"
                          >
                            <input
                              type="checkbox"
                              name="catalogs_filter[]"
                              id="catalogs_filter_enzimnye-kosmeticheskie-pudry"
                              value="enzimnye-kosmeticheskie-pudry"
                              data-event_label="catalogs"
                            />
                            <span
                              class="check-container flex flex-align-c flex-justify-content-c"
                            >
                              <span class="is--check">
                                <svg
                                  width="14"
                                  height="10"
                                  viewbox="0 0 14 10"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M1.66699 5L5.66699 9L12.3337 1"
                                    stroke="#111111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                </svg>
                              </span>
                            </span>
                          </label>
                          <label
                            class="form-elem__checkbox__label"
                            for="catalogs_filter_enzimnye-kosmeticheskie-pudry"
                          >
                            Энзимные/косметические пудры
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="catalog-page__filter__footer">
                  <button type="submit" class="pag_button apply-filter-btn">
                    Применить фильтр
                  </button>
                  <button
                    type="button"
                    class="pag_button is--flat reset-filter-btn"
                  >
                    Очистить фильтр
                  </button>
                </div>
              </form>
            </div>
            <div id="catalogPageMain" class="col-9">
              <div class="row" id="catalogPageMainContainer">
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="/woocommerce/content-single-product/"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="/woocommerce/content-single-product/"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="DEAR, KLAIRS// Т BB-крем универсального оттенка "
                                data-product_cat="Макияж / Кожа"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 catalog-page__card-container">
                  <div class="product-card">
                    <div class="product-card__inner">
                      <a
                        href="#ссылка на товар"
                      >
                        <div class="product-card__image" data-id="285650">
                          <div
                            class="product-card__image__inner"
                            style="
                                background-image: url('<?php bloginfo('template_url');  ?>/assets/images/shop/Illuminating Supple Blemish Cream 40g_product.png');
                                "
                          ></div>
                        </div>
                        <div class="product-card__content">
                          <div
                            class="product-card__content__top flex flex-align-c"
                          >
                            <div class="product-card__content__top__left">
                              <div class="product-card__content__top__price">
                                <span class="is--old">90 р.</span>
                                <span>81 р.</span>
                              </div>
                            </div>
                            <div
                              class="product-card__content__top__right ml-auto flex flex-align-c"
                            >
                              <button
                                id="add_to_cart_285650"
                                data-quantity="1"
                                data-product_id="285650"
                                data-product_sku="АРТ-3914"
                                data-product_price="490"
                                data-product_name="BU// Тушь для ресниц Banila Co Curly Studio All-Day Rise Mascara #02 Curly &amp; Long 5g"
                                data-product_cat="Макияж / Глаза"
                                data-product_brand="BANILA CO"
                                class="add-to-cart-small"
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewbox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M3.97738 9.84C4.0176 9.33881 4.24513 8.87115 4.61465 8.53017C4.98417 8.18918 5.46857 7.9999 5.97138 8H18.0294C18.5322 7.9999 19.0166 8.18918 19.3861 8.53017C19.7556 8.87115 19.9832 9.33881 20.0234 9.84L20.8264 19.84C20.8485 20.1152 20.8133 20.392 20.7232 20.6529C20.6331 20.9139 20.4899 21.1533 20.3027 21.3562C20.1155 21.5592 19.8883 21.7211 19.6354 21.8319C19.3825 21.9427 19.1095 21.9999 18.8334 22H5.16738C4.8913 21.9999 4.61823 21.9427 4.36536 21.8319C4.11249 21.7211 3.88529 21.5592 3.69808 21.3562C3.51086 21.1533 3.36768 20.9139 3.27755 20.6529C3.18742 20.392 3.15229 20.1152 3.17438 19.84L3.97738 9.84V9.84Z"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
                                  <path
                                    d="M16 11V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V11"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  ></path>
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
                                  "#add_to_cart_285650",
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
                            data-href="#ссылка на бренд"
                          >
                          DEAR, KLAIRS
                          </div>
                          <h3 class="product-card__content__title">
                          BB-крем универсального оттенка KLAIRS Illuminating Supple Blemish Cream 40ml
                          </h3>
                        </div>
                        <span class="product-card__labels"> </span>
                      </a>
                      <input
                        type="hidden"
                        name="product_list_name"
                        value="Каталог"
                      />
                      <input
                        type="hidden"
                        name="product_cat"
                        value="Макияж / Лицо"
                      />
                      <input type="hidden" name="product_price" value="81" />
                      <input type="hidden" name="product_id" value="285650" />
                      <input
                        type="hidden"
                        name="product_brand"
                        value="DEAR KLAIRS"
                      />
                    </div>
                  </div>
                </div>

                <div class="row" id="loadMoreContainer">
                  <div
                    class="show-more flex flex-align-c flex-justify-content-c"
                  >
                    <div class="show-more__inner">
                      <button
                        class="button-arrow is--black"
                        data-skin_type=""
                        data-skin_condition=""
                        data-ingredient=""
                        data-effect=""
                        data-brand=""
                        data-catalog=""
                        data-orderby="date"
                        data-sale="1"
                        data-hits="0"
                        data-search=""
                        data-price_min="1"
                        data-price_max="42600"
                        id="load_more_btn"
                      >
                        Показать еще
                      </button>
                    </div>
                  </div>
                  <div class="loader-container">
                    <div class="pag_loader">Loading...</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
</div>
