<?php

use Keops007\BelongsToManyField\Http\Controllers\ResourceController;

Route::get('/{resource}/options/{relationship}/{optionsLabel}/{dependsOnValue?}/{dependsOnKey?}', [ResourceController::class, 'index']);
