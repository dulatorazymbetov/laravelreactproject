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
        margin: 170px 0 20px 315px;
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
        padding-top: 290px;
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
        <div class="col-sm header">
          Справка
        </div>
      </div>
      <div class="row">
        <div class="col-sm ml-5 body">
          <p class="text obzac">Дана гр. <b>{{$users->firstname}} {{$users->lastname}} {{$users->patronymic}} 06.10.2000</b> г.р.</p>
          <p class="text small">(Ф.И.О. обучающегося/студента, с указанием года рождения)</p>
          <p class="text obzac">В том, что он(а) действительно является студентом 3 курса очного отделения</p>
          <p class="text">в АО "Международного университета информационных технологий"</p>
          <p class="text">по специальности «5B100200»-Системы информационной безопасности</p>
          <p class="text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class="text">Гос.лицензия Серия АБ № 0064060 от 29.05.2009 год без ограничения срока</p>
          <p class="text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class="text">Справка действительна на 2019-2020 учебный год</p>
          <p class="text">Справка выдана для предъявления по месту требования</p>
          <p class="text">Срок обучения в учебном заведении 4 (четыре) года</p>
          <p class="text">Период обучения с 01.09.2018 г. по 04.09.2021 г.</p>
          <p class="text additional">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class="text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
          <p class="text podpis">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Декан</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Мукажанов Н.К.</b></p>
          <p class="text isp">Исп: Самат  А.
          <br>Тел.: 330-85-67 (внут.2063)</p>
        </div>
      </div>
    </div>
  </body>
</html>