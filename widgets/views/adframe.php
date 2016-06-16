<?php
use yii\helpers\Url;
use humhub\models\Setting;
?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('AdspanelModule.base', '<strong>Ads</strong> Panel'); ?>
  </div>
  <div class="panel-body">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://placehold.it/800x400" alt="Image 1">
          <div class="carousel-caption">
            <h2>Demo 1</h2>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="Image 2">
          <div class="carousel-caption">
            <h2>Demo 2</h2>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="Image 3">
          <div class="carousel-caption">
            <h2>Demo 3</h2>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>
</div>
