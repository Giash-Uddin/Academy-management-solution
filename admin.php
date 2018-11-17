<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[1]."/Header.php");

?>

<div class="row-fluid">
    <div class="btn-group">
        <button type="button" class="btn">Notification<span class="label label-danger">7</span></button>
        <button type="button" class="btn">User Number<span class="label label-warning">7</span></button>
        <button type="button" class="btn">Active User<span class="label label-info">7</span></button>
    </div> 
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Admin Activities</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12" >

                <div class="row-fluid" >
                    <a href="course.php">
                    <div class="" onclick="">
                        <div class="thumbnail bootsnipp-thumb" style="height: 220px;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                            <div style="padding : 20px;">
                                Course
                                <img class="danlazy" src="images/course.jpg" width="300" height="300" alt="course image not loaded">
                            </div>
                        </div>
                    </div>
                    </a>

                    <div class="scrollpost col-sm-12 col-xs-12 col-md-4 col-lg-4 col-xl-3">
                        <div class="thumbnail bootsnipp-thumb"style="height: 220px;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                            <div style="padding : 20px;">syllabus
                                <img class="danlazy" src="images/syllabus.jpg" width="300" height="300" alt="course image not loaded">
                            </div>
                        </div>
                    </div>


                    <div class="scrollpost col-sm-12 col-xs-12 col-md-4 col-lg-4 col-xl-3">
                        <div class="thumbnail bootsnipp-thumb"style="height: 220px;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;">
                            <div style="padding : 20px;">semester
                                <img class="danlazy" src="images/semester.jpg" width="300" height="300" alt="course image not loaded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[1]."/Footer.php");
?>
