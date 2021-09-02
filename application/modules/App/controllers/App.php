<?php defined('BASEPATH') OR exit('No direct script access allowed');

class App extends OAS_Controller{
    public $data = array();

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->data['main_title'] = "Dashboard Page";
        $this->data['title_small'] = "";
        $this->data['inner_template'] = 'Dashboard/DashboardViewPage';
        $this->load->view('Common/common', $this->data);
    }

    function _example_output($output = null,$data){
        $final_output['data']=$data;
        $final_output['output']=(array)$output;
        $this->load->view('Common/common',$final_output);
    }
  
    function userManagement(){
        $data['main_title'] = "User";
        $data['title_small'] = "Management";
        $crud = new grocery_CRUD();
    
        $crud->set_table('user_auth');
    
        $crud->columns(['full_name','email','is_active']);
        $crud->required_fields('full_name','email','pass','is_active','is_locked_flag');
        $crud->callback_before_insert(array($this,'encrypt_password_callback'));
        $crud->callback_before_update(array($this, 'encrypt_password_callback'));
        
        $crud->display_as('pass','Password');
    
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }
  
    function encrypt_password_callback($post_array) {
        $post_array['pass'] = md5($post_array['pass']);
    
        return $post_array;
    }  
  
    function portfolio(){
        
        if($this->uri->segment(3)=="upload" || $this->uri->segment(4)=="upload"){
          $this->upload();
        }
        else{
          $data['main_title'] = "Portfolio Management";
          $data['title_small'] = "";
          
          $crud = new grocery_CRUD();
          $crud->set_table('portfolio_master');
    
          $crud->set_field_upload('logo','uploads/portfolio');
    
          $crud->columns(['company','url', 'is_deleted_flag']);
          $crud->required_fields('company','logo', 'description', 'url', 'is_deleted_flag');
          
           $crud->display_as('is_deleted_flag', 'Mark AS Deleted');
           $crud->display_as('url', 'Website URL');
    
          $output = $crud->render();
          $this->_example_output($output,$data);  
        }
    }
  
    function siteSetting(){
        $data['main_title'] = "Site Management";
        $data['title_small'] = "";
    
        $crud = new grocery_CRUD();
    
        $crud->set_table('site_setting');
        $crud->set_field_upload('site_logo','uploads/site');
        $crud->set_field_upload('fav_icon','uploads/site');
    
        $crud->unset_back_to_list();
        
        $crud->set_rules('email','Email Address','valid_email');
        $crud->set_rules('contact','Contact Number','numeric|exact_length[10]');
    
        $crud->required_fields('site_logo', 'site_name', 'contact', 'email', 'address', 'landline');
        
        $crud->display_as('fb_id','Facebook Id');
        $crud->display_as('twitter_id','Twitter Id');
        $crud->display_as('instagram_id','Instagram Id');
        $crud->display_as('linkedin_id','LinkedIn Id');
         
        $output = $crud->render();
        $this->_example_output($output,$data);
    }

    function emailConfig() {
        $data['main_title'] = "Email Configuration Management";
        $data['title_small'] = "";
    
        $crud = new grocery_CRUD();
        $crud->set_table('email_config_setting');
        
        $crud->set_rules('email_from','Mail From','valid_email');
        $crud->set_rules('username','Username','valid_email');
    
        $crud->unset_back_to_list();
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }

    function slider(){
        $data['main_title'] = "Slider Management";
        $data['title_small'] = "";
        
        $crud = new grocery_CRUD();
        $crud->set_table('slider');
        
        $crud->set_field_upload('banner_img','uploads/slider');
        $crud->set_field_upload('banner_video','uploads/video');
        
        $crud->columns(['title', 'banner_img']);
        $crud->required_fields('banner_img', 'title');
        
        $crud->display_as('banner_img','Banner Image');
        
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }
    
    function blogCategory(){
        $data['main_title'] = "Blog Category Management";
        $data['title_small'] = "";
        
        $crud = new grocery_CRUD();
        $crud->set_table('blog_category');
        
        $crud->columns(['blog_category']);
        $crud->required_fields('blog_category');
        
        $crud->display_as('blog_category','Category Name');
        
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }


     function courseCategory(){
        $data['main_title'] = "Course Category Management";
        $data['title_small'] = "";
    
        $crud = new grocery_CRUD();
        $crud->set_table('course_category');
        
        $crud->columns(['course_name']);
        $crud->required_fields('course_name');
        
        $crud->display_as('course_name','Course Name');
        
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }

     function course(){
        if($this->uri->segment(3)=="upload" || $this->uri->segment(4)=="upload"){
          $this->upload();
        }
        else{
            $data['main_title'] = "Course Management";
            $data['title_small'] = "";
        
            $crud = new grocery_CRUD();
            $crud->set_table('course');
            // $crud->where('course_category.is_deleted_flag','N');
        
            $crud->set_field_upload('featured_image','uploads/course');
            $crud->set_field_upload('syllabus_pdf','uploads/file');
            
            $crud->columns(['course_title', 'course_description','syllabus_description']);
            $crud->required_fields(['title', 'category_id', 'syllabus_description','duration', 'featured_image','is_deleted_flag']);
            
            $crud->set_relation('category_id', 'course_category', 'course_name');
            
            $crud->display_as('is_deleted_flag', 'Mark AS Deleted');
            $crud->display_as('featured_img', 'Featured Image');
            $crud->display_as('category_id', 'Course Category');
            
            $output = $crud->render();
            $this->_example_output($output,$data);
        }
    }



    function contactForm(){
        $data['main_title'] = "Contact Management";
        $data['title_small'] = "";
    
        $crud = new grocery_CRUD();
        $crud->set_table('contact_info');
        
        $crud->unset_add();
        $crud->unset_edit();
        
        $output = $crud->render();
        $this->_example_output($output,$data);  
    }

    function aboutUs(){

        if($this->uri->segment(3)=="upload" || $this->uri->segment(4)=="upload"){
          $this->upload();
        }
        else{
          $data['main_title'] = "About Us";
          $data['title_small'] = "Management";
          $crud = new grocery_CRUD();
    
          $crud->set_table('about_us_master');
    
          $crud->set_field_upload('featured_image','uploads/about');
    
          $crud->columns(['title','featured_image']);
          $crud->required_fields('title','description', 'route');
    
          $output = $crud->render();
          $this->_example_output($output,$data);  
        }
    }
    
    function blog(){
        if($this->uri->segment(3)=="upload" || $this->uri->segment(4)=="upload"){
          $this->upload();
        }
        else{
            $data['main_title'] = "Blog Management";
            $data['title_small'] = "";
        
            $crud = new grocery_CRUD();
            $crud->set_table('blog_master');
            $crud->where('blog_master.is_deleted_flag', 'NO');
        
            $crud->set_field_upload('featured_image','uploads/blog');
            
            $crud->columns(['title', 'category_id', 'entry_date']);
            $crud->required_fields(['title','description', 'featured_image', 'is_deleted_flag', 'entry_date']);
            
            $crud->set_relation('category_id', 'blog_category', 'name');
            
            $crud->display_as('is_deleted_flag', 'Mark AS Deleted');
            $crud->display_as('featured_image', 'Featured Image');
            $crud->display_as('category_id', 'Blog Category');
            // $crud->display_as('route', 'Display In');
            
            $output = $crud->render();
            $this->_example_output($output,$data);
        }
    }
    
    function gallery(){
        $data['main_title'] = "Gallery Management";
        $data['title_small'] = "";
            
        $this->load->library('Image_CRUD');
        $image_crud = new Image_CRUD();
        
        $image_crud->set_primary_key_field('gallery_id');
        $image_crud->set_url_field('featured_image');
        
        $image_crud->set_table('gallery_master')
        ->set_ordering_field('priority')
        ->set_title_field('title')
        ->set_image_path('uploads/gallery');

        $output = $image_crud->render();
        $this->_example_output($output,$data);
    }
    
    function teamManagement(){
        if($this->uri->segment(3)=="upload" || $this->uri->segment(4)=="upload"){
          $this->upload();
        }
        else{
            $data['main_title'] = "Team Management";
            $data['title_small'] = "";
        
            $crud = new grocery_CRUD();
            $crud->set_table('management_team');
        
            $crud->set_field_upload('featured_image','uploads/team');
            
            $crud->columns(['name', 'designation']);
            $crud->required_fields(['name', 'designation', 'featured_image', 'info']);
            
            $crud->display_as('fb_id', 'Facebook Id');
            $crud->display_as('linkedin_id', 'LinkedIn Id');
            $crud->display_as('instagram_id', 'Instagram Id');
            $crud->display_as('twitter_id', 'Twitter Id');
            
            $output = $crud->render();
            $this->_example_output($output,$data);
        }
    }
 


    function upload(){
        $CKEditor = $_GET['CKEditor'];
        $funcNum = $_GET['CKEditorFuncNum'];
        $url_image = FCPATH.'uploads/media/'; 
    
        $allowed_extension = array(
          "png","jpg","jpeg", "JPG", "JPEG"
        );
    
        $file_extension = pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION);
    
        if(in_array(strtolower($file_extension),$allowed_extension)){
            $filename = $_FILES["upload"]["name"];
            $file_basename = substr($filename, 0, strripos($filename, '.'));
            $file_ext = substr($filename, strripos($filename, '.')); 
            $newfilename = $file_basename.time(). $file_ext;
    
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $url_image.$newfilename)){
    
                if(isset($_SERVER['HTTPS'])){
                    $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
                }
                else{
                    $protocol = 'http';
                }
    
                $url = base_url('uploads/media/').$newfilename;
                $data['url'] = $newfilename;
    
                $this->db->insert('media_gallery',$data);
                echo '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
            }
            exit;
        }
      
    }


}


?>