<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
    @vite(['resources/css/style.css'])

    {{ $head }}

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

        <x-layout.header/>

        {{ $slot }}

        <x-layout.footer/>
    </div>
</div>

{{ $scripts }}
</body>
</html>
