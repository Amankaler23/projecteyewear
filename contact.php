<?php

include "header.php";
?>
<hr class="hr text-white " />
 <link href="D1.css" rel="stylesheet" />
<div class="col-lg-6 p-5 mt-5" data-aos="fade-up">
          <span class="bg-warning text-dark p-1"> C O N T A C T</span>
          <h1 class="display-1 fw-bold text-white ">Contact Us </h1>

</div>
</div>
</div>

<div class="container">
    <div class="row mt-5" >
        <div class="col-lg-6 pt-5 pb-5   " id="last">
        <span class="bg-warning text-dark  mt-5 ms-5"> C O N T A C T</span>
        <h1 class="text-white pt-3 ms-5"> Get in Touch</h1>
        <p class="pt-2 ms-5 text-secondary pe-3"> Get in touch with us today to discover your perfect eyewear solution. Our team is here to assist you every step of the way.</p>
        <img src="imagesp/logo-clearview-light.png " class= "ms-5 pt-4 pb-4">
        <h6 class="ms-5 me-5 mt-4 ps-0 pe text-white"><i class="bi bi-geo-alt-fill pe-4"></i>Lenskart #Z-3, Mall Road, Bathinda, Punjab 151001  </h6>
        <h6 class=" ms-5 mt-4 text-white"><i class="bi bi-telephone-minus-fill pe-4"></i>97880-08166</h6>
        <h6 class="ms-5 mt-3 text-white "><i class="bi bi-envelope-at-fill pe-4"></i> lenskart@gmail.com</h6>
            
</div>


<div class="col-lg-6 pt-5 pb-4" id="kiran">
    <h2 > Send A Message</h2>
    <p> Feel free to send us a message, and we'll get back to you promptly.</p>

    
        <div  id="contactform">
            <?php
            if(isset($_POST['btnsubmit']))
            {
                
                $name=mysqli_real_escape_string($con,$_POST['name']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                
                $message=mysqli_real_escape_string($con,$_POST['message']);
                $query="insert into contactus(Name,Email,Message, curdate)values('$name','$email',
                '$message',now())";
            
            if(mysqli_query ($con,$query))
        {
              echo "<script>alert('Your message is submitted')</script>";
    }
              else{
                echo mysqli_error ($con);
            }
        }    
               
            ?>
        
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
                <input type="text" class="form-control mt-5 pt-3" placeholder="enter name" name="name"/>
                <input type="email" class="form-control mt-3 pt-3 " placeholder="enter email" name="email"/>
              
                <textarea class="form-control mt-3 pt-3 " placeholder="enter message"rows="5" name="message"></textarea>
                <button  type="submit" class="btn btn-black rounded-0 py-2 px-4 mt-4" name="btnsubmit"> Submit<i class="bi bi-arrow-right mt-2 "></i>
                </button>
</form>
</div>
</div>
    </div>
    </div>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8635359960404!2d74.94022371080106!3d30.21244207473453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917330a98f3679f%3A0x6039d8e23ebb4898!2sLenskart.com%20at%20Bathinda!5e0!3m2!1sen!2sin!4v1720596391502!5m2!1sen!2sin" width="1125" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="m-0 p-0" ></iframe>
</div>

</div>
</div>
<?php
include "footer.php";
?>