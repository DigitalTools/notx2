<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ReportCrudRequest as StoreRequest;
use App\Http\Requests\ReportCrudRequest as UpdateRequest;

class ReportCrudController extends CrudController {

  public function setup() {
        $this->crud->setModel("App\Report");
        $this->crud->setRoute("admin/report");
        $this->crud->setEntityNameStrings('report', 'reports');

        $this->crud->setColumns(['date', 'was_clean', 'body']);

        $this->crud->addField([
          'name' => 'title',
          'label' => "Report title"
        ]);

        $this->crud->addField([
          'name' => 'body',
          'label' => "Report body",
          'type' => 'textarea'
        ]);

        $this->crud->addField([
          'name' => 'date',
          'label' => "Report date",
          'type' => 'date'
        ]);

        $this->crud->addField([
          'name' => 'was_clean',
          'label' => "Report status",
          'type' => 'checkbox'
        ]);

    }

  public function store(StoreRequest $request)
  {
    return parent::storeCrud();
  }

  public function update(UpdateRequest $request)
  {
    return parent::updateCrud();
  }
}
