<?php 
    require_once 'views.php';
    require_once 'db.php';    
    require_once 'log.php';
    require_once 'files.php';
    require_once 'Parsedown.php';
    



    // Convert the Markdown into HTML
   
    $content = 'HOME';
    

    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "A smarter tool", 
        "content"    => $content);

    echo render_page($settings);
?>