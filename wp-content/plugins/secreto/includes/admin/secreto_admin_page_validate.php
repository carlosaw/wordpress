<?php
function as_secreto_admin_page_validate() {
  // Verifica se usuário tem qual permissão
  if( !current_user_can('edit_theme_options') ) {
    wp_die('Acesso Negado!');
  }

  check_admin_referer('as_secreto_admin_verify');

  if(!empty($_POST['as_secreto_key'])) {

    $key = $_POST['as_secreto_key'];
    // Validar
    //$valid = true;
    $url = 'https://alunos.b7web.com.br/apis/wp_secreto/validate?key='.$key;
    $json = json_decode( file_get_contents($url) );
    // S1$G17wM8Vq$az19aSSOjpMXPaRJpmQID1
    $json->valid;

    if($json->valid === true) {
      update_option('as_secreto_key', $key);
      wp_redirect( admin_url('admin.php?page=as_secreto_key&success=1') );

    } else {
      wp_redirect( admin_url('admin.php?page=as_secreto_key&fail=1') );
    }
  } else {
    wp_redirect( admin_url('admin.php?page=as_secreto_key') );
  }

}