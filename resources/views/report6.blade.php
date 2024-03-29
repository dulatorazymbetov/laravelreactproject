<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      body { 
        font-family: DejaVu Serif; 
        color: #000;
        font-size: 14px;
      }
      p.text-right {
        margin: 0;
        line-height: 0.9em;
      }
      .logo {
        margin-left: 160px;
      }
      .header {
        margin: 100px 0 20px 315px;
        font-size: 18px;
        text-transform: uppercase;
      }
      .body {
        line-height: 0.3em;
      }
      .obzac {
        padding-left: 30px; 
      }
      .small {
        font-size: 11px;
        padding-left: 90px;
        line-height: 0.1em;
      }
      p.text {
        margin: 0;
        line-height: 1em;
      }
      .additional {
        padding-top: 10px;
      }
      .podpis {
        padding: 100px 0 0 30px;
      }
      .isp {
        padding-top: 200px;
        font-size: 11px;
      }
    </style>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm logo">
          <img width="405" height="90" src="img/iitu-logo.png" alt="">  
        </div>
      </div>
      <div class="row">
       <div class="col-sm mt-5">
          <p class="text-right">Приложение 9</p>
          <p class="text-right">к приказу Министра здравоохранения и</p>
          <p class="text-right">социального развития Республики Казахстан,</p>
          <p class="text-right">в которые вносят изменения и дополнения</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm header">
          Справка
        </div>
      </div>
      <div class="row">
        <div class="col-sm ml-5 body">
          <p class="text obzac">Дана гр. <b>{{$users->firstname}} {{$users->lastname}} {{$users->patronymic}} {{ date('d.m.Y', strtotime($users->birthdate)) }}</b> г.р.</p>
          <p class="text small">(Ф.И.О. обучающегося/студента, с указанием года рождения)</p>
          <p class="text obzac">В том, что он(а) действительно является обучающимся</p>
          <p class="text">АО Международного университета информационных технологий</p>
          <p class="text">«5B100200»-Системы информационной безопасности</p>
          <p class="text">Госуд.лицензия Серия АБ № 0064060 от 29.05.2009 год без ограничения срока</p>
          <p class="text">{{ $students->course }} класса/курса, форма обучения-очное.</p>
          @php
            $currentTimeinSeconds = time();  
            $currentDate = date('d.m.Y', $currentTimeinSeconds); 
            $day = date('j', $currentTimeinSeconds);
            $month = date('n', $currentTimeinSeconds);
            $year = date('Y', $currentTimeinSeconds);
            $learningPeriodS = 0;
            $learningPeriodE = 0;
            if (($day > 1 && $month > 1) && ($month < 9)) {
              $yearPeriod = $year - 1;
              $learningPeriodS = $yearPeriod - $students->course + 1;
              $learningPeriodE = $learningPeriodS + 4;
              $yearPeriod = "$yearPeriod - $year";
            } else {
              $yearPeriod = $year + 1;
              $learningPeriodS = $year - $students->course + 1;
              $learningPeriodE = $learningPeriodS + 4;
              $yearPeriod = "$year - $yearPeriod";
            }
          @endphp
          <p class="text">Справка действительна на {{ $yearPeriod }} учебный год, с 1 сентября {{ $learningPeriodS }} г. по 31 августа {{ $learningPeriodE }} г.</p>
          <p class="text">Справка выдана для предъявления в отделение</p>
          <p class="text">Государственной корпораций</p>  
          <p class="text">Срок обучения в учебном заведении 4 года</p>
          <p class="text">Период обучения с 14.08.{{ $learningPeriodS }} г. по 04.09.{{ $learningPeriodE }} г.</p>
          <p class="text additional"><b>Примечание:</b> справка действительна 1 год.</p>
          <p class="text">В случае отчисления обучающегося из учебного заведения или перевода на заочную форму обучения, руководитель учебного заведения извещает отделение Государственной корпораций  по месту жительства получателя пособия.</p>
          <p class="text podpis"><b>Проректор по АиВД</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Умаров Тимур Фаридович</b></p>
          <p class="text isp">Исп: Самат  А.
          <br>Тел.: 330-85-67 (внут.2063)</p>
        </div>
      </div>
    </div>
  </body>
</html>