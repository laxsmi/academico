<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserDataRequest as StoreRequest;
use App\Http\Requests\UserDataRequest as UpdateRequest;

/**
 * Class UserDataCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UserDataCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\UserData');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/userdata');
        $this->crud->setEntityNameStrings('userdata', 'user_datas');

        
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->crud->setColumns([
        [
                // NAME
                'label' => "Name", // Table column heading
                'type' => "text",
                'name' => 'name'
        ],

        [
            // STUDENT
            'label' => "Student", // Table column heading
            'type' => "select",
            'name' => 'user_id', // the column that contains the ID of that connected entity;
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\User", // foreign key model
        ],

        [
            // RELATIONSHIP
            'label' => "Relationship", // Table column heading
            'type' => "select",
            'name' => 'relationship_id', // the column that contains the ID of that connected entity;
            'entity' => 'relationship', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\UserDataRelationship", // foreign key model
            ],
        ]);


        $this->crud->addFields([
            [  // Select2
                'label' => trans('academico.firstname'),
                'type' => 'text',
                'name' => 'firstname'
            ],
            [  // Select2
                'label' => trans('academico.lastname'),
                'type' => 'text',
                'name' => 'lastname'
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [
                'name'  => 'idnumber',
                'label' => 'ID Number',
                'type'  => 'text',
            ],
            [
                'name'  => 'address',
                'label' => 'Address',
                'type'  => 'text',
            ],

            [
                // RELATIONSHIP
                'label' => "Relationship", // Table column heading
                'type' => "select",
                'name' => 'relationship_id', // the column that contains the ID of that connected entity;
                'entity' => 'relationship', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\UserDataRelationship", // foreign key model
                ],
        ]);


        // add asterisk for fields that are required in UserDataRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}