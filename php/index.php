<?php

class PhoneKeyboardConverter{

    var $tab = [
        "0" => " ",
        
        "2" => "a",
        "22" => "b",
        "222" => "c",

        "3" => "d",
        "33" => "e",
        "333" => "f",

        "4" => "g",
        "44" => "h",
        "444" => "i",

        "5" => "j",
        "55" => "k",
        "555" => "l",

        "6" => "m",
        "66" => "n",
        "666" => "o",

        "7" => "p",
        "77" => "q",
        "777" => "r",
        "7777" => "s",

        "8" => "t",
        "88" => "u",
        "888" => "v",

        "9" => "w",
        "99" => "x",
        "999" => "y",
        "9999" => "z",
    ];

    public function convertToNumeric($w)
    {
        $w = strtolower($w);
        $temp = "";
        $temp2 = "";

        for ($i=0; $i <= strlen($w); $i++) {

                $temp = substr($w, 0, 1);

                if($i==0){
                    $temp2 = array_keys($this->tab, $temp)[0];
                }else{
                    $temp2 = $temp2.",".array_keys($this->tab, $temp)[0];
                }

                $w = preg_replace('/'.substr($w, 0, 1).'/', "", $w, 1);

                $i = 0;

        }
        #echo $temp2;
        #print_r(array_keys($this->tab, "E")[0]);
    }

    public function convertToString($numbers)
    {
        $temp = "";
        $temp2 = "";

        for ($i=0; $i <= strlen($numbers); $i++) { 
            
            if(substr($numbers, $i, 1) == ","&&strlen($numbers)>1){

                $temp = substr($numbers, 0, $i);

                $temp2 = $temp2.$this->tab[$temp];

                $numbers = preg_replace('/'.substr($numbers, 0, $i+1).'/', "", $numbers, 1);

                $i = 0;

            }else if(strpos($numbers, ',') === false){

                $temp = substr($numbers, 0, strlen($numbers));

                $temp2 = $temp2.$this->tab[$temp];

                $numbers = str_replace($temp, "", $numbers);

                $i = 0;
            }

        }
        #echo $temp2;
    }
}

#$foo = new PhoneKeyboardConverter;

#$foo->convertToString('5,2,22,555,33,222,9999,66,444,55');

#$foo->convertToNumeric('Ela nie ma kota');

?>