<?php 

App::uses('AppController', 'Controller');

/**
 * Main controller of our small application
 *
 * @author ...
 */
class ArenaController extends AppController
{

    /**
     * index method : first page
     *
     * @return void
     */
    
    public function index()
    {
        $this->set('myname', "Val Isautier");
    }
    
    public function login()
    {
        
    }
    
    public function character()
    {
        $this->set('strenght', 1);
        $this->set('health', 3);
        $this->set('sight', 1);
        $this->set('exp', 5);
    }
    
    public function sight()
    {
        
    }
    
    public function diary() 
    {
        $a = array(
            "11/10/14" => "Took the stairway to heaven",
            "11/09/14" => "Ate a potato",
            "11/07/14" => "Drank a shot o' rhum"
            );
        
        $this->set('arr', $a);
    }
}
?>