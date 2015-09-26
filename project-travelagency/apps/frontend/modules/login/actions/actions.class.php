<?php

/**
 * login actions.
 *
 * @package    sf_sandbox
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout('login_layout');
  }
    
  public function preExecute()
  {

     if(isset($_SESSION['username'])){
        $this->redirect("http://ausw_travelagency_app.com/home/index");
     }

     $this->conn = Doctrine_Manager::getInstance()->connection();		  
  } 
  
  public function executeLoginAuth(sfWebRequest $request)
  {
      $username = $request->getParameter('username');
      $password = $request->getParameter('password');
      
      $queryUser = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
      $st = $this->conn->execute($queryUser);
      $result = $st->fetchAll(); 
      
      if(count($result) > 0)
      {
          $_SESSION['username'] = $result[0]['username'];
      }
      
      die(json_encode(array('success' => (count($result) == 0)? false:true)));
  }
      
}
