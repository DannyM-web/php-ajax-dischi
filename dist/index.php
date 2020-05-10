<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AJAX - PHP - DISCHI</title>
    <link rel="stylesheet" href="app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="app.js" charset="utf-8"></script>
    <?php require 'api.php' ?>
  </head>
  <body>
    <header>
        <div class="container">
          <img src="logo.png" alt="logo">

        </div>
    </header>
    <main>

      <div class="filtro-album">
          <label>Genere</label>
          <select>
              <option value=""></option>
              <option value="pop">pop</option>
              <option value="rock">rock</option>
              <option value="metal">metal</option>
              <option value="jazz">jazz</option>
          </select>
      </div>

      <div class="cds-container container">
        <?php
          foreach ($db as $album) { ?>
        <div class="cd" data-genre="{{genre}}">
            <img src="<?php echo $album['poster'] ?>" alt="">
            <h3><?php echo $album['title']; ?></h3>
            <span class="author"><?php echo $album['author'];?></span>
            <span class="year"><?php echo $album['year']; ?></span>
        </div>
        <?php }  ?>
      </div>

    </main>


    <!--  ||| HANDLEBARS ||| -->

    <script id="entry-template" type="text/x-handlebars-template">
        <div class="cd" data-genre="{{genre}}">
            <img src="{{poster}}" alt="">
            <h3>{{title}}</h3>
            <span class="author">{{author}}</span>
            <span class="year">{{year}}</span>
        </div>
      </script>
  </body>
</html>
