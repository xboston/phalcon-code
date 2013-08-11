<?php

use Phalcon\Mvc\Model\Transaction\Manager as TxManager,
    Phalcon\Mvc\Model\Transaction\Failed as TxFailed;

try {

    //Create a transaction manager
    $manager = new TxManager();

    //Request a transaction
    $transaction = $manager->get();

    //Get the robots will be deleted
    foreach (Robots::find("type = 'mechanical'") as $robot) {
        $robot->setTransaction($transaction);
        if ($robot->delete() == false) {
            //Something goes wrong, we should to rollback the transaction
            foreach ($robot->getMessages() as $message) {
                $transaction->rollback($message->getMessage());
            }
        }
    }

    //Everything goes fine, let's commit the transaction
    $transaction->commit();

    echo "Robots were deleted successfully!";

} catch(TxFailed $e) {
    echo "Failed, reason: ", $e->getMessage();
}

