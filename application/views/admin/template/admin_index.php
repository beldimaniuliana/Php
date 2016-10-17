<div id="admin_login">
    <h1>Welcome</h1>
    <?php echo $this->session->userdata('user'); ?>
    <br>
    <a href="<?php echo base_url()."auth/unset_session_data" ?>">Undet user</a>
    <br>
    <a href="<?php echo base_url()."auth" ?>">Back</a>
</div>