<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {


    public function vmi()
    {
        global $data;

        $data['meta_title']      = "NMR | VMI Services";
        $data['navigation']      = "vmi";
        $data['header']          = 'layouts/services_header';
        $data['page_content']    = 'pages/vmi';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    public function engineering()
    {
        global $data;

        $data['meta_title']      = "NMR | Engineering";
        $data['navigation']      = "engineering_solutions";
        $data['header']          = 'layouts/services_header';
        $data['page_content']    = 'pages/engineering';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    public function logistics()
    {
        global $data;

        $data['meta_title']      = "NMR | Procurement and Logistics";
        $data['navigation']      = "logistics";
        $data['header']          = 'layouts/services_header';
        $data['page_content']    = 'pages/logistics';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    public function leasing()
    {
        global $data;

        $data['meta_title']      = "NMR | Equipment Leasing";
        $data['navigation']      = "equipment_leasing";
        $data['header']          = 'layouts/services_header';
        $data['page_content']    = 'pages/leasing';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }


    public function about_us()
    {
        $data['meta_title']      = "NMR | About Us";
        $data['navigation']      = "about_us";
        $data['header']          = 'layouts/about_header';
        $data['page_content']    = 'pages/about_us';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    public function awards()
    {
        $data['meta_title']      = "NMR | Achievements";
        $data['navigation']      = "achievements";
        $data['header']          = 'layouts/achieve_header';
        $data['page_content']    = 'pages/achievements';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    public function team()
    {
        $data['meta_title']   = "NMR | Our Team of staffs";
        $data['navigation']   = "team";
        $data['header']       = 'layouts/team_header';
        $data['page_content'] = 'pages/team';
        $data['footer']       = 'layouts/footer';

        $this->load->view('template', $data);
    }    

    public function career()
    {
        $data['meta_title']      = "NMR | Careers";
        $data['navigation']      = "career";
        $data['header']          = 'layouts/career_header';
        $data['page_content']    = 'pages/careers';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }    

}
