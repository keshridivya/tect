<?php session_start();
include("../../include/configure.php");
if(isset($_POST['sub'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $feat1=$_POST['feat1'];
    $feat2=$_POST['feat2'];
    $feat3=$_POST['feat3'];
    $feat4=$_POST['feat4'];
    $feat5=$_POST['feat5'];
    $feat6=$_POST['feat6'];

    $sql=mysqli_query($conn,"UPDATE `package_price` SET `name`='$name',`price`='$price',`feature1`='$feat1',`feature2`='$feat2',`feature3`='$feat3',`feature4`='$feat4',`feature5`='$feat5',`feature6`='$feat6' WHERE id='$id'");
    if($sql=1){
        header("location:pricing.php");
    }
}
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
<?php
    $sql=mysqli_query($conn,"select * from package_price");
    while($arr=mysqli_fetch_array($sql)){
    ?>
<div class="col-4 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title"></h4>
<form class="form-sample" method="post">
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="hidden" class="form-control" name="id" value="<?php echo $arr['id']; ?>">
<input type="text" class="form-control" name="name" value="<?php echo $arr['name']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="price" value="<?php echo $arr['price']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat1" value="<?php echo $arr['feature1']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat2" value="<?php echo $arr['feature2']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat3" value="<?php echo $arr['feature3']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat4" value="<?php echo $arr['feature4']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat5" value="<?php echo $arr['feature5']; ?>">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<div class="col-sm-12">
<input type="text" class="form-control" name="feat6" value="<?php echo $arr['feature6']; ?>">
</div>
</div>
</div>
</div>
<div class="form-group row">
<label><b>Payment Link</b></label>
</div>
<div class="col" align="center">

<button type="submit" name="sub" class="btn btn-primary btn-rounded btn-icon" title="Edit Blog">UPDATE</button>

</div>
</form>
</div>
</div>
</div>
<?php } ?>

</div>
</div>


<?php include("footer.ioc.php") ?>

</div>

</div>

</div>
<script>
    // initialize vue js app
    var addPricingTableApp = new Vue({
        el: "#addPricingTableApp", // id of container div
        data: {
            // all values used in this app
            title: "",
            description: "",
            amount: 0,
            features: [],
            pricings: []
        },
        // all methods
        methods: {
             
            // [store method]
 
            // delete feature box
            deleteFeature: function () {
                var index = event.target.getAttribute("data-index");
                this.features.splice(index, 1);
            },
            // add new feature box
            addFeature: function() {
                this.features.push({
                    value: ""
                });
            }
        }
    });

    // called when form is submitted
store: function () {
    // get this app instance
    var self = this;
 
    // call an AJAX to create a new pricing table
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "store.php", true);
 
    ajax.onreadystatechange = function () {
        if (this.readyState == 4) { // response received
            if (this.status == 200) { // response is successfull
                // console.log(this.responseText);
 
                // parse the response from JSON string to JS arrays and objects
                var response = JSON.parse(this.responseText);
                console.log(response);
 
                // if added in database, then prepend in local array too
                if (response.status == "success") {
                    self.pricings.unshift(response.pricing);
                } else {
                    // display an error message
                    alert(response.message);
                }
            }
 
            if (this.status == 500) {
                console.log(this.responseText);
            }
        }
    };
 
    // create form data object and append all the values in it
    var formData = new FormData();
    formData.append("title", this.title);
    formData.append("description", this.description);
    formData.append("amount", this.amount);
    formData.append("features", JSON.stringify(this.features));
 
    // actually sending the request
    ajax.send(formData);
},
</script>

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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f78fb0b3803852b","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
