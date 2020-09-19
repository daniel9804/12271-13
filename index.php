<?php
echo "hello ";
$username = "daniel98";
echo $username;
echo "1my name is $username <br>";
$age = 123;
echo $age;
$istrue = true;
echo $istrue;
$usernameArray = ["dani","vaka"];
echo $usernameArray[0];
$usernameAsocArray = ["username"=>"dani"];
echo $usernameAsocArray["username"];
$usernameAsocArray = ["username"=>"dani","age"=>"22"];
echo "<br>";
echo $usernameAsocArray["age"];
for($i=0;$i<2;$i++)
{
echo $usernameArray[$i];
};
echo "<br>";
foreach ($usernameAsocArray as $key => $item)
{
    echo  $key.$item;
}