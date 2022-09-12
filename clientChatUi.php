<?php
    $db = mysqli_connect('localhost', 'root', '', 'brokerage');
    $client='tibebe';
    $result=mysqli_query($db,"select * from tblChat where sender='$client' or receiver='$client'");
    while($row=mysqli_fetch_array($result))
    {
        if($row['sender']==$client){
            echo "<div class='clientIsSender'>".$row['message']."</div>";
        }
        if($row['receiver']==$client){
            echo "<div class='clientIsReceiver'>".$row['message']."</div>";
        }
    }
?>

<div class='clientIsSender'>
    <?php
        echo $row['message'];
    ?>
</div>

<div id='toBe'></div>
<form action="#" method="POST">
    <input type="text" id="txt" name="toBeSend">
    <input type="submit" value="send" onclick="send()">
</form>
<style>
    .clientIsSender{
        color: #f09;
    }
    .clientIsReceiver{
        color: #fff;
    }
</style>
<script>
    function send(){
        var seter=document.getElementById('toBe');
        seter.innerHTML=document.getElementById('txt').value;
    }
</script>
<?php
    $sending=$_POST["toBeSend"];
    echo $sending;
?>