<?php

class Suratkeluar_model
{
    private $table = 'arsip';
    private $db;
    private $stmt;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getArsipSurat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function tambahsurat($data)
    {

        $alamat = htmlspecialchars( $data["alamat"]);
        $nomor = htmlspecialchars( $data["nomor"]);
        $lampiran = htmlspecialchars( $data["lampiran"]);
        $perihal = htmlspecialchars( $data["perihal"]);
        $dituju = htmlspecialchars( $data["dituju"]);
        $this->db->query("INSERT INTO arsip(alamat, nomor, lampiran, perihal, dituju) VALUE(:alamat,:nomor,:lampiran,:perihal,:dituju)");
        $this->db->bind('alamat', $alamat);
        $this->db->bind('nomor',$nomor );
        $this->db->bind('lampiran', $lampiran);
        $this->db->bind('perihal', $perihal);
        $this->db->bind('dituju', $dituju);
        $this->db->execute();


        return $this->db->rowCount();
    }

    public function hapus($data)
    {
        $query = "DELETE FROM arsip WHERE id_arsip='$data'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusall($data)
    {
        $id = $data;
        $jml_pilih = count($id);
        for ($x = 0; $x < $jml_pilih; $x++) {
            $query = "DELETE FROM arsip WHERE id_arsip='$data[$x]'";
            $this->db->query($query);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }
}
