<?php
require_once('../config/db.php');

$query = 'SELECT * FROM rezume';
$res  = mysqli_query($con,$query);

        $i=0;
        while($row = mysqli_fetch_assoc($res))
        {
        $i++;    
      ?>
      <div class="col">
          <div class="card">
             <img src="<?php echo $row['photo'];?>" width="15%" class="card-img-top"><br>
             <h5 class="card-title">
                <a href="rezume.php"><?php echo $row['surname'];?>  <?php echo $row['name'];?></a>
             </h5>
             <p class="card-text">
             <?php echo $row['spets_id'];?>
             </p>

          </div>
      </div>
      <?php
        }
        ?>