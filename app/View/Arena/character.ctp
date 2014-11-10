<html>

    <h1>Your character:</h1>
    
    <?php echo $this->Html->image('chara.jpg', array('alt' => 'CakePHP', 'width' => '12%')); ?>
    
    <h2>Skills:</h2>
    
    <dl>
        <dt>Strength: <?php echo "$strenght";?></dt>
        <dt>Health:  <?php echo "$health";?></dt>
        <dt>Sight:  <?php echo "$sight";?></dt>
        <dt>Experience:  <?php echo "$exp";?></dt>
    </dl>
    
    <?php     
        if($exp >= 4) {
            
            echo $this->Html->link(
                '+1 strength',
                '',
                array('class' => 'button', 'target' => '_blank')
            ) . " ";  
            
            echo $this->Html->link(
                '+1 sight',
                '',
                array('class' => 'button', 'target' => '_blank')
            ) . " ";  
            
            echo $this->Html->link(
                '+3 health',
                '',
                array('class' => 'button', 'target' => '_blank')
            );  
        }
    ?>
    
</html>