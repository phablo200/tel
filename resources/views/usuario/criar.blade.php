@extends('extends.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                      <h3 class="m-portlet__head-text">
                        <i class="fa fa-user-plus"></i>
                        Novo cliente
                      </h3>
                    </div>
                  </div>
              </div>

              <div class="m-portlet__body">

                 <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                            method="POST" action="{{route('usuario.salvar')}}" id="formNovaCobranca">
                        {{csrf_field()}}
                        <div class="form-group m-form__group row">
                            <div class="col-lg-6 col-md-6 {{ $errors->has('pessoa') ? 'has-error' : ''}}">
                                <label class="control-label" for='nome'>
                                    Nome
                                </label>
                                <input type="text" name="nome" id="nome" class="form-control"/>
                            </div>

                            <div class="col-lg-6 col-md-6 {{ $errors->has('pessoa') ? 'has-error' : ''}}">
                                <label class="control-label" for='email'>
                                    Email
                                </label>
                                <input type="text" name="email" id="email" class="form-control"/>
                            </div>
                        </div>


                        <div class="form-group m-form__group row">
                            <div class="col-lg-6 col-md-6 {{ $errors->has('pessoa') ? 'has-error' : ''}}">
                                <label class="control-label" for='senha'>
                                    Senha
                                </label>
                                <input type="password" name="senha" id="senha" class="form-control"/>
                            </div>

                            <div class="col-lg-6 col-md-6 {{ $errors->has('pessoa') ? 'has-error' : ''}}">
                                <label class="control-label" for='confirmarSenha'>
                                    Confirmar senha
                                </label>
                                <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <div class="col-md-6">
                              <button class="btn btn-outline-info" @click="btnCancelar($event);">
                                <i class="fa fa-arrow-left"></i>
                                Voltar
                              </button>
                                
                              <button  class="btn btn-primary" @click="btnSalvar($event);" id="btnSalvar">
                                <i class="fa fa-check"></i>
                                Salvar
                              </button>
                            </div>
                        </div>
                  </form>
              </div>
        </div>
     </div>
    </div>
</div>



@endsection