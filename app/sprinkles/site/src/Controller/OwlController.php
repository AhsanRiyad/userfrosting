<?php

namespace UserFrosting\Sprinkle\Site\Controller;

use UserFrosting\Sprinkle\Core\Controller\SimpleController;
use Illuminate\Support\Facades\DB;
use mysqli;
use App\Http\Controllers\Controller;




class OwlController extends SimpleController
{
    public function getOwls($request, $response, $args)
    {


        //$this->getContainer()->db;

        $users = DB::table('users')->get();

        //$hi = DB::select("select * from Users");


       /* $servername = "localhost";
        $dbname = "userfrosting";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);



        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Users";
        $result = $conn->query($sql);
        


        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['email'];
    }
} else {
    echo "0 results";
}
*/

        //echo "Connected successfully";





        //return $response->write("Okay I am trying");
    }

}