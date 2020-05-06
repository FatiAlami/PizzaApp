<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Client');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');
    }

    protected function setupListOperation()
    {
        $this->crud->setColumns([

            [
                'name' =>  'imge',
                'label' => 'Image',
                'type' => 'image',
                'height' => '80px',
                'width' => '80px'
            ],
            [
                'name' => "nom",
                'label' => "Nom",
                'type' => 'text'
            ],
            [
                'name' => 'prenom',
                'label' => 'Prenom',
                'type' => 'text'
            ],
            [
                'name' => 'adresse',
                'label' => 'Adresse',
                'type' => 'text'
            ],
            [
                'name' =>  'email',
                'label' => 'Email',
                'type' => 'text'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ClientRequest::class);

        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom ',
            'type' => 'text'

        ]);
        $this->crud->addField([
            'name' => 'prenom',
            'label' => 'Prenom ',
            'type' => 'text'

        ]);
        $this->crud->addField([
            'name' => 'adresse',
            'label' => 'Adresse ',
            'type' => 'text'

        ]);
        $this->crud->addField([
            'name' => 'email',
            'label' => 'Email ',
            'type' => 'email'

        ]);
        $this->crud->addField([
            'name' => 'login',
            'label' => 'Login ',
            'type' => 'text'

        ]);
        $this->crud->addField([
            'name' => 'motdepasse',
            'label' => 'Mot de passe ',
            'type' => 'password'

        ]);
        $this->crud->addField([
            'name' => 'imge',
            'label' => 'Image ',
            'type' => 'image'

        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
