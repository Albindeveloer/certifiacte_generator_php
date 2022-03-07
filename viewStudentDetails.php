<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$batch_id=$_SESSION['batch_id'];
$course_id=$_SESSION['course_id'];
include ('forms/connection.php');

$results = $conn->query("SELECT * FROM student where batch_id='$batch_id' AND course_id='$course_id'");

?>



<section>

						

<table class="table table-hover table-bordered" style="width:1000px;margin-left: auto;
  margin-right: auto;" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">DOB</th>
      <th scope="col">current sem</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">photo</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
      
    </tr>
  </thead>
  <tbody>
    

  <?php while ($data = $results->fetch_assoc()) :?>

<tr>
<td><?php echo $data['stud_id']; ?></td>
<td><?php echo $data['studname']; ?></td>
<td><?php echo $data['studdob']; ?></td>
<td><?php echo $data['Csem']; ?></td>
<td><?php echo $data['studaddress']; ?></td>
<td><?php echo $data['studemail']; ?></td>
<td><?php echo $data['studphone']; ?></td>
<td><img src="uploads/student/<?php echo $data['s_avatar'];?>" alt="Avatar" class="img-circle" width="50" height="50"></td>

<td><a type="button" class="btn btn-success">edit</a></td>
<td><a type="button" class="btn btn-danger">delete</a></td>

</tr>

<?php endwhile;?>

  </tbody>
</table>

</section>