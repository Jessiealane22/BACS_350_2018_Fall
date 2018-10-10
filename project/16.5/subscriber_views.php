<?php

    function add_subscriber_form() {
        
        echo '
            <div class="card">
                <h3>Add Subscriber</h3>
            
                <form action="insert.php" method="post">
                    <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
                    <p><input type="submit" value="Sign Up"/></p>
                </form>
            </div>
            ';
        
    }

    function render_list($list) {

        echo '
            <div class="card">
                <h3>Subscribers in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['name'] . ', ' . $s['email'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
    

?>