<!DOCTYPE html>
<html>

<head>
    <meta charset=”UTF-8”>
    <title>Update View</title>
</head>

<body>
    <h1>Update View</h1>
    <?php echo validation_errors(); ?>
    <?php
        echo form_open(base_url()."table_controller/update");
            echo form_label(lang('update_name'));
            echo form_input(array("id" => "ch_name", "name" => "ch_name", "placeholder" => "New Test Name Here"));

            echo form_label(lang('update_description'));
            echo form_input(array("id" => "ch_desc", "name" => "ch_desc", "placeholder" => "New Test Description Here"));

            echo form_hidden('id', $id);

            echo form_submit(array("id" => "submit", "name" => "submit", "value" => lang('update_button')));
        echo form_close();
    ?>
</body>

</html>
