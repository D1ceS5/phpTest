<?php


class Post
{
    public $title;
    public $image;
    public $price;
    public $date;
    public $location;
    public $isTop;
    public $link;

    public function __construct($title, $image, $price, $date, $location, $isTop, $link){
        $this->date= $date;
        $this->link= $link;
        $this->image= $image;
        $this->location= $location;
        $this->price= $price;
        $this->title= $title;
        $this->isTop = $isTop;
    }
    public function getPost(){
        $res_text = '<div style="margin-top:10px; margin-bottom:10px; margin-right: auto; margin-left: auto; width:1237.25px; height:168.5px; display: flex; background-color: white; color: rgb(0,47,52); border-radius: 5px;">';
        $res_text .= '<table style="margin: 8px; width: 1221.25px; height: 152.5px">';
        $res_text .= '<tr style="margin: 5px">';
        $res_text .= '<td rowspan="2" style=" width: 215px; height: 152px;">';
        $res_text .= '<a target="_blank" style="display: block;" href='.$this->link.'"><div style=" width: 215px; height: 152px;"><img alt="..." style=" width: 215px; height: 152px;" src="'.$this->image.'"/>';
        if($this->isTop)
        {
            $res_text .= '<div style="position: relative; text-align:center; width:30px; top:-19px; color:black; background-color: rgb(35,229,219)">Toп</div>';
        }
        $res_text .= '</div></a>';
        $res_text .= '</td>';
        $res_text .= '<td>';
        $res_text .= '<div style="width: 721.25px; height:111.25px; margin-left:10px;"><a style="" href="'.$this->link.'" target="_blank"><h3 style="color:rgb(0,47,52)">'.$this->title.'</h3></a></div>';
        $res_text .= '</td>';
        $res_text .= '<td style="vertical-align:top">';
        $res_text .= '<h4 style="position:relative; text-align:right; right; width: 260px; margin-right: 15px; color:rgb(0,47,52)">'.$this->price.'</h4>';
        $res_text .= '</td>';
        $res_text .= '</tr>';
        $res_text .= '<tr style="margin: 5px">';
        $res_text .= '<td style="height:20px">';
        $res_text .= '<h5 style="color:rgb(64,99,103); margin-left:10px; margin-top: 0; margin-bottom: 0">'.$this->location.' - '.$this->date.'</h5>';
        $res_text .= '</td>';
        $res_text .= '</tr>';
        $res_text .= '</table>';
        $res_text .= '</div>';
        return $res_text;
    }

}