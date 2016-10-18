Putting it All Together
This is the time to practice everything you've learned so far about associative arrays. Here's some quick reminders:

Arrays in PHP are zero-based (this means the numeric ID of the first value in the array will always be 0, not 1).

An array can contain values ("val1", "val2", etc... )

As an associative array, it can contain keys and values ("key1" => "val1", "key2" => "val2", etc... )

A multidimensional array can contain arrays within arrays!

To loop through an array containing values only, you can use the for loop. For an array containing keys and values, 
you can use the foreach loop.
*/
<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
        // On the line below, create your own associative array:
        $myArray = array ("R", "Python", "Matlab", "PHP", "HTML", "Javascript", "C++", "Java", "C#");  
        // On the line below, output one of the values to the page:
        echo $myArray[2];
          
        // On the line below, loop through the array and output
        // *all* of the values to the page:
        for($k=0; $k < count($myArray)-1; $k++){
            echo $myArray[$k];
            echo '<br />';
        }
      ?>
    </p>
  </body>
</html>
/*
MatlabR
Python
Matlab
PHP
HTML
Javascript
C++
Java
*/