
    <div id="login">

        <?php

            echo form_open(base_url()."auth/check_login");
                echo form_label("Username");
                echo  "<br><br>";
                echo form_input(array("id"=>"username", "name"=>"username", "type"=>"text"));
                echo  "<br><br>";
                echo form_label("Password");
                echo  "<br><br>";
                echo form_input(array("id"=>"password", "name"=>"password", "type"=>"password"));
                echo  "<br><br>";
                echo form_submit(array("id"=>"submit", "name"=>"submit", "value"=>"Submit"));
            echo form_close();

        ?>

    </div>