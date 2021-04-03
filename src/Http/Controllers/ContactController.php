<?php

namespace yamesh\login\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller {

    public function index() {
        $conatct = \yamesh\login\Models\Contact::latest()->get();
        return $conatct;
    }

    public function store(\Illuminate\Http\Request $request) {
        $contact_created = \yamesh\login\Models\Contact::create($request->all());
        if ($contact_created) {
            return 'Contact Created';
        }
    }

}
