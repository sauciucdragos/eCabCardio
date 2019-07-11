<?php
/**
 * 
 */
class News_model extends CI_model
{ //1
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');  // news=tabela
			return $query->result_array();
		}

	}

	public function set_news()
			{
			    $this->load->helper('url');

			    $slug = url_title($this->input->post('title'), 'dash', TRUE);

			    $data = array(
			        'title' => $this->input->post('title'),
			        'slug' => $slug,
			        'text' => $this->input->post('text')
			    );

			return $this->db->insert('news', $data);
			}



}  //1