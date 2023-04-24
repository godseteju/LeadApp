<?php
    class Login extends CI_model
    {
        public function __construct()
        {
        parent::__construct();

        }


        public function get_user_data($data)
        {
            $this->load->database();
            // $condition = "rollno =" . "'" . $data1['rollno'] . "'";
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where($data);
            $this->db->limit(10);
            $query = $this->db->get();
            return $query->result();
        }

        public function update_profile($email) {
            $data = array(
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name')
                    );
                        // echo "<pre>";print_r($data);die;
            $this->db->where('email', $email);
            $this->db->update('users', $data);
        }

        public function insert_dashboard_data($data)
        {
            $this->db->insert('dashboard', $data);
        }

        public function get_dashboard_data()
        {
            $this->load->database();
            $this->db->select('*');
            $this->db->from('dashboard');
            // $this->db->limit(10);
            $query = $this->db->get();
            // echo "<pre>";print_r($this->db->last_query());die;
            return $query->result();
        }

    }