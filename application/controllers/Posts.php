<?php
class Posts extends CI_Controller {

        public function index()
        {
            
        $data['title'] = "Latest Post"; // Capitalize the first letter
        
        $data['post'] = $this->posts_model->get_posts();    
       // print_r($data['post']);    

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer', $data);
        }
    
    public function view($slug = NUll){
        
        $data['post'] = $this->posts_model->get_posts($slug);  
        
        if (empty($data['post'])){
            show_404();
        }
        
        $data['title'] = $data['post']['title'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer', $data);
    }
}