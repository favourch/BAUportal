<div class="col-sm-8 col-md-8 col-lg-8">
    <div id="info">
      <b>GENERAL STUDENTS INFORMATION</b>
      <hr />
      <?php
      include"../portal/connect_to_mysql.php"; 
      $result = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 1") or die(mysql_error());
       
      $num = mysql_numrows($result);

      $i = 0;

      echo '<br />';

      while ($i < $num) {

      	$id = mysql_result($result, $i, "id");
      	$news = mysql_result($result, $i, "content");

          $i++;
          echo $news;

      }

      ?>
    </div>
</div>