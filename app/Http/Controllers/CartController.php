<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Cart;
use Auth;
use Session;
use Cookie;
use DB;

class CartController extends Controller
{
    public function deliveryApi(Request $request)
    {

        $ordersg = DB::table('orders')
            ->select('orders.*', 'users.name', 'combined_orders.grand_total as total_amount')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('combined_orders', 'orders.combined_order_id', '=', 'combined_orders.id')
            ->where(['orders.id' => 104])
            ->get();

        /* 	echo "<pre>";
				print_r($ordersg);
			echo "<pre>";
				print_r($ordersg[0]->user_id);
			echo "<pre>";
			
				print_r($shipping_address);
			echo "<pre>";
				print_r($shipping_address->phone);
			echo "<pre>";
				print_r($order->id);
			echo "<pre>";
			print_r($payment);
 */
        $shipping_address = json_decode($ordersg[0]->shipping_address);
        $qty = count($ordersg);

        //$rand = rand(000000,999999);
        $data['pickup_name']     = "SF SIRAOM 0121083";
        $data['order_id']       = $ordersg[0]->code;
        $data['phone']          = $shipping_address->phone;
        $data['name']           = $shipping_address->name;
        $data['add']            = $shipping_address->address;
        $data['pin']            = $shipping_address->postal_code;
        $data['country']        = $shipping_address->country;
        $data['state']          = $shipping_address->state;
        $data['city']           = $shipping_address->city;
        $data['payment_mode']   = "Pre-paid";
        $data['products_desc']  = "product description";
        $data['cod_amount']     = $ordersg[0]->grand_total;
        $data['order_date']     = $ordersg[0]->created_at;
        $data['total_amount']   = $ordersg[0]->grand_total;
        $data['seller_add']     = "";
        $data['seller_name']    = "";
        $data['seller_inv']     = "";
        $data['quantity']       = $qty;
        // 	echo "<pre>";
        // 	print_r($data);
        // 	echo "</pre>";

        // exit();
        // $rand = rand(000000,999999);
        // $data['pickup_name'] 	= "SF SIRAOM 0121083"; 
        // $data['order_id']       = $rand;
        // $data['phone']          = "7974634404";
        // $data['name']           = "Govind Kumhar";
        // $data['add']            = "jaipur";
        // $data['pin']            = "110096";
        // $data['payment_mode']   = "COD";
        // $data['products_desc']  = "product description";
        // $data['cod_amount']     = "1.0";
        // $data['country']        = "India";
        // $data['order_date']     = "2018-05-18 06:22:43";
        // $data['total_amount']   = "1.0";
        // $data['seller_add']     = "";
        // $data['seller_name']    = "";
        // $data['seller_inv']     = "";
        // $data['quantity']       = "1";
        // $data['state']          = "Delhi";
        // $data['city']           = "Delhi";	
        echo "<pre>";
        print_r(order_create($data));
        $response = order_create($data);
        $response = json_decode($response);
        // $rdata = new Delivery;
        // $rdata->order_id 		= 1;
        // $rdata->user_id 		= 1;
        // $rdata->upload_wbn 		= $response->upload_wbn;
        // $rdata->response_status	= $response->packages[0]->status;
        // $rdata->client 			= $response->packages[0]->client;
        // $rdata->sort_code 		= $response->packages[0]->sort_code;
        // $rdata->waybill 		= $response->packages[0]->waybill;
        // $rdata->cod_amount 		= $response->packages[0]->cod_amount;
        // $rdata->payment			= $response->packages[0]->payment;
        // $rdata->serviceable   	= $response->packages[0]->serviceable;
        // $rdata->refnum 			= $response->packages[0]->refnum;
        // $rdata->save();

        echo "<pre>";
        // 	print_r($rdata);
        print_r($response);
        echo "</pre>";
    }

    public function index(Request $request)
    {
        //dd($cart->all());
        $categories = Category::all();
        if (auth()->user() != null) {
            $user_id = Auth::user()->id;
            if ($request->session()->get('temp_user_id')) {
                Cart::where('temp_user_id', $request->session()->get('temp_user_id'))
                    ->update(
                        [
                            'user_id' => $user_id,
                            'temp_user_id' => null
                        ]
                    );

                Session::forget('temp_user_id');
            }
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $temp_user_id = $request->session()->get('temp_user_id');
            // $carts = Cart::where('temp_user_id', $temp_user_id)->get();
            $carts = ($temp_user_id != null) ? Cart::where('temp_user_id', $temp_user_id)->get() : [];
        }

        return view('frontend.view_cart', compact('categories', 'carts'));
    }

    public function showCartModal(Request $request)
    {
        $product = Product::find($request->id);
        return view('frontend.partials.addToCart', compact('product'));
    }

    public function showCartModalAuction(Request $request)
    {
        $product = Product::find($request->id);
        return view('auction.frontend.addToCartAuction', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $carts = array();
        $data = array();

        // if()
        if (auth()->user() != null) {
            $user_id = Auth::user()->id;
            $data['user_id'] = $user_id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            if ($request->session()->get('temp_user_id')) {
                $temp_user_id = $request->session()->get('temp_user_id');
            } else {
                $temp_user_id = bin2hex(random_bytes(10));
                $request->session()->put('temp_user_id', $temp_user_id);
            }
            $data['temp_user_id'] = $temp_user_id;
            $carts = Cart::where('temp_user_id', $temp_user_id)->get();
        }
        // $category = Category::find($product->category_id);
        // $cat_cart = Category::find($carts->product_id);
        // if ($category->digital == $cat_cart->digital) {


            $data['product_id'] = $product->id;
            $data['owner_id'] = $product->user_id;

            $str = '';
            $tax = 0;
            if ($product->auction_product == 0) {
                if ($product->digital != 1 && $request->quantity < $product->min_qty) {
                    return array(
                        'status' => 0,
                        'cart_count' => count($carts),
                        'modal_view' => view('frontend.partials.minQtyNotSatisfied', ['min_qty' => $product->min_qty])->render(),
                        'nav_cart_view' => view('frontend.partials.cart')->render(),
                    );
                }

                //check the color enabled or disabled for the product
                if ($request->has('color')) {
                    $str = $request['color'];
                }

                if ($product->digital != 1) {
                    //Gets all the choice values of customer choice option and generate a string like Black-S-Cotton
                    foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
                        if ($str != null) {
                            $str .= '-' . str_replace(' ', '', $request['attribute_id_' . $choice->attribute_id]);
                        } else {
                            $str .= str_replace(' ', '', $request['attribute_id_' . $choice->attribute_id]);
                        }
                    }
                }

                $data['variation'] = $str;

                $product_stock = $product->stocks->where('variant', $str)->first();
                $price = $product_stock->price;

                if ($product->wholesale_product) {
                    $wholesalePrice = $product_stock->wholesalePrices->where('min_qty', '<=', $request->quantity)->where('max_qty', '>=', $request->quantity)->first();
                    if ($wholesalePrice) {
                        $price = $wholesalePrice->price;
                    }
                }

                $quantity = $product_stock->qty;

                if ($quantity < $request['quantity']) {
                    return array(
                        'status' => 0,
                        'cart_count' => count($carts),
                        'modal_view' => view('frontend.partials.outOfStockCart')->render(),
                        'nav_cart_view' => view('frontend.partials.cart')->render(),
                    );
                }

                //discount calculation
                $discount_applicable = false;

                if ($product->discount_start_date == null) {
                    $discount_applicable = true;
                } elseif (
                    strtotime(date('d-m-Y H:i:s')) >= $product->discount_start_date &&
                    strtotime(date('d-m-Y H:i:s')) <= $product->discount_end_date
                ) {
                    $discount_applicable = true;
                }

                if ($discount_applicable) {
                    if ($product->discount_type == 'percent') {
                        $price -= ($price * $product->discount) / 100;
                    } elseif ($product->discount_type == 'amount') {
                        $price -= $product->discount;
                    }
                }

                //calculation of taxes
                foreach ($product->taxes as $product_tax) {
                    if ($product_tax->tax_type == 'percent') {
                        $tax += ($price * $product_tax->tax) / 100;
                    } elseif ($product_tax->tax_type == 'amount') {
                        $tax += $product_tax->tax;
                    }
                }

                $data['quantity'] = $request['quantity'];
                $data['price'] = $price;
                $data['tax'] = $tax;
                //$data['shipping'] = 0;
                $data['shipping_cost'] = 0;
                $data['product_referral_code'] = null;
                $data['cash_on_delivery'] = $product->cash_on_delivery;
                $data['digital'] = $product->digital;

                if ($request['quantity'] == null) {
                    $data['quantity'] = 1;
                }

                if (Cookie::has('referred_product_id') && Cookie::get('referred_product_id') == $product->id) {
                    $data['product_referral_code'] = Cookie::get('product_referral_code');
                }

                if ($carts && count($carts) > 0) {
                    $foundInCart = false;

                    foreach ($carts as $key => $cartItem) {
                        $product = Product::where('id', $cartItem['product_id'])->first();
                        if ($product->auction_product == 1) {
                            return array(
                                'status' => 0,
                                'cart_count' => count($carts),
                                'modal_view' => view('frontend.partials.auctionProductAlredayAddedCart')->render(),
                                'nav_cart_view' => view('frontend.partials.cart')->render(),
                            );
                        }

                        if ($cartItem['product_id'] == $request->id) {
                            $product_stock = $product->stocks->where('variant', $str)->first();
                            $quantity = $product_stock->qty;
                            if ($quantity < $cartItem['quantity'] + $request['quantity']) {
                                return array(
                                    'status' => 0,
                                    'cart_count' => count($carts),
                                    'modal_view' => view('frontend.partials.outOfStockCart')->render(),
                                    'nav_cart_view' => view('frontend.partials.cart')->render(),
                                );
                            }
                            if (($str != null && $cartItem['variation'] == $str) || $str == null) {
                                $foundInCart = true;

                                $cartItem['quantity'] += $request['quantity'];

                                if ($product->wholesale_product) {
                                    $wholesalePrice = $product_stock->wholesalePrices->where('min_qty', '<=', $request->quantity)->where('max_qty', '>=', $request->quantity)->first();
                                    if ($wholesalePrice) {
                                        $price = $wholesalePrice->price;
                                    }
                                }

                                $cartItem['price'] = $price;

                                $cartItem->save();
                            }
                        }
                    }
                    if (!$foundInCart) {
                        Cart::create($data);
                    }
                } else {
                    Cart::create($data);
                }

                if (auth()->user() != null) {
                    $user_id = Auth::user()->id;
                    $carts = Cart::where('user_id', $user_id)->get();
                } else {
                    $temp_user_id = $request->session()->get('temp_user_id');
                    $carts = Cart::where('temp_user_id', $temp_user_id)->get();
                }
                return array(
                    'status' => 1,
                    'cart_count' => count($carts),
                    'modal_view' => view('frontend.partials.addedToCart', compact('product', 'data'))->render(),
                    'nav_cart_view' => view('frontend.partials.cart')->render(),
                );
            } else {
                $price = $product->bids->max('amount');

                foreach ($product->taxes as $product_tax) {
                    if ($product_tax->tax_type == 'percent') {
                        $tax += ($price * $product_tax->tax) / 100;
                    } elseif ($product_tax->tax_type == 'amount') {
                        $tax += $product_tax->tax;
                    }
                }

                $data['quantity'] = 1;
                $data['price'] = $price;
                $data['tax'] = $tax;
                $data['shipping_cost'] = 0;
                $data['product_referral_code'] = null;
                $data['cash_on_delivery'] = $product->cash_on_delivery;
                $data['digital'] = $product->digital;

                if (count($carts) == 0) {
                    Cart::create($data);
                }
                if (auth()->user() != null) {
                    $user_id = Auth::user()->id;
                    $carts = Cart::where('user_id', $user_id)->get();
                } else {
                    $temp_user_id = $request->session()->get('temp_user_id');
                    $carts = Cart::where('temp_user_id', $temp_user_id)->get();
                }
                return array(
                    'status' => 1,
                    'cart_count' => count($carts),
                    'modal_view' => view('frontend.partials.addedToCart', compact('product', 'data'))->render(),
                    'nav_cart_view' => view('frontend.partials.cart')->render(),
                );
            }
        // }else{
        //     return redirect(route('home'))->flash("You cannot add digital product with physical");
        // }
    }

    //removes from Cart
    public function removeFromCart(Request $request)
    {
        Cart::destroy($request->id);
        if (auth()->user() != null) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $temp_user_id = $request->session()->get('temp_user_id');
            $carts = Cart::where('temp_user_id', $temp_user_id)->get();
        }

        return array(
            'cart_count' => count($carts),
            'cart_view' => view('frontend.partials.cart_details', compact('carts'))->render(),
            'nav_cart_view' => view('frontend.partials.cart')->render(),
        );
    }

    //updated the quantity for a cart item
    public function updateQuantity(Request $request)
    {
        $cartItem = Cart::findOrFail($request->id);

        if ($cartItem['id'] == $request->id) {
            $product = Product::find($cartItem['product_id']);
            $product_stock = $product->stocks->where('variant', $cartItem['variation'])->first();
            $quantity = $product_stock->qty;
            $price = $product_stock->price;

            if ($quantity >= $request->quantity) {
                if ($request->quantity >= $product->min_qty) {
                    $cartItem['quantity'] = $request->quantity;
                }
            }

            if ($product->wholesale_product) {
                $wholesalePrice = $product_stock->wholesalePrices->where('min_qty', '<=', $request->quantity)->where('max_qty', '>=', $request->quantity)->first();
                if ($wholesalePrice) {
                    $price = $wholesalePrice->price;
                }
            }

            $cartItem['price'] = $price;
            $cartItem->save();
        }

        if (auth()->user() != null) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $temp_user_id = $request->session()->get('temp_user_id');
            $carts = Cart::where('temp_user_id', $temp_user_id)->get();
        }

        return array(
            'cart_count' => count($carts),
            'cart_view' => view('frontend.partials.cart_details', compact('carts'))->render(),
            'nav_cart_view' => view('frontend.partials.cart')->render(),
        );
    }
}
