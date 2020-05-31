<?php

namespace App\DataTable;

class PostsDataTable {

    public $input;
    public $slug;
    public $text;
    public $select;
    public $button;


    public function input($value='')
    {
        //reusable $this->input = '<input name="'.$title.'" class="form-control" placeholder="'.$title->ucfirst().'" value="';
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

    public function select($tags, $selected_tags=[])
    {
        $this->select = '<select multiple class="form-control select2-multiple" name="tags[]" >';
        foreach($tags as $key => $tag) {
            $this->select .= '<option value="' .$key.'"';
            if(in_array($tag, $selected_tags)) {
                $this->select .= 'selected';
            }
            $this->select .= '>' . $tag . '</option>';
        }
        $this->select .= '</select>';
        return $this;
    }



}
