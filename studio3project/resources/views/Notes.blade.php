<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="#" id="js-form">

  <div class="student-info">
  <label for="notesBox">First Name:</label>
    <input type="text" name="name" placeholder="Adam" />
    <label for="notesBox">Family Name:</label>
    <input type="text" name="surname" placeholder="Smith" />
    <label for="notesBox">Student ID:</label>
    <input type="integer" name="studentID" placeholder="20007367"/>
    
    <br>

    <div class="class-dropdown">
    <label for="select-choice">Studio Class:</label>
    <select name="select-choice" id="select-choice">
      <option value="Choice 1">Studio 3</option>
      <option value="Choice 2">Studio 4</option>
      <option value="Choice 3">Studio 5</option>
      <option value="Choice 3">Studio 6</option>
    </select>
  </div>

  <label for="notesBox">Year: </label>
    <input type="integer" name="Year" placeholder="2021"/>

    <div class="semester-dropdown">
    <label for="select-choice">Studio Class:</label>
    <select name="select-choice" id="select-choice">
      <option value="Choice 1">Semester 1</option>
      <option value="Choice 2">Semester 2</option>
    </select>
  </div>

  </div>

  <div class="message">
    <label for="notesBox">Add Student Notes:</label>
    <textarea cols="50" rows="15" name="notesBox" id="notesBox"></textarea>
  </div>

  <div class="submit-btn">
    <input type="submit" value="Submit" disabled/>
  </div>
</form>
  
</body>
</html>
