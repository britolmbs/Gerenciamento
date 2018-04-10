<?php 
include "header.html";
?>

<section>
<div class="container">
<!-- Carrocel -->
<p>&nbsp;</p>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 carrossel" src="img/carrossel1.jpg" alt="Primeiro slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carrossel" src="img/carrossel3.jpg" alt="Segundo slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carrossel" src="img/carrossel4.jpg" alt="Terceiro slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <p>&nbsp;</p>
      <div class="row">

        <div class="card col-md-6" style="width: 16rem;">
  <img class="card-img-top prod" src="img/h1.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Canadian Burguer</h3>
    <p class="card-text h4">$32,00</p>
    <a href="#" class="btn btn-primary">Add Burguer</a>
  </div>
</div>

<div class="card col-md-6" style="width: 16rem;">
  <img  class="card-img-top prod" src="img/h2.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Brazilian Burguer</h3>
    <p class="card-text h4">$35,00</p>
    <a href="#" class="btn btn-primary">Add Burguer</a>
  </div>
</div>

<div class="card col-md-6" style="width: 16rem;">
  <img  class="card-img-top prod" src="img/h3.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Old Burguer</h3>
    <p class="card-text h4">$40,00</p>
    <a href="#" class="btn btn-primary">Add Burguer</a>
  </div>
</div>

<div class="card col-md-6" style="width: 16rem;">
  <img  class="card-img-top prod" src="img/h4.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Cheese Bacon Burguer</h3>
    <p class="card-text h4">$43,00</p>
    <a href="#" class="btn btn-primary">Add Burguer</a>
  </div>
</div>


  </div>
  </div>

</section>


<?php
include "footer.html";
?>