<?php

include_once('../new_web/model.php');  

  
class control extends model{  

    function __construct()
    {
        
        session_start();


        model::__construct();  

        $path=$_SERVER['PATH_INFO'];

        switch($path){

            case '/admin-login':
                if (isset($_REQUEST['submit'])) {

                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);

                    $data = array(
                        "email" => $email,
                        "password" => $password
                    );
                    $res= $this->select_where('admin',$data);
                    
                    $chk = $res->num_rows; // login check row wise condition 
                    if($chk==1) // 1 means true & 0 false
                    {  
                        $data=$res->fetch_object(); // data fetch single
                        //CREATE SESSION
                        $_SESSION['a_id']=$data->id;
                        $_SESSION['a_name']=$data->name;
                        $_SESSION['a_email']=$data->email;
                        $_SESSION['a_image']=$data->image;
                       
                

                        echo "<script>
                            alert('Login Success!');
                            window.location='dashboard';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Login Failed!');
                            window.location='admin-login';
                        </script>";
                    }
                }   

            include_once('admin-login.php');    
            break;


             case '/logout':
               unset($_SESSION['a_id']);
                unset( $_SESSION['a_name']);
               unset( $_SESSION['a_email']);

                echo "<script>
                            alert('Logout Success!');
                            window.location='admin-login';
                        </script>";
            break;
            
             //admin_profile
            case '/admin_profile':
            $arr=array("id"=>$_SESSION['a_id']);
            $run = $this->select_where ('admin', $arr);
            $fetch = $run->fetch_object(); 
            include_once('admin_profile.php');    
            break;


             case '/admin-account':
            $arr=array("id"=>$_SESSION['a_id']);
            $run = $this->select_where ('admin', $arr);
            $fetch = $run->fetch_object(); 
            break;


            case '/dashboard':
            include_once('dashboard.php');    
            break;
            
             case '/customer':
             $cust_arr=$this->select('customers');
            include_once('customer.php');    
            break;

            case '/feedback':
            include_once('feedback.php');    
            break;

            case '/contect':
                $cont_arr=$this->select('contactsus');
            include_once('contect.php');    
            break;
            
            case '/manage_order':
            $ord_arr=$this->select('orders');
            include_once('manage_order.php');    
            break;

            case '/cart':
            include_once('cart.php');    
            break;

             case '/add_service':
                
                $cate_arr = $this->select('categories');
                if (isset($_REQUEST['submit'])) {
                    
                    $serv_name = $_REQUEST['serv_name'];
                    $cate_id = $_REQUEST['cate_id'];
                    $description = $_REQUEST['description'];
                    $price = $_REQUEST['price'];
                   
                    $image = $_FILES['image']['name'];

                    $path = 'assets/images/service/' . $image;
                    $dup_img = $_FILES['image']['tmp_name'];
                    move_uploaded_file($dup_img, $path);

                    $data = array(
                        
                        "cate_id" => $cate_id,
                        'serv_name'=>$serv_name,
                        "description" => $description,
                        "price" => $price,
                        "description" => $description,
                        "image" => $image
                    );

                    $res = $this->insert('service', $data);
                    if ($res) {
                        echo "<script>
                            alert('Service Added Success!');
                        </script>";
                    }
                }

            include_once('add_service.php');    
            break;

         //Edit_service
            case '/edit_service':
            $cate_arr = $this->select('categories');
            $serv_arr = $this->double_select('service','categories','cate_name','categories.id=service.cate_id');
             if (isset($_REQUEST['edt_service'])) {
                    $id = $_REQUEST['edt_service'];
                    $where = array("id" => $id);
                    $res = $this->select_where('service', $where);
                    $fetch=$res->fetch_object();
					
					 if (isset($_REQUEST['submit'])) {

                         $serv_name = $_REQUEST['serv_name'];
                         $cate_id = $_REQUEST['cate_id'];
                         $description = $_REQUEST['description'];
                         $price = $_REQUEST['price'];
						
						if($_FILES['image']['size']>0)
						{
							
						unlink('assets/images/service/'. $fetch->image);
							
							$image = $_FILES['image']['name'];
							$path = 'assets/images/service/' . $image;
							$dup_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($dup_img, $path);

							$data = array(
                               "cate_id" => $cate_id, 
                                "serv_name"=>$serv_name,
                                "price" => $price,
                                "description" => $description,
                                "image" => $image
                                 
                              );

							$res = $this->update('service', $data, $where);
							if ($res) {
								echo "<script>
									alert('Service Updated Success!');
									window.location='manage_service';
								</script>";
							}
						}
						else
						{
							$data = array(  
                               "cate_id" => $cate_id,
                                "serv_name"=>$serv_name,
                                 "price" => $price,
                                "description" => $description
                                );

							$res = $this->update('service', $data, $where);
							if ($res) {
								echo "<script>
									alert('Service Updated Success!');
									window.location='manage_service';
								</script>";
							}
						}
						
                 }
					
                }

            include_once('edit_service.php');    
            break;


            
            case '/manage_service':
                $serv_arr = $this->double_select('service','categories','cate_name','categories.id=service.cate_id');
              
            include_once('manage_service.php');    
            break;

            case '/add_categories':
                  $cate_arr = $this->select('categories');
                if (isset($_REQUEST['submit'])) {

                    $cate_name = $_REQUEST['cate_name'];
                    $cate_desp = $_REQUEST['cate_desp'];
                 
                    $data = array(
                        "cate_name" => $cate_name,
                        "cate_desp" => $cate_desp,
                       
                    );

                    $res = $this->insert('categories', $data);
                    if ($res) {
                        echo "<script>
                            alert('categories Added Success!');
                        </script>";
                    }
                }




            include_once('add_categories.php');    
            break;

             case '/edit_categories':
             if (isset($_REQUEST['edt_categories'])) {
                    $id = $_REQUEST['edt_categories'];
                    $where = array("id" => $id);
                    $res = $this->select_where('categories', $where);
                    $fetch=$res->fetch_object();
					
					 if (isset($_REQUEST['submit'])) {

                         $cate_name = $_REQUEST['cate_name'];
                         $cate_desp = $_REQUEST['cate_desp'];
						
	
							$data = array(
                                "cate_name" => $cate_name,
                                 "cate_desp" => $cate_desp
                                 
                              );

							$res = $this->update('categories', $data, $where);
							if ($res) {
								echo "<script>
									alert('Categories Updated Success!');
									window.location='manage_categories';
								</script>";
							}
						}	
                  }
            include_once('edit_categories.php');    
            break;



            case '/manage_categories':
                 $cate_arr=$this->select('categories');
            include_once('manage_categories.php');    
            break;


             case '/delete':
                //delete categories
                 if (isset($_REQUEST['dlt_categories'])) {
                    $id    = $_REQUEST['dlt_categories'];
                    $where = ["id" => $id];

                    $res = $this->delete_where('categories', $where);

                    if ($res) {
                        echo "<script>
                            alert('Category Deleted Successfully!');
                            window.location='manage_categories';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Delete Failed!');
                            window.location='manage_categories';
                        </script>";
                    }
                }

                //delete service
                if (isset($_REQUEST['dlt_service'])) {
                    $id=$_REQUEST['dlt_service'];
                    $where=array("id"=>$id);
                    $res=$this->delete_where('service',$where);

                     if ($res) {
                        echo "<script>
                            alert('Service Deleted Successfully!');
                            window.location='manage_service';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Delete Failed!');
                            window.location='manage_service';
                        </script>";
                    }
                }

                //delete contect
                 if (isset($_REQUEST['dlt_contect'])) {
                    $id=$_REQUEST['dlt_contect'];
                    $where=array("id"=>$id);
                    $res=$this->delete_where('contactsus',$where);
                    
                     if ($res) {
                        echo "<script>
                            alert('Contect Deleted Successfully!');
                            window.location='contect';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Delete Failed!');
                            window.location='contect';
                        </script>";
                    }
                }

                //delete order
                 if (isset($_REQUEST['dlt_order'])) {
                    $id=$_REQUEST['dlt_order'];
                    $where=array("id"=>$id);
                    $res=$this->delete_where('orders',$where);
                    
                     if ($res) {
                        echo "<script>
                            alert('Order Deleted Successfully!');
                            window.location='manage_orders';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Delete Failed!');
                            window.location='manage_orders';
                        </script>";
                    }
                }

                //delete customer
                 if (isset($_REQUEST['dlt_customers'])) {
                    $id=$_REQUEST['dlt_customers'];
                    $where=array("id"=>$id);
                    $res=$this->delete_where('customers',$where);
             

                    
                     if ($res) {
                        echo "<script>
                            alert('customer Deleted Successfully!');
                            window.location='customer';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Delete Failed!');
                            window.location='customer';
                        </script>";
                    }
                }
             
                break;



             case'/status':
                if(isset($_REQUEST['status_customer'])){
                    $id = $_REQUEST['status_customer'];
                    $where=array("id"=>$id);
                    $res=$this->select_where('customers',$where);
                    $fetch=$res->fetch_object();

                    if($fetch->status=="Unblock")
                    {
                        $arr=array("status"=>"Block");
                        $res=$this->update('customers', $arr, $where);
                        if ($res) {
							
							unset($_SESSION['u_id']);
							unset($_SESSION['u_name']);
							unset($_SESSION['u_email']);
							echo "<script>
								alert('Customer Blocked Success!');
								window.location='customer';
							</script>";
						}
                    }
                        else
					    {
						$arr=array("status"=>"Unblock");
						$res=$this->update('customers', $arr, $where);
						if ($res) {
							echo "<script>
								alert('Customer Unblock Success!');
								window.location='customer';
							</script>";
						}
                    }
                 
                }
               
            break;   

        }
    }
}

$obj=new control;

