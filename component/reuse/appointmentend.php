<?php $list = array( 
    0 => array(
        "type" =>"text",
        "id"   =>"gname",
        "paragraph" =>"Gurdian Name"
    ),
    1 => array(
        "type" =>"email",
        "id"   =>"gmail",
        "paragraph" =>"Gurdian Email"
    ),
    2 => array(
        "type" =>"text",
        "id"   =>"cname",
        "paragraph" =>"Child Name"
    ),
    3 => array(
        "type" =>"text",
        "id"   =>"cage",
        "paragraph" =>"Child Age"
    )
 ); ?>

<div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Make Appointment</h1>
                                <form>
                                    <div class="row g-3">
                                    <?php foreach($list as $value)
                                    {?> 
                                    <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="<?php echo $value["type"]; ?>" class="form-control border-0" id="<?php echo $value["id"]; ?>" placeholder="<?php echo $value["paragraph"]; ?>">
                                                <label for="gname">Gurdian Name</label>
                                            </div>
                                        </div>
                                    <?php
                                    };
                                    ?>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="<?php echo $level;?>img/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>