<section>
    <?php
        for($i=1;$i<5;$i++)
        {
            echo "<a href='http://localhost/mvc/home/page".$i."'>$i</a><br>";
        }
    ?>
</section>
<?php
    $arr=[30,500,1,90];
    function maxim($array)
    {
        $n=0;
        for($i=0;$i<count($array);$i++)
        {
            if($array[$i]>$n)
            {
               $n=$array[$i];
            }
        }
        return $m;
    }
    print_r(maxim($arr));
?>