<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\CustomerEmail;

class SendEmailController extends Controller
{
    public function sendEmailToCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stt' => 'required|integer',
            'customer_email' => 'required|email',
            'email_subject' => 'required',
            'email_body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $stt = $request->input('stt');
        $customerEmail = $request->input('customer_email');
        $emailSubject = $request->input('email_subject');
        $emailBody = $request->input('email_body');

        // Send email using Mailable
        Mail::to($customerEmail)->send(new CustomerEmail($emailSubject, $emailBody));

        // Update PhanHoi field in the contacts table based on the stt
        $contact = Contact::find($stt);
        if ($contact) {
            $contact->PhanHoi = 1;
            $contact->PhanHoi_TieuDe = $emailSubject;
            $contact->PhanHoi_NoiDung = $emailBody;
            $contact->save();
        }

        return redirect()->back()->with('success', 'Email đã được gửi thành công!');
    }
}
