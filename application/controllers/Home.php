<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function structure()
    {
        $this->load->view('structure');
    }


    public function faq()
    {
        $this->load->view('faq');
    }


    public function redirect($path)
    {
        if ($path == 'home') {
            redirect('home');
        } elseif ($path == 'aboutus') {
            redirect('home#about-section');
        } elseif ($path == 'team') {
            redirect('home#team-section');
        } elseif ($path == 'faq') {
            redirect('home#faq-section');
        } elseif ($path == 'services') {
            redirect('home#services-section');
        } elseif ($path == 'blog') {
            redirect('home#blog-section');
        } elseif ($path == 'contact') {
            redirect('home#contact-section');
        } elseif ($path == 'structure') {
            redirect('home#structure-section');
        } elseif ($path == 'galery') {
            redirect('home#gallery-section');
        }
    }


    public function gallery()
    {
        $this->load->view('gallery');
    }


    public function blog()
    {
        // $this->load->view('blog');
    }


    public function sendmail()
    {

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $ffrom = $this->input->post('email');
        $fsubject = $this->input->post('subject');
        $fmessage = $this->input->post('message');
        $message = '
		<html>
		<body>
		  <table>
			<tr>
			  <th>First Name </th>
			  <td>: ' . $fname . '</td>
			</tr>
			<tr>
			  <th>Last Name </th>
			  <td>: ' . $lname . '</td>
			</tr>
			<tr>
			  <th>Email </th>
			  <td>: ' . $ffrom . '</td>
			</tr>
			<tr>
			  <th>Subject </th>
			  <td>: ' . $fsubject . '</td>
			</tr>
			<tr>
			  <th>Pesan </th>
			  <td>: ' . $fmessage . '</td>
			</tr>
		  </table>
		</body>
		</html>
		';

        $from = $this->config->item('smtp_user');
        $to = "afridhow78@gmail.com";
        $subject = "Pesan Baru - $ffrom";
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $url = base_url('Home/sendmail');

        if ($this->email->send()) {
            echo 'Email Sent Successfully';
        } else {
            echo 'failed';
        }
        redirect('home');
    }
}
