<?php

    class Certificate {

        private $name;
        private $date;
        private $certificate;
        private $black;

        public function __construct($name, $date) {
            $this->name = $name;
            $this->date = $date;
            $this->certificate = imagecreatefrompng('certificate.png');
            $this->black = imagecolorallocate($this->certificate,0,0,0);
        }

        public function create() {
            header('Content-type: image/png');
            imagettftext($this->certificate, 28, 0, 80, 205, $this->black, 'OpenSans-ExtraBold.ttf', $this->name);
            imagettftext($this->certificate, 12, 0, 120, 370, $this->black, 'OpenSans-ExtraBold.ttf', $this->date);
            imagepng($this->certificate);
            imageDestroy($this->certificate);
        }
    }