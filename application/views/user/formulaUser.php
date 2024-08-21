<?php 
// Display the heading with a class 'NotDeclared'
echo heading($pageH1, 1, "class=NotDeclared");     

// Provide instructions for users on how to enter numbers
echo '<p>To Calculate Mean, Variance, Standard deviation:</p>';
echo '<p>You can enter your numbers in the box below separated by commas.</p>';
?>

<div class="formDiv">
    <?php
    // Display validation errors if there are any
    echo "<div class='errorMsg'>".validation_errors()."</div>";

    // Open the form and set the action to 'calculationProcess'
    echo form_open('sfmain/calculationProcess'); 

    // Form for entering values
    ?>
    <fieldset>
        <legend>Formula Values</legend>
        <label for="values">Values:</label>
        <textarea id="values" name="values" required><?php echo set_value('values', $userInfoArray['ui_values']); ?></textarea>
    </fieldset>

    <?php
    // Submit button for the form
    echo form_submit('submit', 'Calculate');
    echo form_close();
    ?>
</div>

<table>
    <thead>
        <tr><th colspan="2">Formula Results</th></tr>
    </thead>
    <tbody>
        <?php 
        // Check if the formula array is not empty
        $check = !empty($formulaArray);
        ?>
        <tr><td>Total Numbers:</td><td> <?php echo $check ? $formulaArray['total'] : ''; ?></td></tr>
        <tr><td>The Mean (Average):</td><td> <?php echo $check ? $formulaArray['mean'] : ''; ?> </td></tr>
        <tr><td>The Standard Deviation (Sample):</td><td><?php echo $check ? $formulaArray['sdPopulation'] : ''; ?></td></tr>
        <tr><td>The Standard Deviation (Population):</td><td><?php echo $check ? $formulaArray['sdSample'] : ''; ?></td></tr>
        <tr><td>The Variance (Sample):</td><td><?php echo $check ? $formulaArray['variancePopulation'] : ''; ?></td></tr>
        <tr><td>The Variance (Population):</td><td><?php echo $check ? $formulaArray['varianceSample'] : ''; ?></td></tr>
        <tr><td>The Median:</td><td><?php echo $check ? $formulaArray['median'] : ''; ?></td></tr>
    </tbody>
</table>
