<?php
function as_secreto_admin_page() {

  if(!empty($_GET['success'])) {

    as_secreto_download();

  } else {
    ?>
    <div class="wrap">
      <h1>Validação de chave Secreto</h1>
  
      Para usar este plugin você precisa inserir a Chave ou comprá-la aqui.<br/><br/>

      <?php if(!empty($_GET['fail'])): ?>
        <div style="border:2px dashed red;color:red;padding:10px;margin-bottom:20px;">
          Esta chave é inválida ou já foi utilizada.
        </div>
      <?php endif;?>
  
      <form method="POST" action="admin-post.php">
  
      <input type="hidden" name="action" value="as_secreto_admin_page_validate" />
  
      <?php wp_nonce_field('as_secreto_admin_verify'); ?>
  
      Chave de Licença:<br/>
      <input type="text" name="as_secreto_key" /><br/><br/>
  
      <input type="submit" value="Validar" />
  
      </form>
  
    </div>
    <?php
  }
  
}