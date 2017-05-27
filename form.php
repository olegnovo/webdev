<!DOCTYPE html>
<html> <head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
   <?php echo '<h1 id="greeting">Hello World!</h1>'; ?>
<?php echo '<p>Please fill out the form below to the best of your ability. Please note that although not all fields are required, we would appreciate it if you filled out as much as possible as it would help us finding exactly what you need.</p>'; ?>
  <form action="index.php" method="post">

<!-- Personal Info -->

<fieldset>
<legend> Personal Information </legend>
  Full Name: <input type="text" name="name"><br>
  E-mail: <input type="text" name="email"><br>
Skype: <input type="text" name="skype"><br>
Phone Number: <input type="text" name="phone number"><br>
<?php echo '<p>Best way to contact you?</p>'; ?>
<input type="radio" name="phone" value="Phone" unchecked>Phone<br>
<input type="radio" name="email" value="email" unchecked>Email<br>
<input type="radio" name="skype" value="skype" unchecked>Skype<br>
<input type="radio" name="inperson" value="inperson" unchecked>In Person<br>

</fieldset><br>

<!-- Business Info -->

<fieldset>
<legend> Business Information </legend>
Business Name: <input type ="text" name="businessname"><br>

<!-- The beginning of the drop down for business type -->

<div class="TypeOfBusiness" id="TypeOfBusiness">
<?php echo '<p>What kind of business are you running?</p>'; ?>
<select name= "businessType">
<option value= "Arts, crafts, and collectibles" selected="selected">Arts, crafts, and collectibles</option>
<option value= "Baby">Baby</option>
<option value= "Beauty and fragrances">Beauty and fragrances</option>
<option value= "Books and magazines">Books and magazines</option>
<option value= "Business to business">Business to business</option>
<option value= "Clothing, accessories, and shoes">Clothing, accessories, and shoes</option>
<option value= "Computers, accessories, and services">Computers, accessories, and services</option>
<option value= "Education">Education</option>
<option value= "Electronics and telecom">Electronics and telecom</option>
<option value= "Entertainment and media">Entertainment and media</option>
<option value= "Financial services and products">Financial services and products</option>
<option value= "Food retail and service">Food retail and service</option>
<option value= "Gifts and flowers">Gifts and flowers</option>
<option value= "Government">Government</option>
<option value= "Health and personal care">Health and personal care</option>
<option value= "Home and garden">Home and garden</option>
<option value= "Nonprofit">Nonprofit</option>
<option value= "Pets and animals">Pets and animals</option>
<option value= "Religion and spirituality">Religion and spirituality</option>
<option value= "Retail (not elsewhere classified)">Retail (not elsewhere classified)</option>
<option value= "Services - other">Services - other</option>
<option value= "Sports and outdoors">Sports and outdoors</option>
<option value= "Toys and hobbies">Toys and hobbies</option>
<option value= "Travel">Travel</option>
<option value= "Vehicle sales">Vehicle sales</option>
<option value= "Vehicle service and accessories">Vehicle service and accessories</option>
</select>
</div>
Other: <input type="text" name="other"><br>
<?php echo '<p>Do you currently have a website?</p>'; ?>
<input type="radio" name="yes" value="yes" unchecked>Yes<br>
<input type="radio" name="no" value="no" unchecked>No<br><br>

If Yes, Please Enter It Here: <input type="text" name="ifyes"><br>
<?php echo '<p>If you do have a website please select your hosting provider below:</p>'; ?>
<select>
  <option value="hostgator">Hostgator</option>
  <option value="1&1">1&1</option>
  <option value="inmotion">InMotion</option>
  <option value="dreamhost">Dreamhost</option>
  <option value="godaddy">GoDaddy</option>
  <option value="bluehost">Bluehost</option>
  <option value="hostwinds">Hostwinds</option>
  <option value="liquid">Liquid</option>
  <option value="a2">A2</option>
  <option value="arvixe">Arvixe</option>
  <option value="other">Other</option>
  <option value="notsure">Not Sure</option>
</select>

</fieldset>


<!-- Services Needed -->

<fieldset>
<legend> Services Needed </legend>
Please select which services you would be interested in:<br><br>
<input type="checkbox" name="website" value="Website" unchecked>Website<br>
<input type="checkbox" name="socialmedia" value="SocialMedia" unchecked>Social Media Management<br>
<input type="checkbox" name="appdev" value="AppDev" unchecked>App Development<br>
<input type="checkbox" name="graphics" value="Graphics" unchecked>Graphic/Logo Design<br>
<input type="checkbox" name="phonerepair" value="PhoneRepair" unchecked>iPhone Repair<br>
</fieldset>

<!-- Other concerns -->

<fieldset>
<legend> Other concerns </legend>


<textarea rows ="5" cols= "40" name="comment" form="usrform">Enter your comment here...</textarea>
</fieldset>
  <input type="submit" value="Send!" />
    <input type="hidden" name="button_pressed" value="1" />

<script>
function sendemail()
{
    var url = '/mail.php';

    new Ajax.Request(url,{
            onComplete:function(transport)
            {
                var feedback = transport.responseText.evalJSON();
                if(feedback.result==0)
                    alert('There was a problem sending the email, please try again.');
            }
        });

}
</script>
  </form>
  </body>


</html>
