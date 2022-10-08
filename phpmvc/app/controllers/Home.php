<?php 

class Home extends Controller{
    public function index(){
        $data['judul']= 'Home';
        $this->view('templates/hader',$data  );
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
