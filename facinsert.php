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
    <form method="POST" action="facdata.php" id="survey-form">
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
        <label for="number" id="number-label">Sem1 </label><br />
        <input
          type="int"
          name="sem1"
          id="number"
         
          placeholder="Sem1 marks"
        />
      <br>
      <br>
      <div class="form-group">
        <label for="email" id="number-label">Sem2 </label><br />
        <input
          type="int"
          name="sem2"
          id="email"
         
          placeholder="Sem 2 marks"
        />
        <br />
      </div>


      <div class="form-group">
        <label for="number" id="number-label">Sem3</label><br />
        <input
          type="int"
          name="sem3"
          id="number"
          placeholder="Sem 3 marks"
        />
        <br />
      </div>
      
      

      <div class="form-group">
        <label for="number" id="number-label">Sem4 </label><br />
        <input
          type="int"
          name="sem4"
          id="number"
         
          placeholder=" Sem 4 marks"
        />
        <br />
      </div>


      

      <!-- Submit button -->
      <button type="submit" id="submit" name="entry">Submit</button>
    </form>
  </body>
</html>
