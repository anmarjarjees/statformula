<?php echo heading($pageH1, 1, "class=NotDeclared"); ?>

<p>Start by entering your values to find the results using the six formulas below:</p>
<p>
    Enter your numbers in the values box, separated by commas or spaces only. Any other characters are not allowed.
</p>

<div class="formDiv">
    <?php
    // Display validation errors if they exist from the last submission
    echo "<div class='errorMsg'>".validation_errors()."</div>";
    
    // Open the form, specifying the action URL
    // The form will be submitted to the calculationProcess function inside the sfmain controller
    echo form_open('sfmain/calculationProcess');
    ?>
    
    <fieldset>
        <legend>Formula Values</legend>
        <label for="values">Values:</label>
        <textarea id="values" name="values" required><?php echo set_value('values'); ?></textarea>
    </fieldset>
    
    <?php
    // Submit button for form submission
    echo form_submit('submit', 'Calculate');
    echo form_close();
    ?>
</div>

<table>
    <thead>
        <tr>
            <th colspan="2">Formula Results</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $check = !empty($formulaArray);
        ?>
        <tr>
            <td>Total Numbers:</td>
            <td><?php if ($check) { echo $formulaArray['total']; } ?></td>
        </tr>
        <tr>
            <td>The Mean (Average):</td>
            <td><?php if ($check) { echo $formulaArray['mean']; } ?></td>
        </tr>
        <tr>
            <td>The Standard Deviation (Sample):</td>
            <td><?php if ($check) { echo $formulaArray['sdSample']; } ?></td>
        </tr>
        <tr>
            <td>The Standard Deviation (Population):</td>
            <td><?php if ($check) { echo $formulaArray['sdPopulation']; } ?></td>
        </tr>
        <tr>
            <td>The Variance (Sample):</td>
            <td><?php if ($check) { echo $formulaArray['varianceSample']; } ?></td>
        </tr>
        <tr>
            <td>The Variance (Population):</td>
            <td><?php if ($check) { echo $formulaArray['variancePopulation']; } ?></td>
        </tr>
        <tr>
            <td>The Median:</td>
            <td><?php if ($check) { echo $formulaArray['median']; } ?></td>
        </tr>
    </tbody>
</table>
