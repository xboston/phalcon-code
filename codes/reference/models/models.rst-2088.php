
    <?php

    class RobotsController extends Phalcon\Mvc\Controller
    {
        public function saveAction()
        {
            $this->db->begin();

            $robot = new Robots();

            $robot->name = "WALL·E";
            $robot->created_at = date("Y-m-d");
            if ($robot->save() == false) {
                $this->db->rollback();
                return;
            }

            $robotPart = new RobotParts();
            $robotPart->robots_id = $robot->id;
            $robotPart->type = "head";
            if ($robotPart->save() == false) {
                $this->db->rollback();
                return;
            }

            $this->db->commit();
        }
    }

