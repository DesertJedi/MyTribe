<?php
//TODO: add logging
class db
{
//    public string $hostname = "";
//    public string $port = "";
//    public string $user = "";
//    public string $pass = "";
//    public string $db = "";



    function select($hostname, $port, $user, $pass, $db)
    {
        $error = "";
        $mysql = new mysqli($hostname,$user,$pass,$db,$port);
//        $mysql->real_connect($hostname,$user,$pass,$db,$port);

        if ($mysql->connect_error) {
            $error .= "Unable to connect to MySQL server! Error: {$mysql->connect_error}"; //TODO: may need to change to $body.=
            $error .= $mysql->server_info;

            echo $error;
            exit;
        }

        $result = mysqli_query($mysql,"SELECT * FROM `antiad_content`");
        $num_results = $result->num_rows;

        if( $num_results > 0){
            while( $row = $result->fetch_assoc() ){
                extract($row);
                echo "$row[antiad_header] - $row[antiad_text]\n";
            }
        }
    }
}