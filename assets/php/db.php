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

                echo "Chat id: $chat_id - User id: $from_user_id - Message: $chat_message - Timestamp $timestamp -- ";
            }
        }
    }

    function delete_single_chat($dbh,$chat_id) {

    }

    function delete_all_chats_from_user($dbh,$from_user_id,$to_user_id) {
        // Deleting from user to current user
    }

    function send_message($dbh,$from_user_id,$to_user_id,$message_text) {

    }

}