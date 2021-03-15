<form action="#" id="js-form">
  <div class="name">
    <input type="text" name="name" placeholder="Adam" />
    <input type="text" name="surname" placeholder="Smith" />
    <input type="mail" name="email" placeholder="adam.smith@mail.com"/>
  </div>
  <div class="radio">
    <label for="radio-choice-1">Choice 1</label>
    <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" />
    <label for="radio-choice-2">Choice 2</label>
    <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" />
  </div>
  <div class="dropdown">
    <label for="select-choice">Select Dropdown Choice:</label>
    <select name="select-choice" id="select-choice">
      <option value="Choice 1">Choice 1</option>
      <option value="Choice 2">Choice 2</option>
      <option value="Choice 3">Choice 3</option>
    </select>
  </div>
  <div class="message">
    <label for="textarea">Textarea:</label>
    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
  </div>
  <div class="check">
    <label for="checkbox">Checkbox:</label>
    <input type="checkbox" name="checkbox" id="checkbox" />
  </div>
  <div class="submit">
    <input type="submit" value="Submit" disabled/>
  </div>
</form>