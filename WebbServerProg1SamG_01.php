<?php
    if(isset($_GET["name"]) && isset($_GET["lastname"])){
        echo "<html><body><script>alert('Name:".$_GET["name"]." Lastname: ".$_GET["lastname"]."')</script></body>";
    } else {
        echo "Hello. To try this script add this to the url e.g. www.domainname.com/?name=myName&lastname=YourLastName";
    }
?>