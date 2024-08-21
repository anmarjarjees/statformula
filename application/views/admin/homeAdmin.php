<?php echo heading($pageH1, 1, "class=NotDeclared"); ?>

<p>
    Below is the list of all users.
</p>
<h2>Admin Account List</h2>

<?php foreach($users as $user): ?>
    <table>
        <tr>
            <th>User ID</th>
            <td><?php echo $user['ui_id']; ?></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><?php echo $user['ui_firstname']; ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo $user['ui_lastname']; ?></td>
        </tr>
        <tr>
            <th>Occupation</th>
            <td><?php echo $user['ui_occupation']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['ui_email']; ?></td>
        </tr>
        <tr>
            <th>Website</th>
            <td colspan="3"><?php echo $user['ui_url']; ?></td> <!-- Fixed missing echo -->
        </tr>
        <tr>
            <th>Username</th>
            <td colspan="3"><?php echo $user['ui_username']; ?></td>
        </tr>             
        <tr>
            <th>Password</th>
            <td colspan="3"><?php echo $user['ui_password']; ?></td>
        </tr>
        <tr>
            <td colspan="4">
                <!-- Form to delete the admin -->
                <form action="../admin/deleteAdmin.php" method="post">
                    <input type="hidden" name="adminID" value="<?php echo $user['ui_id']; ?>" />
                    <input type="submit" value="Delete Admin" />
                </form>
                
                <!-- Form to update the admin -->
                <form action="../admin/updateAdmin.php" method="post">
                    <input type="hidden" name="adminID" value="<?php echo $user['ui_id']; ?>" />                       
                    <input type="submit" value="Update Admin" />
                </form>
            </td>
        </tr>
    </table>
    <hr />
<?php endforeach; ?>
