<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"] . "/" . $project_folder[1] . "/Header.php");
include ($_SERVER["DOCUMENT_ROOT"] . "/" . $project_folder[1] . "/database/DataAccess.php");

$db = new DataAccess();
$course = $db->select('tbl_course', '*', '');

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["delete_condition"] != null) {
    $db->delete("tbl_course", " course_id = " . $_POST["delete_condition"]);
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
                <a class="btn button-primary" href="course-entry.php">add</a>
            </div>
        </div>
        <div class="span12">
            <form action='<?php $_PHP_SELF ?>' method='POST'>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Credit</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($course) {
                            foreach ($course as $row) {
                                echo "<tr class='odd gradeX'> <td>" . $row["course_title"] . "</td> <td>" . $row["credit"] . "</td> <td>" . $row["description"] . "</td><td class='center'> " . $row["date"] . "</td><td class='center'>" . $row["status"] . "</td><td><div class='btn-group'><button class='btn btn-success'></button> <button class='btn btn-info'></button><button class='btn btn-warning'></button><button class='btn btn-danger' type='submit' name='delete_condition'value='" . $row["course_id"] . "'></button></td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>

    </div>
</div>
<?php
$project_folder = explode("/", str_replace($_SERVER["DOCUMENT_ROOT"], "", $_SERVER["SCRIPT_FILENAME"]));
include ($_SERVER["DOCUMENT_ROOT"] . "/" . $project_folder[1] . "/Footer.php");
?>
