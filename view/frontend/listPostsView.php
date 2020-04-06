<?php ob_start(); ?>
<h1>BETABEAT</h1>
    <p id="demo"><strong>Instructions</strong></p>
	
<div class="scene">
  <div class="carousel">
    <div class="carousel__cell">1</div>
    <div class="carousel__cell">2</div>
    <div class="carousel__cell">3</div>
    <div class="carousel__cell">4</div>
    <div class="carousel__cell">5</div>
    <div class="carousel__cell">6</div>
    <div class="carousel__cell">7</div>
    <div class="carousel__cell">8</div>
    <div class="carousel__cell">9</div>
    <div class="carousel__cell">10</div>
    <div class="carousel__cell">11</div>
    <div class="carousel__cell">12</div>
    <div class="carousel__cell">13</div>
    <div class="carousel__cell">14</div>
    <div class="carousel__cell">15</div>
  </div>
</div>
<div class="carousel-options">
  <p>
    <label>
      <input class="cells-range" type="range" min="3" max="20" value="9" />
    </label>
  </p>
  <p>
    <button class="prevButt">Previous</button>
    <button class="nextButt">Next</button>
  </p>
  <p>
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" checked />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" />
      vertical
    </label>
  </p>
</div>



























<?php
    // while ($data = $posts->fetch())
    // {
?> 
        <!-- <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3> -->
        
        <!-- <p>
            <?= nl2br($data['content']) ?>
            <br /><br /> <br /><br />
            <em><a id="linkSuitPost" href="index.php?action=post&amp;id=<?= $data['id'] ?>"><strong>En savoir +</strong></a></em>
        </p>
        <hr id="hrListPosts"> -->
<?php
    // }
    // $posts->closeCursor();
?>
    <!-- </div> -->



<script src="./js/slideshow.js"></script>  

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
