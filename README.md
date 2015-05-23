# SortByMulipleCriteria
<h1>PHP-Class for sorting an array with multiple criteria</h1>

<h2>Indroduction: </h2>

Sorting by multiple criteria seems easy, but in PHP, it is not so easy as you might think
in the beginning. Do help you , if you need such a sort in PHP, i made this simple, small
class wich takes this part over.


<h2>How to use this class: </h2>

The constructor of this class needs two informations from you. The first parameter should be an array , which shows the Weight of the criteria. [ 'most-important','important','least-important',.... ] (you can have as much criteria as you like)

Example: You want to sort by Country and then secondly you want to sort by Age.

In this case the Country-criteria has an heigher weight than the Age-criteria. 
The weightList for this example to pass to the constructor would be ['Country','Age'].

The second parameter the constructor needs is the array , which the class should sort later. This array should have the format: ['first-element'   => ['some-criteria' => 5,'another-one' => 10, 'maybe-nothing-interesting' => 'blablub'],
         'second-element'  => ['some-criteria' => 5,'yet-another-one' => 4],.......
        ]
        
Example: To  take  take up the example from above again, this could look like:

['SomeGuy' => ['Country' => 'Austria', Age => 15, 'Gender' => 'm'],
 'SomeGirl => ['Country' => 'Germany', Age => 33, 'Gender' => 'w', 'town' => 'Berlin']
]

<h3>Example: </h3>

Here i will show some simple examples of how to use this class the right way :)









