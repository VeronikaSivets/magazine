@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
					<h3>Категорий 0</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<h3>Материалов 0</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<h3>Посетителей 0</h3>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<h3>Сегодня 0</h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-block btn-secondary" href="#">Создать категорию</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">Категория</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-default" href="#">Создать материал</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">Материал</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-secondary" href="#">Создать категорию</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">Категория</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-default" href="#">Создать материал</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">Материал</p>
				</a>
			</div>
		</div>


	</div>

@endsection