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
        margin: 60px 0 20px 315px;
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
        padding: 170px 0 0 30px;
      }
      .isp {
        padding-top: 175px;
        font-size: 11px;
      }
    </style>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm logo">
          <img width="" height="90" src="img/iitu-logo.png" alt="">  
        </div>
      </div>
      <div class="row">
        <div class="col-sm mt-4">
          <p class="text-right">Приложение 2-1</p>
          <p class="text-right">к стандарту государственной услуги</p>
          <p class="text-right">«Назначение государственных социальных</p>
          <p class="text-right">пособий по инвалидности, по случаю</p>
          <p class="text-right">потери кормильца и по возрасту»</p>
          <!-- <p class="text-right">Приложение 2-1 к стандарту</p>
          <p class="text-right">государственной услуги</p>
          <p class="text-right">«Назначение государственных</p>
          <p class="text-right">социальных пособий</p>
          <p class="text-right">по инвалидности, по случаю</p>
          <p class="text-right">потери кормильца и по возрасту»</p> -->
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
          <p class="text">Период обучения с 14.08.{{ $learningPeriodS }} г. по 15.06.{{ $learningPeriodE }} г.</p>
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