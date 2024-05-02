<?php
class Utils {

    public static function ReadInput($name) {
        if (is_array($name)){
            $data=implode(", ", $name);
        }
        else{
            $data = $name;
        }
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    public static function ReadIPAddress() {
        $ip = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ip = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ip = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ip = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ip = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ip = getenv('REMOTE_ADDR');
        else
            $ip = 'UNKNOWN';

        if(isset($_SERVER['HTTP_CF_CONNECTING_IP']))
        {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }

        return self::ReadInput($ip);
    }

  

    public static function GetUserCountryCode() {
        $ip = self::ReadIPAddress();
        $countrycode = self::ReadIPLocation($ip,true);
        if(empty($countrycode))
        {
            $countrycode = "AE";
        }
        /*$countrycode = '';
        $clientIpLocationDetails = json_decode( file_get_contents("https://pro.ip-api.com/json/" . $ip . "?key=KeWsraLBIvl4DSh", true) , true );
        $api_sts = $clientIpLocationDetails['status'] ?? '';
        if ($api_sts == 'success') {
            $countrycode = $clientIpLocationDetails['countryCode'];
        } else {
            $countrycode = "AE";
        }*/
        return $countrycode;
    }

    // public static function ReadIPLocation($ip,$cnCodeOnly=false)
    // {
    //     $location = '';
    //     $clientIpLocationDetails = json_decode( file_get_contents("https://pro.ip-api.com/json/" . $ip . "?key=KeWsraLBIvl4DSh", true) , true );
    //     $api_sts = $clientIpLocationDetails['status'] ?? '';

    //     if ($api_sts == 'success')
    //     {
    //         $location = $clientIpLocationDetails['city'] . ' - ' . $clientIpLocationDetails['regionName']. ' - ' . $clientIpLocationDetails['country'];
    //         $cnCode = $clientIpLocationDetails['countryCode'];
    //     }
    //     else
    //     {
    //         $cnCode = $location = "Private Range";
    //     }
    //     if($cnCodeOnly)
    //     {
    //         return strtoupper($cnCode);
    //     }
    //     else
    //     {
    //         return $location;
    //     }
    // }

   

    // public static function LoadCountry($selected = '', $selectcaption = '-- Select --') {
    //     echo '<option value="">' . $selectcaption . '</option>';
    //     $db = Database::getDB();
    //     try {
    //         $stmt = $db->prepare("SELECT * FROM webcountrylist");
    //         $result = $stmt->execute();
    //         while ( $data = $stmt->fetchObject() ) {
    //             echo '<option data-dial-code="'.$data->dial_code.'" data-iso-code="'.$data->iso_code.'" ' . self::selected($selected, $data->country_en) . ' value="' . $data->country_en . '">' . $data->country_en . '</option>';
    //         }
    //         unset($stmt);
    //         $db = null;
    //         Database::freeDB();
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         unset($stmt);
    //     }
    // }

  
 

	// public static function encryptdecrypt($string,$type) {

	// 	$sSalt = EXTRA_DATA_1;
	// 	$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
	// 	$method = 'aes-256-cbc';
	// 	$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

	// 	if($type=='encrypt')
	// 	{
	// 		$encrypted = base64_encode(openssl_encrypt($string, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
	// 		return $encrypted;
	// 	}
	// 	if($type=='decrypt')
	// 	{
	// 		$decrypted = openssl_decrypt(base64_decode($string), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
	// 		return $decrypted;
	// 	}
	// }
}

?>