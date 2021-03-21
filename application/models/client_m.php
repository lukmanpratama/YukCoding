<?php

class client_m extends CI_Model{
	
	private $_table = "client";

    public $id_client;
    public $nama_client;
    public $no_hp;
    public $email;
    public $alamat;
	public $instansi;

	public function rules()
	{
		return [
			['field' => 'nama_client',
			'label' => 'nama_client',
			'rules' => 'required'],

			['field' => 'no_hp',
			'label' => 'no_hp',
			'rules' => 'required'],

			['field' => 'email',
			'label' => 'email',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'alamat',
			'rules' => 'required'],

			['field' => 'instansi',
			'label' => 'instansi',
			'rules' => 'required']
		];
	}

	function tampil_data(){

		return $this->db->get($this->_table)->result();
	}
	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_client" => $id])->row();
    }
	public function tambah_data()
    {
        $post = $this->input->post();
        $this->id_client = uniqid();
        $this->nama_client = $post["nama_client"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
		$this->alamat = $post["alamat"];
		$this->instansi = $post["instansi"];
        return $this->db->insert($this->_table, $this);
    }
	public function update_data()
    {
        $post = $this->input->post();
        $this->id_client = uniqid();
        $this->nama_client = $post["nama_client"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
		$this->alamat = $post["alamat"];
		$this->instansi = $post["instansi"];
		return $this->db->update($this->_table, $this, array('id_client' => $post['id_client']));
    }
	
}
