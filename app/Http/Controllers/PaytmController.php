<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Paytm;
use Auth;
use App\user_package_add;

class PaytmController extends Controller
{
     
    // display a form for payment
    public function initiate()
    {
        return view('paytm');
    }
 
    public function pay(Request $request)
    {
        $user = Auth::user() ?? null;
        $pack = user_package_add::where('status','Run')->where('user_id',$user->id)->first();
        $amount = $pack ?? 300;

        $userData = [
            'apply_id' =>7,
            'fee_type' =>'service',
            'user_id' => $user->id, 
            'name' => $request->name, // Name of user
            'mobile' => $request->mobile, //Mobile number of user
            'email' => $request->email, //Email of user
            'fee' => $amount,
            'order_id' => $request->mobile."_".rand(1,1000) //Order id
        ];
 
        $paytmuser = Paytm::create($userData); // creates a new database record
 
        $payment = PaytmWallet::with('receive');
 
        $payment->prepare([
            'order' => $userData['order_id'], 
            'user' => $paytmuser->id,
            'mobile_number' => $userData['mobile'],
            'email' => $userData['email'], // your user email address
            'amount' => $amount, // amount will be paid in INR.
            'callback_url' => "http://127.0.0.1:8000/user/home" // callback URL
        ]);
        return $payment->receive();  // initiate a new payment
    }
 
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
 
        $response = $transaction->response();
         
        $order_id = $transaction->getOrderId(); // return a order id
       
        $transaction->getTransactionId(); // return a transaction id
     
        // update the db data as per result from api call
        if ($transaction->isSuccessful()) {
            Paytm::where('order_id', $order_id)->update(['status' => 1, 'transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('user.initiate.payment'))->with('message', "Your payment is successfull.");
 
        } else if ($transaction->isFailed()) {
            Paytm::where('order_id', $order_id)->update(['status' => 0, 'transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('user.initiate.payment'))->with('message', "Your payment is failed.");
             
        } else if ($transaction->isOpen()) {
            Paytm::where('order_id', $order_id)->update(['status' => 2, 'transaction_id' => $transaction->getTransactionId()]);
            return redirect(route('user.initiate.payment'))->with('message', "Your payment is processing.");
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
         
        // $transaction->getOrderId(); // Get order id
    }
}