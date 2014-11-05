<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"/>
</head>
<body>
	<?php echo form_open('usuarios/atualizar', 'id="form-pessoas"'); ?>
 
	<input type="hidden" name="idusuario" value="<?php echo $dados_usuario[0]->idusuario; ?>"/>
 
	<label for="nome">Nome:</label><br/>
	<input type="text" name="nome" value="<?php echo $dados_usuario[0]->nome; ?>"/>
	<div class="error"><?php echo form_error('nome'); ?></div>
 
	<label for="email">Email:</label><br/>
	<input type="text" name="email" value="<?php echo $dados_usuario[0]->email; ?>"/>
	<div class="error"><?php echo form_error('email'); ?></div>
 
	<input type="submit" name="atualizar" value="Atualizar" />
 
	<?php echo form_close(); ?>
</body>
</html>