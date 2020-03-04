<?php
  $news = array();
  $news[0]['title'] = "Cristiano Ronaldo won the Champions League again";
  $news[0]['content'] = "Cristiano Ronaldo scored 3 goals in final";
  $news[0]['author'] = "John Smith";
  $news[1]['title'] = "Leo Messi won the La Liga";
  $news[1]['content'] = "Leo Messi scored maximum goal in La Liga";
  $news[1]['author'] = "Javier Correa";
  $news[2]['title'] = "Real Madrid won European Super Cup";
  $news[2]['content'] = "Real Madrid won Atletico in Super Cup final";
  $news[2]['author'] = "Alfredo Relano";
  $news[3]['title'] = "Portugal won The World Cup 2018";
  $news[3]['content'] = "Cristiano Ronaldo won The World Cup 2018";
  $news[3]['author'] = "Michele Henry";
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Anime Novelties</h1>
  <p>All new items and hot just released anime series ongoings see here!</p>
</div>
<?php 
  for ($i=1; $i < count($news) + 1; $i++) { 
?>
<div class="col-sm-10 mx-auto card-deck mb-3 text-center">
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal"><?php echo $news[$i - 1]['title'] ?></h4>
    </div>
    <img src="img/logo.jpg" width="100%" height="auto;" alt="">
    <div class="card-body">
      <p class="card-text"><?php echo $news[$i - 1]['content'] ?></p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
        </div>
        <small class="text-muted"><?php echo $news[$i - 1]['author'] ?></small>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>