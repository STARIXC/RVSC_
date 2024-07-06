<?php
require_once ( dirname(  __FILE__). '/../functions/connectionClass.php' );
   class SliderClass extends connectionClass{
    public function uploadSlider($image,$gallery,$main,$events,$description){
   
   $insert="INSERT INTO `tblimages`(`ImageName`, `Gallery`, `MainPage`, `EventPage`, `Description`)  ('$image','$gallery','$main','$events',$description)";
        $result=$this->query($insert);
        if($result){
            echo "File is uploaded";
        }
        else
        {
            echo "File is not uploaded";
        }
    }
    
    public function listSlider(){
        $select="select * from slider";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
}