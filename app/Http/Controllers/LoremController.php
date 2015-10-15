<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

  public function __construct() {
    # Put anything here that should happen before any of the other actions
  }

  public function getIndex() {
    return "Here's where to create your own lorum ipsum";
  }
}
