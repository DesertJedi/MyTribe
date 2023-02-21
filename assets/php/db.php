<?php
//TODO: add logging
class db
{
//    public string $hostname = "";
//    public string $port = "";
//    public string $user = "";
//    public string $pass = "";
//    public string $db = "";

    function connect($hostname, $port, $user, $pass, $db) {
        $error = "";
        $mysql = new mysqli($hostname,$user,$pass,$db,$port);
    //        $mysql->real_connect($hostname,$user,$pass,$db,$port);

        if ($mysql->connect_error) {
            $error .= "Unable to connect to MySQL server! Error: {$mysql->connect_error}"; //TODO: may need to change to $body.=
            $error .= $mysql->server_info;

            echo $error;
            exit;
        }
        return $mysql;
    }


//        TEST QUERIES

//        TEST SELECT QUERY
    function select($dbh)
    {
        $result = mysqli_query($dbh,"SELECT * FROM `users`");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ){
                extract($row);
                $user_id = $row['user_id'];
                $username = $row['username'];

                echo "$user_id - $username";
            }
        }
    }

    //        END TEST QUERIES
    function get_single_conversation($dbh,$user_id,$conversating_user) {
//        $result = mysqli_query($dbh,"SELECT * FROM `chats` where to_user_id='$user_id' || from_user_id='$user_id'");
        $result = mysqli_query($dbh,"SELECT * FROM `chats` where to_user_id='$user_id' || from_user_id='$user_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0) {
            while ($row = $result->fetch_assoc()) {
                extract($row);

                $chat_id = $row['id'];
                $from_user_id = $row['from_user_id'];
                $chat_message = $row['chat_message'];
                $timestamp = $row['timestamp'];

//                $key = $this->get_decrypt_key($dbh,$chat_id);
                $decrypted_message = $this->decrypt_message($dbh,$chat_message);
//                echo $decrypted_message;
            }
        }
    }
    function get_list_of_active_chats($dbh,$user_id) { // Get each user that this user is sent/received messages to/from

    }
    function get_chats_for_user($dbh,$user_id) {
        //$current_user_id = '111AAA'; // TEST PURPOSES ONLY //

        $result = mysqli_query($dbh,"SELECT * FROM `chats` where to_user_id='$user_id' || from_user_id='$user_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ){
                extract($row);
                $chat_id = $row['id'];
                $from_user_id = $row['from_user_id'];
                $chat_message = $row['chat_message'];
                $timestamp = $row['timestamp'];

//                $key = $this->get_decrypt_key($dbh,$chat_id);
                $decrypted_message = $this->decrypt_message($dbh,$chat_message);
                echo $decrypted_message;
//                echo "Chat id: $chat_id - User id: $from_user_id - Message: $chat_message - Timestamp $timestamp -- ";
            }
        }
    }



    function delete_single_chat($dbh,$chat_id) {
        $result = mysqli_query($dbh,"DELETE FROM `chats` where id='$chat_id'");

        if($result){
            echo "Chat $chat_id successfully deleted";
        }
    }

    function delete_all_chats_from_user($dbh,$from_user_id,$to_user_id) {
        $result = mysqli_query($dbh,"DELETE FROM `chats` where from_user_id='$from_user_id' && to_user_id='$to_user_id'");

        if($result){
            echo "Chats from $from_user_id to $to_user_id successfully deleted";
        }
    }

    function send_message($dbh,$from_user_id,$to_user_id,$message_text) {
        $result = mysqli_query($dbh,"INSERT INTO `chats` (`from_user_id`,`to_user_id`,`chat_message`,`timestamp`) VALUES ('$from_user_id','$to_user_id','$message_text',CURRENT_TIMESTAMP())");

        if($result){
            echo "Message sent from $from_user_id to $to_user_id";
        }
    }

    function encrypt_message($message,$key): string
    {
        // Single Key encryption
//        $message = "Test message";
        $nonce = random_bytes( SODIUM_CRYPTO_SECRETBOX_NONCEBYTES );
        $encrypted_result = sodium_crypto_secretbox( $message, $nonce, $key );
        $encoded = base64_encode( $nonce . $encrypted_result ); //This will create a base64 encoded string of 76 characters in length
        return $encoded;
//        echo $message;
//        echo $encoded;

        // Envelope encryption - encrypt the key with another key
        // Reference: https://deliciousbrains.com/php-encryption-methods/

    }
    function generate_key() {
        $key = sodium_crypto_secretbox_keygen(); // Generates key for secret key encryption
//        echo $key;
        return $key;
    }

    function check_if_key_exists($dbh,$user_id): bool {
        $result = mysqli_query($dbh,"SELECT `key` FROM `syek` WHERE `user_id` = '$user_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            return true;
        } else {
            return false;
        }
    }

    /*function get_key($dbh,$user_id) {
        $result = mysqli_query($dbh,"SELECT `key` FROM `syek` WHERE `user_id` = '$user_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ) {
                extract($row);
                return $row['key'];
            }
        } // TODO: add error if unable to pull
    }*/

    function add_message_key_to_db($dbh, $message_id, $key) {
        $key = sodium_bin2hex($key);
        $result = mysqli_query($dbh,"INSERT INTO `syek` (`message_id`,`key`) VALUES ('$message_id','$key')");
        if ($result) {

        }
    }
    
    function add_encrypted_message_to_db($dbh,$from_user_id,$to_user_id,$encrypted_message,$key) {
        $result = mysqli_query($dbh,"INSERT INTO `chats` (`from_user_id`,`to_user_id`,`chat_message`,`timestamp`) VALUES ('$from_user_id','$to_user_id','$encrypted_message',CURRENT_TIMESTAMP())");
        $last_id = $dbh->insert_id;
        $this->add_message_key_to_db($dbh,$last_id,$key);

        if ($result) {
            echo "Message successfully sent.";
        } else {
            echo "Error sending message.";
        }
    }

    function send_encrypted_message($dbh,$from_user_id,$to_user_id,$message) {
        $key = "";
        $key = $this->generate_key();

        /*if ($this->check_if_key_exists($dbh,$from_user_id)) {
            $key = $this->get_key($dbh,$from_user_id);
        } else {
            $key = $this->generate_key();
        }*/

        $encoded_message = $this->encrypt_message($message,$key); //TODO: Add from and to user
//        echo $encoded_message;
        $this->add_encrypted_message_to_db($dbh,$from_user_id,$to_user_id,$encoded_message,$key); // TODO: Change function to bool and to errors in this function

    }
    function get_decrypt_key($dbh,$message_id) {
        $result = mysqli_query($dbh,"SELECT `key` FROM `syek` WHERE `message_id` = '$message_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ) {
                extract($row);
                $key = $row['key'];
                $key = hex2bin($key);
                return $key;
            }
        } // TODO: add error if unable to pull
    }

    /**
     * @throws SodiumException
     */
    function decrypt_message($dbh, $chat_id): string {
        $key = $this->get_decrypt_key($dbh,$chat_id);
        $encrypted_message = $this->get_encrypted_message($dbh,$chat_id);

        //Decryption
        $decoded = base64_decode($encrypted_message);
        $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit'); // required installing sudo apt install php-mbstring
        $encrypted_result = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');
        $plaintext = sodium_crypto_secretbox_open($encrypted_result, $nonce, $key);
        if ($plaintext === false) {
            throw new Exception("Bad ciphertext");
        }
//
        return $plaintext;
    }

    function get_encrypted_message($dbh,$message_id) {
        $result = mysqli_query($dbh,"SELECT `chat_message` FROM `chats` WHERE `id` = '$message_id'");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ) {
                extract($row);
                return $row['chat_message'];
            }
        } // TODO: add error if unable to pull
    }

    function load_chats_window_data($dbh,$user_id) {
        $result = mysqli_query($dbh,"SELECT `chats`.id, `chats`.from_user_id, `chats`.chat_message, `chats`.timestamp, `profiles`.profile_picture FROM `chats` LEFT JOIN `profiles` ON `profiles`.id = `chats`.from_user_id where (`chats`.to_user_id='$user_id' || `chats`.from_user_id='$user_id')");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ){
                extract($row);
                $chat_id = $row['id'];
                $from_user_id = $row['from_user_id'];
                $chat_message = $row['chat_message'];
                $timestamp = $row['timestamp'];
                $profile_picture = $row['profile_picture'];

                echo "Chat id: $chat_id - From User id: $from_user_id - Message: $chat_message - Timestamp $timestamp - Profile Pic: $profile_picture -- ";
            }
        }
    }
    
    function load_group_chats($dbh,$user_id) {

    }
}