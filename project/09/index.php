<?php

    // Setup a page title variable
    $page_title = "Project 09";

    // Include the page start
    include 'header.php';

    // Include the main page content
    echo '<h1>BACS 350 - Project #09</h1>';

    require 'test.php';

    echo '<a href="insert.php">Add Record</a>';
    // Include the page end
    include 'footer.php';

 ?>
