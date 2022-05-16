<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<table class="table table-bordered">
<thead>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Permission</th>
</tr>
</thead>
<tbody>
<?php
  session_start();
  include("../../include/configure.php");
  $sql=mysqli_query($conn,"select * from permission_role");
  while($row=mysqli_fetch_array($sql)){
    
  
  ?>
  <input type="hidden" name="sidebar_id[]" value="<?php echo $row['id']; ?>">
<tr class="table">
<td><?php echo $row['sidebar_id']; ?></td>
<td><?php echo $row['roles']; ?></td>
<td>
  <select name="user_permission[]" class="form-select">
    <option value="1">True</option>
    <option value="0">False</option>
  </select>
</td>
</tr>
<?php
    }
?>
</tbody>
</table>
</body>
</html>