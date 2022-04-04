<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__logo__items">
                    {{-- <img src="{{asset('/img/logo.svg')}}" alt="урфушная помойка" class="header__logo"> --}}
                    {{-- <span class="text__logo">Логотип</span> --}}
                </div>
                
                <div class="header__phone__items">
                    <img src="{{asset('/img/tele.svg')}}" alt="" class="logo__phone">
                    <div class="rr">
                        <div class="phone">+7 (343) 302-00-90<br></div>
                        <div class="calendar">Пн-Сб: 9:00-18:00</div>
                    </div>
                </div>

                <a href="#form" class="text__button">
                    <div class="header__button">Заказать звонок</div>
                </a>
            
            </div>
        </div>
    </header>
    <main>
        <div class="intro__back"></div>
        <section class="intro">
            
            <div class="wrapper">
                <h1 class="intro__title">БЕЗОПАСНАЯ СДЕЛКА</h1>
                <p class="intro__subtitle">Сервис по проверке продавца и покупателя и оценке рисков сделки недвижимости</p>
                <a href="#form" class="text__button">
                    <div class="intro__button">Получить консультацию</div>
                </a>
                <img src="{{asset('/img/pic.svg')}}" alt="" class="pic">
            </div>
        </section>
        <section class="question">
            <div class="quest__wrap">
                <div class="wrapper">
                    <div class="quest__flex">
                        <h2 class="quest__title">Что можно проверить и зачем?</h2>
                        <p class="minimal">3 проверки</p>
                    </div>
                    
                    <ul class="quest__nav__flex">
                        <li class="quest__nav">01 Проверка покупателя
                            <ul class="first__quest__nav">
                                <li class="first__quest__nav__elements">Что проверяем?
                                    <ul class="spisok__xuli__odin">
                                        <li class="koncha">Проверка подлинности паспорта  </li>
                                        <li class="koncha">Оцениваем на какую сумму может рассчитывать человек</li>
                                        <li class="koncha">Подбираем лучшие банки и ипотечные программы</li>
                                    </ul> 
                                </li>
                                <li class="first__quest__nav__elements">Ваша выгода
                                    <ul class="spisok__xuli__dva">
                                        <li class="koncha">Не тратите время на подбор квартир для некредитуемых клиентов и сразу понимаете на какую сумму может рассчитывать человек</li>
                                        <li class="koncha"> Повышаете вероятность одобрения ипотеки.</li>
                                        <li class="koncha">Отправка заявки на ипотеку одновременно в 10-20 банков сильно снижает вероятность одобрения. Намного эффективнее отправлять в 2-3 банка и гарантировано получать одобрение.</li>
                                    </ul> 
                                </li>
                                <li class="first__quest__nav__elements">Тариф
                                    <ul class="quest__tarif">
                                        <li>Цена: 300 руб.</li>
                                        <li>Готовностость: 3 минуты</li>
                                        <li>Нужен только паспорт субъекта</li>
                                    </ul>
                                    <a href="#form" class="text__button">
                                    <div href="#form" class="quest__buttons text__button">
                                        Заказать отчет
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="quest__nav">02 Проверка продавца
                            <ul class="second__quest__nav">
                                <li class="second__quest__nav__elements">Что проверяем?
                                    <ul class="spisok__xuli__odin">
                                        <li class="koncha">Проверка подлинности паспорта</li>
                                        <li class="koncha">Нахождение продавца в розыске</li>
                                        <li class="koncha">Наличие судимостей</li>
                                        <li class="koncha">Массив наркоманов</li>
                                        <li class="koncha">Долги по ФССП</li>
                                        <li class="koncha">Просрочки по кредитам</li>
                                        <li class="koncha">Вероятность банкротства</li>
                                    </ul> 
                                </li>
                                <li class="second__quest__nav__elements">Ваша выгода
                                    <ul class="spisok__xuli__dva">
                                        <li class="koncha">Обеспечьте юридическую чистоту сделки вашим клиентам. Снизьте репутационные риски.</li>
                                        <li class="koncha">Продавайте Вашим клиентам наши проверки и зарабатывайте на каждом обращении.</li>
                                        <li class="koncha">Рынок банкротств физических лиц растет каждый год в 2-3 раза. Если продавец продает квартиру и после проходит процедуру банкротства, сделка может быть признана недействительной</li>
                                    </ul> 
                                </li>
                                <li class="second__quest__nav__elements">Тариф
                                    <ul class="quest__tarif">
                                        <li>Цена: 500 руб.</li>
                                        <li>Готовностость: 3 минуты</li>
                                        <li>Нужен только паспорт субъекта</li>
                                    </ul>
                                    <a href="#form" class="text__button">
                                    <div class="quest__buttons">Заказать отчет
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="quest__nav">03 Проверка объекта
                            <ul class="third__quest__nav">
                                <li class="third__quest__nav__elements">Что проверяем?
                                    <ul class="spisok__xuli__odin">
                                        <li class="koncha">Нахождение объекта в залоге</li>
                                        <li class="koncha">Полная история собственников</li>
                                        <li class="koncha">Судимости у текущего собственника</li>
                                        <li class="koncha">Кадастровая стоимость объекта</li>
                                    </ul> 
                                </li>
                                <li class="third__quest__nav__elements">Ваша выгода
                                    <ul class="spisok__xuli__dva">
                                        <li class="koncha">Обеспечтье юридическую чистоту сделки вашим клиентам и продемонстрируйте экспертность.</li>
                                        <li class="koncha">Продавайте Вашим клиентам наши проверки и зарабатывайте на каждом обращении.</li>
                                    </ul> 
                                </li>
                                <li class="third__quest__nav__elements">Тариф
                                    <ul class="quest__tarif">
                                        <li>Цена: 1000 руб.</li>
                                        <li>Готовностость: 2 часа</li>
                                        <li>Нужен только паспорт субъекта</li>
                                    </ul>
                                    <a href="#form" class="text__button">
                                    <div class="quest__buttons">
                                        Заказать отчет
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="mini__nav">
            <div class="wrapper">
                <h2 class="mini__nav__title">Источники данных</h2>
                <div class="mini__nav__flex">
                    <div class="blocks up">
                        <img src="{{asset('/img/mini_1.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Национальное бюро кредитных историй</p>
                    </div>
                    <div class="blocks up">
                        <img src="{{asset('/img/mini_2.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Министерство внутренних дел РФ</p>
                    </div>
                    <div class="blocks up">
                        <img src="{{asset('/img/mini_3.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Федеральная служба судебных приставов</p>
                    </div>
                    <div class="blocks">
                        <img src="{{asset('/img/mini_4.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Единый государственный реестр недвижимости</p>
                    </div>
                    <div class="blocks">
                        <img src="{{asset('/img/mini_5.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Росфин мониторинг</p>
                    </div>
                    <div class="blocks">
                        <img src="{{asset('/img/mini_6.svg')}}" alt="" class="mini__nav__img">
                        <p class="mini__nav__text">Прочие</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer__wrapper">
            <div class="wrapper">
                <div class="footer__flex">
                    <div class="footer__text">
                        <h2 class="footer__title">Остались вопросы?</h2>
                        <p class="footer__inside__text">Оставьте заявку и наш персональный менеджер подробно расскажет о проверках!</p>
                        <p class="footer__inside__text2">БОНУС:</p>
                        <ul class="footer__quest">
                            <li>Для крупных клиентов у нас есть api, и мы оказываем полную помощь в интеграции</li>
                            <li>Также мы готовы разработать проверку специально для Вашего бизнеса</li>
                        </ul>
                    </div>
                    <div id="form" class="form__footer">
                        <label id="labelName" style="display: none; font-size: 13px; color:red">Обязательное поле</label>
                        <input type="text" id = "input__name"class="input__footer" placeholder="ФИО">
                        <label id="labelPhone" style="display: none; font-size: 13px; color:red">Обязательное поле</label>
                        <input type="text" id = "input__phone"class="input__footer" placeholder="Тел. 8 (999) 999 99 99">
                        <button type="button" class="footer__button" onclick="submitFooterForm('{{$urlForm}}')">Получить консультацию</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('/js/main.js')}}"></script>
    </footer>
</body>
</html>