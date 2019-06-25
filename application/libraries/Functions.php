<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions {
    
    public $ci;
    
    public function __construct() {
        $this->ci = &get_instance();
    }
    
    function fileUpload($file_upload_field_name, $new_file_name, $path_to_upload, $allowed_types="_ALLOWED_TYPES") {

        $config['upload_path'] = $this->ci->config->item("_UPLOAD_PATH") . $path_to_upload;
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }
        
        $config['allowed_types'] = $this->ci->config->item($allowed_types);

        $this->ci->load->library('upload', $config);

      $_FILES[$file_upload_field_name]['name'] = $new_file_name . "." . $this->ci->upload->get_extension($_FILES[$file_upload_field_name]['name']);


        if (!$this->ci->upload->do_upload($file_upload_field_name)) {
            return array("STATUS" => "FAILED", "MESSAGE" => "File upload failed." . $this->ci->upload->display_errors());
        } else {
            $file_upload_data = $this->ci->upload->data();
            return array("STATUS" => "SUCCESS", "FILE_NAME" => $file_upload_data['file_name']);
        }
    }
}
