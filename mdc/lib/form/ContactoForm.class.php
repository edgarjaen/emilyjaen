<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ContactoForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormInput(),
      'email'     => new sfWidgetFormInput(),
      'adjuntar'   => new sfWidgetFormInputFile(),
      'mensaje'   => new sfWidgetFormTextarea(),      
    ));    
  }
}
?>
