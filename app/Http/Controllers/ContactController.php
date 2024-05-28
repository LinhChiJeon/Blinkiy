<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact_reply()
    {
        $contacts = Contact::where('PhanHoi', 0)->get();
        return view('admin.contact_reply', compact('contacts'));
    }
    public function contact_replied()
    {
        $contacts = Contact::where('PhanHoi', 1)->get();
        return view('admin.contact_replied', compact('contacts'));
    }


    public function index()
    {
        $contacts = Contact::where('PhanHoi', 0)->get();
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
        $contact->TenKhachHang = $validatedData['name'];
        $contact->SDT = $sdt;
        $contact->Email = $validatedData['email'];
        $contact->TieuDe = $validatedData['title'];
        $contact->CauHoi = $validatedData['question'];
        $contact->PhanHoi = false;
        $contact->PhanHoi_TieuDe = '';
        $contact->PhanHoi_NoiDung = '';

        if ($contact->save()) {
            return redirect()->route('lien_he')->with('success', 'Thêm thành công.');
        } else {
            return redirect()->route('lien_he')->with('error', 'Thêm không thành công.');
        }
    }



}
