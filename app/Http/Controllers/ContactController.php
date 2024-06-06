<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Mail\CustomerContactMail; // Add this line
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_reply()
    {
        $contacts = Contact::where('reply_status', 0)->get();
        return view('admin.contact_reply', compact('contacts'));
    }
    public function contact_replied()
    {
        $contacts = Contact::where('reply_status', 1)->get();
        return view('admin.contact_replied', compact('contacts'));
    }


    public function index()
    {
        $contacts = Contact::where('reply_status', 0)->get();
        return view('admin.contact_reply', compact('contacts'));
    }

    public function reply($id)
    {
        // Dòng mã debug
        // dd('Reply method called with ID: '. $id);
        
        $contact = Contact::findOrFail($id);
        return view('admin.contact_detail', compact('contact'));
    }
    public function history($id)
    {
        // Dòng mã debug
        // dd('Reply method called with ID: '. $id);
        
        $contact = Contact::findOrFail($id);
        return view('admin.contact_history', compact('contact'));
    }
    public function input()
    {
        return view('pages.LienHe.lien_he_layout');
    }
    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $validatedData = $request->validate([
            'name' => 'required|string',
            'sdt' => 'sometimes|nullable|digits:10',
            'email' => 'required|email|regex:/^.+@gmail\.com$/i|max:100',
            'title' => 'required|string',
            'question' => 'required|string',
        ]);

        // Đặt giá trị mặc định cho trường "SDT" nếu không được điền vào
        $sdt = $request->filled('sdt') ? $validatedData['sdt'] : '';

                    // Lưu dữ liệu vào cơ sở dữ liệu
            $contact = new Contact();
            $contact->customer_name = $validatedData['name'];
            $contact->customer_phone = $sdt;
            $contact->Email = $validatedData['email'];
            $contact->contact_title = $validatedData['title'];
            $contact->contact_question = $validatedData['question'];
            $contact->reply_status = false;
            $contact->reply_title = '';
            $contact->reply_content = '';

        if ($contact->save()) {
            return redirect()->route('lien_he')->with('Add_success', 'Thêm thành công.');
        } else {
            return redirect()->route('lien_he')->with('error', 'Thêm không thành công.');
        }
    }
    public function sendEmailToCustomer(Request $request)
    {
        $request->validate([
            'customer_email' => 'required|email',
            'email_subject' => 'required|string|max:255',
            'email_body' => 'required|string',
        ]);

        $email = $request->input('customer_email');
        $subject = $request->input('email_subject');
        $body = $request->input('email_body');

        Mail::to($email)->send(new CustomerContactMail($subject, $body));

        return redirect()->back()->with('success', 'Email has been sent successfully.');
    }



}
