@extends('layouts.master')
@section('content')
    {!! Form::open(['url' => 'postEmploye']) !!}
    <div class="col-md-12 col-sm-12 well well-md">
        <center><h1>Information de l'employé(e)</h1></center>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Civilité :</label>
                <div class="col-md-6 col-sm-6">
                    <label class="radio-inline">
                        {!! Form::radio('civilite', 'Mr', false) !!} Monsieur
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('civilite', 'Mme', false) !!} Madame
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('civilite', 'Ng', false) !!} Non genré
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Nom :</label>
                <div class="col-md-6 col-sm-6">
                    {!! Form::text('nom', '', ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Prénom :</label>
                <div class="col-md-6 col-sm-6">
                    {!! Form::text('prenom', '', ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Mot de passe :</label>
                <div class="col-md-6 col-sm-6">
                    {!! Form::password('passe', ['class' => 'form-control', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Profil :</label>
                <div class="col-md-6 col-sm-6">
                    {!! Form::select('profil', ['parti' => 'Un particulier', 'profe' => 'Un Professionnel', 'insti' => 'Un institutionnel'], 'profe', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Quel type de prestation recherchez-vous ?</label>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-inline">
                        {!! Form::checkbox('interet[]', 'loc', false) !!} Location de mobilier
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::checkbox('interet[]', 'achat', false) !!} Achat de mobilier
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-ok"></span> Valider
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-primary" onclick="confirmCancel()">
                        <span class="glyphicon glyphicon-remove"></span> Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        function confirmCancel() {
            if (confirm('Êtes-vous sûr ?')) {
                window.location = '{{ url('/') }}';
            }
        }
    </script>
@endsection
