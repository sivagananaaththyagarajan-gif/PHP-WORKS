<?php
function valid_email($email){
return filter_var($email, FILTER_VALIDATE_EMAIL) ? "true" : "false";
}
echo valid_email("abc@example.com")."<br>";
echo valid_email("abc#example.com");
?>