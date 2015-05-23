<?php

/* 
 * @desc sorts an array with multiple criteria
 * @param arr $weightList -> the weight of each key
 * @param arr $obj  -> the objects which you want to sort
 * @retunr arr -> the new sorted array
 * 
 */


class SortByWeight {
    
    private $weightList = [];
    private $objList    = [];
    
    public function __construct(array $weightList,array $obj) {
        
    $this->weightList = (array) $weightList;
    $this->objList    = (array) $obj;
        
        
}
    
    public function weightSort()
    
{   
        
    
    $sortObj = $this->objList; 
    uasort($sortObj,array($this,'multiple_order'));
  
    
   return $sortObj;
}

private function multiple_order($a, $b)
{
  $list = $this->weightList;
    
  foreach ($list as $current)
  {
          
    if (!isset($a[$current]) || !isset($b[$current])) 
    {
        
        if (!isset($a[$current]) && ($b[$current] !== 0)) return 1;
        if (!isset($b[$current]) && ($a[$current] !== 0)) return -1;
       
    } else {
        
        if ($a[$current] === $b[$current]) {
            
             continue;
             
         } else {
             
             return  $a[$current] > $b[$current] ? -1 : 1;
             
         }
          
    }
       
    
    
   }
   
   return 0;

 
}
    
    
    
    
}

//Example: Olympic Games

    $test = ['Austria' =>  ['g' => 1, 's' => 25],
             'Germany' => ['s' => 26, 'b' => 24],
             'USA' => ['g' => 2],
             'Italy' => ['g' => 1, 's' => 25, 'b' => 1]

            ];

    //gold > silver > bronze

    $weightList = ['g','s','b'];


    $Instanz = new SortByWeight($weightList,$test);

    echo "<pre>";
    print_r($Instanz->weightSort());
    echo "</pre>";


