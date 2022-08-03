<?php 
    include '../../vendor/autoload.php';
    use \Firebase\JWT\JWT;
    
    $methodName = str_replace("/",'', $_SERVER['PATH_INFO']);
    if(function_exists($methodName)) $methodName();

    function createjwt(){
        $nik    = $_POST["nik"];
        $role   = $_POST["role"];
        $pwd    = $_POST["pwd"];

        $payload = [
            'data' => [
                'id' => $nik,
                'name' => $role,
                'password' => $pwd,
            ],
        ];
    
        $default_jwt    = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlkIjoiMTIzNDU2NzgxMjM0NTY3OCIsIm5hbWUiOiJBZG1pbiIsInBhc3N3b3JkIjoiMjVkNTVhZDI4M2FhNDAwYWY0NjRjNzZkNzEzYzA3YWQifX0';
        $secret_key     = "Febri Syawaldi";
        $jwt            = JWT::encode($payload, $secret_key, 'HS256');

        $array_jwt      = explode(".",$jwt);
        $jwt_check      = $array_jwt[0].'.'.$array_jwt[1];
        
        if($jwt_check == $default_jwt){
            $result     =   [
                'status'    => 1,
                'id'        => 1,
                'nik'       => $nik,
                'role'      => $role,
                'jwt'       => $jwt,
                'message'   => 'Successfully',
            ];
        }else{
            $result     =   [
                'status'    => 0,
                'jwt'       => $jwt,
                'message'   => 'Invalid JWT',
            ];
        }

        echo json_encode($result);
    }

    function fetch_app(){
        
        $jumlah    = $_POST["jumlah"];
        // --------------------------------------//
        // API KEY CONVERT CURRENCY HANYA 100 kali
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=IDR&from=USD&amount=$jumlah",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: 5NzJvRh5JtgbND3QEWPVRRXNuoj2GH3m"
        ),
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING        => "",
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 0,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST   => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;


        // API KEY CONVERT CURRENCY 250 kali
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to={to}&from={from}&amount={amount}",
        // CURLOPT_HTTPHEADER => array(
        //     "Content-Type: text/plain",
        //     "apikey: 5NzJvRh5JtgbND3QEWPVRRXNuoj2GH3m"
        // ),
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET"
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;
    }

?>