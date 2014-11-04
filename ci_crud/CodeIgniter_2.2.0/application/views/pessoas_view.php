<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type=”text/css” rel=”stylesheet” href=”<?php echo base_url(); ?>assets/css/estilo.css”/>
</head>
<body>
    <?php echo form_open('pessoas/inserir', 'id="form-pessoas"'); ?>
 
    <label for="nome">Nome:</label><br/>
    <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
    <div class="error"><?php echo form_error('nome'); ?></div>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
    <div class="error"><?php echo form_error('email'); ?></div>
    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    <!-- Lista as Pessoas Cadastradas -->

<!-- Fim Lista -->
    <?php echo form_close(); ?>
<div id="grid-pessoas">
    <ul>
	<?php foreach($pessoas as $pessoa): ?>
	<li>
	    <a title="Deletar" href="<?php echo base_url() . 'pessoas/deletar/' . $pessoa->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')">X</a>
	    <span> - </span>
	    <a title="Editar" href="<?php echo base_url() . 'pessoas/editar/' . $pessoa->id; ?>"><?php echo $pessoa->nome; ?></a>
	    <span> - </span>
	    <span><?php echo $pessoa->email; ?></span>
	</li>
	<?php endforeach ?>
    </ul>
</div>
</body>
</html>