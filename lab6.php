<strong style="color:green;background:lightpink;">
<?php
    $handle = fopen("counter.txt","r");
    if(!$handle)
    {
        echo "Could not open the file";
    }
    else{
        $counter =(int)fread($handle,20);
        fclose($handle);
        $counter++;
        echo "<h1 align=center>REFRESH PAGE</h1><h2 align=center><strong>You are visitor Number ". $counter . "</strong></h2>";
        $handle=fopen("counter.txt","w");
        fwrite($handle,$counter);
        fclose($handle);
    }
?>