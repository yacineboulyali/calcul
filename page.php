<?php 

		$nb1 = $_POST['nb1'];
        $nb2 = $_POST['nb2'];
        $cal = $_POST['cal'];



        if ($cal==0)
        {
            $tot=$nb1+$nb2;
        }
        if ($cal==1)
        {
            $tot=$nb1-$nb2;
        }
        if ($cal==2)
        {
            $tot=$nb1*$nb2;
        }
        if ($cal==3)
        {
            $tot=$nb1/$nb2;
        }



echo "le Totale est:".$tot;

        ?>


