<?php       
session_start();                  
?>                                  
<!DOCTYPE html>       
<html>       
<body>        
<?php       
// remove all session variables        
session_unset();  
session_destroy();     
echo "The session is destroyed and variables also removed."        
?>        
</body>        
</html>
