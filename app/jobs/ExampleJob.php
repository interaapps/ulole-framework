<?php
namespace app\jobs;


use de\interaapps\ulole\core\jobs\Job;
use de\interaapps\ulole\core\jobs\JobHandler;

class ExampleJob implements Job {

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    function run(JobHandler $jobHandler = null) {
        // Do something what is time-intensive like mailing

        // Example:
        sleep(5);

        if ($this->message == "pleaseThrowAnException")
            throw new \Exception("Oh no!");

        file_put_contents("example_file.txt", file_get_contents("example_file.txt").$this->message);

    }
}