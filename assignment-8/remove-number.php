
 <?php

  function findNumber( $str)
  {
      $num = array(0,1,2,3,4,5,6,7,8,9);

      return str_replace($num,null,$str);
  }

  echo findNumber('123Hussain');