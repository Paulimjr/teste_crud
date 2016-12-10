@section('title','Novo Estado')
@include('header')
<div class="col-sm-6">
    <form action="/adm/salvar" class="form-horizontal" id="form_cadastro" method="post">
        {!!csrf_field()!!}
        <div class="form-group">
            <h3>Novo Estado</h3>    
        </div>
        <div class="form-group col-sm-12">
            <label for="nome">Nome do Estado</label>
            <input type="text" name="nome" placeholder="Nome do Estado" required="true" class="form-control" autofocus="true"/>
        </div>
        <div class="form-group col-sm-4">
            <label for="nome">Selecione a Sigla</label>
            <select name="sigla" class="form-control">
                <?php
                    $siglas = array("ESCOLHA","AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE");
		?>
		@foreach($siglas  as $sigla)
                <option value="{{$sigla}}">{{$sigla}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-12">
            <label for="nome">Histórico do Estado</label>
            <textarea type="text" name="historico" placeholder="Histório do Estado" class="form-control"></textarea>
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" class="btn btn-success" id="salvar" name="salvar">Salvar Estado</button>
            <a href="/adm/home" class="btn btn-danger"  id="cancelar" name="cancelar">Cancelar</a>
        </div>
    </form>
</div>
@include('footer')