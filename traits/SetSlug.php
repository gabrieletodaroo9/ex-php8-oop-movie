<?php

trait SetSlug {

    public $slug;

    public function SetSlug() {

        $string = strtolower($this->title);
        $slug = preg_replace('/[^a-z0-9]+/', '-', $string);
        $this->slug = trim($slug, '-');
        
        return $this->slug;
    }
}