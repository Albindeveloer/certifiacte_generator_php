<?php include('header.php');?>

<section>
    <center>

<?php if($_SESSION['usertype']=='teacher') : ?>

<div >

<button type="button" id="button" class="btn btn-info">Student Details </button>
<a type="button" class="btn btn-success">view Details</a>
<a type="button" class="btn btn-success">edit</a>

</div>
 
 <?php endif ?>


 <?php if($_SESSION['usertype']=='principal') : ?>

<div >

<a href="student.php" type="button" class="btn btn-info">Confirm </a>
<a type="button" class="btn btn-success">view Details</a>


</div>
 
 <?php endif ?>

 <?php if($_SESSION['usertype']=='HOD') : ?>

<div >


<a type="button" class="btn btn-success">view Details</a>
<a type="button" class="btn btn-success">edit</a>

</div>
 
 <?php endif ?>
 </center>

<div id="content">
</div>

 
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/javascriptME.js"></script>