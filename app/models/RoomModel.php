<?php

class RoomModel {
    private $table = 'room';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRoom()
    {
       $this->db->query("SELECT * FROM room ORDER BY id_room DESC");
       return $this->db->resultSet();
    }

    public function getRoomById($id)
    {
        $this->db->query('SELECT * FROM room WHERE id=:id_room');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataRoom($data)
    {
        $query = "INSERT INTO room
                    VALUES
                    ('', :category, :room_numb, :status , :code)";
        $this->db->query($query);
        $this->db->bind('category', $data['roomcategory']);
        $this->db->bind('room_numb', $data['roomnumb']);
        $this->db->bind('status', $data['roomstatus']);
        $this->db->bind('code', $data['roomcode']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataRoom($id_room)
    {
        $query = "DELETE FROM room WHERE id_room = :id_room";
        $this->db->query($query);
        $this->db->bind('id_room', $id_room);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
