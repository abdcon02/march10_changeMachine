<?php
    class CoinCombination {

        function CoinCombinationGenerator($money){

            $output = "";
            $moneyInt = $money*100;
            if ($moneyInt%5 !=0) {
                $output += $moneyInt;
                $output += "P";
                $moneyInt -= $output;
            }
            if ($moneyInt$10 == 5) {
                $output +
            }


            return $output;
        }


    }


?>
