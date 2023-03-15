<?php
require ('db.php');
$return = '';
if(isset($_POST["query"]))
{
   $search = mysqli_real_escape_string($conn, $_POST["query"]);
   $query = "SELECT * FROM employee
   WHERE id  LIKE '%".$search."%'
   OR emp_name LIKE '%".$search."%' 
   OR email LIKE '%".$search."%' 
   OR phone LIKE '%".$search."%' 
   ";}
else
{
   $query = "SELECT * FROM employee";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
   $return .='
   <div class="table-responsive">
   <table class="table table bordered">
   <tr>
      <th>ID</th>
      <th>Emp Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Created Date</th>
   </tr>';
   while($row1 = mysqli_fetch_array($result))
   {
      $return .= '
      <tr>
      <td>'.$row1["id"].'</td>
      <td>'.$row1["emp_name"].'</td>
      <td>'.$row1["email"].'</td>
      <td>'.$row1["phone"].'</td>
      <td>'.$row1["created_date"].'</td>
      </tr>';
   }
   echo $return;
   }
else
{
   echo 'No results containing all your search terms were found.';
}
?>