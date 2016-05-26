<?php
//interface defines two functions that will return values
interface BasicInterface
{
  public function getId();
  public function getContent();
}

//this is where the data is being recieved and invokes the interface
class DataStore
{
    protected $data = [];

    public function addData(BasicInterface $input)
    {
      //take the data and put it into the class data
      foreach($input as $key => $value)
      {
        $this->data[$key] = $value;
      }
    }

    public function getData()
    {
      foreach($this->data as $key => $value)
      {
        echo $key ."\n";
        echo $value . "\n";
      }
    }
}

class DataInput
{
  static id = "Some ID";
  static content = "Some content";
}

$objectinput = array("BOB", "PHIL", "EDNA");
//var_dump($objectinput);

$object = new DataStore;

//$object->addData($objectinput);
//var_dump($object);

$object->getData();

 ?>
