<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class URLController extends BaseController
{
    private $db;

    public function __construct(){
        $this->db = db_connect();
    }
    public function urlShortener()
    {
        $prevShortcode = "";
        $prevLongURL = "";
        $display = "display:none";

        if($this->request->getMethod() == "POST"){
            
            // Form data
            $shortcode = $this->getURLShortCode();
            $long_url = $this->request->getPost("long_url");

            $tableObject = $this->db->table("urls");

            // Insert
            $tableObject->insert(array(
                "long_url" => $long_url,
                "shortCode" => $shortcode,
            ));

            $prevShortcode = $shortcode;
            $prevLongURL = $long_url;

            $display = "display:block";
        }
        return view("url-shortener", array(
            "shortcode" => $prevShortcode,
            "longurl" => $prevLongURL,
            "display" => $display
        ));
    }

    private function getURLShortCode(){
        $stringPattern = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $shuffelPattern =  str_shuffle($stringPattern);

        return substr($shuffelPattern, 0, 6);
    } 

    // Handel short urls
    public function handelShortURLs($segment){
        $shortcode = $segment;

        $tableObject = $this->db->table("urls");
        $urlExists = $tableObject->select("long_url")->where("shortcode", $shortcode)->get()->getRowArray();
        if(!empty($urlExists)){

        $tableObject->update([
            "is_opened" => "1"
            ],
            [
                "shortcode" => $shortcode
            ]
        
        );
            // long URL
            return redirect()->to($urlExists['long_url']);
        }
        else{

            echo json_encode(array(
                "status" => false,
                "message" => "Short URL not found",
            ));
            exit;
        }
    }
}
