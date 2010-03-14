<ul>
  <li>Nombre:  <?php echo $sf_params->get('nombre') ?></li>
  <li>Email:   <?php echo $sf_params->get('email') ?></li>
  <li>Email:   <?php echo $sf_params->get('adjuntar') ?></li>
  <li>Mensaje: <?php echo $sf_params->get('mensaje') ?></li>
</ul>
<a href="<?php echo url_for('contacto/index') ?>">Volver</a>