<form action="#">

  <header>
    <h2>Add Student Notes</h2>
  </header>

 
  <div>
    <label class="desc" id="title1" for="Field1">
      First Name
    </label>

    <div>
      <input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>


    <div>   
      <label class="desc" id="title1" for="Field1">
        Last Name
      </label>
  </div>

  <div>
      <input id="Field2" name="Field2" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>

  </div>

  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>


  <div>   
      <label class="desc" id="title1" for="Field1">Student ID</label>
  </div>

  <div>
      <input id="Field2" name="Field2" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>

    <div>
    <label class="desc" id="title106" for="Field106">
    	Studio class:
    </label>
    <div>
    <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
      <option value="First Choice">Studio 1</option>
      <option value="Second Choice">Studio 2</option>
      <option value="Third Choice">Studio 3</option>
      <option value="Third Choice">Studio 4</option>
      <option value="Third Choice">Studio 5</option>
      <option value="Third Choice">Studio 6</option>
    </select>
    </div>
  </div>

  <div>
    <label class="desc" id="title106" for="Field106">
    	Semester:
    </label>
  <div>
    <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
      <option value="First Choice">Stream 1</option>
      <option value="Second Choice">Stream 2</option>
    </select>
    </div>
  </div>

  <div>   
      <label class="desc" id="title1" for="Field1">Year:</label>
  </div>

  <div>
      <input id="Field2" name="Field2" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>  
    
  <div>
    <label class="desc" id="title4" for="Field4">
      Notes:
    </label>
  
    <div>
      <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>
  
  <div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>
  
</form>