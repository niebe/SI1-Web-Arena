<html>
    
    
        <p>Last actions done :<br/>
            <ul>
                <?php 
                    foreach($arr as $date => $value) {
                        echo "<li>$date : $value </li>";
                    } 
                ?>
        </ul>
        </p>
    
</html>