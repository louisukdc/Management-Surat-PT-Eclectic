namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        return view('components.form');
    }
}
