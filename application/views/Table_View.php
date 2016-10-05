
    <h1><?php echo $title;?></h1>

    <table>
        <tr>    <th><?php echo lang("table_header_1");?></th>     <th><?php echo lang("table_header_2");?></th>   <th><?php echo lang("table_header_3");?></th>    <th colspan="2"><?php echo lang("table_header_4");?></th>   <tr>
        <?php
            foreach ($records as $row){
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->name."</td>";
                echo "<td>".$row->description."</td>";
                echo "<td><a href=".base_url()."table_controller/delete/".$row->id.">".lang("table_action_1")."</a></td>";
                echo "<td><a href=".base_url()."table_controller/update_view/".$row->id.">".lang("table_action_2")."</a></td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="5">

            <?php
            echo form_open(base_url()."table_controller/insert");
            echo form_label(lang('insert_name'));
            echo form_input(array("id" => "name", "name" => "name", "placeholder" => "Test Name Here"));
            ?>

            </td>
        </tr>

        <tr>
            <td colspan="5">

            <?php
            echo form_label(lang('insert_description'));
            echo form_input(array("id" => "desc", "name" => "desc", "placeholder" => "Test Description Here"));
            ?>

            </td>
        </tr>

        <tr>
            <td colspan="5">

                <?php
                echo form_submit(array("id" => "submit", "name" => "submit", "value" => lang('insert_submit')));
                echo form_close();
                ?>

            </td>
        </tr>
        <?php if(validation_errors()) {
            echo "<tr><td colspan=\"5\">". validation_errors() ."</td></tr>";
        } ?>
    </table>

   <br>


