<?php

namespace App\DataTable;

class PostsDataTable {

    public $input;
    public $slug;
    public $text;
    public $button;


    public function input($value='')
    {
        $this->input = '<input name="title" class="form-control" placeholder="Title" value="';
        $this->input .= $value;
        $this->input .= '">';
        return $this;
    }

    public function slug($value='')
    {
        $this->slug = '<input name="slug" class="form-control" placeholder="Slug" value="';
        $this->slug .= $value;
        $this->slug .= '">';
        return $this;
    }




    public function text($value='')
    {

        $this->text = '<textarea id="summary-ckeditor" class="form-control" name="body" rows="10" placeholder="Body">';
        $this->text .= $value;
        $this->text .= '</textarea>';
        return $this;

    }

    public function button($value='Submit')
    {
        $this->button = '<button type="submit" class="btn btn-primary btn-lg btn-block">';
        $this->button .= $value;
        $this->button .= '</button>';
        return $this;
    }



}
