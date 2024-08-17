<?php
  // switch = A replacement to using elseif statements
  //          more efficient and less code to write
  $grade = "F";
  $date = date("l");

  // elseif
  // if ($grade == "A") {
  //   echo "You did great!";
  // } elseif ($grade == "B") {
  //   echo "You did good!";
  // } elseif ($grade == "C") {
  //   echo "You did ok.";
  // } elseif ($grade == "D") {
  //   echo "You did below average.";
  // } elseif ($grade == "E") {
  //   echo "You did poorly.";
  // } elseif ($grade == "F") {
  //   echo "You failed!";
  // } else {
  //   echo "{$grade} is not a valid grade.";
  // }

  //switch
  switch ($grade) {
    case 'A':
        echo "You did great!";
        break; // the breaks are needed to break out of the switch
    case 'B':
        echo "You did good!";
        break; // without the breaks
    case 'C':
        echo "You did ok.";
        break; // we would return the results for every switch
    case 'D':
        echo "You did below average.";
        break;
    case 'E':
        echo "You did poorly.";
        break;
    case 'F':
        echo "You failed!";
        break;
    
    default:
        echo "{$grade} is not a valid grade.";
        break;
  }
  
  echo "<br>";

  switch ($date) {
    case 'Monday':
        echo "I hate Mondays";
        break;
    case 'Tuesday':
        echo "I hate Tuesdays";
        break;
    case 'Wednesday':
        echo "I hate Wednesdays";
        break;
    case 'Thursday':
        echo "I hate Thursdays";
        break;
    case 'Friday':
        echo "I hate Fridays";
        break;
    case 'Saturday':
        echo "I hate Saturdays";
        break;
    case 'Sunday':
        echo "I hate Sundays";
        break;
    
    default:
        echo "{$date} is not a valid date.";
        break;
  }