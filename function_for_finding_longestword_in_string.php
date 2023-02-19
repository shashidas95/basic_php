<?php 

        $str = "The quick brown fox jumped over the lazy dog";
        function longestWord($str){
        $words = explode(' ', $str);
        $longestWordLength =0;
        $finalLongestWord='';
        foreach ($words as $word) {
            if (strlen($word)>$longestWordLength) {
                $longestWordLength =strlen($word);
                $finalLongestWord = $word; 
            }
        }
        return $finalLongestWord;
        };
        echo longestWord($str);
?>
