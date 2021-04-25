<?php
function as_secreto_admin_menus() {

  add_menu_page(
    'Validação do Secreto',
    'Secreto',
    'edit_theme_options',
    'as_secreto_key',
    'as_secreto_admin_page'
  );

}