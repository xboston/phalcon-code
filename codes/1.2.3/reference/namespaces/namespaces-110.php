namespace Store\Models;

class Robots extends Phalcon\Mvc\Model
{
    public function initialize()
    {
        $this->hasMany('id', 'Store\Models\Parts', 'robots_id', array(
            'alias' => 'parts'
        ));
    }
}

