<?php
class Chat_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->db_2 = $this->load->database('otherdb', TRUE);
        
    }

    public $query;
    public $sql;
    private $db_2;


/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
    public function insert_chat($isi,$nama_dosen,$id_jadual)
    {
        $data = array(
           'isi_chat' => $isi ,
           'nama_dosen' => $nama_dosen,
		   'id_jadual' => $id_jadual
        );

        $this->db_2->insert('el_table_chat_new', $data); 

    }
	

    public function get_jadual_chat($nama)
    {
        $this->query = $this->db_2->query("SELECT m.nama mtk, d.nama dosen, j.id_jadual id_jadual
											FROM mtk m, dosen d, jadual j
											WHERE m.id_mtk = j.id_mtk
											AND j.id_dosen = d.id_dosen
											AND d.nama = '$nama'
											AND j.thn_akademik =2017
											AND j.periode =1");

        if($this->query->num_rows >0){
            return $this->query;   
        }else{
            return NULL;
        } 
    }
	
	public function get_chat($id_jadual)
    {
        $this->query = $this->db_2->query("SELECT DISTINCT A.*, B.uraian_panjang FROM (SELECT DISTINCT A.*, B.nama, B.kd_jurusan FROM el_table_chat_new A
                LEFT JOIN mhs B
                ON A.nim=B.nim
                WHERE A.id_jadual = '$id_jadual'
                ORDER BY A.waktu_chat DESC LIMIT 30) as A
                LEFT JOIN mst_jurusan B
                ON A.kd_jurusan=B.kd_jurusan
                ORDER BY A.waktu_chat ASC LIMIT 30");

        if($this->query->num_rows >0){
            return $this->query;   
        }else{
            return NULL;
        } 
    }
  
}

?>