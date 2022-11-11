<?php


class videoStoreTest
{

    private VideoStore $videoStore;

    public function __construct()
    {
        $inventory = [
            new video("The Matrix"),
            new video("Godfather II"),
            new video("Star Wars Episode IV: A New Hope")
        ];
        $this->videoStore =
            new VideoStore($inventory);
    }

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform ".PHP_EOL;
            echo "Choose 0 for EXIT".PHP_EOL;
            echo "Choose 1 to fill video store".PHP_EOL;
            echo "Choose 2 to rent video (as user)".PHP_EOL;
            echo "Choose 3 to return video (as user)".PHP_EOL;
            echo "Choose 4 to list inventory".PHP_EOL;

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!".PHP_EOL;
                    die;
                case 1:
                    $this->videoStore->addNewVideo();
                    break;
                case 2:
                    echo $this->videoStore->rentVideo() . PHP_EOL;
                    break;
                case 3:
                    echo $this->videoStore->returnVideo() . PHP_EOL;
                    break;
                case 4:
                    echo $this->videoStore->listAllVideos() . PHP_EOL;
                    break;
                default:
                    echo "Sorry, I don't understand you..".PHP_EOL;
            }
        }
    }
}