class MainTask extends \Phalcon\CLI\Task {

    public function mainAction() {
        echo "\nThis is the default task and the default action \n";

        $this->console->handle(array(
           'task' => 'main',
           'action' => 'test'
        ));
    }

    public function testAction() {
        echo '\nI will get printed too!\n';
    }

}

