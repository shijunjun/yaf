<?php

namespace logics;

class AccountLogicModel{
  
  public function commonLogic() {
    $accountModel = new \AccountModel();  
    $accountModel->login();
    $accountModel->register();
  }

}
