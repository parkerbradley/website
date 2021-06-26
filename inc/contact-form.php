<?php
if(isset($_POST['submit'])) {
$mailto = "bradley@symplicitymedia.com";
$from = $_POST['email'];
$name = $_POST['first'];
$subject = $_POST['subject'];
$subject2 = "Your Message Has Been Received | Symplicity Media";
$message = "Client Name: ".$name. "Wrote the Following Message". "\n\n".$message;
$message2 = "Dear ". $name. "\n\n" ."Thank You for contacting us! We will get back to you shortly";
$headers = "From: ". $from;
$headers2 = "From: ". $mailto;
mail($mailto, $subject, $message, $headers);
mail($from, $subject2, $message2, $headers2);
header("Location: ../thank-you.php");
}

?>

<form class="contact" action="" method="post">
  <div class="row">
    <div class="col col50">
      <label for="first">First Name</label>
      <input type="text" name="first" id="first" placeholder="First Name" required="required">
    </div>
    <div class="col col50">
      <label for="last">Last Name</label>
      <input type="text" name="last" id="last" placeholder="Last Name" required="required">
    </div>
  </div>
  <div class="row">
    <div class="col col50">
      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" placeholder="example@domain.com" required="required">
    </div>
    <div class="col col50">
      <label for="phone">Phone Number</label>
      <input type="tel" name="phone" id="phone" placeholder="(222) 333-4444">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="message">Message</label>
      <textarea name="message" rows="4" cols="80" id="message" placeholder="Your message here..." required="required"></textarea>
    </div>
  </div>
  <p>* Denotes a required field</p>
  <button type="submit" name="submit" class="button">Submit</button>
</form>
