<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderDeletedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDate;

    public function __construct($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function build()
    {
        return $this->view('emails.order_deleted')
                    ->with(['orderDate' => $this->orderDate]);
    }
}
