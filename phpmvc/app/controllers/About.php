<?php 

class About extends Controller {
    public function index($nama ='Bintang', $pekerjaan ='Mahasiswa',$umur ='20'){
        $data['judul']='About me';
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $data['umur']=$umur;
        $this->view('templates/hader',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }


    public function page(){
        $data['judul']= 'Page';
        $this->view('templates/hader',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}