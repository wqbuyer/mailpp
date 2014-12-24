<?php

/**
 * Description of mailpp
 * 万千海淘开发部(http://www.wqbuyer.com)
 * @author root.wqbuyer@gmail.com
 */
class mailpp {
    public function __construct();
    public function set_host_port($host,$port) ;
    public function set_user_password($user,$password);
    public function set_content_type($content_type);
    public function set_subject($subject);
    public function set_from($from,$fromname);
    //totype:{PRIMARY,CC,BCC}
    public function set_to($to,$totype,$toname);
    public function set_body($body);
    public function send();
    public function send_by_tls();
    public function send_by_ssl();
            
}
