@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <h1>Modification d'un employé</h1>
        </div>

        <div class="well">
            {!! Form::open(array('route' =>('postmodifierEmploye', $unEmploye->numEmp), 'method' => 'post')) !!}
            <div class="col-md-12 col-sm-12 well well-md">
                <center><h1></h1></center>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Civilité : </label>
                        <div class="col-md-2 col-sm-2">
                            <p>
                                <input type="radio" name="civilite" value="Mr"
                                       @if ($unEmploye->civilite == "Mr")
                                           checked="checked"
                                    @endif
                                /> Monsieur
                            </p>
                            <p>
                                <input type="radio" name="civilite" value="Mme"
                                       @if ($unEmploye->civilite == "Mme")
                                           checked="checked"
                                    @endif
                                /> Madame
                            </p>
                            <p>
                                <input type="radio" name="civilite" value="Non genré"
                                       @if ($unEmploye->civilite == "Non genré")
                                           checked="checked"
                                    @endif
                                /> Non genré
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Nom : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="text" name="nom" value="{{$unEmploye->nom or ''}}" class="form-control"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Prenom : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="text" name="prenom" value="{{$unEmploye->prenom or ''}}" class="form-control"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Mot de passe : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="password" name="passe" value="{{$unEmploye->pwd or ''}}" class="form-control"
                                   required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Profil : </label>
                        <div class="col-md-2 col-sm-2">
                            <p>Vous êtes <br>
                                <select name="profil">
                                    <option value="particulier"
                                            @if ($unEmploye->profil == 'particulier')
                                                selected="selected"
                                        @endif> Un particulier
                                    </option>

                                    <option value="professionnelle"
                                            @if ($unEmploye->profil == 'professionnelle')
                                                selected="selected"
                                        @endif> Un Professionnelle
                                    </option>

                                    <option value="institutionnel"
                                            @if ($unEmploye->profil == 'institutionnel')
                                                selected="selected"
                                        @endif> Un institutionnel
                                    </option>
                                </select>
                            </p>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
