<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[1]."/Header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[1]."/database/DataAccess.php");

$db = new DataAccess();
$syllabus = $db->select('tbl_syllabus', '*', '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = [];
    $course['course_title'] = $_POST['course_title'];
    $course['credit'] = $_POST['credit'];
    $course['description'] = $_POST['description'];
    $course['date'] = date("Y-m-d");
    $course['status'] = $_POST['status'];
    $result = $db->insert('tbl_course', $course);
}
?>
<div class="btn-group">
    <button type="button" class="btn">Notification<span class="label label-danger">7</span></button>
    <button type="button" class="btn">User Number<span class="label label-warning">7</span></button>
    <button type="button" class="btn">Active User<span class="label label-info">7</span></button>
</div> 
<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Course Information</div>
    </div>
    <div class="block-content collapse in">
        <div class="muted pull-right">
            <div class="btn-group">
                <a class="btn button-primary" href="course.php">View</a>
            </div>
        </div>
        <div class="span12">
            <div class="container">

                <form class="form-signin" action="course-entry.php" method="post">
                    <h2 class="form-signin-heading">Course Entry</h2>
                    <div class="form-inline">
                        <input type="text" name="course_title" class="input-block-level" placeholder="Course Title">
                    </div>
                    <div class="form-inline">
                        <select class="input-block-level" name="status" placeholder="Status">
                            <option value="">--Select One--</option>
                            <?php
                            if ($syllabus) {
                                foreach ($syllabus as $row) {
                                    echo "<option value=" . $row["syllabus_id"] .">" . $row["syllabus_name"] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="credit" class="input-block-level" placeholder="Credit"/>
                    </div>
                    <div>
                        <input type="text" name="description" class="input-block-level" placeholder="Description"/>
                    </div>
                    <div>
                        <select class="input-block-level" name="status" placeholder="Status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-large btn-success" type="submit">Submit</button>
                    </div>
                </form>

            </div> 
        </div>

    </div>
</div>
<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"]."/".$project_folder[1]."/Footer.php");
?>