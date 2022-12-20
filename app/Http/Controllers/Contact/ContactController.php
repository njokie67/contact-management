<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::where('user_id',auth()->user()->id)->get();
        return view ('contact.contacts.index',compact('contacts'));
    }
 
    
    public function create()
    {
        return view('contact.contacts.create');
    }
 
   
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required|string',
            'phone_number'=>'required|string',
            'email'=>'required|email',
            'image'=>'required|mimes:jpg,jpeg,png',
        ]);
   
        $full_name=$request->full_name;
        $phone_number=$request->phone_number;
        $email=$request->email;
        $image=$request->image;

       $contacts=new Contact;
       $contacts->user_id=auth()->user()->id;
       $contacts->full_name=$full_name;
       $contacts->phone_number=$phone_number;
       $contacts->email=$email;
       $contacts->image=$image;
       if($request->hasFile('image')){
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('uploads/contact/',$filename);
                $contacts->image=$filename;
            }
       $contacts->save();
      return redirect('contact/contacts/index')->with('Success','Contact added successfully');








    //     $validatedData=$request->validated();
    //     $contact=new Contact;
    //     $contact->full_name=$validatedData['full_name'];
    //     $contact->phone_number=$validatedData['phone_number'];
    //     $contact->email=$validatedData['email'];
    //     if($request->hasFile('image')){
    //         $file=$request->file('image');
    //         $ext=$file->getClientOriginalExtension();
    //         $filename=time().'.'.$ext;
    //         $file->move('uploads/contact/',$filename);
    //         $contact->image=$filename;
    // }
    // $contact->save();
    // return redirect('contact/contacts/create')->with('Success','Contact added successfully');
}
 
    
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('contact.contacts.show')->with('contacts', $contacts);
    }
 
    
    public function edit($id)
    {
        $contacts=Contact::where('id','=',$id)->first();
        return view('contact.contacts.edit',compact('contacts'));

        


        // $contacts = Contact::find($id);
        // return view('contact.contacts.edit')->with('contacts', $contacts);
    }
 
  
public function update(Request $request)
    {
        $request->validate([
            'full_name'=>'required|string',
            'phone_number'=>'required|string',
            'email'=>'required|email',
            'image'=>'required|mimes:jpg,jpeg,png',
        ]);

        $id=$request->id;
        $full_name=$request->full_name;
        $phone_number=$request->phone_number;
        $email=$request->email;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/contact/',$filename);
            $image=$request->image=$filename;
        }

        Contact::where('id','=',$id)->update([
            'full_name'=>$full_name,
            'phone_number'=>$phone_number,
            'email'=>$email,
            'image'=>$image

        ]);

         return redirect('contact/contacts/index')->with('Success','Contact updated successfully');



    
    //     $validatedData=$request->validated();
        
    //     $contact=Contact::findOrfail($contacts);

    //     $contact->full_name=$validatedData['full_name'];
    //     $contact->phone_number=$validatedData['phone_number'];
    //     $contact->email=$validatedData['email'];
    //     if($request->hasFile('image')){
    //         $file=$request->file('image');
    //         $ext=$file->getClientOriginalExtension();
    //         $filename=time().'.'.$ext;
    //         $file->move('uploads/contact/',$filename);
    //         $contact->image=$filename;
    // }
    // $contact->update();
    // return redirect('contact/contacts/index')->with('Success','Contact updated successfully');

}
    
        // $contact = Contact::find($id);
        // $input = $request->all();
        // $contact->update($input);
        // return redirect('contacts')->with('flash_message', 'Contact Updated!');  
    
   
    public function delete($id)
    {
        Contact::where('id','=',$id)->delete();
        return redirect('contact/contacts/index')->with('Success','Contact deleted successfully');

    }
}
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         return view('contact.contacts.index');

//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('contact.contacts.create');

//     }

    
//     public function store(ContactFormRequest $request)
//     {
//         $validatedData=$request->validated();
//         $contact=new Contact;
//         $contact->full_name=$validatedData['full_name'];
//         $contact->phone_number=$validatedData['phone_number'];
//         $contact->email=$validatedData['email'];
//         if($request->hasFile('image')){
//             $file=$request->file('image');
//             $ext=$file->getClientOriginalExtension();
//             $filename=time().'.'.$ext;
//             $file->move('uploads/contact/',$filename);
//             $contact->image=$filename;
//         }
//         $contact->save();
//         return redirect('contact/contacts/create')->with('message','Contact added successfully');

//     }

//     public function show()
//     {
//         $data=Contact::all();
//         return view('contact.contacts.show',['contact'=>$data]);

 
//         // $contacts = DB::select('select * from contacts');
         
//         // foreach ($contacts as $contact) {
//         //     echo $contact->full_name;

//         // }
//     }

    
//     public function edit($id)
//     {
//         //
//     }

    
    
//     public function update(Request $request, $id)
//     {
//         //
//     }

    
//     public function destroy($id)
//     {
//         //
//     }
// }
