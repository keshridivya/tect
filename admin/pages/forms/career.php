<?php session_start();
include("../../include/configure.php");

    include("edit_career.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>

    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">


    <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">


    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">

        <?php include("topbar.ioc.php") ?>

        <?php include("sidebar.ioc.php") ?>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">form</h4>
                                <form class="form-sample" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Location</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $location; ?>"
                                                    name="location">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Job Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $title; ?>"
                                                    name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Job Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3"
                                                    name="description"><?php echo $description;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Job Type</label>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="full time" name="chkl[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("full time",$job_type)) echo 'checked="checked"'; }?>>
                                                        Full time
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="part time" name="chkl[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("part time",$job_type)) echo 'checked="checked"'; }?>>
                                                        Part time
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Salary</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="salary"
                                                    value="<?php echo $location; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Education</label>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="ssc"
                                                            name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("ssc",$education)) echo 'checked="checked"'; }?>>
                                                        SSC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="hsc"
                                                            name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("hsc",$education)) echo 'checked="checked"'; }?>>
                                                        HSC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="gradute"
                                                            name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("gradute",$education)) echo 'checked="checked"'; }?>>
                                                        Graduate
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="under graduate" name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("under graduate",$education)) echo 'checked="checked"'; }?>>
                                                        Under Graduate
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="bsc.it/cs" name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("bsc.it/cs",$education)) echo 'checked="checked"'; }?>>
                                                        BSC.IT/CS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="bca"
                                                            name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("bca",$education)) echo 'checked="checked"'; }?>>
                                                        BCA
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="b.com/bms/bbf" name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("b.com/bms/bbf",$education)) echo 'checked="checked"'; }?>>
                                                        B.COM/BMS/BBF
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            value="msc.it/cs" name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("msc.it/cs",$education)) echo 'checked="checked"'; }?>>
                                                        MSC.IT/CS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="m.com"
                                                            name="course[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("m.com",$education)) echo 'checked="checked"'; }?>>
                                                        M.COM
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Programming Language</label>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="html"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("html",$lang)) echo 'checked="checked"'; }?>>
                                                        HTML
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="c"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("c",$lang)) echo 'checked="checked"'; }?>>
                                                        C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="c++"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("c++",$lang)) echo 'checked="checked"'; }?>>
                                                        C++
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="phython"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("phython",$lang)) echo 'checked="checked"'; }?>>
                                                        PYTHON
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="java"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("java",$lang)) echo 'checked="checked"'; }?>>
                                                        JAVA
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="adv.java"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("adv.java",$lang)) echo 'checked="checked"'; }?>>
                                                        Adv.JAVA
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="sql"
                                                            name="language[ ]"
                                                            <?php if(isset($_GET['eid'])){if(in_array("sql+",$lang)) echo 'checked="checked"'; }?>>
                                                        Sql
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Timing</label>
                                            <div class="col-sm-9">
                                                <input type="time" name="time" <?php if(isset($_GET['eid'])){ ?>
                                                    style="display:none" <?php } ?>class="form-control">
                                                <?php if(isset($_GET['eid'])){ ?>
                                                <input type="text" name="editime" value="<?php echo $time; ?>"
                                                    class="form-control">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="sub" class="btn btn-primary btn-icon-text">
                                        <i class="ti-file btn-icon-prepend"></i>
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Title</th>
                                                <th>Location</th>
                                                <th>Job Type</th>
                                                <th>Salary</th>
                                                <th>Education</th>
                                                <th>Lang</th>
                                                <th>Description</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <?php
$sql=mysqli_query($conn,"select * from career");
$dnk=1;
while($row=mysqli_fetch_array($sql))
{
?>
                                        <tbody>
                                            <tr class="table">
                                                <td><?php echo $dnk; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['job_type']; ?></td>
                                                <td><?php echo $row['salary']; ?></td>
                                                <td><?php echo $row['education']; ?></td>
                                                <td><?php echo $row['lang']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td>
                                                    <a class="btn btn-primary btn-rounded btn-icon"
                                                        href="career.php?eid=<?php echo $row['id']; ?>"
                                                        title="Edit Blog"><i class="mdi mdi-border-color"></i></a>
                                                    <a class="btn btn-danger btn-rounded btn-icon"
                                                        href="career.php?delid=<?php echo $row['id']; ?>"
                                                        onclick="return checkDelete()"
                                                        class="btn btn-primary btn-rounded btn-icon">
                                                        <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php $dnk++; }?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include("footer.ioc.php") ?>

        </div>

    </div>

    </div>


    <script src="../../vendors/js/vendor.bundle.base.js"></script>


    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>


    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>

    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6f7ff0693b522e2f","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>