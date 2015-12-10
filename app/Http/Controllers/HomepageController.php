<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Entry;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      return Auth::check() ? $this->viewEntries() : view('welcome');
    }


    public function viewEntries() {
      return view('entry.viewAll', [ 'user' => Auth::user(), 'entries' => Entry::get() ]);
    }

    public function viewEntry($id) {
      return view('entry.view', [ 'entry' => Entry::findOrFail($id) ]);
    }

    public function newEntry() {
      return view('entry.new');
    }

    public function createEntry(Request $request) {
      $entry = new Entry();
      $entry->title = $request->input('title');
      $entry->content = nl2br($request->input('content'));
      $entry->price = $request->input('price');
      $entry->currency = $request->input('currency');
      $entry->audience = $request->input('audience');
      $entry->location = $request->input('location');
      $entry->save();

      return redirect()->route('viewEntry', [ 'id' => $entry->id ]);
    }

    public function login() {
      return view('login');
    }

    public function signup() {
      return view('signup');
    }

}
