<?php

class Hotel extends Controller {
    public function index()
    {   
        $data['judul'] = 'Hotel';
        $data['room'] = $this->model('RoomModel')->getAllRoom();
        $this->view('templates/header', $data);
        $this->view('hotel/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('RoomModel')->tambahDataRoom ($_POST) > 0)
        {
            Flasher::setFlash('berhasil' ,'ditambahkan' , 'success');
            header('Location:' . BASEURL . '/hotel');
            exit;
        } else {
            Flasher::setFlash('gagal' ,'ditambahkan' , 'danger');
            header('Location:' . BASEURL . '/hotel');
            exit;
        }
    }


    public function hapus($id_room)
    {
        if($this->model('RoomModel')->hapusDataRoom ($id_room) > 0)
        {
            Flasher::setFlash('berhasil' ,'dihapus' , 'success');
            header('Location:' . BASEURL . '/hotel');
            exit;
        } else {
            Flasher::setFlash('gagal' ,'dihapus' , 'danger');
            header('Location:' . BASEURL . '/hotel');
            exit;
        }
    }

   public function getedit()
   {
        echo json_encode($this->model('RoomModel')->getRoomById($_POST['id_room']));
   }

}