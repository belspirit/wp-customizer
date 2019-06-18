<?php

get_header();

//get action expire date from customizer in format YYYY-MM-DD
$setUpDate = get_theme_mod('date');

$date = date( "d.m", strtotime( $setUpDate ) );

$_monthsList = array(".01" => "января", ".02" => "февраля",
    ".03" => "марта", ".04" => "апреля", ".05" => "мая", ".06" => "июня",
    ".07" => "июля", ".08" => "августа", ".09" => "сентября",
    ".10" => "октября", ".11" => "ноября", ".12" => "декабря");

//change int - number of month to its name:
$_mD = date(".m"); //for the change
$date = str_replace($_mD, " ".$_monthsList[$_mD], $date);

?>    

<h2 class="h2">Акционное предложение</h2>
<span class="my-span">Оставьте заявку
   <span id="actionDate" data-date="<?php if (!empty($setUpDate)) {echo $setUpDate; } ;?>">до <?php if (!empty($date)) {echo $date; } ;?></span> 
   и получите <span>карниз в ПОДАРОК!</span>
</span>
<p>* Количество предложений ограничено.</p>


