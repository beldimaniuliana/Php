<h1><?php echo $title; ?></h1>

<?php foreach($students as $students_item) { ?>
    <?php   echo $students_item['first_name'];  ?>
    <?php   echo $students_item['last_name'];  ?>
    <?php   echo $students_item['grade'];  ?>
    <?php   echo '<a href='.base_url().'student_controller/view/'.$students_item['id_reg'].">View</a>"; ?>
    <?php   echo "<br>";    ?>
<?php } ?>

<br>
<a href="http://localhost/php/index.php/student_controller/insert_student">Insert new student</a>

<br><br>




