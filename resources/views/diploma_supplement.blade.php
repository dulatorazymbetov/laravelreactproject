<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <style type="text/css">
      body { 
        font-family: Dejavu Serif;
        font-size: 9px;
      }
      p {
        line-height: 0.5em;
      }
      .container-fluid {
        padding: 0;
      }
      .block-1 {
        width: 59%;
        float: left;
        padding-left: 15px;
      }
      .block-2 {
        width: 30.5%;
        padding-left: 5px;
        float: right;
        border: 0.1px;
        border-style: none none none solid;
      }
      hr {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
      }
      hr.line1 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 87%;
        text-align: right;
        margin-right: 0;
      }
      hr.line2 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 61%;
        text-align: right;
        margin-right: 0;
      }
      hr.line3 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 80%;
        text-align: right;
        margin-right: 0;
      }
      hr.line4 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 53%;
        text-align: right;
        margin-right: 0;
      }
      hr.line5 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 67%;
        text-align: right;
        margin-right: 0;
      }
      hr.line6 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 83%;
        text-align: right;
        margin-right: 0;
      }
      hr.line7 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 84%;
        text-align: right;
        margin-right: 0;
      }
      hr.line8 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 64%;
        text-align: right;
        margin-right: 0;
      }
      hr.line9-1 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 14%;
        margin-right: 223px;
      }
      hr.line9-2 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 21%;
        text-align: right;
        margin-right: 0;
      }
      hr.line10 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 48.5%;
        text-align: right;
        margin-right: 0;
      }
      hr.line13 {
        margin-top: -0.2em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 70%;
        text-align: right;
        margin-right: 0;
      }
      hr.line14 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 70%;
        margin-left: 7px;
      }
      hr.line15 {
        margin-top: -0.8em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 70%;
        margin-left: 7px;
      }
      hr.line16 {
        margin-top: -0.2em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 6%;
        margin-right: 321px;
      }
      hr.line17 {
        margin-top: -1em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 9%;
        text-align: right;
        margin-right: 0;
      }
      hr.line18 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 90%;
        text-align: right;
        margin-right: 0;
      }
      hr.line19 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 85%;
        text-align: right;
        margin-right: 0;
      }
      hr.line20 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 77%;
        text-align: right;
        margin-right: 0;
      }
      hr.line21 {
        margin-top: -0.9em;
        border: none; /* Убираем границу для браузера Firefox */
        color: #212529; /* Цвет линии для остальных браузеров */
        background-color: #212529; /* Цвет линии для браузера Firefox и Opera */
        width: 52%;
        text-align: right;
        margin-right: 0;
      }
      thead {
        text-align: center;
      }
      .gerb {
        padding-left: 38px;
        padding-top: 20px;
        margin-bottom: 20px;
      }
      .h1 {
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
      }
      .h2 {
        font-size: 14px;
        font-weight: bold;
        line-height: 0.8em;
        margin-bottom: 15px;
      }
      .page-break {
        page-break-after: always;
      }
      .block {
        padding-left: 15px;
        padding-right: 12px;
      }
    </style>
  <body>
    <div class="container-fluid">
      <div class="row">      
        <div class="block-1 ml-5 mt-1">
          <p>1. Фамилия &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>{{$user->lastname}}</big></p><hr class="line1" />
          <p>2. Имя, отчество(при его наличии) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>{{$user->firstname}} {{$user->patronymic}}</big></p><hr class="line2" />
          <p>&nbsp;</p><hr/>  
          <p>3. Дата рождения &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>{{ date('d.m.Y', strtotime($user->birthdate)) }}</big></p><hr class="line3" />
          <p>4. Предыдущий документ об образовании &nbsp;&nbsp;&nbsp;&nbsp;<big>диплом о высшем образований</big></p><hr class="line4" />
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>ЖБ-Б №0056129, &nbsp;&nbsp;25.06.2013</big></p><hr/>
          <p>&nbsp;</p><hr/>
          <p>5. Вступительные испытания &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>сертификат</big></p><hr class="line5" />
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>Серия AI №3196104, 12.08.2013</big></p><hr/>  
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
              $learningPeriodS = $yearPeriod - $student->course + 1;
              $learningPeriodE = $learningPeriodS + 4;
              $yearPeriod = "$yearPeriod - $year";
            } else {
              $yearPeriod = $year + 1;
              $learningPeriodS = $year - $student->course + 1;
              $learningPeriodE = $learningPeriodS + 4;
              $yearPeriod = "$year - $yearPeriod";
            }
          @endphp
          <p>6. Поступил(-а) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Международный университет информационных технологий, {{ $learningPeriodS }} г.</p><hr class="line6" />
          <p>7. Окончил(-а) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Международный университет информационных технологий, {{ $learningPeriodE }} г.</p><hr class="line7" />
          <p>8. Дополнительная информация </p><hr class="line8"/>
          <p>&nbsp;</p><hr/>
          <p>&nbsp;</p><hr/>
          <p>9. Общее количество кредитов &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>28</big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Количетсво кредитов ECTS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>73</big></p><hr class="line9-1"/><hr class="line9-2"/>
          <p>10. Средневзвешенная оценка(GPA) обучения &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>3,68</big></p><hr class="line10"/>
          <p style="margin-bottom: 5px">11. Профессиональная практика</p>
          <table border="1" width="100%">
            <thead>
              <tr>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Вид практики</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Количество кредитов</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">ECTS</td>
                <td colspan="3" style="padding-left: 5px; line-height: 1;">Оценка</td>
              </tr>
              <tr>
                <td>Буквенная</td>
                <td>В баллах</td>
                <td>Традиционная</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">Производственная практика</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">А-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">Экспериментально-исследовательская работа магистранта</td>
                <td style="padding-left: 5px; line-height: 1;">4</td>
                <td style="padding-left: 5px; line-height: 1;">16</td>
                <td style="padding-left: 5px; line-height: 1;">А</td>
                <td style="padding-left: 5px; line-height: 1;">4</td>
                <td style="padding-left: 5px; line-height: 1;">отлично</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
          <p style="margin-bottom: 5px; margin-top: 10px">12. Итоговая аттестация</p>
          <table border="1" width="100%">
            <thead>
              <tr>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Наименование дисциплин государственных экзаменов</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Количество кредитов</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">ECTS</td>
                <td colspan="3" style="padding-left: 5px; line-height: 1;">Оценка</td>
              </tr>
              <tr>
                <td>Буквенная</td>
                <td>В баллах</td>
                <td>Традиционная</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">Комлексный экзамен</td>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">4</td>
                <td style="padding-left: 5px; line-height: 1;">B-</td>
                <td style="padding-left: 5px; line-height: 1;">2,67</td>
                <td style="padding-left: 5px; line-height: 1;">хорошо</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
          <p style="margin-bottom: 5px; margin-top: 10px">13. Выполнение и защита &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;магистерский проект</p><hr class="line13"/>
          <table border="1" width="100%">
            <thead>
              <tr>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Тема дипломного проекта(работы) или диссертации</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Количество кредитов</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">ECTS</td>
                <td colspan="3" style="padding-left: 5px; line-height: 1;">Оценка</td>
              </tr>
              <tr>
                <td>Буквенная</td>
                <td>В баллах</td>
                <td>Традиционная</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">Анализ рисков в финансовом секторе с применением технологий Big data</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">11</td>
                <td style="padding-left: 5px; line-height: 1;">A</td>
                <td style="padding-left: 5px; line-height: 1;">4</td>
                <td style="padding-left: 5px; line-height: 1;">отлично</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </div> 
        <div class="block-2 mt-1">
          <div class="gerb">
            <img width="85" height="85" src="img/gerb.jpg" alt="">
          </div>
          <p style="line-height: 0.8em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>АО Международный</big></p><hr class="line14"/>
          <p style="line-height: 0.8em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>университет</big></p><hr class="line14"/>
          <p style="line-height: 0.8em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>информационных</big></p><hr class="line14"/>
          <p style="line-height: 0.8em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>технологий</big></p><hr class="line14"/>
          <p style="line-height: 0.8em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>Алматы</big></p><hr class="line14"/>
          <p class="h1">&nbsp;&nbsp;&nbsp;Приложение <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;к диплому</p>
          <p class="h2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(транскипт)</p>
          <p style="line-height: 1.5em;"><big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8470; ЖООК-М &#8470;0154068</big></p><hr class="line15"/>
          <p style="line-height: 1.5em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>11.07.2018</big></p><hr class="line14"/>
          <p style="line-height: 1.5em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big>15</big></p><hr class="line14"/>
          <p style="margin-left: 7px; line-height: 2em; font-size: 12px;"><strong>Ректор</strong></p>
          <p style="margin-left: 7px; line-height: 3.5em; font-size: 12px;"><strong>Декан факультета</strong></p>
          <p style="margin-left: 7px; line-height: 3.5em; font-size: 12px;"><strong>Секретарь</strong></p>
          <p style="margin-left: 7px; line-height: 3.5em; font-size: 12px;"><strong>М.П.</strong></p>
        </div>  
      </div>
      <div class="page-break"></div>
      <div class="row">
        <div class="block ml-5 mr-5">
          <p>14. Теоритическое обучение:</p>
          <table border="1" width="100%">
            <thead>
              <tr>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">№</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Код дисциплины</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Наименование дисциплин</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">Количество кредитов</td>
                <td rowspan="2" style="padding-left: 5px; line-height: 1;">ECTS</td>
                <td colspan="3" style="padding-left: 5px; line-height: 1;">Оценка</td>
              </tr>
              <tr>
                <td>Буквенная</td>
                <td>В баллах</td>
                <td>Традиционная</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">4</td>
                <td style="padding-left: 5px; line-height: 1;">5</td>
                <td style="padding-left: 5px; line-height: 1;">6</td>
                <td style="padding-left: 5px; line-height: 1;">7</td>
                <td style="padding-left: 5px; line-height: 1;">8</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td style="padding-left: 5px; line-height: 1;">1</td>
                <td style="padding-left: 5px; line-height: 1;">PSI 5204</td>
                <td style="padding-left: 5px; line-height: 1;">Психология</td>
                <td style="padding-left: 5px; line-height: 1;">2</td>
                <td style="padding-left: 5px; line-height: 1;">3</td>
                <td style="padding-left: 5px; line-height: 1;">A-</td>
                <td style="padding-left: 5px; line-height: 1;">3,67</td>
                <td style="padding-left: 5px; line-height: 1;">Отлично</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
          <p style="margin-bottom: 5px; margin-top: 15px">15. Количество кредитов теоритического обучения:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <big>18</big>&nbsp;&nbsp;&nbsp; количество кредитов ECTS теоритического обучения: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <big>41</big>&nbsp;&nbsp;</p><hr class="line16"/><hr class="line17"/>
          <p>16. Решением Государственной аттестационной комиссии (протокол № 2 от 21.06.2018 г.)</p>
          <p>присуждена </p><hr class="line18"/>         
          <p>по специальности </p><hr class="line19"/> 
          <p>образовательная программа</p><hr class="line20"/>  
          <p>Уровень соответствия Национальной рамки квалификации:</p><hr class="line21"/>
          <p>Данный диплом дает право профессиональной деятельности в соответствии с уровнем высшего и послевузовского</p>
          <p>образования Республики Казахстан.</p> 
        </div>
      </div>
    </div>
  </body>
</html>