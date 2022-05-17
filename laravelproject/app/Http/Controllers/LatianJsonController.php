<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatianJsonController extends Controller
{
    public function getData()
    {
        $data = array(
        "name" => "Erick Pratama Laiyo",
        "url" => "https://www.google.com",
        "rank"=> 1,
        "socialmedia" => array(
            "facebook"=> "",
            "twitter"=> "",
            "instagram"=> "",
            "youtube"=> "",
            "github"=> ""
        ));
        $jd=json_encode($data);
        dd($jd);
    }

    public function getData2()
    {
        $data = array(
            "first_name" => "Erick",
            "last_name" => "Laiyo",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 588);     
        $jd=json_encode($data);
        dd($jd);
    }

    public function getData3()
    {
        $data = array(
                "first_name" => "Erick",
                "last_name" => "Laiyo",
                "location" => "Yogyakarta",
                "websites" => array(
                  [
                    "description" => "kuliah",
                    "URL" => "https://www.digitalocean.com/"
                  ],
                  [
                    "desciption" => "semester 4",
                    "URL" => "https://www.digitalocean.com/community/tutorials"
                  ]
                ),
                "social_media" => array(
                  [
                    "description" => "twitter",
                    "link" => "https://twitter.com/digitalocean"
                  ],
                  [
                    "description" => "facebook",
                    "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
                  ],
                  [
                    "description" => "github",
                    "link" => "https://github.com/digitalocean"
                  ]
                ));
                $jd=json_encode($data);
                dd($jd);
              }
    
    
    
    public function getData4()
              {
                $data = array(
                    "employees"=> array(
                    [
                        "firstName"=>"John", "lastName"=>"Doe"
                    ],
                    [
                        "firstName"=>"Anna", "lastName"=>"Smith"
                    ],
                    [
                        "firstName"=>"Peter","lastName"=>"Jones"
                    ]
                    ));
                   
                  $jd=json_encode($data);
                  dd($jd);
              }  
              
              
    public function getData5()
              {
                $data = array(
                "matapelajaran"=> array(
                    "subject" => "Matematika",
                    "kelas" => array(
                        [
                            "X" => "Argo",
                            "Jadwal" => "Senin"
                        ],
                        [
                            "XI" => "JJS",
                            "Jadwal" => "Selasa"
                        ],
                        [
                            "XII" => "Halim",
                            "Jadwal" => "Rabu"
                        ]
                        )));  
                  $jd=json_encode($data);
                  dd($jd);
              }    
      
      
    }
    



