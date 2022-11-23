<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Textbook;

class TextbookController extends Controller
{
    public function index (
        Textbook $textbook
    ) {
        return $textbook->get();
    }

    public function getDetails (
        $textbook_id,
        Textbook $textbook
    ) {
        return $textbook->find($textbook_id);
    }
}
