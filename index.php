<?php 
class bladeSite{
    protected $logo_url;
    protected $favicon_url;
    protected $slider_urls;
    protected $small_intro;
    protected $servies_small_desc;
    protected $partners;
    protected $social_handles;
    protected $contacts;
    protected $nav_main;
    protected $nav_mobile;
    protected $nav_secondary;
    protected $searchbox;


    function __construct($logo_url = Null, $favicon_url = Null, $slider_urls = Null, $small_intro = Null, $servies_small_desc = Null, $partners = Null, $social_handles = Null, $contacts = Null, $nav_main = Null, $nav_mobile = Null, $nav_secondary = Null, $searchbox = Null) {
        $this->log_url = $logo_url;
        $this->favicon_url = $favicon_url;
        $this->slider_urls = $slider_urls;
        $this->small_intro = $small_intro;
        $this->services_small_desc = $servies_small_desc;
        $this->partners = $partners;
        $this->social_handles = $social_handles;
        $this->contacts = $contacts;
        $this->nav_main = $nav_main;
        $this->nav_mobile = $nav_mobile;
        $this->nav_secondary = $nav_secondary;
        $this->searchbox = $searchbox;
    }
    
}
?>