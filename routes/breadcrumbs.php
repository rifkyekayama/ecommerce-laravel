<?php

// BACKEND BREADCRUMBS

// Dashboard
Breadcrumbs::register('admin.dashboard', function($breadcrumbs)
{
	$breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
});

// =================================================================================================

// Profile
Breadcrumbs::register('admin.profile', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Profile', route('admin.profile.index'));
});

// =================================================================================================

// Dashboard > Kelola Kategori
Breadcrumbs::register('admin.categories', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Kelola Kategori', route('admin.categories.index'));
});

// Dashboard > Kelola Kategori > Tambah Kategori
Breadcrumbs::register('admin.categories.create', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.categories');
	$breadcrumbs->push('Tambah Kategori', route('admin.categories.create'));
});

// Dashboard > Kelola Kategori > [edit]
Breadcrumbs::register('admin.categories.edit', function($breadcrumbs, $category)
{
	$breadcrumbs->parent('admin.categories');
	$breadcrumbs->push($category->name, route('admin.categories.edit', encrypt($category->id)));
});

// =================================================================================================

// Dashboard > Kelola Brand
Breadcrumbs::register('admin.brands', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Kelola Brand', route('admin.brands.index'));
});

// Dashboard > Kelola Brand > Tambah Brand
Breadcrumbs::register('admin.brands.create', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.brands');
	$breadcrumbs->push('Tambah Brand', route('admin.brands.create'));
});

// Dashboard > Kelola Brand > [edit]
Breadcrumbs::register('admin.brands.edit', function($breadcrumbs, $brand)
{
	$breadcrumbs->parent('admin.brands');
	$breadcrumbs->push($brand->name, route('admin.brands.edit', encrypt($brand->id)));
});

// =================================================================================================

// Dashboard > Kelola Produk
Breadcrumbs::register('admin.products', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Kelola Produk', route('admin.products.index'));
});

// Dashboard > Kelola Produk > Tambah Produk
Breadcrumbs::register('admin.products.create', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.products');
	$breadcrumbs->push('Tambah Produk', route('admin.products.create'));
});

// Dashboard > Kelola Produk > [edit]
Breadcrumbs::register('admin.products.edit', function($breadcrumbs, $product)
{
	$breadcrumbs->parent('admin.products');
	$breadcrumbs->push($product->name, route('admin.products.edit', encrypt($product->id)));
});

// =================================================================================================

// Dashboard > Kelola Admin
Breadcrumbs::register('admin.kelola-admin', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Kelola Admin', route('admin.kelola-admin.index'));
});

// Dashboard > Kelola Admin > Tambah Admin
Breadcrumbs::register('admin.kelola-admin.create', function($breadcrumbs)
{
	$breadcrumbs->parent('admin.kelola-admin');
	$breadcrumbs->push('Tambah Kelola Admin', route('admin.kelola-admin.create'));
});

// Dashboard > Kelola Admin > [edit]
Breadcrumbs::register('admin.kelola-admin.edit', function($breadcrumbs, $user)
{
	$breadcrumbs->parent('admin.kelola-admin');
	$breadcrumbs->push($user->name, route('admin.kelola-admin.edit', encrypt($user->id)));
});

// =================================================================================================