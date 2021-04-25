<?php
function as_activate_plugin() {
  update_option('as_secreto_key', '');
}
function as_deactivate_plugin() {
  update_option('as_secreto_key', '');
}