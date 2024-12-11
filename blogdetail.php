<?php
include "header.php";
?>
<hr class="hr text-white " />
<div class="col-lg-6 p-5 mt-5" data-aos="fade-up">
          <span class="bg-warning text-dark p-2 ">B L O G  </span>
          <h1 class="display-1 fw-bold text-white mb-5">Blogs </h1>

</div>

</div>
</div>
<div class="container-fluid">
<div class="row p-5">

<div class="container">
    
<?php
$id=mysqli_real_escape_string($con,$_GET['id']);

    $query="select * from blog where id='$id'";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);

echo "<div class='row mb-5 justify-content-center'>
<div class='col-lg-10 ps-0 text-center '>
<img src='uploads/".$row['picture']."' height='500' width='70%' />

<h3>".$row['title']."</h3>
<p>By ".$row['postby']." on ".date("d-M-Y",strtotime($row['poston']))."</p>
<p>".$row['description']."...</p>

</div>

</div>";

?>

  
</div>

</div>
</div>
<?php
include "footer.php";
?>