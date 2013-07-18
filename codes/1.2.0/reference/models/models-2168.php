<?php

use Phalcon\Mvc\Model\Transaction\Manager as TxManager , Phalcon\Mvc\Model\Transaction\Failed as TxFailed;

try {

    //Create a transaction manager
    $manager = new TxManager();

    // Request a transaction
    $transaction = $manager->get();

    $robot = new Robots();
    $robot->setTransaction($transaction);
    $robot->name       = "WALL·E";
    $robot->created_at = date("Y-m-d");
    if ( $robot->save() == false ) {
        $transaction->rollback("Cannot save robot");
    }

    $robotPart = new RobotParts();
    $robotPart->setTransaction($transaction);
    $robotPart->robots_id = $robot->id;
    $robotPart->type      = "head";
    if ( $robotPart->save() == false ) {
        $transaction->rollback("Cannot save robot part");
    }

    //Everything goes fine, let's commit the transaction
    $transaction->commit();

} catch ( TxFailed $e ) {
    echo "Failed, reason: " , $e->getMessage();
}

