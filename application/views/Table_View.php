<!DOCTYPE html>
<html>

<head>
    <meta charset=”UTF-8”>
    <title>Table View</title>

    <style>
        table {
            border-collapse: collapse;
        }
        table th, tr, td {
            border: 1px solid black;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Table View</h1>
    <?php echo validation_errors(); ?>
    <table>
        <tr>    <th>ID</th>     <th>NAME</th>   <th>DESCRIPTION</th>    <th colspan="2">ACTION</th>   <tr>
        <?php
            foreach ($records as $row){
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->name."</td>";
                echo "<td>".$row->description."</td>";
                echo "<td><a href=".base_url()."table_controller/delete/".$row->id.">Delete</a></td>";
                echo "<td><a href=".base_url()."table_controller/update_view/".$row->id.">Update</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

   <br>

    <?php
        echo form_open(base_url()."table_controller/insert");
            echo form_label("Name");
            echo form_input(array("id" => "name", "name" => "name", "placeholder" => "Test Name Here"));

            echo "<br><br>";

            echo form_label("Description");
            echo form_input(array("id" => "desc", "name" => "desc", "placeholder" => "Test Description Here"));

            echo "<br><br>";

            echo form_submit(array("id" => "submit", "name" => "submit", "value" => "Insert Test"));
        echo form_close();
    ?>

</body>

</html>
