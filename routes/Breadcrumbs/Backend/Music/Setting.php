<?php

Breadcrumbs::register('admin.music.settings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('labels.backend.music.settings.management'), route('admin.music.settings.index'));
});

Breadcrumbs::register('admin.music.settings.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.music.settings.index');
    $breadcrumbs->push(trans('menus.backend.music.settings.create'), route('admin.music.settings.create'));
});

Breadcrumbs::register('admin.music.settings.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.music.settings.index');
    $breadcrumbs->push(trans('menus.backend.music.settings.view'), route('admin.music.settings.show', $id));
});

Breadcrumbs::register('admin.music.settings.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.music.settings.index');
    $breadcrumbs->push(trans('menus.backend.music.settings.edit'), route('admin.music.settings.edit', $id));
});