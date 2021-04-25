<?php
function as_secreto_download() {
  $secreto_key = get_option('as_secreto_key');

  // Baixar o arquivo zip e descompactar.
  $url = 'https://alunos.b7web.com.br/apis/wp_secreto/download?key='.$secreto_key;
  sleep(3);

  ?>
  <div class="wrap">
  <h1>Secreto</h1></div>
  <div style="border:2px dashed green;color:green;padding:10px;margin-bottom:20px;">
    Chave validada com sucesso!
  </div>
  <a href="<?php echo admin_url('admin.php?page=as_secreto_home'); ?>">Ir até o plugin</a>
  <?php
}