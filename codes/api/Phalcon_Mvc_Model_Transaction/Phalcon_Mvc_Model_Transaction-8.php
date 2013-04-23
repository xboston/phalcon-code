
    <?php

    try {
    
      $manager = new Phalcon\Mvc\Model\Transaction\Manager();
    
      $transaction = $manager->get();
    
      $robot = new Robots();
      $robot->setTransaction($transaction);
      $robot->name = 'WALL·E';
      $robot->created_at = date('Y-m-d');
      if ($robot->save() == false) {
        $transaction->rollback("Can't save robot");
      }
    
      $robotPart = new RobotParts();
      $robotPart->setTransaction($transaction);
      $robotPart->type = 'head';
      if ($robotPart->save() == false) {
        $transaction->rollback("Can't save robot part");
      }
    
      $transaction->commit();
    
    } catch(Phalcon\Mvc\Model\Transaction\Failed $e) {
      echo 'Failed, reason: ', $e->getMessage();
    }



