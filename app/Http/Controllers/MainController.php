<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;

class MainController extends Controller {

  public function __construct() {
    # Put anything here that should happen before any of the other actions
  }

  public function getIndex() {
    return view('index');
  }


}
 ?>
