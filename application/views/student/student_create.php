<h1><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open(base_url()."student_controller/insert_student"); ?>
    <label><?php echo lang('insert_first_name')?></label>
    <input type="text" id="first_name" name="first_name">

    <br><br>

    <label><?php echo lang('insert_last_name')?></label>
    <input type="text" id="last_name" name="last_name">

    <br><br>

    <label><?php echo lang('insert_grade')?></label>

    <select name="grade">
        <?php for($i=1; $i <=10; $i++){?>
            <?php echo "<option value =".$i.">".$i."</option>"?>
        <?php } ?>
    </select>

    <br><br>

    <label><?php echo lang('insert_details')?></label> <br>
    <textarea id="details" name="details"></textarea>

    <br><br>

    <label><?php echo lang('insert_id_reg')?></label>
    <input type="number" id="id_reg" name="id_reg">

    <br><br>

    <input type="submit" id="submit" name="submit" value= <?php echo lang('insert_submit') ?>>
<?php echo form_close(); ?>