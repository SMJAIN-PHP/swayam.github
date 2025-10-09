<?php

include_once('model.php');   // 1 load model

class control extends model
{   // 2 etends model for use of logic

    function __construct()
    {
         session_start();
         
        model::__construct();  // 3 call model __construct

        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            


            case '/buddys_cafe':

              $cust_arr = $this->select('customer');
                if (isset($_REQUEST['submit'])) {
                    
                    $name = $_REQUEST['name'];
                    $mobile = $_REQUEST['mobile'];
                    $ord_no = $_REQUEST['ord_no'];
                    $rating = $_REQUEST['rating'];
                    $feedback = $_REQUEST['feedback'];
                   
                    
                    $data = array(
                        
                        "name" => $name,
                        "mobile" => $mobile,
                        "ord_no" => $ord_no,
                        "rating" => $rating,
                        "feedback" => $feedback
                        
                         
                    );

                    $res = $this->insert('customer', $data);
                    if ($res) {
                        echo "<script>
                            alert('Your Feedback Submited!');
                             
                        </script>";
                    }
                }

            include_once('buddys_cafe.php');    
            break;


            }
        }
}

$obj = new control;


