<?php
// echo "base 64:" .base64_encode("mypassword");
// echo "<br/>";
echo "hash:" .password_hash("admin", PASSWORD_DEFAULT);
// echo"<br/>;
//echo password_verify("mypassword_",'$2y$10$jIPV/nygorrEUo0gMOLXWOs54vFxbCvdfVDzmB/Wr9H42Euqoq6VC')
//?"True":"false";