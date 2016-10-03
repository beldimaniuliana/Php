<h1><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open(base_url()."student_controller/insert_student"); ?>
    <label>First Name: </label>
    <input type="text" id="first_name" name="first_name">

    <br><br>

    <label>Last Name: </label>
    <input type="text" id="last_name" name="last_name">

    <br><br>

    <label>Grade : </label>

    <select name="grade">
        <?php for($i=1; $i <=10; $i++){?>
            <?php echo "<option value =".$i.">".$i."</option>"?>
        <?php } ?>
    </select>

    <br><br>

    <label>Details : </label> <br>
    <textarea id="details" name="details"></textarea>

    <br><br>

    <label>Id registration : </label>
    <input type="number" id="id_reg" name="id_reg">

    <br><br>

    <input type="submit" id="submit" name="submit" value="Insert Student">
<?php echo form_close(); ?>