@extends('frontend.layouts.app')

@section('content')

    <form action="{!!route('payment.rozer')!!}" method="POST" id='rozer-pay' style="display: none;">
        <!-- Note that the amount is in paise = 50 INR -->
        <!--amount need to be in paisa-->
        {{-- <script src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="{{ env('RAZOR_KEY') }}"
                data-amount={{round($combined_order->grand_total) * 100}}
                data-buttontext=""
                data-name="{{ env('APP_NAME') }}"
                data-description="Cart Payment"
                data-image="{{ uploaded_asset(get_setting('header_logo')) }}"
                data-prefill.name= {{ Auth::user()->name }}
                data-prefill.email= {{ Auth::user()->email }}
                data-theme.color="#ff7529"
                data-modal.ondismiss=function(){console.log('checkout Form closed')}>
        </script> --}}
        <script src="https://checkout.razorpay.com/v1/checkout.js">
        </script>
        <script>
            var options={
                "key":"{{env('RAZOR_KEY')}}",
                "amount":"{{round($combined_order->grand_total)*100}}",
                "name":"{{env('APP_NAME')}}",
                "description":"Cart Payment",
                "image":"{{uploaded_asset(get_setting('header_logo'))}}",
                "prefill":{
                    "name":"{{Auth::user()->name}}",
                    "email":"{{Auth::user()->email}}"
                },
                "theme":{
                    "color":"#ff7529"
                },
                "handler":function(response){
                    document.getElementById('rid').value=response.razorpay_payment_id;
                    onPayment();
                },
                "modal":{
                    "ondismiss":function(){
                        window.location.href="{{route('payment.cancel')}}";
                        // console.log("Checkout Form closed")
                    }
                }
            };
            var rzp=new Razorpay(options);
            console.log("in razorpay");
            rzp.open();
            </script>
            <input type="hidden" name="razorpay_payment_id" id="rid">
        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
    </form>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(e){
            // e.preventDefault();
            // $('#rozer-pay').submit()
        });
        function onPayment(){
            document.getElementById('rozer-pay').submit();
            }
    </script>
@endsection
