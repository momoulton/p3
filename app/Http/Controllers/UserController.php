<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Rych\Random\Random;

class UserController extends Controller {

  public function __construct() {
    # Put anything here that should happen before any of the other actions
  }

  public function getIndex() {
    return view('users.index');
  }

  public function postIndex(Request $request) {
    $this->validate($request, [
      'users' => 'required|numeric|min:1|max:99',
      ]);
    $numUsers = $request->input('users');
    $text = file('data/names.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $names = array();
    for ($i=0; $i<$numUsers; $i++) {
      $maxName = sizeOf($text)-1;
      $random = new Random();
      $randomNumber = $random->getRandomInteger(0,$maxName);
      $newName = $text[$randomNumber];
      array_push($names, $newName);
    }
    if ($request->has('birthday')) {
      $birthdays = array();
      $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
      for ($i=0; $i<$numUsers; $i++) {
        $randomBirth = new Random();
        $monthNumber = $randomBirth->getRandomInteger(0,11);
        $month = $months[$monthNumber];
        if ($monthNumber+1 == 2)
        {
          $day = $randomBirth->getRandomInteger(1,29);
        }
        elseif ($monthNumber+1 == 9 || $monthNumber+1 == 4 || $monthNumber+1 == 6 || $monthNumber+1 == 11)
        {
          $day = $randomBirth->getRandomInteger(1,30);
        }
        else {
          $day = $randomBirth->getRandomInteger(1,31);
        }
        $year = $randomBirth->getRandomInteger(1750,2015);
        $birthday = $month . " " . $day . ", " . $year;
        array_push($birthdays, $birthday);
      }
      return view('users.index')->with('birthdays', $birthdays)->with('names', $names);
    }
    else {
      return view('users.index')->with('names', $names);
    }
  }

}
 ?>
