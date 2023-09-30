<?php 
$list = array( 
0 => array( 
    "time"  => "0.1s",
    "image" => "fa fa-bus-alt fa-3x text-primary",
    "title" => "School Bus",
    "color" => "primary"
 ),
 1 => array( 
    "time"  => "0.3s",
    "image" => "fa fa-futbol fa-3x text-success",
    "title" => "Playground",
    "color" => "success"
 ),
 2 => array( 
    "time"  => "0.5s",
    "image" => "fa fa-home fa-3x text-warning",
    "title" => "Healthy Canteen",
    "color" => "warning"
 ),
 3 => array( 
    "time"  => "0.7s",
    "image" => "fa fa-chalkboard-teacher fa-3x text-info",
    "title" => "Positive Learning",
    "color" => "info"
 )
 );
?>

<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">School Facilities</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <?php 
                    foreach($list as $value)
                    {?> 
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="<?php echo $value["time"]; ?>">
                        <div class="facility-item">
                            <div class="facility-icon bg-<?php echo $value["color"];?>">
                                <span class="bg-<?php echo $value["color"];?>"></span>
                                <i class="<?php echo $value["image"];?>"></i>
                                <span class="bg-<?php echo $value["color"]; ?>"></span>
                            </div>
                            <div class="facility-text bg-<?php echo $value["color"];?>">
                                <h3 class="text-<?php echo $value["color"];?> mb-3"><?php echo $value["title"];?></h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    };
                    ?>
                </div>
            </div>
        </div>