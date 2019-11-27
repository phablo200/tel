@extends('extends.layout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h2>Usuários</h2>
    </div>
</div>


<div class="row" style='margin-top: 2%'>
    <div class="col-md-12">
        <a href="{{route('usuario.criar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            Adicionar
        </a>
    </div>
</div>

<div class="row" style="margin-top: 2%;">
	<div class="col-md-12">
    	<div class="m-portlet m-portlet--mobile">
	        <div class="m-portlet__body">
	             <table class="table" id="tabela">
                    <thead>
                        <tr>
                            <th style="text-align: left;">Id</th>
                            <th style="text-align: center;">Nome</th>
                            <th style="text-align: center;">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       	
                    </tbody>
                </table>
	        </div>
   	 	</div>
   	</div>
</div>



@endsection