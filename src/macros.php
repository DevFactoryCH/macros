<?php

/**
 * MACROS
 */

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemText', function ($name, $label, $value = null, $errors = null, $extras = []) {
    $default_extras = [
        'disabled' => false,
        'help' => '',
        'class' => '',
    ];

    $extras = array_merge($default_extras, $extras);

    $attributes = [
        'class' => 'form-control ' . $extras['class'],
    ];

    if ($extras['disabled']) {
        $attributes['disabled'] = 'disabled';
    }

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    $help = $extras['help'];

    return view('macros::item_text', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontText', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = null) {
    $default_attributes = [
        'class' => ['form-control'],
        'required' => null,
    ];

    $class = $default_attributes['class'];
    if (isset($attributes['class'])) {
        $class = array_merge($default_attributes['class'], $attributes['class']);
    }
    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = $class;

    foreach ($attributes as &$attribute) {
        if (is_array($attribute)) {
            $attribute = implode(' ', $attribute);
        }
    }

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    return view('macros::front_text', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single textarea field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemTextarea', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = null) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
        'rows' => '3',
    ];

    $attributes = array_merge($default_attributes, $attributes);

    $attributes['class'] = 'form-control ' . $attributes['class'];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    return view('macros::item_textarea', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single textarea field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontTextarea', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = null) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
        'rows' => '3',
    ];

    $attributes = array_merge($default_attributes, $attributes);

    $attributes['class'] = 'form-control ' . $attributes['class'];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    return view('macros::front_textarea', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single WYSIWYG field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemWysiwyg', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = null) {
    $default_attributes = [
        'disabled' => null,
        'class' => 'summernote',
        'required' => null,
        'rows' => '3',
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    return view('macros::item_wysiwyg', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemPassword', function ($name, $label, $value = null, $errors = null, $extras = []) {
    $default_extras = [
        'disabled' => false,
        'help' => '',
        'class' => '',
    ];

    $extras = array_merge($default_extras, $extras);

    $attributes = [
        'class' => 'form-control ' . $extras['class'],
    ];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    if ($extras['disabled']) {
        $attributes['disabled'] = 'disabled';
    }

    $help = $extras['help'];

    return view('macros::item_password', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontPassword', function ($name, $label, $value = null, $errors = null, $extras = []) {
    $default_extras = [
        'disabled' => false,
        'help' => '',
        'class' => '',
    ];

    $extras = array_merge($default_extras, $extras);

    $attributes = [
        'class' => 'form-control ' . $extras['class'],
    ];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    if ($extras['disabled']) {
        $attributes['disabled'] = 'disabled';
    }

    $help = $extras['help'];

    return view('macros::front_password', compact('name', 'label', 'value', 'errors', 'help', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemSelect', function ($name, $label, $options, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    return view('macros::item_select', compact('name', 'label', 'options', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontSelect', function ($name, $label, $options, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    return view('macros::front_select', compact('name', 'label', 'options', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemCheckbox', function ($name, $label, $value = null, $checked, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = $attributes['class'];

    return view('macros::item_checkbox', compact('name', 'label', 'value', 'checked', 'errors', 'attributes', 'help'));
});


/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontCheckbox', function ($name, $label, $value = null, $checked, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = $attributes['class'];

    return view('macros::front_checkbox', compact('name', 'label', 'value', 'checked', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemCheckboxBasic', function ($name, $label, $value = null, $attributes = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);

    //  $attributes['class'] = $attributes['class'];

    return view('macros::item_checkbox_basic', compact('name', 'label', 'value', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontRadio', function ($name, $label, $options, $checked, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = $attributes['class'];

    return view('macros::front_radio', compact('name', 'label', 'options', 'value', 'checked', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a Date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemDate', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
        'autocomplete' => 'off',
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control datepicker ' . $attributes['class'];

    if (!is_null($errors) && $errors->has($name)) {
        $attributes['class'] = $attributes['class'] . ' is-invalid';
    }

    return view('macros::item_date', compact('name', 'label', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a Date field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontDate', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    return view('macros::front_date', compact('name', 'label', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a Time field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemTime', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    return view('macros::front_time', compact('name', 'label', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a Time field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('frontTime', function ($name, $label, $value = null, $errors = null, $attributes = [], $help = []) {
    $default_attributes = [
        'disabled' => null,
        'class' => '',
        'required' => null,
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $attributes['class'] = 'form-control ' . $attributes['class'];

    return view('macros.front_time', compact('name', 'label', 'value', 'errors', 'attributes', 'help'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('itemSubmit', function ($label, $extras = []) {
    $default_extras = [
        'disabled' => false,
        'class' => '',
    ];

    $attributes = array_merge($default_extras, $extras);

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    return view('macros::item_submit', compact('label', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('buttonDelete', function ($url, $attributes = [], $options = []) {
    $default_attributes = [
        'disabled' => false,
        'class' => 'btn-sm',
        'type' => 'submit',
    ];

    $default_options = [
        'theme' => 'btn-danger',
        'icon' => '',
        'text' => trans('general.delete'),
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $options = array_merge($default_options, $options);

    $id = last(explode('/', $url));

    $attributes['class'] = 'btn ' . $options['theme'] . ' form-delete-button-submit ' . $attributes['class'];
    $attributes['data-url'] = $url;
    $attributes['data-id'] = $id;

    $data_toggle = 'data-toggle';
    $data_target = 'data-target';

    if (config('macros.bootstrap_5')) {
        $data_toggle = 'data-bs-toggle';
        $data_target = 'data-bs-target';
    }

    $attributes[$data_toggle] = 'modal';
    $attributes[$data_target] = '#confirm-delete';

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    $icon = '';
    if (!empty($options['icon'])) {
        $icon = '<i class="' . $options['icon'] . '"></i>';
    }

    $text = $icon . '&nbsp;' . $options['text'];

    return view('macros::item_button_delete', compact('url', 'text', 'id', 'attributes'))->render();
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('buttonCancel', function ($url, $attributes = [], $options = []) {
    $default_attributes = [
        'disabled' => false,
        'class' => 'btn-sm',
        'type' => 'submit',
    ];

    $default_options = [
        'theme' => 'btn-warning',
        'icon' => '',
        'text' => trans('general.cancel'),
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $options = array_merge($default_options, $options);

    $id = last(explode('/', $url));

    $attributes['class'] = 'btn ' . $options['theme'] . ' ' . $attributes['class'];

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    $icon = '';
    if (!empty($options['icon'])) {
        $icon = '<i class="' . $options['icon'] . '"></i>';
    }

    $text = $icon . '&nbsp;' . $options['text'];

    return view('macros::item_button_cancel', compact('url', 'text', 'id', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('buttonEdit', function ($url, $attributes = [], $options = []) {
    $default_attributes = [
        'disabled' => false,
        'class' => 'btn-sm',
        'type' => 'submit',
    ];

    $default_options = [
        'theme' => 'btn-info',
        'icon' => '',
        'text' => trans('general.edit'),
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $options = array_merge($default_options, $options);

    $attributes['class'] = 'btn ' . $options['theme'] . ' ' . $attributes['class'];

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    $icon = '';
    if (!empty($options['icon'])) {
        $icon = '<i class="' . $options['icon'] . '"></i>';
    }

    $text = $icon . '&nbsp;' . $options['text'];

    return view('macros::item_button_edit', compact('url', 'text', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('buttonGet', function ($url, $label, $attributes = [], $options = []) {
    $default_attributes = [
        'disabled' => false,
        'class' => '',
        'type' => 'submit',
    ];

    $default_options = [
        'theme' => 'btn-info',
        'icon' => 'mdi mdi-plus-circle',
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $options = array_merge($default_options, $options);

    $attributes['class'] = 'btn ' . $options['theme'] . ' ' . $attributes['class'];

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    $icon = '';
    if (!empty($options['icon'])) {
        $icon = '<i class="' . $options['icon'] . '"></i>';
    }

    $label = $icon . '&nbsp;' . $label;

    return view('macros::item_button_get', compact('url', 'label', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single text field
 *--------------------------------------------------------------------------
 *
 */
Form::macro('buttonCreate', function ($url, $attributes = [], $options = []) {
    $default_attributes = [
        'disabled' => false,
        'class' => '',
        'type' => 'submit',
    ];

    $default_options = [
        'theme' => 'btn-info',
        'icon' => 'mdi mdi-plus-circle',
        'text' => trans('general.create'),
    ];

    $attributes = array_merge($default_attributes, $attributes);
    $options = array_merge($default_options, $options);

    $attributes['class'] = 'btn ' . $options['theme'] . ' ' . $attributes['class'];

    if ($attributes['disabled']) {
        $attributes['disabled'] = 'disabled';
    } else {
        unset($attributes['disabled']);
    }

    $icon = '';
    if (!empty($options['icon'])) {
        $icon = '<i class="' . $options['icon'] . '"></i>';
    }

    $text = $icon . '&nbsp;' . $options['text'];

    return view('macros::item_button_create', compact('text', 'url', 'attributes'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a single file upload
 *--------------------------------------------------------------------------
 *
 */
Form::macro('singleUpload', function ($name, $label, $model, $type) {
    $file = null;
    $model_name = '';

    if (!is_null($model)) {
        $file = $model->getMedia($type)->first();
        $model_name = class_basename($model);
        $image = Imagecache::get($file, '80x80');
    }

    return view('macros::single_upload', compact('name', 'image', 'label', 'file', 'model', 'model_name', 'type'));
});

/**
 *--------------------------------------------------------------------------
 * Handles the input for a multiple file upload using plupload
 *--------------------------------------------------------------------------
 *
 */
Form::macro('multiUpload', function ($label, $model, $type) {
    if (!$model) {
        return;
    }

    $files = $model->getMedia($type);
    $model_name = class_basename($model);

    return view('macros::multi_upload', compact('label', 'files', 'model', 'model_name', 'type'));
});
