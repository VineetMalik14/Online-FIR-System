<!DOCTYPE html>
<html>
<body>
<div align="center">
<link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="fir_list.php">My FIRs</a>
  <a class="navbar-brand" align = "right" href="logout.php">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
 <h2> FIR </h2>

<div class="container">

<?php

if(isset($_GET['submitted']))
{
if($_GET['submitted'])

{
  echo '
<div class="alert alert-success" role="alert">
  Form Submitted Successfully
</div>';
}
}

?>
<form action="fir.php" style="margin:0 auto" method="post">

   <!--For name of the complainer-->
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
       <input type="text" id="name" name="name" placeholder="Your name.." required>
      </div>
    </div>

    <!--For the age of complainer-->
    <div class="row">
      <div class="col-25">
        <label for="lname">Age:</label>
      </div>
      <div class="col-75">
       <input type="text" id ="age" name="age" placeholder="Your age.." required>
      </div>
    </div>

    <!--For the address of the complainer-->
    <div class="row">
      <div class="col-25">
        <label for="address"> Address: </label>
      </div>
      <div class="col-75">
       <input type="text" id ="address" name="address" placeholder="Your address.." required>
      </div>
    </div>

    <!--For the complaint-->
    <div class="row">
      <div class="col-25">
        <label for="complaint">Complaint</label>
      </div>
      <div class="col-75">

        <select name="complaint">
        
<option value="Attempt to murder">Attempt to murder</option>
<option value="Dowry death">Dowry death</option>
<option value="Causing death by negligence">Causing death by negligence</option>
<option value="Attempt to commit suicide">Attempt to commit suicide</option>
<option value="Causing miscarriage">Causing miscarriage</option>
<option value="Dacoity">Dacoity</option>
<option value="Theft">Theft</option>
<option value="Extortion">Extortion</option>
<option value="Cheating">Cheating</option>
<option value="Marrying again during lifetime of husband or wife">Marrying again during lifetime of husband or wife</option>
<option value="Adultery">Adultery</option>
<option value="Domestic violence">Domestic violence</option>
<option value="Bribery">Bribery</option>
<option value="Influence at elections">Influence at elections</option>
<option value="Personation at elections">Personation at elections</option>
<option value="False statement">False statement</option>
<option value="Illegal payments">Illegal payments</option>
<option value="Public nuisance">Public nuisance</option>
<option value="Sale of noxious food or drink">Sale of noxious food or drink</option>
<option value="Adulteration of drugs">Adulteration of drugs</option>
<option value="Obscene acts and songs">Obscene acts and songs</option>
<option value="Negligent conduct with respect to animal">Negligent conduct with respect to animal</option>

        </select>
      </div>
    </div>


<!--for the date of incident-->
        <div class="row">
      <div class="col-25">
        <label for="dateofincident">Date of Incident</label>
      </div>
      <div class="col-75">
       <input type="date" id ="date" name="date" required >
      </div>
    </div>


<!--for the time of the incident-->
        <div class="row">
      <div class="col-25">
        <label for="">Incident Time</label>
      </div>
      <div class="col-75">
        <input type="time" id="time" name="time" required>
 
      </div>	
    </div>
                      

    <div class="container" style="text-align: center;">
    <div class="row" style="display: inline-block;">
     <input type="submit" value="Submit" > 
    </div>

  
  </form>
</div>

</body>
</html>
