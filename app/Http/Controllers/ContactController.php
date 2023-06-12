<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
 
class ContactController extends Controller
{  
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }  
    public function store(Request $request)
    {
        $contacts = new Contact([
            'mobile' => $request->input('mobile'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
        ]);
        $contacts->save();
        return response()->json('Contact created!');
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $contacts = Contact::find($id);
       $contacts->update($request->all());
       return response()->json('Contact updated');
    }
    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return response()->json('Contact deleted!');
    }
}