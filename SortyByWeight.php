

 /* 
  * @desc sorts an array with multiple criteria
  */


class SortByWeight {
    
    private $weightList = [];
    private $objList    = [];
    
    /*
     * @desc intialises the class
     * @param arr $weightList -> the weight of each key
     * @param arr $obj  -> the objects which you want to sort
     */
    
    public function __construct(array $weightList,array $obj) {

        $this->weightList = (array) $weightList;
        $this->objList    = (array) $obj;
        
        
    } 
    
    
   /*
    * @desc sorts the array with the given criteria
    * return $sortObj -> the new sorted Array
    */
    
    public function weightSort() {   
        
    
        $sortObj = $this->objList; 
        uasort($sortObj,array($this,'multiple_order'));


       return $sortObj;
   
    }
    
    /*
     * @desc private function for the sorting process
     */

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
    
    
    
    
} //End of the Class


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
