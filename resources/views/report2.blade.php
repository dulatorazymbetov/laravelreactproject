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
        padding-left: 120px;
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
        padding-top: 130px;
        font-size: 11px;
      }
    </style>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm logo">
          <img width="405" height="90" src="img/logo.png" alt="">  
        </div>
      </div>
      <div class="row">
       <div class="col-sm mt-4">
          <p class="text-right">Приложение 4</p>
          <p class="text-right">к Правилам предоставления</p>
          <p class="text-right">государственной базовой пенсионной</p>
          <p class="text-right">выплаты за счет бюджетных</p>
          <p class="text-right">средств, а также назначения и</p>
          <p class="text-right">осуществления пенсионных выплат</p>
          <p class="text-right">по возрасту , государственных</p>
          <p class="text-right">социальных пособий по</p>
          <p class="text-right">инвалидности, по случаю</p>
          <p class="text-right">потери кормильца и по</p>
          <p class="text-right">возрасту,государственных</p>
          <p class="text-right">специальных пособий</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm header">
          Справка
        </div>
      </div>
      <div class="row">
        <div class="col-sm ml-5 body">
          <p class="text obzac">Дана гр. <b>{{$show->full_name}} {{$show->birthday}}</b> г.р.</p>
          <p class="text small">(Ф.И.О. обучающегося/студента, с указанием года рождения)</p>
          <p class="text obzac">В том, что он(а) действительно является обучающимся</p>
          <p class="text">АО Международного университета информационных технологий</p>
          <p class="text">«5B100200»-Системы информационной безопасности</p>
          <p class="text">Госуд.лицензия Серия АБ № 0064060 от 29.05.2009 год без ограничения срока</p>
          <p class="text">{{$show->kurs}} класса/курса, форма обучения-очное.</p>
          <p class="text">Справка действительна на 2019-2020 учебный год, с 1 сентября 2017 г. по 31 августа 2018 г.</p>
          <p class="text">Справка выдана для предъявления в отделение</p>
          <p class="text">Государственной корпораций</p>  
          <p class="text">Срок обучения в учебном заведении 4 года</p>
          <p class="text">Период обучения с 14.08.2018 г. по 04.09.2021 г.</p>
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