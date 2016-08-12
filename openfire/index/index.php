<?php 


        //Plugin secret
        $secret = "4yIBE6cF";
        //Unique username,if username repeat then not work api
        $username = "6";
        //Password - any string
        $password = "drowssap";
        // Display name of user
        $name = "Bill";
        // Useremail
        $email = 'franz@kafka.com';
    
        $host_name = "http://103.240.34.218:9090";    
        $url = $host_name . '/plugins/userService?type=add&secret=' . $secret;
        $url.='&username=' . $username . '&password=' . $password . '&name=' . $name . '&email=' . $email;
   echo($url);exit;
        $curl = curl_init();
			
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);

        curl_close($curl);
       // print_r($data);exit;
        $p = xml_parser_create();
        xml_parse_into_struct($p, $data, $vals, $index);
        xml_parser_free($p);
        //$vals=response of openfire
		echo "<pre>";
        print_r($data);exit;   

?>