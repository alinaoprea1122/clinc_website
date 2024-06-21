<?php


global $db_con;
require_once '/Users/adelinaoprea/Desktop/clinc_website/controller/config/db_config.php';


    if(isset($_POST['newAppointment'])){

        $customerName       = $_POST['CustomerName'];
        $customerMobile     = $_POST['mobileNo'];
        $customerEmail      = $_POST['customerEmail'];
        $department_id      = $_POST['department_id'];
        $doctor_id          = $_POST['Doctor_id'];
        $appointmentInfo    = $_POST['appointmentTime'];
        
        $date_and_time = explode(" ",$appointmentInfo);

        $appointmentStatus = 1;

        $appointment_date   = $date_and_time['0'];
        $appoint_time       = $date_and_time['1'];

        if(!empty($customerName && $customerMobile && $department_id && $customerName && $appointmentInfo)){

            $addAppointment = "INSERT INTO `appointment`(`customer_name`, `customer_email`, `customer_phone`, `customer_appointment_date`, `appointment_time`, `appointment_service_id`, `doctor_id`,`appointment_status`) VALUES ('{$customerName}','{$customerEmail}','{$customerMobile}','{$appointment_date }','{$appoint_time}','{$department_id}','{$doctor_id}','$appointmentStatus')";
            
            $runNewAppointment = mysqli_query($db_con,$addAppointment);

            if($runNewAppointment == true){
                
                $msg = "Appointment Book Successfully...";
                
                header('location: ../all_appointment.php?msg='.$msg);

            }else{
                
                $msg = "Sorry ! Appointment Booking Failed....Please Try Again....!";

                header('location: ../all_appointment.php?msg='.$msg);
            }
        }else{

            $msg = "Sorry ! All Filed ar requered...! Please Try Again....";

            header('location: ../all_appointment.php?msg='.$msg);

        }

    }

















?>