<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail_demo extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // var_dump($_POST);
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        // $this->load->view('sussess_failed_view');
        $this->load->library('session');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username   = 'ranemanagementconsultant@gmail.com'; 
        $mail->Password   = 'fofa ooot sigs kvia';

        // $mail->Username = 'amritvishwakarma121@gmail.com';
        // $mail->Password = 'ivix jagn rskc tycm';

        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 465;
        // $mail->Port     = 587;

        $mail->setFrom('ranemanagementconsultant@gmail.com', 'Rane');
        $mail->addReplyTo('ranemanagementconsultant@gmail.com', 'Viraj');

        // Add a recipient
        // $mail->addAddress($_POST['comp_email']);
        $mail->addAddress('ranemanagementconsultant@gmail.com', 'Viraj');

        // $mail->setFrom('amritvishwakarma121@gmail.com', '');
        // $mail->addReplyTo('amritvishwakarma121@gmail.com', 'Amrit');
        // $mail->addAddress('amritvishwakarma989@gmail.com', 'Amrit');



        // Email subject
        $mail->Subject = 'This is a email subject';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content

        if (isset($_POST["send"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            // $resume = $_POST['resume'];
            $resume = $_FILES['fileToUpload'];
            $message = $_POST['message'];

            $files = $_FILES;
            $config['upload_path']   = './uploads';
            $config['allowed_types'] = 'pdf|doc|docx'; // Update allowed file types as needed

            // Generate a unique identifier
            $unique_identifier = md5(uniqid());

            // Original filename with unique identifier
            $hashed_filename = $unique_identifier . '_' . $resume['name'];
            $_FILES['fileToUpload']['name'] = $hashed_filename;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileToUpload')) {
                $upload_data = $this->upload->data();
                $resume_path = $upload_data['full_path'];

               

                $mail->Subject = 'Applicant Details';
                $mail->Body = "
    <html>
    <head>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f8f8;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            h1 {
                color: #333;
                text-align: center;
                margin-bottom: 20px;
            }
            h5 {
                color: #555;
                margin-bottom: 5px;
            }
            p {
                margin: 0 0 10px;
            }
            .info-block {
                background-color: #fff;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Applicant Details</h1>
        <div class='info-block'>
            <h5>Applicant Name:</h5><p style='color: #777;'>" . $name . "</p>
            <h5>Applicant Email:</h5><p style='color: #777;'>" . $email . "</p>
            <h5>Applicant Contact:</h5><p style='color: #777;'>" . $phone . "</p>
            <h5>Applicant Message:</h5><p style='color: #777;'>" . $message . "</p>
            <h5>Resume Filename:</h5><p style='color: #777;'>" . $hashed_filename . "</p>
        </div>
    </body>
    </html>
";


                // Attach the resume to the email
                $mail->addAttachment($resume_path, 'Resume.pdf');

                if ($mail->send()) {
                    // $this->session->set_flashdata('success_message', 'Email sent successfully!');
                    echo '<script>alert("Email sent successfully!");</script>';
                    echo '<script>window.location.href="http://ranemanagementconsultant.com/Careers_con";</script>';
                    exit;
                } else {
                    $this->session->set_flashdata('error_message', 'Failed to send! Mailer Error: ' . $mail->ErrorInfo);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                // Handle file upload errors as needed
                $this->session->set_flashdata('error_message', 'Failed to upload file! Error: ' . $this->upload->display_errors());
            }

            // Redirect back to the careers page
            redirect('http://ranemanagementconsultant.com/Careers_con');
        } elseif (isset($_POST["service-form"])) {
           

            $mail->Subject = 'Service Form Submission';
            $mail->Body = "
    <html>
    <head>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f8f8;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            h1 {
                color: #333;
                text-align: center;
                margin-bottom: 20px;
            }
            h5 {
                color: #555;
                margin-bottom: 5px;
            }
            p {
                margin: 0 0 10px;
            }
            .info-block {
                background-color: #fff;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Service Form Submission</h1>
        <div class='info-block'>
            <h5>Name:</h5><p style='color: #777;'>" . $_POST['name'] . "</p>
            <h5>Email:</h5><p style='color: #777;'>" . $_POST['email'] . "</p>
            <h5>Location:</h5><p style='color: #777;'>" . $_POST['location'] . "</p>
            <h5>Selected Service:</h5><p style='color: #777;'>" . $_POST['selected_service'] . "</p>
            <h5>Contact No:</h5><p style='color: #777;'>" . $_POST['phone'] . "</p>
            <h5>Message:</h5><p style='color: #777;'>" . $_POST['address'] . "</p>
        </div>
    </body>
    </html>
";


            if ($mail->send()) {
                // $this->session->set_flashdata('success_message', 'New form email sent successfully!');
                echo '<script>alert("Email sent successfully!");</script>';
                echo '<script>window.location.href="http://ranemanagementconsultant.com/Service1";</script>';
                exit;
            } else {
                $this->session->set_flashdata('error_message', 'Failed to send! Mailer Error: ' . $mail->ErrorInfo);
            }

            redirect('http://ranemanagementconsultant.com');
        } elseif (isset($_POST["contact-form"])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $company = $_POST['company'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $phone_contact = $_POST['phone'];
            $email_contact = $_POST['email'];
            $message_contact = $_POST['message'];

            // $mail->Subject = 'Contact Form Submission';
            // $mail->Body = "<h1>Contact Form Submission</h1>";
            // $mail->Body .= "<h5>First Name: </h5>" . $first_name . "<br>";
            // $mail->Body .= "<h5>Last Name: </h5>" . $last_name . "<br>";
            // $mail->Body .= "<h5>Company: </h5>" . $company . "<br>";
            // $mail->Body .= "<h5>State: </h5>" . $state . "<br>";
            // $mail->Body .= "<h5>Country: </h5>" . $country . "<br>";
            // $mail->Body .= "<h5>Phone: </h5>" . $phone_contact . "<br>";
            // $mail->Body .= "<h5>Email: </h5>" . $email_contact . "<br>";
            // $mail->Body .= "<h5>Message: </h5>" . $message_contact . "<br>";

            $mail->Subject = 'Contact Form Submission';
            $mail->Body = "
    <html>
    <head>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f8f8;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            h1 {
                color: #333;
                text-align: center;
                margin-bottom: 20px;
            }
            h5 {
                color: #555;
                margin-bottom: 5px;
            }
            p {
                margin: 0 0 10px;
            }
            .info-block {
                background-color: #fff;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Contact Form Submission</h1>
        <div class='info-block'>
            <h5>First Name:</h5><p style='color: #777;'>$first_name</p>
            <h5>Last Name:</h5><p style='color: #777;'>$last_name</p>
            <h5>Company:</h5><p style='color: #777;'>$company</p>
            <h5>State:</h5><p style='color: #777;'>$state</p>
            <h5>Country:</h5><p style='color: #777;'>$country</p>
            <h5>Phone:</h5><p style='color: #777;'>$phone_contact</p>
            <h5>Email:</h5><p style='color: #777;'>$email_contact</p>
            <h5>Message:</h5><p style='color: #777;'>$message_contact</p>
        </div>
    </body>
    </html>
";



            if ($mail->send()) {
                // $this->session->set_flashdata('success_message', 'Contact form email sent successfully!');


                echo '<script>alert("Email sent successfully!");</script>';
                echo '<script>window.location.href="http://ranemanagementconsultant.com/Contact_us_con";</script>';
                exit;
            } else {
                $this->session->set_flashdata('error_message', 'Failed to send! Mailer Error: ' . $mail->ErrorInfo);
            }

            redirect('http://ranemanagementconsultant.com/RANE_con');
        } 


        if (isset($_POST["submit_property_listing"]) || isset($_POST["submit_property_lease"]) || isset($_POST["submit_joint_development"]) || isset($_POST["submit_redevelopment"])) {
            // Retrieve common form data
            $property_type = $_POST['property_type'];
            $property_description = $_POST['property_description'];
            $location = $_POST['location'];
            $existing_structures = $_POST['existing_structures'];
            $total_area = $_POST['total_area'];
            $features_highlights = $_POST['features_highlights'];
            $specific_terms_conditions = $_POST['specific_terms_conditions'];


            // Prepare email content based on the form submitted
            if (isset($_POST["submit_property_listing"])) {
                $subject = 'Property Sales Listing Form Submission';
                $extra_fields = "Asking Price: {$_POST['asking_price']}";
            } elseif (isset($_POST["submit_property_lease"])) {
                $subject = 'Property Lease Form Submission';
                $extra_fields = "Lease Period: {$_POST['lease_period']}, Asking Price per Month: {$_POST['asking_price_month']}";
            } elseif (isset($_POST["submit_joint_development"])) {
                $subject = 'Joint Development/JV Property Form Submission';
                $extra_fields = "Lease Period: {$_POST['lease_period']}";
            } elseif (isset($_POST["submit_redevelopment"])) {
                $subject = 'Redevelopment Property Form Submission';
                $extra_fields = "Built-up Area: {$_POST['built_up_area']}";
            }

            // Prepare email body
            $mail->Subject = $subject;
            $mail->IsHTML(true);

            $email_body = "
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
        }
        .info-block {
            margin-top: 20px;
        }
        h5 {
            margin-top: 10px;
            color: #0056b3;
        }
        p {
            color: #777;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>$subject</h1>
        <div class='info-block'>
            <h5>Type of Property:</h5>
            <p>$property_type</p>
            <h5>Property Description:</h5>
            <p>$property_description</p>
            <h5>Location:</h5>
            <p>$location</p>
            <h5>Existing Structures:</h5>
            <p>$existing_structures</p>
            <h5>Total Area:</h5>
            <p>$total_area</p>
            <h5>Features/Highlights:</h5>
            <p>$features_highlights</p>
            <h5>$extra_fields</h5>
            <h5>Specific Terms or Conditions:</h5>
            <p>$specific_terms_conditions</p>
        </div>
    </div>
</body>
</html>";


            // Check if files are uploaded
            if (isset($_FILES['photos_sends']) && is_array($_FILES['photos_sends']['tmp_name'])) {
                $email_body .= "<h2>Uploaded Photos:</h2>";
                foreach ($_FILES['photos_sends']['tmp_name'] as $key => $tmp_name) {
                    $file_name = htmlspecialchars($_FILES['photos_sends']['name'][$key]);
                    $file_size = htmlspecialchars($_FILES['photos_sends']['size'][$key]);
                    $file_type = htmlspecialchars($_FILES['photos_sends']['type'][$key]);
                    $file_tmp = htmlspecialchars($_FILES['photos_sends']['tmp_name'][$key]);

                    // Add the image as a CID attachment
                    $mail->AddEmbeddedImage($file_tmp, $file_name, $file_name);

                    // Include the image in the email body using CID
                    $email_body .= "<img src='cid:$file_name' alt='$file_name' width='200px' /><br>";
                }
            }

            $email_body .= "
        </body>
        </html>
    ";

            $mail->Body = $email_body;

            // Send email
            if ($mail->send()) {
                echo '<script>alert("Email sent successfully!");</script>';
                echo '<script>window.location.href="http://ranemanagementconsultant.com/Property_lisiting_con";</script>';
                exit;
            } else {
                $this->session->set_flashdata('error_message', 'Failed to send! Mailer Error: ' . $mail->ErrorInfo);
            }

            // Redirect back to the appropriate page
            echo '<script>window.location.href="<?php base_url() ?>RANE_con";</script>';
        }
        
    
}
}