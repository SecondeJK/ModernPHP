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
      //take the data from the input object and put it into the class data
      $key = $input->getId();
      $value = $input->getContent();
      $this->data[$key] = $value;
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

class DataInput implements BasicInterface
{
  public $id = "Some ID";
  public $content = "Some Content";

  public function getId(){
    return $this->id;
  }

  public function getContent()
  {
    return $this->content;
  }
}

$inputobject = new DataInput;

$object = new DataStore;

$object->addData($inputobject);

$object->getData();

?>
