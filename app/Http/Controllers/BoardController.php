<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request){
        $items = Board::all();
        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request){
        return view('board.add');
    }

    public function create(Request $request){
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

    public function delete(Request $request){
        $board = Board::find($request->id);
        return view('board.del', ['form' => $board]);
    }
    public function remove(Request $request){
        Board::find($request->id)->delete();
        return redirect('/board');
    }

}
