<?php
require_once('../config/db.php');


$query = 'SELECT * FROM rezume';
$res  = mysqli_query($con,$query);

                    $i=0;
                    while($row = mysqli_fetch_assoc($res))
                    {
                    $i++;    
                  ?>
                <div class="card-body">
                <link rel="stylesheet" href="assets2/css/style-starter.css">
                    <div class="teams mb-4">
                        <div class="row px-2">
                            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 px-2">
                                <div class="item">  
                                    <div class="d-team-grid team-info">
                                        <div class="column">
                                            Фотография
                                        <?php echo $row['photo'];?><br>
                                        </div>
                                        <div class="team-member">
                                            <h3 class="name-pos mb-0">Фамилия:<?php echo $row['surname'];?><br>Имя<?php echo $row['name'];?><br>отчество<?php echo $row['otchestva'];?><br></h3>
                                            <p>телефон<?php echo $row['telephone'];?><br>Опить работы<?php echo $row['opit'];?><br></p>
                                            <p>Адресс<?php echo $row['adress'];?><br>Электроная почта<?php echo $row['email'];?><br>Дата рождения<?php echo $row['birthday'];?></p><br>
                                            <p>Оброзование <?php echo $row['obrzovanie_id'];?><br>Когда он поступиль в универ<?php echo $row['soli_ogoz'];?><br>Когда он закончил в универ<?php echo $row['soli_itmom'];?><br>Как он окончил университет<?php echo $row['malumot'];?></p><br>
                                            <h3>Его Специальность:<?php echo $row['spets_id'];?><br></h3><p><?php echo $row['dop_info'];?></p><p><?php echo $row['dostizhenie'];?></p>
                                            <div class="social">
                                                <a href="#facebook" class="team-facebook"><span class="fa fa-facebook"
                                                        aria-hidden="true"></span></a>
                                                <a href="#twitter" class="team-twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                <a href="#instagram" class="team-instagram"><span class="fa fa-instagram"
                                                        aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                      
                        </div>
                    </div>
                </div>