<?php

use Igniter\Reservation\Models\Reservations;
use Event;

Event::listen('admin.form.extendFields', function ($widget) {
    // Ensure the event applies only to the Reservation form
    if (!$widget->model instanceof Reservations) {
        return;
    }

    // Default values for the form
    $defaultLocationId = 1; // Replace with the correct Location ID
    $defaultDuration = 120; // Replace with the desired duration (in minutes)

    if (empty($widget->model->location_id)) {
        $widget->model->location_id = $defaultLocationId;
    }

    if (empty($widget->model->duration)) {
        $widget->model->duration = $defaultDuration;
    }
});
