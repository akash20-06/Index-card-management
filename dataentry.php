<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/png" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index Form</title>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <header>
    <h1 id="title">Input the details</h1>
    <p id="description">
      
    </p>
  </header>

  <body id="main">
    <form method="POST" action="deconnection.php" id="survey-form">
      <!-- Name field -->
      <div class="form-group">
        <label for="name" id="name-label">Name</label><br />
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter  name"
          required
        />
        <br />
      </div>

      <div class="form-group">
        <label for="number" id="number-label">Admission Number </label><br />
        <input
          type="int"
          name="adno"
          id="number"
         
          placeholder="Enter Admission Number"
        />
        <br />
      </div>
      
      <div class="form-group">
        <label for="number" id="number-label">Branch </label><br />
        <input
          type="varchar"
          name="branch"
          id="number"
         
          placeholder="Enter Branch"
        />
      <br>
      <br>
      <div class="form-group">
        <label for="email" id="number-label">Email </label><br />
        <input
          type="email"
          name="email"
          id="email"
         
          placeholder="Enter  email"
        />
        <br />
      </div>


      <div class="form-group">
        <label for="yoa" id="number-label">Year of Admission </label><br />
        <input
          type="date"
          name="yoa"
          id="yoa"
        />
        <br />
      </div>
      
      

      <div class="form-group">
        <label for="number" id="number-label">Phone Number </label><br />
        <input
          type="int"
          name="pno"
          id="number"
         
          placeholder="Enter Phone Number"
        />
        <br />
      </div>


      <div class="form-group">
        <label for="number" id="number-label">Address </label><br />
        <input
          type="varchar"
          name="add"
          id="number"
         
          placeholder="Enter Address"
        />
        <br />
 </div>

 <div class="form-group">
        <label for="number" id="number-label">Religion </label><br />
        <input
          type="varchar"
          name="rel"
          id="number"
          placeholder="Enter Religion"
        />
        <br />
 <br>

 <div class="form-group">
        <label for="number" id="number-label">CAT RANK </label><br />
        <input
          type="int"
          name="cat"
          id="number"
         
          placeholder="Enter CAT RANK"
        />
        <br />
        <br>

      <!-- Submit button -->
      <button type="submit" id="submit" name="entry">Submit</button>
    </form>
  </body>
</html>
