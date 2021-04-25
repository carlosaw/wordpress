<?php
include 'secreto_admin_page_validate.php';

function as_secreto_admin_init() {

  add_action('admin_post_as_secreto_admin_page_validate', 'as_secreto_admin_page_validate');
}