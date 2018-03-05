<?php

namespace Devfactory\Macros;

use Illuminate\Support\ServiceProvider;
use Form;

class MacrosServiceProvider extends ServiceProvider
{
  /**
   * Perform post-registration booting of services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__ . '/config/macros.php' => config_path('macros.php'),
    ]);

    $this->publishes([
      __DIR__ . '/views' => base_path('resources/views/vendor/'),
    ]);

    $this->loadViewsFrom(__DIR__ . '/views/macros', 'macros');

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemText', 'macros::item_text', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontText', 'macros::front_text', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single textarea field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemTextarea', 'macros::item_textarea', ['name', 'label', 'value' => NULL, 'attributes' => []]);
    
    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single textarea field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontTextarea', 'macros::front_textarea', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single WYSIWYG field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemWysiwyg', 'macros::item_wysiwyg', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemPassword', 'macros::item_password', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontPassword', 'macros::front_password', ['name', 'label', 'value' => NULL, 'attributes' => []]);
    

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemSelect', 'macros::item_select', ['name', 'label', 'options', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontSelect', 'macros::front_select', ['name', 'label', 'options', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemCheckbox', 'macros::item_checkbox', ['name', 'label', 'value' => NULL, 'checked', 'attributes' => []]);


    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontCheckbox', 'macros::front_checkbox', ['name', 'label', 'value' => NULL, 'checked', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemCheckboxBasic', 'macros::item_checkbox_basic', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontRadio', 'macros::front_radio', ['name', 'label', 'options', 'value', 'checked', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a Date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemDate', 'macros::item_date', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a Date field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontDate', 'macros::front_date', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a Time field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('frontTime', 'macros::front_time', ['name', 'label', 'value' => NULL, 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('itemSubmit', 'macros::item_date', ['label', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('buttonDelete', 'macros::item_button_delete', ['url', 'id', 'attributes' => []]);
    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('buttonCancel', 'macros::item_button_cancel', ['url', 'id', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('buttonEdit', 'macros::item_button_edit', ['url', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('buttonGet', 'macros::item_button_get', ['url', 'label', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single text field
     *--------------------------------------------------------------------------
     *
     */
    Form::component('buttonCreate', 'macros::item_button_create', ['url', 'label', 'attributes' => []]);

    /**
     *--------------------------------------------------------------------------
     * Handles the input for a single file upload
     *--------------------------------------------------------------------------
     *
     */
    Form::component('singleUpload', 'macros::single_upload', ['name', 'label', 'file']);
    /**
     *--------------------------------------------------------------------------
     * Handles the input for a multiple file upload using plupload
     *--------------------------------------------------------------------------
     *
     */
    Form::component('multiUpload', 'macros::multi_upload', ['label', 'files', 'type', 'model_name', 'model']);
  }

  /**
   * Register bindings in the container.
   *
   * @return void
   */
  public function register()
  {

  }
}