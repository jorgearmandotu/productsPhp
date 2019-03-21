<?php
    class News_model extends CI_Model {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
            if($slug === FALSE)
            {
                $query = $this->db->get('categories');
                return $query->result_array();
            }
            $query = $this->db->get_where('categories', array('category'=>$slug));
            return $query->row_array();
        }

        public function set_news()
        {
            $this->load->helper('url');
            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'category'=>$this->input->post('text')
            );
            return $this->db->insert('categories', $data);
        }

        public function get_Products($slug = FALSE)
        {
            if($slug === FALSE)
            {
                $query = $this->db->get('products');
                return $query->result_array();
            }
        }
    }
?>
