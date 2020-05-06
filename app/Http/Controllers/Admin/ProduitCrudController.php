<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProduitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Produit');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/produit');
        $this->crud->setEntityNameStrings('produit', 'produits');

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
       // $this->crud->setFromDb();

        $this->crud->setColumns([

            [
                'name' =>  'imgPath',
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
                'name' => 'prix',
                'label' => 'Prix',
                'type' => 'number',
                'suffix' => " MAD",
                'decimals' => 2,
                'dec_point' => ',',
            ],
            [
                'name' => 'catID',
                'label' => 'Category',
                'type' => 'select',
                'entity' => 'category',
                'attribute' => 'nomCat',
                'model' => 'App\Models\Category'
            ],
            [
                'name' =>  'date_debut',
                'label' => 'Date de debut',
                'type' => 'datetime'
            ],
            [
                'name' =>  'date_fin',
                'label' => 'Date de fin',
                'type' => 'datetime'
            ],
        ]);

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);
        //$this->crud->setFromDb();

        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom ',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'prix',
            'label' => 'Prix ',
            'type' => 'number'

        ]);
        $this->crud->addField([
            // 1-n relationship
            'label'          => 'Category', // Table column heading
            'type'           => 'select',
            'name'           => 'catID', // the column that contains the ID of that connected entity;
            'entity'         => 'category', // the method that defines the relationship in your Model
            'attribute'      => 'nomCat', // foreign key attribute that is shown to user
            'visibleInTable' => true,
            'visibleInModal' => false,
        ]);
        $this->crud->addField([
            'name' => 'remise',
            'label' => 'Remise ',
            'type' => 'number'

        ]);
        $this->crud->addField([
            'name' => 'date_debut',
            'label' => 'Date de debut ',
            'type' => 'datetime'

        ]);
        $this->crud->addField([
            'name' => 'date_fin',
            'label' => 'Date fin ',
            'type' => 'datetime'

        ]);
        $this->crud->addField([
            'name' => 'isPromo',
            'label' => 'Promo ',
            'type' => 'radio',
            'options'=>[
                '0' => "non",
                '1' => "oui"
            ]

        ]);
        $this->crud->addField([
            'name' => "imgPath",
            'label' => "image",
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1,
            'height' => '80px',
            'width' => '80px'
        ]);


    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


}
