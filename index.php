<!-- creates a checkbox -->
<input type="checkbox" name="checkbox_name" value="checkox_value">

<!-- this checks if a checkbox has been ticked -->
if(filter_has_var(INPUT_POST,'checkbox_name')) {
  // ...
}

<!-- a checkbox has no label so you should always use a checkbox with a label feature -->
<input type="checkbox" name="agree" id="agree">
<label for="agree">I agree</label>

<!-- this is an alternative way to use the label-->
<label>
    <input type="checkbox" name="agree"> I agree
</label>

<!-- When php sees the square brackets ([]) in the field name, it’ll create an associative array of values where the key is the checkbox’s name and the values are the selected values. -->
<form action="index.php" method="post">
	<input type="checkbox" name="colors[]" value="red" id="color_red" />
	<label for="color_red">Red</label>

	<input type="checkbox" name="colors[]" value="green" id="color_green" />
	<label for="color_red">Green</label>

	<input type="checkbox" name="colors[]" value="blue" id="color_blue" />
	<label for="color_red">Blue</label>
        <input type="submit" value="Submit">
</form>