<?php
namespace Core\HTML;

class BootstrapForm extends Form {

    protected function surround($html){
        return "<div class =\"mb-3\">{$html}</div>";
    }
    

    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label class="form-label">' . $label . '</label>';
        if ($type === 'textarea'){
            $input = '<textarea class="form-control" name="' . $name . '">'. $this->getValue($name) .'</textarea>';
        }else {
            $input = '<input type="' . $type . '" name="' . $name . '" value="'. $this->getValue($name) .'" class="form-control">';
        }
            
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options, $js = false){
        if ($js){
            $input= '<select onchange="this.form.submit()" class="form-control" name="' . $name . '">';
        }else {
            $input = '<select class="form-control" name="' . $name . '">';
        }
        $label = '<label class="form-label">' . $label . '</label>';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";   
        }
        $input .= '</select>';
        return $this->surround($label . $input);
        
    }
    public function submit(){

        return '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }
}