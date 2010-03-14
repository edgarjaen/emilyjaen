<?php

/**
 * contacto actions.
 *
 * @package    mdc
 * @subpackage contacto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex()
  {
    $this->form = new ContactoForm();
  }

  public function executeEnviar($request)
  {
      $this->forward404Unless($request->isMethod('post'));

      $parametros = array(
        'nombre'  => $request->getParameter('nombre'),
        'email'   => $request->getParameter('email'),
        'adjuntar'   => $request->getParameter('adjuntar'),
        'mensaje' => $request->getParameter('mensaje'),
      );

      $this->redirect('contacto/gracias?'.http_build_query($parametros));
  }

  public function executeGracias()
  {
      
  }
}
