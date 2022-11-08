<?php 
namespace app\Table;
use App\App;
 class Article{

    public static function getLast(){
        return App::getDb()->query('SELECT * FROM products', __CLASS__);
    }
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }
    public function getUrl(){
        return 'index.php?p=article&id=' . $this->ID;
    }

    public function getDescription(){
        $html = '<p>' . substr($this->Desc, 0, 150) . '...</p>';
        $html .= '<p><a href="'. $this->getURL() . '">Voir la suite</a></p>';
        return  $html;
    }
 }
