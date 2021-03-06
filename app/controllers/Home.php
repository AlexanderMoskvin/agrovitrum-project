<?php
    class Home extends Controller {
        public function index() {

            $data = [];
            if(isset($_POST['name'])) {
                $mail = $this->model('HomeModel');
                $mail->setData($_POST['name'], $_POST['tel'], $_POST['email'], $_POST['message']);

                $isValid = $mail->validForm();
                if($isValid == "Верно")
                    $data['message'] = $mail->mail();
                else
                    $data['message'] = $isValid;
            }
            $this->view('home/index', $data);
        }
    }
