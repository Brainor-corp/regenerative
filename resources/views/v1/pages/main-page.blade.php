@extends('v1.layouts.main-page-layout')

@section('styles')

@endsection

@section('headScripts')

@endsection

@section('title')
    Главная страница
@endsection

@section('content')

{{--<body data-aos-easing="ease-out-back" data-aos-duration="1000" data-aos-delay="0">--}}
<div class="container about-menu section-animation" data-aos="fade-up">
    <div class="subheader">
        <b><span class="first-part">О</span> <span class="second-part">Форуме</span></b>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <img class="w-100 img-fluid" src="{{ asset('img/doc.jpg') }}" alt="">
            <!--<img class="img-fluid" src="http://via.placeholder.com/340x510" alt="">-->
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12">
                    Конференция Далее описание Вместо пересказа азов и теории спикеры дадут исключительно практические рекомендации, проверенные на практике методики работы по построению эффективной команды в отделе продаж, оптимизации инструментов работы с клиентами, увеличения лидогенерации, роста среднего чека.Вместо пересказа азов и теории спикеры дадут исключительно практические рекомендации, проверенные на практике методики работы по построению эффективной команды в отделе продаж, оптимизации инструментов работы с клиентами, увеличения лидогенерации, роста среднего чека.
                </div>
                <div class="col-12 subheader for-who">
                    <b><span class="first-part">Для кого</span> <span class="second-part">проходит Форум</span></b>
                </div>
                <div class="col-12">
                    <ul class="li-sqr">
                        <li class="pl-2">Пластических хирургов</li>
                        <li class="pl-2">Ученых в области регенерации клеток</li>
                        <li class="pl-2">Косметологов</li>
                        <li class="pl-2">Онкологов</li>
                        <li class="pl-2">Травматологов</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container section-animation" data-aos="fade-up">
    <div class="row">
        <div class="col-12">
            <div class="subheader text-center">
                <b><span class="first-part">О первом</span> <span class="second-part">Форуме 23-24 сентября 2016</span></b>
            </div>
        </div>
        <div class="col-12">
            Первый форум был приурочен к 20-летию кафедры пластической хирургии и косметологии и 25-летию центра пластической хирургии «ПЛАСТЭС», конференция проходила при поддержке Управления делами Президента Российской Федерации, Российского общества пластических, реконструктивных и эстетических хирургов
            В тот раз форум собрал более 90 специалистов из различных областей хирургии, косметологии и других сфер, работающих в области регенеративной медицины.
        </div>
        <div class="col-12 img-holder p-2 d-flex flex-wrap justify-content-around">
            <img class="conf-img img-fluid" src="{{ asset('img/conf1.jpg') }}" alt="">
            <img class="conf-img img-fluid" src="{{ asset('img/conf2.jpg') }}" alt="">
            <img class="conf-img img-fluid" src="{{ asset('img/conf3.jpg') }}" alt="">
            <img class="conf-img img-fluid" src="{{ asset('img/conf4.jpg') }}" alt="">
            <!--<img src="http://via.placeholder.com/220x190" alt="">-->
        </div>
    </div>
</div>
<div class="container mb-5 section-animation" data-aos="zoom-in" data-aos-duration="1000">
    <div class="row">
        <div class="col-12 text-center">
            <div class="subheader text-center">
                <b><span class="first-part">Ключевые темы</span> <span class="second-part">Форума</span></b>
            </div>
        </div>
        <div class="col-12">
            <div class="row ">
                <div class="col-12 col-md-4 mb-md-0 mb-3">
                    <div class="col-12 mb-md-5 mb-3 d-flex justify-content-around">
                        <img src="{{ asset('img/head.png') }}" alt="">
                        <!--<img src="http://via.placeholder.com/90x90" alt="">-->
                    </div>
                    <div class="col-12">
                        <p class="text-center"><span><b>Первый день:</b> клеточные технологии. Текущее состояние вопроса</span></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-md-0 mb-3">
                    <div class="col-12 mb-md-5 mb-3 d-flex justify-content-around">
                        <img src="{{ asset('img/target.png') }}" alt="">
                    </div>
                    <div class="col-12">
                        <p class="text-center"><span><b>Второй день:</b> реконструктивная хирургия и показательные операции</span></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-md-0 mb-3">
                    <div class="col-12 mb-md-5 mb-3 d-flex justify-content-around">
                        <img src="{{ asset('img/medal.png') }}" alt="">
                    </div>
                    <div class="col-12">
                        <p class="text-center"><span><b>Третий день:</b> эстетическая хирургия и косметология</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid speakers-menu px-0 section-animation">
    <div class="black-filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader text-center text-md-left">
                        <b><span class="first-part-white">Спикеры</span> <span class="second-part">Форума</span></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-md-0">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                            <!--<img class="rounded-circle" src="http://via.placeholder.com/200x200" alt="">-->
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="zoom-out-left" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="zoom-out-right" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="zoom-out-down" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="zoom-out-up" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="zoom-out-right" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="zoom-out-right" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-left" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-right" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-up" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-down" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around" data-aos="fade-right" data-aos-duration="1500">
                            <img class="rounded-circle" src="{{ asset('img/speaker.jpg') }}" alt="">
                        </div>
                        <div class="col-12 text-center description" data-aos="fade-left" data-aos-duration="1500">
                            С 2006 года Cажиенко Владимир Вячеславович посвятил себя работе в сфере пластической реконструктивной и эстетической хирургии, провел более 2000 успешных операций.
                            Владимир Сажиенко родился 5 июня 1975 года.
                            Высшее медицинское образование с 1995 по 2001г. получил в Одесском Государственном Медицинском Университете по специальности «лечебное дело».
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container section-animation">
    <div class="subheader text-center text-lg-left ml-lg-5" data-aos="zoom-in-down" data-aos-duration="500">
        <b><span class="first-part">Программа</span> <span class="second-part">Форума</span></b>
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="500">
            <span class="subheader">
            <b>22.11.18 г. День 1. Клеточные технологии</b>
        </span>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:00 - 8:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Регистрация</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:30 - 8:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Открытие конференции: приветственное слово организаторов.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:45 - 9:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Приветственное слово <b>Мантурова Н.Е.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">9:00 - 11:30<span class="text-dark ml-3">Пленарная секция 1. Регенеративная медицина – современное состояние <b>(Председатели: Зорин В.Л., Васильев В.С., Еремин И.И.)</b></span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">9:00 - 10:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Современные тренды развития регенеративной медицины. <b>Зорин В.Л.,</b> ПАО ИСКЧ, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:00 - 10.30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Индустриальный сектор регенеративной медицины. <b>Еремин И.И.,</b> АО «ГЕНЕРИУМ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:30 - 10:55
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            тема уточняется
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:55 - 11:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Современное состояние отрасли регенеративной медицины в РФ. Правовое поле.  <b>Наделяева И.И.,</b> МГМСУ им. А.И. Евдокимова, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:20 - 11:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Дискуссия
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:30 - 12.00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Кофе брейк</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Кофе-брейк</div>
<div class="container section-animation" data-aos="zoom-in" data-aos-duration="500">
        <span>
            <h3 class="second-part">12:00 - 14:40<span class="text-dark ml-3">Секция 2. Ключевые аспекты разработки БМКП.</span></h3>
        </span>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:00 – 12.20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            15-летний опыт успешной работы банка пуповинной крови. <b>Тюмина О.В.,</b> ГБУЗ «Самарский областной медицинский центр Династия», Самара.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:20 – 12:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Источники биоматериала для производства клеточных продуктов. Анализ мировой индустрии. <b>Григорьева О.В.,</b> АО «ГЕНЕРИУМ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:40 – 13:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Правовое поле биобанкинга в РФ. <b>Наделяева И.И.,</b> МГМСУ им. А.И. Евдокимова, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:00 – 13:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Организация доклинических исследований БМКП. <b>И.Н. Корсаков,</b> АО «ГЕНЕРИУМ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:20 – 13:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Производство БМКП. Производственная площадка АО «ГЕНЕРИУМ». <b>Карпов А.П.,</b> АО «ГЕНЕРИУМ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:40 – 14:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Академическая наука – возможности индустриализации разработок. <b>Макаревич П.И.,</b> МГУ им. М.В. Ломоносова, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:00 – 14:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            ?ИПХиК?
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:20 – 14:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Дискуссия
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:30-15:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Обед</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Обед</div>
<div class="container section-animation" data-aos="zoom-in" data-aos-duration="500">
            <span>
                <h5 class="second-part">15:30 – 18:00<span class="text-dark ml-3">Секция 3. Перспективные технологии и разработки в области регенеративной медицины. (Модераторы: Зорин В.Л., Пулин А.А.)</span></h5>
            </span>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:30 – 15:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Клеточный продукт для лечения буллезного эпидермолиза. <b>Зорин В.Л.</b> ПАО «ИСКЧ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:50 – 16:10
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Слизистая оболочка полости рта как источник для клеточного продукта. <b>Пулин А.А.,</b> НИИ ОПП, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:10 – 16:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            КИНК или спинальная травма – тема уточняется. <b>Баклаушев В.П.,</b> ФНКЦ ФМБА России, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:30 – 16:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Кофе-брейк</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">
    Кофе-брейк
</div>
<div class="container section-animation" data-aos="zoom-in" data-aos-duration="500">
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:50-17:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Остеопластические биологические материалы как матрицы для направленной регенерации костной ткани. Экспериментальное исследование. <span class="second-part">Веремеев А.В.</span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:20-17:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            «Резорбируемые полимеры и тканеинженерные конструкции на их основе в реконструктивной хирургии» <span class="second-part">Фатхудинов Т.Х.</span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:40-18:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            ?ИПХиК?
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">18:00-18:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Панельная дискуссия. Проблемы индустриализации разработок регенеративной медицины (Модераторы: Еремин И.И., Макаревич П.И., Баклаушев В.П., Горбатюк Н.Г.)
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500"> </div>
<div class="container section-animation">
    <div data-aos="zoom-in-up" data-aos-duration="500">
        <span class="subheader">
            <b>23.11.18 г. День 2. Хирургия</b>
        </span>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:00 – 8:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Регистрация на второй и третий дни</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:30 – 10:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Показательная операция на аппарате body-jet (липографтинг правой молочной железы (тотальная реконструкция методом липографтинга, завершающий этап), липографтинг левой молочной железы). Во время операции будет производится демонстрация подготовки различных материалов на основе жировой ткани и возможностей их применения. <b>Нужный В.В., Васильев В.С.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">9:00 – 9:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            (В процессе трансляции операции) Как регенеративная медицина изменила практику пластического хирурга. <b>Васильев С.А.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">10:00-12:30<span class="text-dark ml-3">Секция 1. Базовые аспекты клинического применения жировой ткани (Председатели: Васильев С.А., Еремин И.И.)</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:00 – 11:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Ключевая лекция: Биологические свойства жировой ткани. <b>Еремин И.И.,</b> АО «ГЕНЕРИУМ», Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:00 – 11:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Кофе брейк</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Кофе-брейк</div>
<div class="container section-animation">
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:30 – 12:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Ключевая лекция: Клеточные технологии в эстетической медицине. Липофилинг. Перспективы. <b>Зорин В.Л.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:30-12:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Презентация новой системы для обработки жировой ткани и выделения из нее стромально-васкулярной фракции\
            (ООО «НИАРМЕДИК ПЛЮС», ООО «ДЖОИНТЕКСЭЛЛ») Веремеев А.В.. Петкова М.А.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:50 – 13:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Характеристика продуктов на основе аутологичного липоаспирата и возможности их клинического применения.
            <b>Васильев В.С.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">13:00-14:15<span class="text-dark ml-3">Секция 2. Липографтинг молочных желез (Председатели: Сажиенко В.В., Федосов С.И.)</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:00 – 13:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Липографтинг в пластической хирургии молочной железы. <b>Васильев С.А.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:15 – 13:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Липографтинг молочных желез в реконструктивной онкологической и неонкологической хирургии. <b>Сажиенко В.В.,</b>
            Одесса, Украина.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:30 – 13:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Эволюция методов реконструкции молочных желез «слинг-объем» и «объем-слинг». <b>Федосов С.И.,</b> клиника РАМИ,
            Санкт-Петербург.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:45 – 14:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Селективная аугментация мягких тканей в реконструктивной и эстетической маммоплатике. Казанцев И.Б., Томск.
            ? Гибридная аугментация молочных желёз с использованием PRP. Зайнутдинов А.М., Казань.?
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:00 – 14:10
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Магнитно-резонансная маммография при липографтинге молочной железы. <b>Дубровская Н.С.,</b> ЧОКЦО и ЯМ, Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:10 – 14:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Дискуссия
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:15-15:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Обед</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Обед</div>
<div class="container section-animation">
    <div data-aos="zoom-in-up" data-aos-duration="500">
        <span>
            <h5 class="second-part">15:00 - 16:00
                <span class="text-dark ml-3">Секция 3. Регенеративная хирургия в реабилитации онкологических пациентов (Председатели: Важенин А.В., Васильев Ю.С.)</span>
            </h5>
        </span>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:00 – 15:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Поздние лучевые повреждения мягких тканей, современные подходы к профилактике и лечению. <b>Важенин А.В.,</b> ЧОКЦО и ЯМ,
            Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:15 – 14:25
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Липографтинг в лечении поздних лучевых повреждений мягких тканей наружных локализаций. <b>Васильев В.С.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:25 – 15:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Липографтинг и стромально-васкулярная фракция жировой ткани в лечении пациентов с постлучевыми ректовагинальными
            свищами. <b>Терюшкова Ж.И.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:40 – 15:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Липографтинг в устранении приобретенных деформаций лица.
            <b>Васильев Ю.С.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">15:50 – 16:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Дискуссия
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:00 – 16:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Кофе-брейк</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Кофе-брейк</div>
<div class="container section-animation">
    <div data-aos="zoom-in-up" data-aos-duration="500">
            <span>
                <h5 class="second-part">16:30-18:00
                    <span class="text-dark ml-3">Секция 4. Эмульгированная жировая ткань и  стромально-васкулярная фракция в различных сферах хирургии (Председатели: Васильев В.С., Еремин И.И.)</span>
                </h5>
            </span>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:30 – 16:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Применение СВФ в пластической хирургии. Собственный опыт. <b>Карпюк В.Б.,</b> Краснодар.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">16:45 – 17:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Междисциплинарный подход к реализации регенеративных технологий в стоматологии. <b>Карпюк В.Б.,</b> Краснодар.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:00 – 17:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Возможности эндоскопического использования нанофэтграфтинга в лечении рубцовых стенозов просвета кишки и свищей
            кишечной стенки. <b>Ныжник Л.М.,</b> Калининград.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:15 – 17:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Применение стромально-васкулярной фракции в префабрикации перфорантных лоскутов. <b>Казанцев И.Б.,</b> Томск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:30 –17:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Лечения хронических ран нижних конечностей с использованием продуктов на основе аутологичного липоаспирата.
            <b>Шишменцев Н.Б.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:40 – 17:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Стромально-васкулярная фракция жировой ткани в лечении гонартроза. <b>Громов И.А.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">17:50 – 18:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Эмульгированная жировая ткань в лечении гонартроза. <b>Попов И.Ю.,</b> Челябинск.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">18:00 – 19:00<span class="text-dark ml-3">Секция 5. Новое в технике подготовке жирового трансплантата и выделения стромально-васкулярной фракции</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">18:00 – 18:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            тема уточняется
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">18:15 – 18:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Презентация COMBI-408, LS-2000. <b>Васильев В.С.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">18:30 – 18:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Методики обработки и обогащения жировой ткани. <b>Сажиенко В.В.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">18:45 – 19:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6">
            Дискуссия: плюсы и минусы обогащения липографта (Сажиенко В.В., Васильев В.С., Зорин В.Л., Еремин И.И.)
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">19:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Гала-ужин</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500"> </div>
<div class="container section-animation">
    <div data-aos="zoom-in-up" data-aos-duration="500">
        <span class="subheader">
            <b>24.11.18 г. 3 день. Эстетическая хирургия. Косметология.</b>
        </span>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:00 – 8:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Регистрация на последний день</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">8:30 – 9:30<span class="text-dark ml-3">Секция 1. Липофилинг в эстетической хирургии (Председатели: Васильев С.А., Зорин В.Л.)</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:30 – 8:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Применение инновационных технологий липосакции и липофилинга при коррекции контуров лица и тела. <b>Рахимов А.Я.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">8:45 – 9:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Коррекция контуров тела посредством трансплантации аутогенной жировой ткани. Методика SAE, обеспечивающая
            стабильный послеоперационный результат. <b>Федосов С.И.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">9:00 – 9:20
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Место липофилинга в коррекции возрастных изменений лица. ?Сравнительная характеристика филлеров и жира?
            <b>Васильев И.С.</b>

        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">9:20 – 9:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Применение продуктов на основе жировой ткани в коррекции рубцов и регенерации кожи. <b>Васильев В.С.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">9:30 – 11:00<span class="text-dark ml-3">Секция 2. PRP (Председатели: Зорин В.Л., Дужий А.И.)</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">9:30 – 10:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Клеточные технологии в эстетической медицине. PRP. <b>Зорин В.Л.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:30 – 10:40
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Авторский метод получения богатой тромбоцитами плазмы на основе японской технологии. <b>Дужий А.И.</b> Минск, Белоруссия.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:40 – 10:50
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Лечение хронической раны голени с помощью PRF. Клиническое наблюдение. <b>Дужий А.И.</b> Минск, Белоруссия.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">10:50 – 11:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Система для получения PPR YCELLBIO. <b>Васильев В.С.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:00 – 11:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Кофе брейк</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-down" data-aos-duration="500">Кофе-брейк</div>
<div class="container section-animation">
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">11:30 – 12:30
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Ключевая лекция: Клеточные технологии в эстетической медицине. SPRS®-терапия. Зачем нужен Паспорт
            кожи®. <b>Зорин В.Л.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-12">
                <span>
                    <h5 class="second-part">12:30 – 13:00<span class="text-dark ml-3">Секция 3. Косметология.</span></h5>
                </span>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:30 – 12:45
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Персонифицированная биокосмецивтика. <b>Гильмутдинова И.Р.</b> ООО Биомедцелл, Москва.
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">12:45 – 13:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Коллагенотерапия рубцовых деформаций кожи. Разбор клинических случаев. <b>Болгарина
                А.А.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down" data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:00 – 13:15
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            Коррекция возрастных изменений кожи с использованием инъекционной формы коллагена.
            Проспективное сравнительное исследование. <b>Иконникова Е.В.</b>
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down"
         data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">13:15 – 14:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
            <!--<img class="rounded-circle" src="http://via.placeholder.com/90x90" alt="">-->
        </div>
        <div class="col-8 col-md-6">
            темы уточняются
        </div>
    </div>
    <div class="align-items-center row mt-5" data-aos="zoom-in-down"
         data-aos-duration="500">
        <div class="col-4 col-md-3">
            <h3 class="second-part">14:00
            </h3>
        </div>
        <div class="col-3 mobile-none">
            <img class="rounded-circle small-img" src="{{ asset('img/small_doc.jpg') }}" alt="">
        </div>
        <div class="col-8 col-md-6 second-part">
            <b>Завершение конференции</b>
        </div>
    </div>
</div>
<div class="gradient-line text-center section-animation" data-aos="zoom-in-up" data-aos-duration="500">Завершение конференции</div>
<div class="container">
    <div class="row">
        <div class="col-12" data-aos="zoom-in-up" data-aos-duration="500">
            <h5 class="second-part blue-border-for-mail"><i>Принимаются заявки на участие в научной программе. Срок подачи заявок до 25 ноября по адресу b_b_c_@mail.ru</i></h5>
        </div>
    </div>
</div>
<div class="subheader text-center section-animation" data-aos="zoom-in-down" data-aos-duration="1000">
    <b><span class="first-part">Стоимость участия в</span> <span class="second-part">Форуме</span></b>
</div>
<div class="container section-animation" data-aos="zoom-in" data-aos-duration="1000">
    <div class="row d-flex justify-content-around px-4 px-md-0">
        <div class="col-12 col-md-5 col-lg-4 text-center p-0 cost-card">
            <div class="cost-card-header">
                <span class="text-white"><b><i>8000 рублей</i></b></span>
                <h1>«ВСЕ ВКЛЮЧЕНО»</h1>
            </div>
            <div class="mt-2 cost-card-body">
                <span>- три дня программы, включая показательные операции</span><br>
                <span>- 5 кофебрейков</span><br>
                <span>- 2 бизнес ланча</span><br>
                <span>- диплом участника форума</span><br>
                <button class="mt-3 buy-btn">Купить</button>
            </div>
        </div>
        <div class="col-12 col-md-auto text-center p-0 cost-card">
            <div class="cost-card-header">
                <span class="text-white"><b><i>4000 рублей</i></b></span>
                <h1>«программа -1 день»</h1>
            </div>
            <div class="mt-4 cost-card-body">
                <span>- один день Форума на выбор </span><br>
                <span>- питание в этот день</span><br>
                <span>- диплом участника форума</span><br>
                <button class="mt-5 buy-btn">Купить</button>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center p-0 cost-card">
            <div class="cost-card-header">
                <span class="text-white"><b><i>4000 рублей</i></b></span>
                <h1>«Для косметологов»</h1>
            </div>
            <div class="cost-card-body">
                <span>- 24 нобря - программа для косметологов</span><br>
                <span>- кофебрейк</span><br>
                <span>- диплом участника форума </span><br>
                <button class="mt-5 buy-btn">Купить</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid registration-menu px-0 section-animation" data-aos="fade-up" data-aos-duration="1000">
    <div class="black-filter">
        <div class="container">
            <div class="d-flex justify-content-center row">
                <div class="col-sm-6 col-md-5 mt-4">
                    <h1 class="text-center text-white">Регистрация</h1>
                    <div class="account-wall mt-5">
                        <form class="form-signin">
                            <input type="text" class="form-control reg-form" placeholder="Фамилия Имя отчество" required>
                            <input type="text" class="form-control reg-form" placeholder="Телефон" required>
                            <input type="text" class="form-control reg-form" placeholder="E-mail" required>
                            <label class="checkbox text-white mb-5 reg-form pull-left">
                                <input type="checkbox" value="agree">
                                Согласен на обработку персональных данных
                            </label>
                            <div class="row d-flex justify-content-around">
                                <button class="btn reg-btn reg-form text-uppercase" type="submit">
                                    Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container section-animation" data-aos="fade-down" data-aos-duration="1000">
    <div class="subheader text-center">
        <b><span class="first-part">Место</span> <span class="second-part">проведения Форума</span></b>
    </div>
    <span>
            Второй международный форум по регенеративной хирургии состоится в Отеле “Виктория” по адресу  г. Челябинск
            ул. Молодогвардейцев, д. 34
            Специально для участников форума на 2 дня проживания в отеле предусмотрена скидка 20%
            Стоимость 2 400 руб/сутки - одноместный номер
        </span>
    <div class=" mt-4 mb-5 d-flex justify-content-around flex-wrap">
        <img class="m-2 hotel-img img-fluid" src="{{ asset('img/hotel1.jpg') }}" alt="">
        <img class="m-2 hotel-img img-fluid" src="{{ asset('img/hotel2.jpg') }}" alt="">
        <img class="m-2 hotel-img img-fluid" src="{{ asset('img/hotel3.jpg') }}" alt="">
        <!--<img class="m-2" src="http://via.placeholder.com/300x200" alt="">-->
    </div>
    <div class="d-flex justify-content-around flex-wrap">
        <button class="big-buy-btn">забронировать номер</button>
    </div>
</div>
<div class="container section-animation" data-aos="fade-in" data-aos-duration="1000">
    <div class="subheader text-center">
        <b><span class="first-part">Наши</span> <span class="second-part">организаторы</span></b>
    </div>
    <div class=" mt-4 mb-5 d-flex justify-content-around flex-wrap organisators_and_sponsors">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
        <!--<img src="http://via.placeholder.com/100x100" alt="">-->
    </div>
    <div class="subheader text-center">
        <b><span class="first-part">Наши</span> <span class="second-part">спонсоры</span></b>
    </div>
    <div class=" mt-4 mb-5 d-flex justify-content-around flex-wrap organisators_and_sponsors">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
        <img class="mx-sm-0 mx-5 my-sm-0 my-4" src="{{ asset('img/sponsor.jpg') }}" alt="">
    </div>
</div>
<div class="container-fluid px-0 section-animation">
    <div class="add-banner" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-center text-white">
            БАННЕР
        </h1>
    </div>
</div>
<div class="container section-animation" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="subheader text-center">
        <b><span class="second-part">Гала-ужин</span></b>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <img class="w-100 img-fluid" src="{{ asset('img/hotel4.jpg') }}" alt="">
        </div>
        <div class="col-12 col-md-5">
            <b>
                    <span>
                        В рамках Форума состоится Гала-ужин в Ресторан «Виктория Гурмэ» в отеле “Виктория” на первом этаже
                    </span>
            </b>
            <br><br>
            <b>
                    <span>
                        Дата: 23 ноября, пятница
                    </span>
            </b>
            <br><br>
            <b>
                    <span>
                        Стоимость участия 4000 рублей
                    </span>
            </b>
            <br><br>
            <span class="font-weight-light">
                   ВНИМАНИЕ! Количество мест ограничено!
                </span>

            <div class="d-flex justify-content-around flex-wrap">
                <button class="mt-5 big-buy-btn">забронировать место</button>
            </div>
        </div>
    </div>
    <div class="subheader text-center">
        <b><span class="second-part">Контакты</span></b>
    </div>
    <div class="row" data-aos="flip-left" data-aos-duration="1000">
        <div class="col-12 col-md-6 mb-5 text-md-right text-center">
            <b>
                По всем вопросам Вы можете обратиться к нам:
            </b><br>
            <span>
                    телефон: 8 912 803 23 92
                </span><br>
            <span>
                    E-mail: sotnikova.iuliia@gmail.com
                </span>
            <br><br>
            <b>Адрес места проведения Форума: </b><br>
            <span>
                    г. Челябинск, ул. Молодогвардейцев, 34
                </span>
            <div class="d-flex justify-content-around flex-wrap">
                <button class="mt-5 big-buy-btn">написать письмо</button>
            </div>
        </div>
        <div class="col-12 col-md-5 mb-5">
            <div id="map">
                <!--<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9e4147f4ccee6d50ee0e7f9f4b2a5447182213bfbb9c76af138662c942af079c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>-->
            </div>
        </div>
    </div>
</div>
{{--</body>--}}
{{--</html>--}}

@endsection

@section('footScripts')

@endsection