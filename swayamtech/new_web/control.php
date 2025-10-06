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
            

            case '/index':
            $serv_arr = $this->double_select('service','categories','cate_name','categories.id=service.cate_id');
             $serv_arr = $this->select('service');

                if (isset($_REQUEST['submit'])) {
                    
                    $cont_name = $_REQUEST['cont_name'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                  
                    $data = array(
                        
                        "cont_name" => $cont_name,
                        "email" => $email,
                        "mobile" => $mobile,
                        "subject" => $subject,
                        "message" => $message,
                    );

                    $res = $this->insert('contactsus', $data);
                    if ($res) {
                        echo "<script>
                            alert('Your Message Sendt Successfully!');
                        </script>";
                    }
                }


            include_once('index.php');    
            break;

           
            
            case '/about':
            include_once('about.php');    
            break;

            case '/service':
            $serv_arr = $this->double_select('service','categories','cate_name','categories.id=service.cate_id');

            include_once('service.php');    
            break;

            case '/blog':
            include_once('blog.php');  
            break;

            case '/detail':
            include_once('detail.php');    
            break;

             case '/price':
            include_once('price.php');    
            break;

             case '/feature':
            include_once('feature.php');    
            break;
            
            case '/team':
            include_once('team.php');    
            break;
            
            case '/testimonial':
            include_once('testimonial.php');    
            break;
            
            case '/quote':
            $serv_arr = $this->select('service');

                if (isset($_REQUEST['submit'])) {
                    
                    $cont_name = $_REQUEST['cont_name'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                  
                    $data = array(
                        
                        "cont_name" => $cont_name,
                        "email" => $email,
                        "mobile" => $mobile,
                        "subject" => $subject,
                        "message" => $message,
                    );

                    $res = $this->insert('contactsus', $data);
                    if ($res) {
                        echo "<script>
                            alert('Your Message Sendt Successfully!');
                        </script>";
                    }
                }


            include_once('quote.php');    
            break;
            
            case '/detail':
            include_once('detail.php');    
            break;
            
            case '/detail':
            include_once('detail.php');    
            break;
            
    
            case '/contact':
                 $cont_arr = $this->select('contactsus');
                if (isset($_REQUEST['submit'])) {
                    
                    $cont_name = $_REQUEST['cont_name'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                  
                    $data = array(
                        
                        "cont_name" => $cont_name,
                        "email" => $email,
                        "mobile" => $mobile,
                        "subject" => $subject,
                        "message" => $message,
                    );

                    $res = $this->insert('contactsus', $data);
                    if ($res) {
                        echo "<script>
                            alert('Your Message Sendt Successfully!');
                        </script>";
                    }
                }


            include_once('contact.php');    
            break;
    /* IMG CASE
            case'/image':
            if (isset($_REQUEST['image'])) {
                "<input type="file">"
            }
            break;
*/

            case '/login':
                 if (isset($_REQUEST['submit'])) {

                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);

                    $data = array(
                        "email" => $email,
                        "password" => $password
                    );
                    $res= $this->select_where('customers',$data);
                    
                    $chk = $res->num_rows; // login check row wise condition 
                    if($chk==1) // 1 means true & 0 false
                    {  
                        $data=$res->fetch_object(); // data fetch single
                        if($data->status=="Unblock")
						{
                        //CREATE SESSION
                        $_SESSION['u_id']=$data->id;
                        $_SESSION['u_name']=$data->cust_name;
                        $_SESSION['u_email']=$data->email;
                        $_SESSION['u_mobile']=$data->mobile;
                

                        echo "<script>
                            alert('Login Success!');
                            window.location='index';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Login Failed due to Blocked Account so Contact us!');
                            window.location='login';
                        </script>";
                    }
                   }
                     else
                    {
                        echo "<script>
                            alert('Login Failed due to wrong credential!');
                            window.location='login';
                        </script>";
                    }

                }   
              
            include_once('login.php');    
            break;

            case '/logout':
               unset ($_SESSION['u_id']);
                unset($_SESSION['u_name']);
                unset($_SESSION['u_email']);
                unset($_SESSION['u_mobile']);

                echo "<script>
                            alert('Logout Success!');
                            window.location='index';
                        </script>";
            break;

            case '/register':

                $cont_arr = $this->select('customers');
                if (isset($_REQUEST['submit'])) {
                    
                    $cust_name = $_REQUEST['cust_name'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                   
                    $image = $_FILES['image']['name'];

                    $path = 'assets/images/customer/' . $image;
                    $dup_img = $_FILES['image']['tmp_name'];
                    move_uploaded_file($dup_img, $path);

                     $password =md5($_REQUEST['password']);

                    $data = array(
                        
                        "cust_name" => $cust_name,
                        "email" => $email,
                        "mobile" => $mobile,
                        "image" => $image,
                        "password" => $password
                         
                    );

                    $res = $this->insert('customers', $data);
                    if ($res) {
                        echo "<script>
                            alert('Now You are a Member!');
                             window.location='login';
                        </script>";
                    }
                }

            include_once('register.php');    
            break;


       //my_profile
            case '/my_profile':
            $arr=array("id"=>$_SESSION['u_id']);
            $run = $this->select_where ('customers', $arr);
            $fetch = $run->fetch_object(); 
            include_once('my_profile.php');    
            break;
        
        //edit_profile
            case '/edit_profile':
             if(isset($_REQUEST['edt_profile'])) { 
                $id = $_REQUEST['edt_profile'];
                 $where = array("id" => $id);
                    $res = $this->select_where('customers', $where);
					$fetch = $res->fetch_object();
                    
                    if (isset($_REQUEST['save'])) {

                    $cust_name = $_REQUEST['cust_name'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                  //  $image = $_REQUEST['image'];
                  if($_FILES['image']['size']>0)
						{
							
						unlink('assets/images/customers/'. $fetch->image);
							
							$image = $_FILES['image']['name'];
							$path = 'assets/images/customers/' . $image;
							$dup_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($dup_img, $path);
                   
                   
                    $data = array(
                        
                        "cust_name" => $cust_name,
                        "email" => $email,
                        "mobile" => $mobile,
                        "image" => $image
                       
                    
                    );
                     
                    $res = $this->update('customers', $data, $where);
                    if ($res) {
                        echo "<script>
                            alert('Update Successful!');
                             window.location='my_profile';
                        </script>";
                    }
                 
                
                }
				else
						{
							$data = array(  
                            "cust_name" => $cust_name,
                             "email" => $email,
                             "mobile" => $mobile
                                );

							$res = $this->update('customers', $data, $where);
							if ($res) {
								echo "<script>
									alert('Service Updated Success!');
									window.location='my_profile';
								</script>";
							}
						}
             }	
             }
            include_once('edit_profile.php');    
            break;

            case '/order':
            $cate_arr = $this->select('categories');
            $serv_arr = $this->select('service');

            if (isset($_REQUEST['ord'])) {
                $id = $_REQUEST['ord'];
                $where = array("id" => $id);
                $res = $this->select_where('service', $where);
                $fetch=$res->fetch_object();
            
                  
            
            }
            

            include_once('order.php');    
            break;

            case '/single_service':
            $cate_arr = $this->select('categories');
            $serv_arr = $this->select('service');

            if (isset($_REQUEST['sing_service'])) {
                    $id = $_REQUEST['sing_service'];
                    $where = array("id" => $id);
                    $res = $this->select_where('service', $where);
                    $fetch=$res->fetch_object();

                      if (isset($_REQUEST['submit'])) {
                    
                    $cust_id = $_REQUEST['cust_id'];
                    $serv_id = $_REQUEST['serv_id'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                    $address = $_REQUEST['adddress'];
                    $quantity = $_REQUEST['quantity'];
                  
                    $data = array(
                        
                        "cust_id" => $cust_id,
                        "serv_id" => $serv_id,
                        "email" => $email,
                        "mobile" => $mobile,
                        "address" => $address,
                        "quantity" => $quantity
                    );

                    $res = $this->insert('orders', $data);
                    if ($res) {
                        echo "<script>
                            alert('Your Message Sendt Successfully!');
                        </script>";
                    }
                }

                    
            }
              /*  echo "<pre>";
                print_r($fetch);
                echo "</pre>";
            */
            include_once('single_service.php');    
            break;



        }
    }
}

$obj = new control;


