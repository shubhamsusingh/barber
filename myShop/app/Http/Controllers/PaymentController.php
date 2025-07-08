<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Session;
use App\Models\Payments;
class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
      $response=  $provider->createOrder([
            'intent' => 'CAPTURE',
            "application_context"=>[
                "return_url"=>route("success"),
                "cancel_url"=>route("price"),
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $request->price,
                    ],
                ],
            ],
        ]);
        // dd($response);
        if(isset($response['id']) &&$response['id']!=null){
            foreach($response['links'] as $link ){
                if($link['rel']==='approve'){
                    session()->put('service_name',$request->service_name);
                    return redirect()->away($link['href']);
                }
            }
        }else{
            return redirect()->route('price');
        }
    }

    public function success(Request $request){
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response=$provider->capturePaymentOrder($request->token);
        // dd($response);
        if(isset($response['status']) && $response['status']==='COMPLETED'){
            // echo"Heloo";
            // exit;
            $payment=new Payments();
            $payment->payment_id=$response['id'];
            $payment->service_name=session()->get('service_name');
            $payment->amount=$amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
            $payment->currency=$response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
            $payment->payer_name=$response['payer']['name']['given_name'] . ' ' . $response['payer']['name']['surname'];
            $payment->payer_email=$response['payer']['email_address'];
            $payment->payment_status=$response['status'];
            $payment->payment_method="paypal";
            $payment->save();
            return redirect()->route('story');


             dd($response);
        //    echo ( $response['purchase_units'][0]['payments']['captures'][0]['amount']['value']);
        //    exit;

        }else{
            return redirect()->route('price');
        }
    }
}

?>
