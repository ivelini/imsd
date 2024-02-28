<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Подключение jQuery -->

    <!-- Подключение Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
<div class="app">
    <div class="wrapper">
        <div class="catalog-hidden-menu catalog-page-hide" id="catalog-menu">
            <div class="catalog-page-panel">
                <div></div>
                <div class="catalog-page-logo">
                    <img src="./assets/img/logo.svg" alt="" />
                </div>
                <div class="catalog-page-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.89202 2.05729C2.60508 1.75857 2.13985 1.75857 1.8529 2.05729C1.56596 2.35602 1.56596 2.84035 1.8529 3.13907L8.2104 9.75755L2.03439 16.1834C1.74736 16.482 1.74736 16.9662 2.03439 17.2648C2.32142 17.5635 2.78679 17.5635 3.07382 17.2648L9.24953 10.8393L15.4214 17.2646C15.7084 17.5633 16.1736 17.5633 16.4605 17.2646C16.7475 16.9659 16.7475 16.4815 16.4605 16.1828L10.289 9.75788L16.6464 3.14326C16.9335 2.84462 16.9335 2.36043 16.6464 2.06179C16.3594 1.76315 15.894 1.76315 15.607 2.06179L9.24982 8.67609L2.89202 2.05729Z"
                            fill="black"
                        />
                    </svg>
                </div>
            </div>
            <div class="search-input catalog-page-seacrh-input">
                <input type="text" placeholder="Поиск по товарам" />
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M13.741 12.5698L9.90857 8.73656C10.5943 7.79931 10.961 6.66679 10.9549 5.50558C10.9486 4.04929 10.368 2.65427 9.33907 1.62346C8.31017 0.592654 6.91608 0.009289 5.45954 5.30082e-05C4.74108 -0.00311958 4.02911 0.13615 3.36482 0.409807C2.70053 0.683464 2.09709 1.08608 1.5894 1.59437C1.08172 2.10266 0.679853 2.70654 0.407054 3.37108C0.134256 4.03563 -0.00406507 4.74765 9.09475e-05 5.46598C0.00617262 6.92304 0.587229 8.31881 1.61695 9.34988C2.64668 10.381 4.04184 10.964 5.49915 10.9722C6.66577 10.9774 7.80277 10.6052 8.74045 9.9112H8.74418L12.5729 13.7415C12.6488 13.8217 12.7401 13.886 12.8413 13.9303C12.9425 13.9747 13.0516 13.9984 13.162 13.9999C13.2725 14.0014 13.3822 13.9808 13.4846 13.9392C13.587 13.8976 13.68 13.8359 13.7581 13.7578C13.8362 13.6796 13.8979 13.5866 13.9394 13.4842C13.9809 13.3818 14.0015 13.2721 13.9999 13.1617C13.9983 13.0512 13.9746 12.9422 13.9301 12.841C13.8857 12.7399 13.8214 12.6487 13.741 12.5728V12.5698ZM5.49542 9.87458C4.3297 9.8679 3.21371 9.40159 2.3899 8.57695C1.56609 7.75231 1.10101 6.63597 1.09572 5.47046C1.09245 4.89578 1.20315 4.32615 1.4214 3.7945C1.63965 3.26285 1.96113 2.77973 2.36726 2.37305C2.77339 1.96637 3.25611 1.6442 3.78752 1.42517C4.31893 1.20614 4.88849 1.09459 5.46328 1.09697C6.62951 1.10307 7.74619 1.56923 8.57051 2.39409C9.39482 3.21895 9.86012 4.33582 9.86522 5.50184C9.86839 6.07646 9.75762 6.64601 9.53932 7.17757C9.32103 7.70913 8.99953 8.19217 8.59341 8.59877C8.18729 9.00537 7.70461 9.32747 7.17325 9.54645C6.64188 9.76544 6.07238 9.87696 5.49766 9.87458H5.49542Z"
                        fill="#EDEDED"
                    />
                </svg>
            </div>
            <div class="catalog-page-link-group">
                <h3 class="link-group-title">Каталог</h3>
                <a href="#" class="link-group-item"
                >Компания
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Новости и акции
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Статьи
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Доставка
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Оплата
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="catalog-page-link-group">
                <h3 class="link-group-title">Компания</h3>
                <a href="#" class="link-group-item">Сервис</a>
                <a href="#" class="link-group-item">Доставка и оплата</a>
                <a href="#" class="link-group-item">Гарантия</a>
                <a href="#" class="link-group-item">Отзывы</a>
                <a href="#" class="link-group-item">Магазины </a>
            </div>
            <div class="catalog-page-footer">
                <p class="catalog-page-num">8 (351) 7000-319</p>
                <button class="catalog-page-btn">Заказать звонок</button>
                <div class="social-links-blk">
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/tg.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/wa.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/vib.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/vk.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/youtube.svg" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="geo-wrapper">
            <div class="geo-window">
                <div class="geo-window-panel">
                    <div class="geo-title">Ваш город</div>
                    <a href="#" class="geo-location-window-exit">
                        <img src="./assets/img/close.svg" />
                    </a>
                </div>
                <div class="geo-location-window-search">
                    <div class="geo-location-window-search-text">Выберите город</div>
                    <!--
                    --><input type="text" class="geo-location-window-search-input" value="" />
                </div>
                <div class="geo-location-window-list">
                    <div class="geo-location-window-list-item">
                        <a href="#" class="geo-location-window-list-item-link" data-id="1132" data-parse-value="Челябинск"
                        ><span>Челябинская обл</span></a
                        >
                    </div>
                    <div class="geo-location-window-list-item">
                        <a href="#" class="geo-location-window-list-item-link" data-id="994" data-parse-value="Екатеринбург"
                        ><span>Свердловская обл</span></a
                        >
                    </div>
                    <div class="geo-location-window-list-item">
                        <a href="#" class="geo-location-window-list-item-link" data-id="594" data-parse-value="Курган"
                        ><span>Курганская обл</span></a
                        >
                    </div>
                </div>
                <div class="geo-location-window__location-list">
                    <div
                        class="geo-location-window__city-list geo-location-window__city-list-1"
                        id="selected-list"
                        data-cityid="1132"
                        data-regionid="1131"
                    >
                        <div class="geo-location-window__city"><span class="geo-location-window__link" title="Аша" data-id="1150">Аша</span></div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Бакал" data-id="1155">Бакал</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхнеуральск" data-id="1157">Верхнеуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхний Уфалей" data-id="1133">Верхний Уфалей</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Еманжелинск" data-id="1160">Еманжелинск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Златоуст" data-id="1134">Златоуст</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Карабаш" data-id="1135">Карабаш</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Карталы" data-id="1151">Карталы</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Касли" data-id="1152">Касли</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Катав-Ивановск" data-id="1154">Катав-Ивановск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Копейск" data-id="1136">Копейск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Коркино" data-id="1161">Коркино</span>
                        </div>
                        <div class="geo-location-window__city"><span class="geo-location-window__link" title="Куса" data-id="1158">Куса</span></div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Кыштым" data-id="1137">Кыштым</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Магнитогорск" data-id="1138">Магнитогорск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Миасс" data-id="1139">Миасс</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Миньяр" data-id="1148">Миньяр</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нязепетровск" data-id="1159">Нязепетровск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Озерск" data-id="1140">Озерск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Пласт" data-id="1162">Пласт</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Сатка" data-id="1156">Сатка</span>
                        </div>
                        <div class="geo-location-window__city"><span class="geo-location-window__link" title="Сим" data-id="1149">Сим</span></div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Снежинск" data-id="1141">Снежинск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Трехгорный" data-id="1142">Трехгорный</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Трехгорный-1" data-id="1145">Трехгорный-1</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Троицк" data-id="1147">Троицк</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Усть-Катав" data-id="1143">Усть-Катав</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Чебаркуль" data-id="1146">Чебаркуль</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link geo-location-window__link_active" title="Челябинск" data-id="1132">Челябинск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Южноуральск" data-id="1144">Южноуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Юрюзань" data-id="1153">Юрюзань</span>
                        </div>
                    </div>
                    <div class="geo-location-window__city-list geo-location-window__city-list-2" data-cityid="994" data-regionid="993">
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Алапаевск" data-id="1015">Алапаевск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Арамиль" data-id="1038">Арамиль</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Артемовский" data-id="1026">Артемовский</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Асбест" data-id="995">Асбест</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Березовский" data-id="996">Березовский</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Богданович" data-id="1027">Богданович</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхний Тагил" data-id="1021">Верхний Тагил</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхняя Пышма" data-id="997">Верхняя Пышма</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхняя Салда" data-id="1028">Верхняя Салда</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхняя Тура" data-id="1024">Верхняя Тура</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Верхотурье" data-id="1029">Верхотурье</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Волчанск" data-id="1023">Волчанск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Дегтярск" data-id="1025">Дегтярск</span>
                        </div>
                        <div class="geo-location-window__city">
                  <span class="geo-location-window__link geo-location-window__link_active" title="Екатеринбург" data-id="994"
                  >Екатеринбург</span
                  >
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Заречный" data-id="998">Заречный</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Ивдель" data-id="999">Ивдель</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Ирбит" data-id="1017">Ирбит</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Каменск-Уральский" data-id="1013">Каменск-Уральский</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Камышлов" data-id="1018">Камышлов</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Карпинск" data-id="1000">Карпинск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Качканар" data-id="1001">Качканар</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Кировград" data-id="1002">Кировград</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Краснотурьинск" data-id="1003">Краснотурьинск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Красноуральск" data-id="1004">Красноуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Красноуфимск" data-id="1019">Красноуфимск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Кушва" data-id="1005">Кушва</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Лесной" data-id="1006">Лесной</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Михайловск" data-id="1033">Михайловск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Невьянск" data-id="1030">Невьянск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нижние Серги" data-id="1032">Нижние Серги</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нижние Серги-3" data-id="1031">Нижние Серги-3</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нижний Тагил" data-id="1014">Нижний Тагил</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нижняя Салда" data-id="1016">Нижняя Салда</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Нижняя Тура" data-id="1007">Нижняя Тура</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Новая Ляля" data-id="1034">Новая Ляля</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Новоуральск" data-id="1008">Новоуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Первоуральск" data-id="1009">Первоуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Полевской" data-id="1010">Полевской</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Ревда" data-id="1011">Ревда</span>
                        </div>
                        <div class="geo-location-window__city"><span class="geo-location-window__link" title="Реж" data-id="1035">Реж</span></div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Североуральск" data-id="1012">Североуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Серов" data-id="1020">Серов</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Среднеуральск" data-id="1022">Среднеуральск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Сухой Лог" data-id="1036">Сухой Лог</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Сысерть" data-id="1037">Сысерть</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Тавда" data-id="1039">Тавда</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Талица" data-id="1040">Талица</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Туринск" data-id="1041">Туринск</span>
                        </div>
                    </div>
                    <div class="geo-location-window__city-list geo-location-window__city-list-3" data-cityid="594" data-regionid="593">
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Далматово" data-id="596">Далматово</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Катайск" data-id="597">Катайск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link geo-location-window__link_active" title="Курган" data-id="594">Курган</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Куртамыш" data-id="598">Куртамыш</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Макушино" data-id="599">Макушино</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Петухово" data-id="600">Петухово</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Шадринск" data-id="595">Шадринск</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Шумиха" data-id="601">Шумиха</span>
                        </div>
                        <div class="geo-location-window__city">
                            <span class="geo-location-window__link" title="Щучье" data-id="602">Щучье</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-hidden-menu catalog-page-hide">
            <div class="catalog-page-panel">
                <div></div>
                <div class="catalog-page-logo">
                    <img src="./assets/img/logo.svg" alt="" />
                </div>
                <div class="catalog-page-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2.89202 2.05729C2.60508 1.75857 2.13985 1.75857 1.8529 2.05729C1.56596 2.35602 1.56596 2.84035 1.8529 3.13907L8.2104 9.75755L2.03439 16.1834C1.74736 16.482 1.74736 16.9662 2.03439 17.2648C2.32142 17.5635 2.78679 17.5635 3.07382 17.2648L9.24953 10.8393L15.4214 17.2646C15.7084 17.5633 16.1736 17.5633 16.4605 17.2646C16.7475 16.9659 16.7475 16.4815 16.4605 16.1828L10.289 9.75788L16.6464 3.14326C16.9335 2.84462 16.9335 2.36043 16.6464 2.06179C16.3594 1.76315 15.894 1.76315 15.607 2.06179L9.24982 8.67609L2.89202 2.05729Z"
                            fill="black"
                        />
                    </svg>
                </div>
            </div>
            <div class="search-input catalog-page-seacrh-input">
                <input type="text" placeholder="Поиск по товарам" />
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M13.741 12.5698L9.90857 8.73656C10.5943 7.79931 10.961 6.66679 10.9549 5.50558C10.9486 4.04929 10.368 2.65427 9.33907 1.62346C8.31017 0.592654 6.91608 0.009289 5.45954 5.30082e-05C4.74108 -0.00311958 4.02911 0.13615 3.36482 0.409807C2.70053 0.683464 2.09709 1.08608 1.5894 1.59437C1.08172 2.10266 0.679853 2.70654 0.407054 3.37108C0.134256 4.03563 -0.00406507 4.74765 9.09475e-05 5.46598C0.00617262 6.92304 0.587229 8.31881 1.61695 9.34988C2.64668 10.381 4.04184 10.964 5.49915 10.9722C6.66577 10.9774 7.80277 10.6052 8.74045 9.9112H8.74418L12.5729 13.7415C12.6488 13.8217 12.7401 13.886 12.8413 13.9303C12.9425 13.9747 13.0516 13.9984 13.162 13.9999C13.2725 14.0014 13.3822 13.9808 13.4846 13.9392C13.587 13.8976 13.68 13.8359 13.7581 13.7578C13.8362 13.6796 13.8979 13.5866 13.9394 13.4842C13.9809 13.3818 14.0015 13.2721 13.9999 13.1617C13.9983 13.0512 13.9746 12.9422 13.9301 12.841C13.8857 12.7399 13.8214 12.6487 13.741 12.5728V12.5698ZM5.49542 9.87458C4.3297 9.8679 3.21371 9.40159 2.3899 8.57695C1.56609 7.75231 1.10101 6.63597 1.09572 5.47046C1.09245 4.89578 1.20315 4.32615 1.4214 3.7945C1.63965 3.26285 1.96113 2.77973 2.36726 2.37305C2.77339 1.96637 3.25611 1.6442 3.78752 1.42517C4.31893 1.20614 4.88849 1.09459 5.46328 1.09697C6.62951 1.10307 7.74619 1.56923 8.57051 2.39409C9.39482 3.21895 9.86012 4.33582 9.86522 5.50184C9.86839 6.07646 9.75762 6.64601 9.53932 7.17757C9.32103 7.70913 8.99953 8.19217 8.59341 8.59877C8.18729 9.00537 7.70461 9.32747 7.17325 9.54645C6.64188 9.76544 6.07238 9.87696 5.49766 9.87458H5.49542Z"
                        fill="#EDEDED"
                    />
                </svg>
            </div>
            <div class="catalog-page-link-group">
                <h3 class="link-group-title">Каталог</h3>
                <a href="#" class="link-group-item"
                >Компания
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Новости и акции
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Статьи
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Доставка
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#" class="link-group-item"
                >Оплата
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                        <path d="M1 1L5 5L1 9" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="catalog-page-link-group">
                <h3 class="link-group-title">Компания</h3>
                <a href="#" class="link-group-item">Сервис</a>
                <a href="#" class="link-group-item">Доставка и оплата</a>
                <a href="#" class="link-group-item">Гарантия</a>
                <a href="#" class="link-group-item">Отзывы</a>
                <a href="#" class="link-group-item">Магазины </a>
            </div>
            <div class="catalog-page-footer">
                <p class="catalog-page-num">8 (351) 7000-319</p>
                <button class="catalog-page-btn">Заказать звонок</button>
                <div class="social-links-blk">
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/tg.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/wa.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/vib.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/vk.svg" alt="" />
                    </a>
                    <a href="#" class="social-links-item">
                        <img src="./assets/img/youtube.svg" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <header class="container">
            <div class="header-container">
                <div class="header-location-block">
                    <p class="header-location-block-main">
                        <span class="choice-city-h">Ваш город:</span>
                        <a href="#">
                            <svg class="show-on-sm" xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                <path
                                    d="M1.61098 1.53151C2.64242 0.550899 4.04136 0 5.50004 0C6.95872 0 8.35766 0.550899 9.3891 1.53151C10.4205 2.51211 11 3.8421 11 5.22889C11 6.61568 10.4205 7.94566 9.3891 8.92627L8.63933 9.63128C8.08664 10.1465 7.36972 10.8095 6.48794 11.6202C6.22292 11.8638 5.86869 12 5.50004 12C5.13139 12 4.77716 11.8638 4.51214 11.6202L2.30706 9.58084C2.02977 9.32201 1.79795 9.10402 1.61098 8.92627C1.10024 8.44074 0.695096 7.86431 0.418682 7.22991C0.142269 6.59551 0 5.91556 0 5.22889C0 4.54222 0.142269 3.86226 0.418682 3.22787C0.695096 2.59347 1.10024 2.01704 1.61098 1.53151ZM8.71892 2.16805C7.86505 1.35643 6.70703 0.900527 5.49959 0.900639C4.29216 0.900752 3.13423 1.35687 2.28053 2.16865C1.42683 2.98044 0.947293 4.08139 0.947411 5.22931C0.947529 6.37724 1.42729 7.4781 2.28116 8.28972L3.21979 9.17128C3.86816 9.77356 4.51834 10.3741 5.17032 10.9728C5.25867 11.0541 5.37679 11.0995 5.49972 11.0995C5.62266 11.0995 5.74078 11.0541 5.82913 10.9728L7.97294 8.99113C8.26982 8.71429 8.51805 8.48069 8.71829 8.28972C9.57196 7.47809 10.0515 6.37729 10.0515 5.22949C10.0515 4.08169 9.57196 2.98089 8.71829 2.16926L8.71892 2.16805ZM5.50004 3.59188C5.74905 3.59188 5.99563 3.63851 6.22569 3.72911C6.45575 3.8197 6.66478 3.95249 6.84086 4.11989C7.01694 4.28729 7.15661 4.48603 7.25191 4.70475C7.3472 4.92347 7.39625 5.15789 7.39625 5.39463C7.39625 5.63137 7.3472 5.8658 7.25191 6.08452C7.15661 6.30324 7.01694 6.50197 6.84086 6.66937C6.66478 6.83677 6.45575 6.96956 6.22569 7.06016C5.99563 7.15075 5.74905 7.19738 5.50004 7.19738C5.00321 7.18876 4.52979 6.99507 4.18165 6.65798C3.8335 6.3209 3.63844 5.86735 3.63844 5.39493C3.63844 4.92251 3.8335 4.46897 4.18165 4.13188C4.52979 3.79479 5.00321 3.6005 5.50004 3.59188ZM5.50004 4.49266C5.37545 4.49266 5.25208 4.51599 5.13697 4.56131C5.02187 4.60664 4.91728 4.67308 4.82918 4.75684C4.74108 4.84059 4.6712 4.94003 4.62352 5.04946C4.57584 5.15889 4.5513 5.27618 4.5513 5.39463C4.5513 5.51308 4.57584 5.63037 4.62352 5.7398C4.6712 5.84924 4.74108 5.94867 4.82918 6.03243C4.91728 6.11618 5.02187 6.18262 5.13697 6.22795C5.25208 6.27328 5.37545 6.29661 5.50004 6.29661C5.75158 6.29661 5.99281 6.20161 6.17067 6.03251C6.34854 5.86342 6.44846 5.63407 6.44846 5.39493C6.44846 5.15579 6.34854 4.92645 6.17067 4.75735C5.99281 4.58825 5.75158 4.49266 5.50004 4.49266Z"
                                    fill="#DD062A"
                                />
                            </svg>
                            <span class="city-in-header">Челябинск</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                <path d="M8 1L4.5 5L1 0.999999" stroke="#DD062A" stroke-linecap="round" />
                            </svg>
                        </a>
                    </p>
                    <p class="header-number">+7 (351) 70-00-319</p>
                </div>
                <div class="navigation-block">
                    <ul>
                        <li><a href="#">Отзывы о нас</a></li>
                        <li><a href="#">Новости и акции</a></li>
                        <li><a href="#">Статьи</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Возврат</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>

            <!-- Дополнительное меню -->
            <div class="additional-menu">
                <div class="gr1">
                    <div id="hide-show-catalog">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
                            <path
                                d="M6.56818 3.36842H18.5M1 9.68421H18.5M1 16H18.5M1 5.73684L3.38636 3.36842L1 1"
                                stroke="#303030"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                    <div class="logo">
                        <img src="./assets/img/logo.svg" alt="" />
                    </div>
                    <div class="catalog-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path
                                d="M0.5 0.666667C0.5 0.489856 0.579018 0.320286 0.71967 0.195262C0.860322 0.0702379 1.05109 0 1.25 0H14.75C14.9489 0 15.1397 0.0702379 15.2803 0.195262C15.421 0.320286 15.5 0.489856 15.5 0.666667C15.5 0.843478 15.421 1.01305 15.2803 1.13807C15.1397 1.2631 14.9489 1.33333 14.75 1.33333H1.25C1.05109 1.33333 0.860322 1.2631 0.71967 1.13807C0.579018 1.01305 0.5 0.843478 0.5 0.666667ZM1.25 6.66667H14.75C14.9489 6.66667 15.1397 6.59643 15.2803 6.4714C15.421 6.34638 15.5 6.17681 15.5 6C15.5 5.82319 15.421 5.65362 15.2803 5.5286C15.1397 5.40357 14.9489 5.33333 14.75 5.33333H1.25C1.05109 5.33333 0.860322 5.40357 0.71967 5.5286C0.579018 5.65362 0.5 5.82319 0.5 6C0.5 6.17681 0.579018 6.34638 0.71967 6.4714C0.860322 6.59643 1.05109 6.66667 1.25 6.66667ZM1.25 12H14.75C14.9489 12 15.1397 11.9298 15.2803 11.8047C15.421 11.6797 15.5 11.5101 15.5 11.3333C15.5 11.1565 15.421 10.987 15.2803 10.8619C15.1397 10.7369 14.9489 10.6667 14.75 10.6667H1.25C1.05109 10.6667 0.860322 10.7369 0.71967 10.8619C0.579018 10.987 0.5 11.1565 0.5 11.3333C0.5 11.5101 0.579018 11.6797 0.71967 11.8047C0.860322 11.9298 1.05109 12 1.25 12Z"
                                fill="#DD062A"
                            />
                        </svg>
                        <a href="#" id="get-catalog">Каталог</a>
                    </div>
                </div>
                <div class="gr2">
                    <div class="search-input">
                        <input type="text" placeholder="Поиск по товарам" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M13.741 12.5698L9.90857 8.73656C10.5943 7.79931 10.961 6.66679 10.9549 5.50558C10.9486 4.04929 10.368 2.65427 9.33907 1.62346C8.31017 0.592654 6.91608 0.009289 5.45954 5.30082e-05C4.74108 -0.00311958 4.02911 0.13615 3.36482 0.409807C2.70053 0.683464 2.09709 1.08608 1.5894 1.59437C1.08172 2.10266 0.679853 2.70654 0.407054 3.37108C0.134256 4.03563 -0.00406507 4.74765 9.09475e-05 5.46598C0.00617262 6.92304 0.587229 8.31881 1.61695 9.34988C2.64668 10.381 4.04184 10.964 5.49915 10.9722C6.66577 10.9774 7.80277 10.6052 8.74045 9.9112H8.74418L12.5729 13.7415C12.6488 13.8217 12.7401 13.886 12.8413 13.9303C12.9425 13.9747 13.0516 13.9984 13.162 13.9999C13.2725 14.0014 13.3822 13.9808 13.4846 13.9392C13.587 13.8976 13.68 13.8359 13.7581 13.7578C13.8362 13.6796 13.8979 13.5866 13.9394 13.4842C13.9809 13.3818 14.0015 13.2721 13.9999 13.1617C13.9983 13.0512 13.9746 12.9422 13.9301 12.841C13.8857 12.7399 13.8214 12.6487 13.741 12.5728V12.5698ZM5.49542 9.87458C4.3297 9.8679 3.21371 9.40159 2.3899 8.57695C1.56609 7.75231 1.10101 6.63597 1.09572 5.47046C1.09245 4.89578 1.20315 4.32615 1.4214 3.7945C1.63965 3.26285 1.96113 2.77973 2.36726 2.37305C2.77339 1.96637 3.25611 1.6442 3.78752 1.42517C4.31893 1.20614 4.88849 1.09459 5.46328 1.09697C6.62951 1.10307 7.74619 1.56923 8.57051 2.39409C9.39482 3.21895 9.86012 4.33582 9.86522 5.50184C9.86839 6.07646 9.75762 6.64601 9.53932 7.17757C9.32103 7.70913 8.99953 8.19217 8.59341 8.59877C8.18729 9.00537 7.70461 9.32747 7.17325 9.54645C6.64188 9.76544 6.07238 9.87696 5.49766 9.87458H5.49542Z"
                                fill="#EDEDED"
                            />
                        </svg>
                    </div>
                    <div class="user-panel">
                        <div class="status-order header-icon-and-btn" id="order-status">
                            <img src="./assets/img/note.svg" alt="" />
                            <p class="header-icon-and-btn-text hide-on-mobile">Статус заказа</p>
                            <p class="header-icon-and-btn-text show-on-mobile">Мой заказ</p>
                        </div>
                        <div class="login header-icon-and-btn" id="header-login">
                            <img src="./assets/img/login.svg" alt="" />
                            <p class="header-icon-and-btn-text">Войти</p>
                        </div>
                        <div class="cart header-icon-and-btn" id="busket">
                            <img src="./assets/img/busket.svg" alt="" />
                            <p class="header-icon-and-btn-text">Корзина</p>
                            <span id="count-in-busket">2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-query-blk">
                <p class="search-query">Главная / Каталог шин / Viatti / Viatti V-130 Strada Asimmetrico 185/60 R15 84H</p>
            </div>
        </header>
        <div class="inner-wrapper">
            <div class="container main-block">
                <section class="filter-block">
                    <div class="container filter-block-menu">
                        <div class="filter-item for-wheels">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 38 24" fill="none">
                                <path
                                    d="M15.8328 23.999C15.4584 23.9954 15.0936 23.8808 14.7847 23.6698C12.6553 24.1824 10.4249 24.0951 8.34237 23.4175C8.33237 23.4126 8.32437 23.4177 8.31237 23.4127C8.30037 23.4077 8.29337 23.3996 8.28137 23.3956C7.12599 23.0149 6.03545 22.461 5.04719 21.753C5.01581 21.7409 4.98567 21.726 4.95719 21.7082C4.93428 21.687 4.9132 21.6639 4.89418 21.6393C3.92566 20.9249 3.06951 20.0704 2.35404 19.1039C2.33604 19.084 2.31104 19.0759 2.29504 19.054C2.28241 19.0302 2.27139 19.0055 2.26204 18.9802C1.54902 17.9933 0.991231 16.9036 0.607947 15.7487C0.601947 15.7348 0.589947 15.7168 0.585947 15.7078C0.584731 15.7002 0.584731 15.6925 0.585947 15.6849C-0.195315 13.2898 -0.195315 10.7092 0.585947 8.31413C0.585947 8.30615 0.585947 8.30024 0.585947 8.29027C0.585947 8.28029 0.598946 8.27131 0.602947 8.25934C0.987251 7.10089 1.54673 6.00779 2.26204 5.01785C2.27211 4.99269 2.28346 4.96808 2.29604 4.94407C2.31715 4.92151 2.33988 4.90052 2.36404 4.88125C3.078 3.91992 3.931 3.06951 4.89518 2.35784C4.9142 2.33318 4.93528 2.31006 4.95819 2.28893C4.982 2.27586 5.00673 2.26459 5.03219 2.25509C6.02488 1.5421 7.1209 0.984494 8.28237 0.601469C8.29437 0.601469 8.30537 0.584424 8.31337 0.584424H8.33737C10.7385 -0.194808 13.3256 -0.194808 15.7268 0.584424C15.7358 0.584424 15.7398 0.584424 15.7508 0.584424C15.7618 0.584424 15.7698 0.597479 15.7818 0.601469C16.9433 0.984494 18.0393 1.5421 19.032 2.25509C19.0574 2.26459 19.0821 2.27586 19.106 2.28893C19.1286 2.31029 19.1497 2.33339 19.169 2.35784C19.749 2.7852 20.2896 3.26364 20.7841 3.7872H36.0999C36.6038 3.7872 37.0871 3.98675 37.4435 4.34214C37.7998 4.69752 38 5.17953 38 5.68212V9.47222C37.9983 9.88768 37.8598 10.2911 37.6057 10.6203C37.3517 10.9496 36.9962 11.1863 36.5939 11.2943C36.6848 11.5181 36.732 11.7571 36.7329 11.9985V15.7886C36.7321 16.0304 36.6849 16.2698 36.5939 16.4938C36.996 16.6018 37.3514 16.8383 37.6054 17.1674C37.8595 17.4964 37.9981 17.8997 38 18.315V22.1051C38 22.6077 37.7998 23.0897 37.4435 23.4451C37.0871 23.8004 36.6038 24 36.0999 24L15.8328 23.999ZM34.6478 17.8681C34.7073 17.9269 34.7546 17.9966 34.7868 18.0737C34.819 18.1507 34.8356 18.2334 34.8356 18.3169C34.8356 18.4004 34.819 18.4831 34.7868 18.5602C34.7546 18.6372 34.7073 18.707 34.6478 18.7657L33.8298 19.5817L34.6478 20.3984C34.7073 20.4571 34.7546 20.5271 34.7868 20.6041C34.819 20.6812 34.8356 20.7639 34.8356 20.8474C34.8356 20.9309 34.819 21.0134 34.7868 21.0904C34.7546 21.1674 34.7073 21.2374 34.6478 21.2962L33.8298 22.1131L34.4628 22.7452H36.0999C36.1832 22.7454 36.2657 22.7292 36.3427 22.6975C36.4197 22.6658 36.4896 22.6192 36.5485 22.5604C36.6074 22.5017 36.6541 22.4319 36.6859 22.3551C36.7178 22.2784 36.7341 22.1962 36.7339 22.1131V18.323C36.7339 18.1553 36.6671 17.9943 36.5482 17.8757C36.4293 17.7571 36.2681 17.6906 36.0999 17.6906H34.4618L34.6478 17.8681ZM30.8476 17.8681C30.9071 17.9269 30.9544 17.9966 30.9866 18.0737C31.0188 18.1507 31.0354 18.2334 31.0354 18.3169C31.0354 18.4004 31.0188 18.4831 30.9866 18.5602C30.9544 18.6372 30.9071 18.707 30.8476 18.7657L30.0286 19.5817L30.8476 20.3984C30.9071 20.4571 30.9544 20.5271 30.9866 20.6041C31.0188 20.6812 31.0354 20.7639 31.0354 20.8474C31.0354 20.9309 31.0188 21.0134 30.9866 21.0904C30.9544 21.1674 30.9071 21.2374 30.8476 21.2962L30.0286 22.1131L30.6626 22.7452H32.6717L32.4867 22.5599C32.4272 22.5012 32.38 22.4312 32.3477 22.3542C32.3155 22.2771 32.2989 22.1944 32.2989 22.1109C32.2989 22.0274 32.3155 21.9449 32.3477 21.8679C32.38 21.7909 32.4272 21.7209 32.4867 21.6621L33.3057 20.8452L32.4867 20.0285C32.4272 19.9698 32.38 19.8998 32.3477 19.8227C32.3155 19.7457 32.2989 19.6632 32.2989 19.5797C32.2989 19.4962 32.3155 19.4135 32.3477 19.3365C32.38 19.2594 32.4272 19.1894 32.4867 19.1307L33.3057 18.314L32.6717 17.6816H30.6616L30.8476 17.8681ZM27.0474 17.8681C27.1069 17.9269 27.1541 17.9966 27.1864 18.0737C27.2186 18.1507 27.2352 18.2334 27.2352 18.3169C27.2352 18.4004 27.2186 18.4831 27.1864 18.5602C27.1541 18.6372 27.1069 18.707 27.0474 18.7657L26.2284 19.5817L27.0474 20.3984C27.1069 20.4571 27.1541 20.5271 27.1864 20.6041C27.2186 20.6812 27.2352 20.7639 27.2352 20.8474C27.2352 20.9309 27.2186 21.0134 27.1864 21.0904C27.1541 21.1674 27.1069 21.2374 27.0474 21.2962L26.2284 22.1131L26.8624 22.7452H28.8715L28.6865 22.5599C28.627 22.5012 28.5797 22.4312 28.5475 22.3542C28.5153 22.2771 28.4987 22.1944 28.4987 22.1109C28.4987 22.0274 28.5153 21.9449 28.5475 21.8679C28.5797 21.7909 28.627 21.7209 28.6865 21.6621L29.5055 20.8452L28.6865 20.0285C28.627 19.9698 28.5797 19.8998 28.5475 19.8227C28.5153 19.7457 28.4987 19.6632 28.4987 19.5797C28.4987 19.4962 28.5153 19.4135 28.5475 19.3365C28.5797 19.2594 28.627 19.1894 28.6865 19.1307L29.5055 18.314L28.8715 17.6816H26.8614L27.0474 17.8681ZM23.2472 17.8681C23.3066 17.9269 23.3537 17.9969 23.3859 18.0739C23.418 18.1509 23.4346 18.2335 23.4346 18.3169C23.4346 18.4004 23.418 18.4829 23.3859 18.5599C23.3537 18.637 23.3066 18.7069 23.2472 18.7657L22.4281 19.5817L23.2472 20.3984C23.3066 20.4572 23.3537 20.5271 23.3859 20.6041C23.418 20.6812 23.4346 20.7639 23.4346 20.8474C23.4346 20.9308 23.418 21.0134 23.3859 21.0904C23.3537 21.1674 23.3066 21.2374 23.2472 21.2962L22.4281 22.1131L23.0622 22.7452H25.0713L24.8863 22.5599C24.8268 22.5012 24.7795 22.4312 24.7473 22.3542C24.7151 22.2771 24.6985 22.1944 24.6985 22.1109C24.6985 22.0274 24.7151 21.9449 24.7473 21.8679C24.7795 21.7909 24.8268 21.7209 24.8863 21.6621L25.7043 20.8452L24.8863 20.0285C24.8268 19.9698 24.7795 19.8998 24.7473 19.8227C24.7151 19.7457 24.6985 19.6632 24.6985 19.5797C24.6985 19.4962 24.7151 19.4135 24.7473 19.3365C24.7795 19.2594 24.8268 19.1894 24.8863 19.1307L25.7043 18.314L25.0713 17.6816H23.0622L23.2472 17.8681ZM19.17 21.6383C19.1504 21.6625 19.1294 21.6854 19.107 21.7069C19.0785 21.7248 19.0483 21.74 19.017 21.752C18.8729 21.8517 18.7279 21.9575 18.5789 22.0513L19.261 22.7323H21.2711L21.0851 22.5468C21.0257 22.488 20.9786 22.4181 20.9464 22.341C20.9142 22.264 20.8977 22.1815 20.8977 22.098C20.8977 22.0146 20.9142 21.932 20.9464 21.855C20.9786 21.778 21.0257 21.708 21.0851 21.6492L21.9041 20.8323L21.0861 20.0156C21.065 19.9893 21.0463 19.9613 21.0301 19.9318C20.4714 20.565 19.848 21.1381 19.17 21.6422V21.6383ZM17.3699 22.7353H17.4699L17.4389 22.7043L17.3699 22.7353ZM12.6616 22.1031V22.7014C13.3662 22.6602 14.065 22.5496 14.7477 22.3712L14.5617 21.8029C14.5197 21.6509 14.5362 21.4887 14.608 21.3483C14.6798 21.2078 14.8017 21.0992 14.9497 21.0439C15.1069 20.9851 15.281 20.9908 15.4339 21.06C15.5867 21.1292 15.7057 21.2561 15.7648 21.4128L15.9518 21.9862C16.6074 21.7296 17.2361 21.4092 17.8289 21.0298L17.4739 20.543C17.3924 20.4139 17.3606 20.2598 17.3843 20.1091C17.4081 19.9584 17.4857 19.8212 17.6029 19.7231C17.6665 19.6695 17.7401 19.629 17.8195 19.6038C17.8988 19.5786 17.9824 19.5694 18.0654 19.5766C18.1484 19.5837 18.2292 19.6071 18.3031 19.6455C18.3769 19.6838 18.4425 19.7364 18.4959 19.8001L18.8529 20.2917C19.3979 19.8456 19.8977 19.3472 20.345 18.8037L19.852 18.4477C19.7846 18.3989 19.7276 18.3373 19.6841 18.2665C19.6406 18.1958 19.6115 18.1172 19.5985 18.0352C19.5855 17.9532 19.5888 17.8695 19.6083 17.7888C19.6278 17.7081 19.663 17.6321 19.712 17.565C19.7608 17.4977 19.8224 17.4407 19.8933 17.3972C19.9642 17.3537 20.0431 17.3246 20.1253 17.3115C20.2075 17.2984 20.2915 17.3017 20.3724 17.321C20.4534 17.3404 20.5297 17.3754 20.597 17.4242L21.0851 17.7773C21.4673 17.1871 21.7903 16.5607 22.0491 15.9072L21.4741 15.7178C21.3261 15.6624 21.2042 15.5539 21.1324 15.4134C21.0606 15.273 21.044 15.1108 21.0861 14.9588C21.1082 14.8788 21.1458 14.8039 21.197 14.7384C21.2481 14.673 21.3116 14.6182 21.384 14.5772C21.4563 14.5363 21.5361 14.51 21.6186 14.4998C21.7012 14.4896 21.7849 14.4957 21.8651 14.5178L22.4351 14.7034C22.6127 14.0236 22.7225 13.328 22.7632 12.6268H22.1631C21.995 12.6268 21.8337 12.5603 21.7148 12.4417C21.5959 12.3231 21.5291 12.1624 21.5291 11.9947C21.529 11.9116 21.5453 11.8291 21.5771 11.7524C21.6089 11.6756 21.6556 11.6058 21.7145 11.5471C21.7734 11.4884 21.8434 11.4417 21.9203 11.41C21.9973 11.3783 22.0798 11.3621 22.1631 11.3623H22.7632C22.7219 10.6602 22.611 9.964 22.4321 9.28375L21.8621 9.4693C21.7975 9.49021 21.73 9.50041 21.6621 9.49998C21.5286 9.49945 21.3986 9.45687 21.2908 9.37823C21.1831 9.29959 21.103 9.18894 21.0621 9.06217C21.0362 8.983 21.0263 8.89972 21.0329 8.81672C21.0394 8.73371 21.0624 8.65271 21.1004 8.57857C21.1384 8.50444 21.1907 8.43843 21.2543 8.3845C21.3179 8.33058 21.3916 8.28991 21.4711 8.26446L22.0461 8.07793C21.7894 7.42395 21.4685 6.79668 21.0881 6.20565L20.6 6.55873C20.4705 6.64045 20.3157 6.67249 20.1643 6.64882C20.0129 6.62516 19.8752 6.54748 19.777 6.43016C19.7235 6.36671 19.683 6.29347 19.6579 6.21442C19.6328 6.13536 19.6236 6.05207 19.6307 5.96946C19.6379 5.88684 19.6613 5.80637 19.6996 5.73277C19.7379 5.65918 19.7904 5.59377 19.854 5.54041L20.347 5.18343C19.8995 4.64038 19.4002 4.14207 18.8559 3.6954L18.4979 4.188C18.3989 4.32332 18.2501 4.41403 18.0842 4.44002C17.9182 4.46602 17.7487 4.42532 17.6129 4.3268C17.477 4.22819 17.386 4.07981 17.3598 3.9143C17.3335 3.7488 17.3742 3.57971 17.4729 3.4441L17.8279 2.95734C17.2355 2.57617 16.6067 2.25431 15.9508 1.99673L15.7638 2.57018C15.7225 2.69668 15.6424 2.80708 15.5346 2.88551C15.4269 2.96394 15.2971 3.00664 15.1637 3.00726C15.0958 3.00769 15.0283 2.99724 14.9637 2.97634C14.8844 2.95068 14.811 2.90957 14.7476 2.85556C14.6842 2.80155 14.6321 2.73561 14.5943 2.66149C14.5565 2.58738 14.5337 2.5065 14.5272 2.42359C14.5208 2.34068 14.5308 2.25742 14.5567 2.17838L14.7427 1.60883C14.0612 1.43171 13.3638 1.32201 12.6606 1.28157V1.88009C12.6606 2.0478 12.5938 2.20858 12.4749 2.32716C12.356 2.44575 12.1947 2.51247 12.0266 2.51247C11.8586 2.5122 11.6976 2.44548 11.5789 2.32692C11.4602 2.20836 11.3935 2.04763 11.3935 1.88009V1.28157C10.6896 1.32265 9.99148 1.43329 9.30943 1.61176L9.49544 2.18033C9.52134 2.25937 9.53135 2.34263 9.5249 2.42554C9.51846 2.50844 9.49568 2.58932 9.45787 2.66344C9.42006 2.73755 9.36797 2.8035 9.30457 2.85751C9.24118 2.91152 9.16772 2.95263 9.08841 2.97829C9.02382 2.99917 8.9563 3.00962 8.8884 3.00921C8.75499 3.00874 8.62513 2.96616 8.51737 2.8877C8.40962 2.80925 8.32947 2.69896 8.28837 2.57237L8.10236 1.99868C7.44665 2.25518 6.8179 2.57579 6.22526 2.9554L6.57928 3.44191C6.59805 3.46349 6.6151 3.48659 6.63028 3.51082C6.71934 3.65279 6.7483 3.82412 6.7108 3.98735C6.67331 4.15059 6.57242 4.29245 6.43027 4.38158C6.28784 4.47072 6.11574 4.49984 5.95182 4.46243C5.78791 4.42502 5.6456 4.3242 5.55622 4.18216L5.1982 3.69028C4.65376 4.1367 4.15436 4.63528 3.70712 5.17856L4.20014 5.53456C4.26751 5.5833 4.32458 5.64472 4.36809 5.71548C4.41159 5.78625 4.44068 5.86482 4.45368 5.94681C4.46669 6.0288 4.46335 6.11253 4.44387 6.19323C4.42439 6.27393 4.38915 6.35016 4.34015 6.41725C4.29137 6.48455 4.22973 6.54156 4.15878 6.58503C4.08783 6.62849 4.00897 6.65752 3.92673 6.6705C3.84448 6.68347 3.76048 6.68001 3.67955 6.66051C3.59861 6.64101 3.52234 6.60577 3.4551 6.55678L2.96708 6.2037C2.58637 6.79402 2.26513 7.42043 2.00802 8.0738L2.58206 8.26032C2.71322 8.30045 2.8278 8.38202 2.90859 8.49262C2.98937 8.60322 3.032 8.73688 3.03008 8.8737C3.02745 9.04123 2.95825 9.20091 2.83768 9.3176C2.71711 9.43429 2.55504 9.49849 2.38705 9.49609C2.31914 9.4966 2.2516 9.48615 2.18703 9.46516L1.614 9.27961C1.43925 9.9639 1.33339 10.6638 1.29799 11.3691H1.89802C1.98132 11.369 2.06382 11.3853 2.14081 11.4171C2.21779 11.4488 2.28774 11.4954 2.34664 11.5542C2.40554 11.6129 2.45224 11.6827 2.48406 11.7594C2.51587 11.8362 2.53218 11.9184 2.53205 12.0015C2.53205 12.1692 2.46525 12.3302 2.34635 12.4488C2.22744 12.5674 2.06617 12.6338 1.89802 12.6338H1.29799C1.33852 13.3355 1.44873 14.0314 1.627 14.7114L2.20004 14.5259C2.35243 14.4839 2.51504 14.5005 2.65587 14.5721C2.79671 14.6437 2.90558 14.7651 2.96108 14.9128C3.01973 15.0696 3.01362 15.2435 2.94406 15.3959C2.87451 15.5483 2.7472 15.6669 2.59006 15.7258L2.01603 15.9153C2.27235 16.5694 2.59328 17.1965 2.97408 17.7873L3.4621 17.4342C3.59298 17.3496 3.75059 17.3161 3.9047 17.3402C4.0588 17.3644 4.19856 17.4444 4.29715 17.565C4.40307 17.6949 4.45297 17.8615 4.43591 18.0281C4.41884 18.1947 4.33621 18.3476 4.20615 18.4535L3.71312 18.8098C4.16096 19.3525 4.66067 19.8506 5.2052 20.2968L5.56322 19.804C5.66224 19.6687 5.81105 19.5782 5.97699 19.5522C6.14292 19.5262 6.31242 19.5669 6.44827 19.6654C6.51564 19.7142 6.5727 19.7756 6.61621 19.8464C6.65971 19.9171 6.6888 19.9957 6.70181 20.0777C6.71481 20.1597 6.71148 20.2434 6.692 20.3241C6.67251 20.4048 6.63727 20.481 6.58828 20.5481L6.23426 21.0349C6.82727 21.4162 7.45672 21.7378 8.11336 21.9953L8.29937 21.4218C8.35506 21.2744 8.46401 21.1531 8.60482 21.0816C8.74564 21.0102 8.90814 20.9939 9.06041 21.0359C9.14068 21.0578 9.21582 21.0952 9.28152 21.1462C9.34722 21.1971 9.40218 21.2605 9.44325 21.3327C9.48432 21.4049 9.51069 21.4846 9.52085 21.5669C9.531 21.6493 9.52475 21.7329 9.50244 21.8129L9.31743 22.3822C9.99897 22.5594 10.6964 22.6691 11.3995 22.7094V22.1109C11.3995 21.9435 11.4662 21.783 11.585 21.6646C11.7037 21.5462 11.8647 21.4798 12.0326 21.4798C12.1993 21.4798 12.3592 21.5452 12.4777 21.6621C12.5963 21.779 12.6638 21.9379 12.6656 22.1041L12.6616 22.1031ZM32.5627 11.9966L33.3817 12.8133C33.4413 12.872 33.4885 12.942 33.5207 13.0191C33.553 13.0961 33.5696 13.1788 33.5696 13.2623C33.5696 13.3458 33.553 13.4283 33.5207 13.5053C33.4885 13.5824 33.4413 13.6524 33.3817 13.7111L32.5627 14.5278L33.3817 15.3447C33.4413 15.4035 33.4885 15.4735 33.5207 15.5505C33.553 15.6275 33.5696 15.71 33.5696 15.7935C33.5696 15.877 33.553 15.9597 33.5207 16.0368C33.4885 16.1138 33.4413 16.1836 33.3817 16.2423L33.1967 16.4278H34.8348C34.918 16.4278 35.0004 16.4117 35.0773 16.3799C35.1542 16.3481 35.224 16.3013 35.2828 16.2425C35.3416 16.1838 35.3882 16.1142 35.42 16.0375C35.4517 15.9608 35.468 15.8785 35.4679 15.7955V12.0056C35.468 11.9226 35.4517 11.8403 35.42 11.7636C35.3882 11.6869 35.3416 11.6173 35.2828 11.5585C35.224 11.4998 35.1542 11.4532 35.0773 11.4215C35.0004 11.3897 34.918 11.3732 34.8348 11.3732H33.1997L32.5627 11.9966ZM28.7625 11.9966L29.5815 12.8133C29.641 12.872 29.6883 12.942 29.7205 13.0191C29.7528 13.0961 29.7694 13.1788 29.7694 13.2623C29.7694 13.3458 29.7528 13.4283 29.7205 13.5053C29.6883 13.5824 29.641 13.6524 29.5815 13.7111L28.7625 14.5278L29.5815 15.3447C29.641 15.4035 29.6883 15.4735 29.7205 15.5505C29.7528 15.6275 29.7694 15.71 29.7694 15.7935C29.7694 15.877 29.7528 15.9597 29.7205 16.0368C29.6883 16.1138 29.641 16.1836 29.5815 16.2423L29.3965 16.4278H31.3996L32.0327 15.7955L31.2146 14.9788C31.1551 14.9201 31.1079 14.85 31.0756 14.773C31.0434 14.696 31.0268 14.6135 31.0268 14.53C31.0268 14.4465 31.0434 14.3638 31.0756 14.2867C31.1079 14.2097 31.1551 14.1397 31.2146 14.081L32.0327 13.2643L31.2146 12.4483C31.1552 12.3895 31.1081 12.3196 31.0759 12.2425C31.0438 12.1655 31.0272 12.083 31.0272 11.9995C31.0272 11.9161 31.0438 11.8335 31.0759 11.7565C31.1081 11.6795 31.1552 11.6095 31.2146 11.5508L31.3996 11.3652H29.3995L28.7625 11.9966ZM24.9623 11.9966L25.7813 12.8133C25.8407 12.8721 25.8878 12.942 25.92 13.0191C25.9522 13.0961 25.9687 13.1789 25.9687 13.2623C25.9687 13.3458 25.9522 13.4283 25.92 13.5053C25.8878 13.5824 25.8407 13.6523 25.7813 13.7111L24.9623 14.5278L25.7813 15.3447C25.8407 15.4035 25.8878 15.4735 25.92 15.5505C25.9522 15.6275 25.9687 15.7101 25.9687 15.7935C25.9687 15.877 25.9522 15.9597 25.92 16.0368C25.8878 16.1138 25.8407 16.1835 25.7813 16.2423L25.5953 16.4278H27.5994L28.2325 15.7955L27.4134 14.9788C27.354 14.92 27.3069 14.85 27.2747 14.773C27.2426 14.696 27.226 14.6134 27.226 14.53C27.226 14.4465 27.2426 14.3638 27.2747 14.2867C27.3069 14.2097 27.354 14.1398 27.4134 14.081L28.2325 13.2643L27.4134 12.4483C27.3542 12.3895 27.3071 12.3196 27.275 12.2425C27.243 12.1655 27.2264 12.0829 27.2264 11.9995C27.2264 11.9161 27.243 11.8335 27.275 11.7565C27.3071 11.6795 27.3542 11.6096 27.4134 11.5508L27.5994 11.3652H25.5993L24.9623 11.9966ZM23.4812 15.6869C23.4812 15.6938 23.4812 15.6958 23.4812 15.7098C23.4812 15.7237 23.4662 15.7357 23.4602 15.7507C23.3842 15.9801 23.3012 16.2025 23.2132 16.423H23.7992L24.4333 15.7906L23.6612 15.0206C23.6062 15.2411 23.5502 15.4655 23.4802 15.6839L23.4812 15.6869ZM23.9192 13.782L24.4373 13.2643L24.0232 12.8513C23.9992 13.1645 23.9642 13.4716 23.9182 13.7788L23.9192 13.782ZM34.6478 5.23725C34.7073 5.29596 34.7546 5.36597 34.7868 5.44301C34.819 5.52005 34.8356 5.60254 34.8356 5.68602C34.8356 5.7695 34.819 5.85224 34.7868 5.92928C34.7546 6.00632 34.7073 6.07633 34.6478 6.13504L33.8298 6.95174L34.6478 7.76869C34.7073 7.8274 34.7546 7.89716 34.7868 7.9742C34.819 8.05124 34.8356 8.13398 34.8356 8.21746C34.8356 8.30094 34.819 8.38368 34.7868 8.46072C34.7546 8.53776 34.7073 8.60752 34.6478 8.66623L33.8298 9.48318L34.4628 10.1156H36.0999C36.1832 10.1157 36.2657 10.0993 36.3427 10.0676C36.4197 10.0359 36.4896 9.98924 36.5485 9.93049C36.6074 9.87175 36.6541 9.802 36.6859 9.72522C36.7178 9.64844 36.7341 9.56626 36.7339 9.48318V5.69308C36.7341 5.61 36.7178 5.52782 36.6859 5.45104C36.6541 5.37426 36.6074 5.30451 36.5485 5.24577C36.4896 5.18703 36.4197 5.14041 36.3427 5.10868C36.2657 5.07695 36.1832 5.06058 36.0999 5.06071H34.4618L34.6478 5.23725ZM30.8476 5.23725C30.9071 5.29596 30.9544 5.36597 30.9866 5.44301C31.0188 5.52005 31.0354 5.60254 31.0354 5.68602C31.0354 5.7695 31.0188 5.85224 30.9866 5.92928C30.9544 6.00632 30.9071 6.07633 30.8476 6.13504L30.0286 6.95174L30.8476 7.76869C30.9071 7.8274 30.9544 7.89716 30.9866 7.9742C31.0188 8.05124 31.0354 8.13398 31.0354 8.21746C31.0354 8.30094 31.0188 8.38368 30.9866 8.46072C30.9544 8.53776 30.9071 8.60752 30.8476 8.66623L30.0286 9.48318L30.6626 10.1156H32.6717L32.4867 9.93098C32.4272 9.87227 32.38 9.80226 32.3477 9.72522C32.3155 9.64818 32.2989 9.56569 32.2989 9.48221C32.2989 9.39873 32.3155 9.31599 32.3477 9.23895C32.38 9.16191 32.4272 9.09214 32.4867 9.03343L33.3057 8.21649L32.4867 7.39954C32.4272 7.34083 32.38 7.27106 32.3477 7.19402C32.3155 7.11698 32.2989 7.03425 32.2989 6.95077C32.2989 6.86729 32.3155 6.78455 32.3477 6.70751C32.38 6.63047 32.4272 6.5607 32.4867 6.50199L33.3057 5.68505L32.6717 5.05267H30.6616L30.8476 5.23725ZM27.0474 5.23725C27.1069 5.29596 27.1541 5.36597 27.1864 5.44301C27.2186 5.52005 27.2352 5.60254 27.2352 5.68602C27.2352 5.7695 27.2186 5.85224 27.1864 5.92928C27.1541 6.00632 27.1069 6.07633 27.0474 6.13504L26.2284 6.95174L27.0474 7.76869C27.1069 7.8274 27.1541 7.89716 27.1864 7.9742C27.2186 8.05124 27.2352 8.13398 27.2352 8.21746C27.2352 8.30094 27.2186 8.38368 27.1864 8.46072C27.1541 8.53776 27.1069 8.60752 27.0474 8.66623L26.2284 9.48318L26.8624 10.1156H28.8715L28.6865 9.93098C28.627 9.87227 28.5797 9.80226 28.5475 9.72522C28.5153 9.64818 28.4987 9.56569 28.4987 9.48221C28.4987 9.39873 28.5153 9.31599 28.5475 9.23895C28.5797 9.16191 28.627 9.09214 28.6865 9.03343L29.5055 8.21649L28.6865 7.39954C28.627 7.34083 28.5797 7.27106 28.5475 7.19402C28.5153 7.11698 28.4987 7.03425 28.4987 6.95077C28.4987 6.86729 28.5153 6.78455 28.5475 6.70751C28.5797 6.63047 28.627 6.5607 28.6865 6.50199L29.5055 5.68505L28.8715 5.05267H26.8614L27.0474 5.23725ZM23.2472 5.23725C23.3066 5.29603 23.3537 5.36598 23.3859 5.44301C23.418 5.52004 23.4346 5.60258 23.4346 5.68602C23.4346 5.76946 23.418 5.85225 23.3859 5.92928C23.3537 6.00631 23.3066 6.07626 23.2472 6.13504L22.7682 6.61279C23.0392 7.1462 23.2702 7.6989 23.4592 8.2664C23.4592 8.27837 23.4732 8.28835 23.4762 8.29733C23.4779 8.30522 23.4779 8.3133 23.4762 8.32119C23.6624 8.90589 23.8028 9.50407 23.8962 10.1104H25.0663L24.8813 9.92587C24.8218 9.86716 24.7745 9.79739 24.7423 9.72035C24.7101 9.64331 24.6935 9.56057 24.6935 9.47709C24.6935 9.39361 24.7101 9.31112 24.7423 9.23408C24.7745 9.15704 24.8218 9.08703 24.8813 9.02832L25.6993 8.21137L24.8813 7.39467C24.8218 7.33596 24.7745 7.26595 24.7423 7.18891C24.7101 7.11187 24.6935 7.02938 24.6935 6.9459C24.6935 6.86242 24.7101 6.77968 24.7423 6.70264C24.7745 6.6256 24.8218 6.55559 24.8813 6.49688L25.6993 5.68018L25.0663 5.0478H23.0622L23.2472 5.23725ZM4.62417 13.7311C4.39637 12.7619 4.36221 11.7573 4.52363 10.775C4.68506 9.79262 5.03891 8.85181 5.56498 8.00586C6.09106 7.15991 6.77905 6.42556 7.58968 5.84478C8.40031 5.26401 9.31771 4.84812 10.2895 4.62095C12.2521 4.16244 14.3169 4.50009 16.0297 5.55989C17.7426 6.61968 18.9632 8.31482 19.423 10.2721L19.446 10.295L19.432 10.3069C19.7413 11.6249 19.6875 13.0017 19.2765 14.2916C18.8654 15.5816 18.1123 16.7366 17.0969 17.6346V17.6855H17.0419C15.6599 18.9063 13.8777 19.5805 12.0316 19.5807H12.0216C10.3073 19.58 8.64367 19.0012 7.30077 17.9385C5.95787 16.8759 5.01461 15.3917 4.62417 13.7269V13.7311ZM10.0895 5.98334C8.49058 6.49625 7.16139 7.62149 6.39418 9.1116C5.62697 10.6017 5.48455 12.3347 5.99824 13.9295C6.51212 15.5245 7.64018 16.8506 9.13433 17.6161C10.6285 18.3817 12.3663 18.524 13.9657 18.0118C13.9877 17.8753 14.0242 17.7415 14.0747 17.6127C13.6724 17.5047 13.3169 17.268 13.0629 16.9387C12.8088 16.6095 12.6703 16.2061 12.6686 15.7906V12.0005C12.6705 11.5852 12.8091 11.1822 13.0632 10.8531C13.3172 10.5241 13.6726 10.2873 14.0747 10.1794C13.9834 9.95501 13.9358 9.71532 13.9347 9.4732V5.97433C13.3199 5.78126 12.6791 5.68306 12.0346 5.6831H12.0236C11.3672 5.68236 10.7146 5.78367 10.0895 5.98334ZM13.9317 11.9976V15.7877C13.9317 15.9554 13.9985 16.1162 14.1174 16.2347C14.2363 16.3533 14.3976 16.42 14.5657 16.42H16.1988L16.8328 15.7877L16.0138 14.9707C15.9543 14.912 15.907 14.8423 15.8748 14.7652C15.8426 14.6882 15.826 14.6054 15.826 14.522C15.826 14.4385 15.8426 14.3557 15.8748 14.2787C15.907 14.2017 15.9543 14.1319 16.0138 14.0732L16.8328 13.2562L16.0138 12.4405C15.9543 12.3818 15.907 12.3118 15.8748 12.2347C15.8426 12.1577 15.826 12.075 15.826 11.9915C15.826 11.908 15.8426 11.8255 15.8748 11.7485C15.907 11.6714 15.9543 11.6014 16.0138 11.5427L16.1988 11.3572H14.5657C14.4818 11.3572 14.3987 11.3738 14.3212 11.4061C14.2438 11.4384 14.1735 11.4856 14.1145 11.5451C14.0556 11.6047 14.009 11.6755 13.9776 11.7531C13.9462 11.8307 13.9306 11.9139 13.9317 11.9976ZM17.3629 14.5249L17.6799 14.8412C17.854 14.5027 17.9969 14.1491 18.1069 13.7849L17.3629 14.5249ZM17.3629 11.9976L18.1819 12.8123C18.223 12.8584 18.2568 12.9106 18.2819 12.967C18.3718 12.4375 18.3887 11.8983 18.3319 11.3642H17.9989L17.3629 11.9976ZM15.1987 9.4693C15.1986 9.55238 15.2149 9.63456 15.2467 9.71134C15.2786 9.78812 15.3253 9.85787 15.3842 9.91661C15.4431 9.97536 15.513 10.022 15.59 10.0537C15.667 10.0854 15.7495 10.1016 15.8328 10.1014H17.4699L17.2849 9.9171C17.2254 9.85839 17.1781 9.78838 17.1459 9.71134C17.1136 9.6343 17.097 9.55156 17.097 9.46808C17.097 9.3846 17.1136 9.30211 17.1459 9.22507C17.1781 9.14803 17.2254 9.07802 17.2849 9.01931L17.4939 8.81087C16.9387 7.86687 16.1485 7.08194 15.1997 6.53194L15.1987 9.4693Z"
                                    fill="#21262C"
                                />
                            </svg>
                            <p>Шины</p>
                        </div>
                        <div class="filter-item for-disk inactive">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 0C9.62663 0 7.30656 0.703785 5.33317 2.02236C3.35978 3.34094 1.8217 5.21509 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.8071 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6934 24 14.3734 24 12C23.9963 8.81854 22.7308 5.76845 20.4812 3.51881C18.2316 1.26918 15.1815 0.00370522 12 0ZM18.139 4.482C18.2061 4.40796 18.2873 4.34804 18.3778 4.30576C18.4683 4.26348 18.5663 4.23969 18.6662 4.23578C18.766 4.23187 18.8656 4.24792 18.9592 4.28298C19.0527 4.31805 19.1383 4.37143 19.211 4.44C20.758 5.89605 21.8241 7.78927 22.267 9.867C22.3011 10.028 22.2815 10.1957 22.211 10.3444C22.1405 10.493 22.0232 10.6145 21.877 10.69C21.119 11.0663 20.2832 11.2591 19.437 11.253C18.4487 11.3049 17.4776 10.9797 16.72 10.343C15.448 9.067 15.978 6.879 18.139 4.482ZM5.86101 19.635C5.79418 19.7094 5.71312 19.7697 5.6226 19.8123C5.53209 19.8549 5.43396 19.879 5.33401 19.883H5.30501C5.11312 19.8832 4.92845 19.8098 4.78901 19.678C3.24275 18.223 2.17671 16.3313 1.73301 14.255C1.69888 14.094 1.71856 13.9263 1.78902 13.7776C1.85948 13.6289 1.97682 13.5075 2.12301 13.432C3.81301 12.56 6.223 12.722 7.281 13.778C8.55 15.049 8.02001 17.238 5.86101 19.635ZM7.28001 10.335C6.52236 10.9717 5.55127 11.2969 4.56301 11.245C3.71683 11.2509 2.88108 11.058 2.12301 10.682C1.97682 10.6065 1.85948 10.4851 1.78902 10.3364C1.71856 10.1877 1.69888 10.02 1.73301 9.859C2.17696 7.78309 3.24298 5.89175 4.78901 4.437C4.8611 4.36781 4.94675 4.31432 5.04055 4.2799C5.13435 4.24548 5.23427 4.23087 5.33401 4.237C5.4339 4.24087 5.532 4.26472 5.62251 4.30714C5.71303 4.34957 5.79413 4.4097 5.86101 4.484C8.02201 6.879 8.55201 9.067 7.28001 10.339V10.335ZM15.196 21.997C13.1169 22.6622 10.8821 22.6622 8.80301 21.997C8.64276 21.9459 8.50426 21.8426 8.40963 21.7036C8.315 21.5646 8.26971 21.3978 8.281 21.23C8.469 18.53 10.067 16.496 11.999 16.496C13.931 16.496 15.529 18.531 15.717 21.23C15.7293 21.3983 15.6846 21.5659 15.5901 21.7058C15.4956 21.8456 15.3568 21.9496 15.196 22.001V21.997ZM8.99601 11.997C8.99601 11.4037 9.17196 10.8236 9.5016 10.3303C9.83125 9.83694 10.2998 9.45243 10.848 9.22536C11.3961 8.9983 11.9993 8.93889 12.5813 9.05464C13.1632 9.1704 13.6978 9.45612 14.1173 9.87568C14.5369 10.2952 14.8226 10.8298 14.9384 11.4117C15.0541 11.9937 14.9947 12.5969 14.7676 13.1451C14.5406 13.6932 14.1561 14.1618 13.6627 14.4914C13.1694 14.8211 12.5894 14.997 11.996 14.997C11.2016 14.9959 10.44 14.6798 9.87833 14.118C9.31668 13.5561 9.0008 12.7944 9.00001 12L8.99601 11.997ZM15.714 2.822C15.526 5.522 13.928 7.556 11.996 7.556C10.064 7.556 8.46601 5.521 8.27801 2.822C8.26629 2.65451 8.31118 2.48795 8.40548 2.34904C8.49978 2.21013 8.63802 2.10692 8.798 2.056C10.8796 1.39146 13.1164 1.39146 15.198 2.056C15.3585 2.10704 15.4972 2.2107 15.5915 2.35023C15.6859 2.48976 15.7304 2.65702 15.718 2.825L15.714 2.822ZM22.267 14.136C21.8233 16.2123 20.7573 18.104 19.211 19.559C19.0716 19.6909 18.8869 19.7643 18.695 19.764H18.667C18.5671 19.7601 18.469 19.7363 18.3785 19.6939C18.288 19.6514 18.2069 19.5913 18.14 19.517C15.979 17.117 15.449 14.931 16.721 13.66C17.777 12.603 20.187 12.443 21.879 13.314C22.0246 13.3898 22.1414 13.5112 22.2115 13.6596C22.2816 13.8081 22.3011 13.9754 22.267 14.136Z"
                                    fill="#21262C"
                                />
                            </svg>
                            <p>Диски</p>
                        </div>
                    </div>
                    <div class="filter-content">
                        <div class="filter-menu">
                            <div class="switcher-wrap">
                                <p class="filter-switcher-option">По параметрам</p>
                                <div class="switcher" id="filter-top-switcher">
                                    <div class="switcher-circle"></div>
                                </div>
                                <p class="filter-switcher-option filter-switcher-option_disabled">По автомобилю</p>
                            </div>
                            <a href="#" class="choice-city">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <path
                                        d="M2.05034 1.91438C3.36309 0.688624 5.14355 0 7.00005 0C8.85655 0 10.637 0.688624 11.9498 1.91438C13.2625 3.14014 14 4.80263 14 6.53611C14 8.2696 13.2625 9.93208 11.9498 11.1578L10.9955 12.0391C10.2921 12.6832 9.37964 13.5119 8.25737 14.5252C7.92007 14.8298 7.46924 15 7.00005 15C6.53086 15 6.08003 14.8298 5.74273 14.5252L2.93626 11.976C2.58334 11.6525 2.2883 11.38 2.05034 11.1578C1.40031 10.5509 0.884667 9.83039 0.532868 9.03739C0.181069 8.24439 0 7.39445 0 6.53611C0 5.67777 0.181069 4.82783 0.532868 4.03483C0.884667 3.24183 1.40031 2.5213 2.05034 1.91438ZM11.0968 2.71007C10.0101 1.69554 8.53621 1.12566 6.99948 1.1258C5.46275 1.12594 3.98902 1.69609 2.90249 2.71082C1.81596 3.72555 1.20564 5.10174 1.2058 6.53664C1.20595 7.97155 1.81656 9.34762 2.9033 10.3622L4.09791 11.4641C4.92312 12.217 5.75062 12.9676 6.58041 13.716C6.69285 13.8176 6.84319 13.8744 6.99965 13.8744C7.15611 13.8744 7.30644 13.8176 7.41889 13.716L10.1474 11.2389C10.5252 10.8929 10.8412 10.6009 11.096 10.3622C12.1825 9.34761 12.7929 7.97161 12.7929 6.53686C12.7929 5.10211 12.1825 3.72612 11.096 2.71157L11.0968 2.71007ZM7.00005 4.48985C7.31698 4.48985 7.6308 4.54814 7.9236 4.66138C8.2164 4.77463 8.48245 4.94062 8.70655 5.14987C8.93065 5.35912 9.10842 5.60754 9.2297 5.88094C9.35098 6.15434 9.41341 6.44736 9.41341 6.74329C9.41341 7.03922 9.35098 7.33224 9.2297 7.60564C9.10842 7.87904 8.93065 8.12746 8.70655 8.33671C8.48245 8.54596 8.2164 8.71195 7.9236 8.8252C7.6308 8.93844 7.31698 8.99673 7.00005 8.99673C6.36772 8.98595 5.76519 8.74384 5.32209 8.32248C4.879 7.90112 4.63074 7.33419 4.63074 6.74367C4.63074 6.15314 4.879 5.58621 5.32209 5.16485C5.76519 4.74349 6.36772 4.50063 7.00005 4.48985ZM7.00005 5.61582C6.84148 5.61582 6.68447 5.64498 6.53797 5.70164C6.39147 5.7583 6.25836 5.84135 6.14623 5.94605C6.03411 6.05074 5.94517 6.17503 5.88448 6.31183C5.8238 6.44862 5.79257 6.59523 5.79257 6.74329C5.79257 6.89135 5.8238 7.03796 5.88448 7.17475C5.94517 7.31155 6.03411 7.43584 6.14623 7.54053C6.25836 7.64523 6.39147 7.72828 6.53797 7.78494C6.68447 7.8416 6.84148 7.87076 7.00005 7.87076C7.32019 7.87076 7.62721 7.75201 7.85358 7.54064C8.07996 7.32927 8.20713 7.04259 8.20713 6.74367C8.20713 6.44474 8.07996 6.15806 7.85358 5.94669C7.62721 5.73532 7.32019 5.61582 7.00005 5.61582Z"
                                        fill="#DD062A"
                                    />
                                </svg>
                                Челябинск
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                                    <path d="M1 1L5 4.5L1 8" stroke="black" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="filter-content-item disk">
                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="widthSelect">
                                        <option value="0">Ширина</option>
                                        <!-- Добавьте другие варианты для ширины -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="profileSelect">
                                        <option value="0">Профиль</option>
                                        <!-- Добавьте другие варианты для профиля -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="diameterSelect">
                                        <option value="0">Диаметр</option>
                                        <!-- Добавьте другие варианты для диаметра -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="seasonSelect">
                                        <option value="0">Сезонность</option>
                                        <!-- Добавьте другие варианты для сезонности -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="typeSelect">
                                        <option value="0">Тип шин</option>
                                        <!-- Добавьте другие варианты для типа шин -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="manufacturerSelect">
                                        <option value="0">Производитель</option>
                                        <!-- Добавьте другие варианты для производителя -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-content-item auto">
                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="manufacturerSelect">
                                        <option value="0">Производитель</option>
                                        <!-- Добавьте другие варианты для производителя -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="modelSelect">
                                        <option value="0">Модель</option>
                                        <!-- Добавьте другие варианты для модели -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="yearSelect">
                                        <option value="0">Год выпуска</option>
                                        <!-- Добавьте другие варианты для года выпуска -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="modificationSelect">
                                        <option value="0">Модификация</option>
                                        <!-- Добавьте другие варианты для модификации -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-content-item wheel">
                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="widthAutoSelect">
                                        <option value="0">Ширина</option>
                                        <!-- Добавьте другие варианты для ширины -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="diameterAutoSelect">
                                        <option value="0">Диаметр</option>
                                        <!-- Добавьте другие варианты для диаметра -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="pcdAutoSelect">
                                        <option value="0">Крепеж (PCD)</option>
                                        <!-- Добавьте другие варианты для крепежа -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="etAutoSelect">
                                        <option value="0">Вылет (ET)</option>
                                        <!-- Добавьте другие варианты для вылета -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="hubAutoSelect">
                                        <option value="0">Ступица</option>
                                        <!-- Добавьте другие варианты для ступицы -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="select-row">
                                <div class="custom-select-wrapper">
                                    <select class="custom-select" id="typeDiskAutoSelect">
                                        <option value="0">Тип диска</option>
                                        <!-- Добавьте другие варианты для типа диска -->
                                    </select>
                                    <div class="select-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
                                            <path d="M8 1L4.5 5L1 0.999999" stroke="#C5C5C5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="submit-filter-button secondary-btn">Подобрать</button>
                        <div class="help-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <path
                                    d="M1.25 3.75H5.25C5.52615 3.75 5.75 3.52615 5.75 3.25C5.75 2.97385 5.52615 2.75 5.25 2.75H1.25C0.973853 2.75 0.75 2.97385 0.75 3.25C0.75 3.52615 0.973853 3.75 1.25 3.75Z"
                                    fill="#303030"
                                />
                                <path
                                    d="M2.75 1.25V5.25C2.75 5.52615 2.97385 5.75 3.25 5.75C3.52615 5.75 3.75 5.52615 3.75 5.25V1.25C3.75 0.973853 3.52615 0.75 3.25 0.75C2.97385 0.75 2.75 0.973853 2.75 1.25ZM19.7146 8.53464H21.9546C22.2308 8.53464 22.4546 8.31079 22.4546 8.03464C22.4546 7.7585 22.2308 7.53464 21.9546 7.53464H19.7146C19.4385 7.53464 19.2146 7.7585 19.2146 8.03464C19.2146 8.31079 19.4385 8.53464 19.7146 8.53464Z"
                                    fill="#303030"
                                />
                                <path
                                    d="M20.3346 6.91455V9.15454C20.3346 9.43069 20.5585 9.65454 20.8346 9.65454C21.1108 9.65454 21.3346 9.43069 21.3346 9.15454V6.91455C21.3346 6.6384 21.1108 6.41455 20.8346 6.41455C20.5585 6.41455 20.3346 6.6384 20.3346 6.91455ZM4 10.7499H19C20.1046 10.7499 21 11.6453 21 12.7499V15.9999C21 17.1045 20.1046 17.9999 19 17.9999H4C2.89543 17.9999 2 17.1045 2 15.9999V12.7499C2 11.6453 2.89543 10.7499 4 10.7499ZM4 11.7499C3.44771 11.7499 3 12.1976 3 12.7499V15.9999C3 16.5522 3.44771 16.9999 4 16.9999H19C19.5523 16.9999 20 16.5522 20 15.9999V12.7499C20 12.1976 19.5523 11.7499 19 11.7499H4ZM6.05876 18.9369V20.2847C6.05876 20.7705 5.67014 21.1627 5.19326 21.1627H5.06052C4.58364 21.1627 4.19502 20.7705 4.19502 20.2847V18.9312C4.19502 18.655 3.97117 18.4312 3.69502 18.4312C3.41887 18.4312 3.19502 18.655 3.19502 18.9312V20.2847C3.19502 21.3208 4.02932 22.1627 5.06052 22.1627H5.19326C6.22446 22.1627 7.05876 21.3208 7.05876 20.2847V18.9369C7.05876 18.6608 6.83491 18.4369 6.55876 18.4369C6.28262 18.4369 6.05876 18.6608 6.05876 18.9369ZM18.8355 18.9369V20.2847C18.8355 20.7705 18.4469 21.1627 17.97 21.1627H17.8373C17.3604 21.1627 16.9718 20.7705 16.9718 20.2847V18.9312C16.9718 18.655 16.7479 18.4312 16.4718 18.4312C16.1956 18.4312 15.9718 18.655 15.9718 18.9312V20.2847C15.9718 21.3208 16.8061 22.1627 17.8373 22.1627H17.97C19.0012 22.1627 19.8355 21.3208 19.8355 20.2847V18.9369C19.8355 18.6608 19.6116 18.4369 19.3355 18.4369C19.0594 18.4369 18.8355 18.6608 18.8355 18.9369Z"
                                    fill="#303030"
                                />
                                <path
                                    d="M7.30371 14.2916C7.30371 14.9819 6.74397 15.5416 6.05371 15.5416C5.36345 15.5416 4.80371 14.9819 4.80371 14.2916C4.80371 13.6013 5.36345 13.0416 6.05371 13.0416C6.74397 13.0416 7.30371 13.6013 7.30371 14.2916ZM18.2223 14.2916C18.2223 14.9819 17.6626 15.5416 16.9723 15.5416C16.2821 15.5416 15.7223 14.9819 15.7223 14.2916C15.7223 13.6013 16.2821 13.0416 16.9723 13.0416C17.6626 13.0416 18.2223 13.6013 18.2223 14.2916ZM9.3052 14.7916H13.711C13.9871 14.7916 14.211 14.5677 14.211 14.2916C14.211 14.0155 13.9871 13.7916 13.711 13.7916H9.3052C9.02905 13.7916 8.8052 14.0155 8.8052 14.2916C8.8052 14.5677 9.02905 14.7916 9.3052 14.7916ZM17.7419 11.1255H5.2957V7.12549C5.2957 5.74473 6.41494 4.62549 7.7957 4.62549H15.2419C16.6227 4.62549 17.7419 5.74473 17.7419 7.12549V11.1255ZM7.74988 5.74988C6.92146 5.74988 6.24988 6.42146 6.24988 7.24988V10.6504H16.7499V7.24988C16.7499 6.42146 16.0783 5.74988 15.2499 5.74988H7.74988Z"
                                    fill="#303030"
                                />
                            </svg>
                            <a href="#" class="help-process help">Помощь в подборе</a>
                        </div>
                    </div>
                </section>

                <section class="discount-block">
                    <h2 class="block-title">
                        Эксклюзивная Скидка: 10% <br />
                        На литые диски!
                    </h2>
                    <p class="block-text">*максимальная скидка при покупке комплекта шин.</p>
                    <a href="#" class="block-button primary-button">Подробнее</a>
                </section>
            </div>
        </div>

        <section class="three-blocks container">
            <div class="block customer-reviews">
                <h3 class="block-title">Отзывы покупателей Автоальянс</h3>
                <div class="rating-block">
                    <div class="rating-stars">
                        <img src="./assets/img/gold-star.svg" alt="" />
                        <img src="./assets/img/gold-star.svg" alt="" />
                        <img src="./assets/img/gold-star.svg" alt="" />
                        <img src="./assets/img/gold-star.svg" alt="" />
                        <img src="./assets/img/white-star.svg" alt="" />
                    </div>
                    <span class="num-rating">4,3</span>
                </div>
                <button type="button" class="white-button">Читать отзывы</button>
                <img class="decoration" src="./assets/img/korona.svg" alt="" />
            </div>

            <div class="block manufacturer-warranty">
                <h3 class="block-title">Мы поддерживаем все расширенные гарантии производителя</h3>
                <button type="button" class="primary-button red-btn">Гарантия на шины</button>
                <img class="decoration" src="./assets/img/galki.svg" alt="" />
            </div>

            <div class="block help-and-selection">
                <h3 class="block-title">Нужна помощь в подборе? Узнать страну, дату выпуска шин?</h3>
                <button type="button" class="primary-button red-btn">Хочу общаться</button>
                <img class="decoration" src="./assets/img/Group 33992.svg" alt="" />
            </div>
        </section>

        <div class="wheels-section container">
            <h2>Шины выгодно</h2>
            <div class="product-list responsive">
                <!-- Product 1 -->
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/wheel-product.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/wheel-product.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/wheel-product.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/wheel-product.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/wheel-product.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="disk-section container">
            <h2 class="pr">Диски более <span class="highlight-text">16520</span> наименований</h2>
            <div class="product-list responsive2">
                <!-- Product 1 -->
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/disk-1.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Диск ЛС Replica Concept Volkswagen VW548 GMF 20x9,0 5x112 ET33 DIA66,6</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/disk-1.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Диск ЛС Replica Concept Volkswagen VW548 GMF 20x9,0 5x112 ET33 DIA66,6</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/disk-1.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Диск ЛС Replica Concept Volkswagen VW548 GMF 20x9,0 5x112 ET33 DIA66,6</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/disk-2.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="section-product">
                    <div class="product-photo-blk">
                        <img src="./assets/img/disk-2.png" alt="Wheel Product Image" />
                    </div>
                    <h3 class="product-title">Шина Viatti V-130 Strada Asimmetrico 185/60 R15 84H летняя</h3>
                    <div class="product-details">
                        <div class="icons">
                            <img src="./assets/img/day.svg" alt="" />
                            <img src="./assets/img/snw.svg" alt="" />
                            <img src="./assets/img/sh.svg" alt="" />
                        </div>
                        <div class="star-rating">
                            <img src="./assets/img/sm-star.svg" alt="Star" class="sm-star" /> <span class="rating-value">4.8</span>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="current-price">29 999 ₽</span>
                        <span class="old-price">32 200 ₽</span>
                    </div>
                    <div class="buy-button-blk">
                        <button class="buy-button">
                            Купить <span>cейчас</span>
                            <img src="./assets/img/bag.svg" alt="" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <section class="news-section container">
            <h2>Новости</h2>
            <div class="news-list">
                <div class="news">
                    <img class="news-image" src="./assets/img/news.png" alt="" />
                    <h3 class="news-title">Новость очень важная заголовок</h3>
                    <h3 class="news-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    </h3>
                    <a class="go-news-link">Подребнее ></a>
                </div>
                <div class="news">
                    <img class="news-image" src="./assets/img/news.png" alt="" />
                    <h3 class="news-title">Новость очень важная заголовок</h3>
                    <h3 class="news-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    </h3>
                    <a class="go-news-link">Подребнее ></a>
                </div>
                <div class="news">
                    <img class="news-image" src="./assets/img/news.png" alt="" />
                    <h3 class="news-title">Новость очень важная заголовок</h3>
                    <h3 class="news-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    </h3>
                    <a class="go-news-link">Подребнее ></a>
                </div>
            </div>
        </section>
        <section class="about-company-section container">
            <h2>О Компании</h2>
            <p class="about-company-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ante
                metus dictum at tempor commodo. Neque viverra justo nec ultrices dui. Risus ultricies tristique nulla aliquet enim. Sit amet
                consectetur adipiscing elit ut aliquam. Interdum consectetur libero id faucibus nisl tincidunt eget nullam. Mattis molestie a
                iaculis at erat. Nec ultrices dui sapien eget mi proin sed. Phasellus vestibulum lorem sed risus ultricies tristique nulla.
                Fames ac turpis egestas maecenas. Condimentum id venenatis a condimentum. Porttitor lacus luctus accumsan tortor posuere ac ut
                consequat semper. Amet commodo nulla facilisi nullam. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean. Donec
                ultrices tincidunt arcu non sodales neque. Porta non pulvinar neque laoreet suspendisse interdum. Ultrices mi tempus imperdiet
                nulla malesuada pellentesque elit eget gravida. Massa placerat duis ultricies lacus. Volutpat commodo sed egestas egestas
                fringilla phasellus faucibus. Mauris in aliquam sem fringilla ut morbi tincidunt. Et netus et malesuada fames. Aliquam sem et
                tortor consequat id porta nibh venenatis. Scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt. Integer vitae
                justo eget magna fermentum iaculis eu non. Non arcu risus quis varius quam. Faucibus nisl tincidunt eget nullam non. Malesuada
                fames ac turpis egestas integer eget aliquet nibh praesent. Non enim praesent elementum facilisis leo vel fringilla est
                ullamcorper. Varius morbi enim nunc faucibus. Tortor pretium Sapien et ligula ullamcorper malesuada proin libero nunc. Dolor sit
                amet consectetur adipiscing elit pellentesque. Id diam vel quam elementum pulvinar etiam. Ulla
            </p>
        </section>
        <footer>
            <div class="footer-content container">
                <div class="footer-group footer-group-center">
                    <p class="footer-grup-num">8-351-700-03-19</p>
                    <button class="footer-get-call" type="button">Заказать звонок</button>
                    <div class="footer-group-city">2023 г. Автоальянс</div>
                </div>
                <div class="footer-group fg-hide">
                    <a href="#" class="footer-group-link">Каталог</a>
                    <a href="#" class="footer-group-link">Компания</a>
                    <a href="#" class="footer-group-link">Новости и акции</a>
                    <a href="#" class="footer-group-link">Статьи</a>
                    <a href="#" class="footer-group-link">Доставка</a>
                    <a href="#" class="footer-group-link">Оплата</a>
                </div>
                <div class="footer-group fg-hide">
                    <a href="#" class="footer-group-link">Компания</a>
                    <a href="#" class="footer-group-link">Сервис</a>
                    <a href="#" class="footer-group-link">Доставка и оплата</a>
                    <a href="#" class="footer-group-link">Гарантия</a>
                    <a href="#" class="footer-group-link">Отзывы</a>
                    <a href="#" class="footer-group-link">Магазины</a>
                </div>
                <div class="footer-group"></div>
                <div class="footer-group footer-group-center fg-hide-2">
                    <p class="we-are-in-social">Мы в соцсетях</p>
                    <div class="social-row">
                        <img src="./assets/img/tg.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/wa.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/vib.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/vk.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/fb.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/inst.svg" alt="" class="social-row-item" />
                        <img src="./assets/img/youtube.svg" alt="" class="social-row-item" />
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".responsive").slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow:
                '<div class="custom-prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M19 6L12 12L19 18" stroke="#303030" stroke-width="2.04511" stroke-linecap="round"/></svg></div>',
            nextArrow:
                '<div class="custom-next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M13 6L20 12L13 18" stroke="#303030" stroke-width="2.04511" stroke-linecap="round"/></svg></div>',
            responsive: [
                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1, // Переключаем по 2 слайда
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1, // Переключаем по 3 слайда
                    },
                },
            ],
        });
    });
</script>
<script>
    $(".responsive2").slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow:
            '<div class="custom-prev-arrow-2"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M19 6L12 12L19 18" stroke="#303030" stroke-width="2.04511" stroke-linecap="round"/></svg></div>',
        nextArrow:
            '<div class="custom-next-arrow-2"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M13 6L20 12L13 18" stroke="#303030" stroke-width="2.04511" stroke-linecap="round"/></svg></div>',
        responsive: [
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1, // Переключаем по 2 слайда
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1, // Переключаем по 3 слайда
                },
            },
        ],
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Получаем свитчер и его элементы
        var switcher = document.querySelector("#filter-top-switcher");
        var auto = document.querySelector(".auto");
        var wheel = document.querySelector(".wheel");
        var disk = document.querySelector(".disk");
        var switcherOptions = document.querySelectorAll(".filter-switcher-option");

        // Добавляем обработчик события клика для свитчера
        switcher.addEventListener("click", function () {
            this.classList.toggle("active");
            toggleState();

            // Переключаем класс filter-switcher-option_disabled для каждого элемента
            switcherOptions.forEach(function (option) {
                option.classList.toggle("filter-switcher-option_disabled");
            });
        });

        // Добавляем обработчик события клика для каждого элемента filter-switcher-option
        switcherOptions.forEach(function (option) {
            option.addEventListener("click", function () {
                // Вызываем функцию клика на свитчер
                switcher.click();
            });
        });
        var forWheels = document.querySelector(".for-wheels");
        var forDisk = document.querySelector(".for-disk");
        forWheels.addEventListener("click", function () {
            toggleState();
        });

        forDisk.addEventListener("click", function () {
            toggleState();
        });

        function toggleState() {
            if (switcher.classList.contains("active")) {
                disk.style.display = "none";
                auto.style.display = "block";
                wheel.style.display = "none";
                return;
            }
            toggleInactive();

            checkParams();
        }
        function checkParams() {
            if (forDisk.classList.contains("inactive")) {
                disk.style.display = "block";
                auto.style.display = "none";
                wheel.style.display = "none";
                return;
            }
            if (forWheels.classList.contains("inactive")) {
                disk.style.display = "none";
                auto.style.display = "none";
                wheel.style.display = "block";
                return;
            }
        }
        function toggleInactive(element) {
            if (forDisk.classList.contains("inactive")) {
                forWheels.classList.add("inactive");
                forDisk.classList.remove("inactive");
                return;
            }
            if (forWheels.classList.contains("inactive")) {
                forWheels.classList.remove("inactive");
                forDisk.classList.add("inactive");
                return;
            }
        }
        checkParams();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Получаем все элементы с классом geo-location-window__city-list
        var cityListItems = document.querySelectorAll(".geo-location-window-list-item");

        // Добавляем обработчик события click каждому элементу
        cityListItems.forEach(function (item) {
            item.addEventListener("click", function () {
                // Удаляем класс selected у всех элементов
                cityListItems.forEach(function (city) {
                    city.classList.remove("selected");
                });

                // Добавляем класс selected только к текущему элементу
                this.classList.add("selected");
            });
        });
    });
</script>
<script></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menu = document.querySelector(".catalog-page-hide");
        const close = document.querySelector(".catalog-page-close");
        const open = document.querySelector("#hide-show-catalog");
        const item = [close, open];
        item.forEach((i) => {
            i.addEventListener("click", () => menu.classList.toggle("catalog-page-open"));
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var exitButton = document.querySelector(".geo-location-window-exit");
        var showButton = document.querySelector(".header-location-block-main");
        var wrapper = document.querySelector(".geo-wrapper");
        var cityInHeader = document.querySelector(".city-in-header");
        var links = document.querySelectorAll(".geo-location-window__link");
        links.forEach((link) => {
            link.addEventListener("click", () => {
                cityInHeader.innerHTML = link.innerHTML;
                wrapper.style.display = "none";
            });
        });
        exitButton.addEventListener("click", function () {
            // Скрываем элемент .geo-wrapper при клике на элемент .geo-location-window-exit
            wrapper.style.display = "none";
        });
        showButton.addEventListener("click", function () {
            // Скрываем элемент .geo-wrapper при клике на элемент .geo-location-window-exit
            wrapper.style.display = "block";
        });
        var listItems = document.querySelectorAll(".geo-location-window-list-item");
        var cityLists = document.querySelectorAll(".geo-location-window__city-list");

        listItems.forEach(function (item, index) {
            item.addEventListener("click", function () {
                // Скрываем все элементы .geo-location-window__city-list
                cityLists.forEach(function (city) {
                    city.style.display = "none";
                });

                // Показываем только выбранный элемент
                cityLists[index].style.display = "block";
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const openCatalog = document.querySelector("#get-catalog");
        const menu = document.getElementById("catalog-menu");
        const close = document.querySelector(".catalog-page-close");
        const open = document.querySelector("#hide-show-catalog");
        const item = [open, openCatalog];
        close.addEventListener("click", () => menu.classList.remove("catalog-page-open"));
        item.forEach((i) => {
            i.addEventListener("click", () => menu.classList.toggle("catalog-page-open"));
        });
    });
</script>
</body>
</html>
