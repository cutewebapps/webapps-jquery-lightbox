<?php

class JQueryLightBox_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
	$this->getView()->broker()->headLink()->append(
                $this->getView()->staticpath() . 'jquery-lightbox/css/jquery.lightbox-0.5.css' );
	
        $this->getView()->broker()->headScript()->append(
            $this->getView()->staticpath() . 'jquery-lightbox/js/jquery.lightbox-0.5.min.js', 'jquery' );
    }
}