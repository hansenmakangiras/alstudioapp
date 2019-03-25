<?php
/**
 * Created by PhpStorm.
 * User: hansenmakangiras
 * Date: 21/10/18
 * Time: 12.00
 */

namespace App\Helper;

use App\Models\Promo;

//if (! function_exists('show_route')) {
//    function show_route($model, $resource = null)
//    {
//        $resource = $resource ?? plural_from_model($model);
//
//        return route("{$resource}.show", $model);
//    }
//}
//
//if (! function_exists('plural_from_model')) {
//    function plural_from_model($model)
//    {
//        $plural = Str::plural(class_basename($model));
//
//        return Str::kebab($plural);
//    }
//}

class AppHelper
{
    /**
     * Generate promo code.
     *
     * @param  int  $count, int $length
     * @return \Illuminate\Http\Response
     */
    public static function generateCoupons($count, $length = 6)
    {
        $coupons = [];
        while(count($coupons) < $count) {
            do {
                $coupon = strtoupper(str_random($length));
            } while (in_array($coupon, $coupons));
            $coupons[] = $coupon;
        }

        $existing = Promo::whereIn('kode', $coupons)->count();
        if ($existing > 0)
            $coupons += AppHelper::generateCoupons($existing, $length);

        return (count($coupons) == 1) ? $coupons[0] : $coupons;
    }

    public static function generatePromoCode($no_of_coupons,$length,$prefix,$suffix,$numbers,$letters,$symbols,$random_register,$mask)
    {
//        $no_of_coupons = $_POST['no_of_coupons'];
//        $length = $_POST['length'];
//        $prefix = $_POST['prefix'];
//        $suffix = $_POST['suffix'];
//        $numbers = $_POST['numbers'];
//        $letters = $_POST['letters'];
//        $symbols = $_POST['symbols'];
        $random_register = $random_register == 'false' ? false : true;
        $mask = $mask == '' ? false : $mask;
        $coupons = PromoCode::generate_coupons($no_of_coupons, $length, $prefix, $suffix, $numbers, $letters, $symbols, $random_register, $mask);
//        foreach ($coupons as $key => $value) {
//            //return $value."\n ";
//            $arrPromo[] = $value;
//        }

        return $coupons;
    }

    public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function convertToRupiah($number){
        if($number != 0){
            return "Rp. " . number_format($number,0,'.',',');
        }else{
            return "Rp. " . 0;
        }
    }
}
