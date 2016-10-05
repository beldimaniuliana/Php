<h1><?php echo $title; ?></h1>

<table>
    <tr> <th><?php echo lang('first_name') ?></th> <th><?php echo lang('last_name') ?></th> <th><?php echo lang('grade') ?></th> <th><?php echo lang('id_reg') ?></th>  <th colspan="2"><?php echo lang('table_header_4')?></th> </tr>
<?php foreach($students as $students_item) { ?>
    <tr>
    <?php   echo "<td>".$students_item['first_name']."</td>";  ?>
    <?php   echo "<td>".$students_item['last_name']."</td>";  ?>
    <?php   echo "<td>".$students_item['grade']."</td>";  ?>
    <?php   echo '<td><a href='.base_url().'student_controller/view/'.$students_item['id_reg'].">".lang('details')."</a></td>"; ?>
    <?php   echo '<td><a href='.base_url().'student_controller/delete_student/'.$students_item['id'].">".lang('table_action_1')."</a></td>"; ?>
    <?php   echo '<td><a href='.base_url().'student_controller/update_student/'.$students_item['id'].">".lang('table_action_2')."</a></td>"; ?>
    </tr>
<?php } ?>
    <tr> <td colspan="6"><a href="http://localhost/php/index.php/student_controller/insert_student"><?php echo lang('insert_submit')?></a></td> </tr>
</table>

<br>





