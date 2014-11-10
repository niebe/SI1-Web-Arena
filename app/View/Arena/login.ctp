<html>    

    <?php 
    
        echo $this->Form->create('Connection');
        
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        
        
        echo $this->Form->end('Login');
    ?>
    
    <p>Don't have an account yet ? Please register !</p>
    
    <?php
        echo $this->Form->create('Registration');
        
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('email');
        
        echo $this->Form->end('Register now !');
    
    ?>

</html>