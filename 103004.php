<h1>sid:C112181126
<br>
name:jack</h1>
<p></p>
<?php
$weekday = array( 
            1=>"Mon", 
                "Tue", 
                "Wed", 
                "Thu",
                "Fri", 
                "Sat", 
                "Sun"
                );
for ( $i = 1; $i <= count($weekday); $i++ ){
    echo "$i : $weekday[$i] ";
}
