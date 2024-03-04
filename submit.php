<?php
if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mess = $_POST['msg'];
        
$message="
First name : $fname
Last name : $lname
Email : $email
Phone : $phone
Message : $mess";

// Telegram function which you can call
function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';
        $data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}
        
// Set your Bot ID and Chat ID.
$telegrambot='5713391245:AAE2QSDm1qSJ0MDuS1Wso--OFHWHsSqB_b0';
$telegramchatid=853865417;

// Function call with your own text or variable
telegram ($message);
$sql1 = "INSERT INTO contact VALUES ('$fname','$lname','$email','$phone','$mess')";
$res= mysqli_query($con,$sql1);
if($res){
        header("location:contact.php")
}
else{
        echo"Invalid";
}
}

header("location:contact.php")

?>
