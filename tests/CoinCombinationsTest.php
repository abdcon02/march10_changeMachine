<?php
    require_once "src/CoinCombinations.php";

    class CoinCombinationsTest extends PHPUnit_Framework_TestCase {

        function test_CoinCombinations_1p(){
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 0.01;

            //Act
            $result = $test_CoinCombination->CoinCombinationGenerator($input);

            //Assert
            $this->assertEquals("1P", $result);

        }

        function test_CoinCombinations_6cents(){
            //Arrange
            $test_CoinCombination = new CoinCombination;
            $input = 0.06;

            //Act
            $result = $test_CoinCombination->CoinCombinationGenerator($input);

            //Assert
            $this->assertEquals("1N, 1P", $result);

        }




    }


?>
