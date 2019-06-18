<?php

get_header();

//get action expire date from customizer in format YYYY-MM-DD
$setUpDate = get_theme_mod('date');

$date = date( "d.m", strtotime( $setUpDate ) );

$_monthsList = array(".01" => "января", ".02" => "февраля",
    ".03" => "марта", ".04" => "апреля", ".05" => "мая", ".06" => "июня",
    ".07" => "июля", ".08" => "августа", ".09" => "сентября",
    ".10" => "октября", ".11" => "ноября", ".12" => "декабря");

//chenge int - number of month to its name:
$_mD = date(".m"); //for the change
$date = str_replace($_mD, " ".$_monthsList[$_mD], $date);

?>    

<section class="timer">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <h2 class="h2">Акционное предложение</h2>
                <span class="my-span">Оставьте заявку
                   <span id="actionDate" data-date="<?php if (!empty($setUpDate)) {echo $setUpDate; } ;?>">до <?php if (!empty($date)) {echo $date; } ;?></span> 
                   и получите <span>карниз в ПОДАРОК!</span>
                </span>
                <p>* Количество предложений ограничено.</p>
            </div>
            <div class="countdown countdown-container" id="countdown">
                <div class="clock row">
                    <div class="clock-item clock-days countdown-time-value col-xs-6 col-sm-3 col-md-offset-2 col-md-2">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val d-text" id="days"></p>
                                    <p class="type-days type-time">Дней</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clock-item clock-hours countdown-time-value col-xs-6 col-sm-3 col-md-2">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val h-text" id="hours"></p>
                                    <p class="type-hours type-time">Часов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clock-item clock-minutes countdown-time-value col-xs-6 col-sm-3 col-md-2">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>
                                <div class="text">
                                    <p class="val m-text" id="minutes"></p>
                                    <p class="type-minutes type-time">Минут</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clock-item clock-seconds countdown-time-value col-xs-6 col-sm-3 col-md-2">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>
                                <div class="text">
                                    <p class="val s-text" id="seconds"></p>
                                    <p class="type-seconds type-time">Секунд</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
