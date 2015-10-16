<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Badcow\LoremIpsum\Generator;

class LoremController extends Controller {

  public function __construct() {
    # Put anything here that should happen before any of the other actions
  }

  public function getIndex() {
    return view('lorem.index');
  }

  public function postIndex(Request $request) {
    $this->validate($request, [
      'paragraphs' => 'required|numeric|min:1|max:99',
      ]);
    $paragraphs = $request->input('paragraphs');
    $generator = new Generator();
    $grafs = $generator->getParagraphs($paragraphs);
    $lorem = implode('<p>', $grafs);
    return view('lorem.index')->with('grafs', $grafs);
  }
}
