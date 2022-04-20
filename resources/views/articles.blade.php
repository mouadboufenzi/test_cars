@extends('layouts.layout')

@section('title/addFile')
    <link rel="stylesheet" href="/style.css">
    <title>XuRen - Articles</title>
@endsection

@section('articles')
    active
@endsection

@section('filter-form')
    <form class="mine">
        <div class="form-group0">
            <input  type="text" class="form-control" placeholder="Code">
            <input  type="text" class="form-control" placeholder="Designation">
        </div>
        <div class="form-groupSelect">
            <select class="form-select" aria-label="Default select example" placeholder="text">
                <option selected>Status</option>
                <option value="Actif">Actif</option>
                <option value="Inactif">Inactif</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Categorie</option>
                <option value="Test 1">Test 1</option>
                <option value="Test 2">Test 2</option>
                <option value="Test 3">Test 3</option>
            </select>
        </div>
    </form>
@endsection

@section('table')
    <table class="table" id="customers">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Code</th>
                <th scope="col">Designation</th>
                <th scope="col">Status</th>
                <th scope="col">Categorie</th>
                <th scope="col">P.V.</th>
                <th scope="col">P.A.</th>
                <th scope="col">U.V.</th>
                <th scope="col">U.A.</th>
            </tr>
        </thead>
        <tbody> 
            @if (isset($articles))
                @foreach ($articles as $article)
                <tr>
                    <td> <a href="/articles/{{$article->id}}"> {{$loop->index + 1}} </a>  </td>
                    <td> {{$article->code}} </td>
                    <td> {{$article->designation}} </td>
                    <td id="options"> {{$article->status}} </td>
                    <td> {{$article->categorie}} </td>
                    <td> {{$article->pv}} </td>
                    <td> {{$article->pa}} </td>
                    <td> {{$article->uv}} </td>
                    <td> {{$article->ua}} </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

@section('tabs')
    {{--if u wanna add an input / section, increment the id and add to the css file--}}
    <input id="tab1" type="radio" name="tabs" {{isset($id) ? "" : "checked"}}>
    <label for="tab1">Identifiant</label>

    <input id="tab2" type="radio" name="tabs" {{isset($id) ? "checked" : "disabled"}}>
    <label for="tab2">Gestion</label>

    <section id="content1">
        <div class="myForm">
            <form class="mine" action="{{route('article.store')}}" method="POST">
                @csrf
                {{ method_field('POST') }}
                <div class="form-group0">
                    <input id="code" name="code" type="text" class="form-control" placeholder="Code">
                    <input id="designation" name="designation" type="text" class="form-control" placeholder="Designation">
                </div>
                <div class="form-groupSelect">
                    <select id="status" name="status" class="form-select" aria-label="Default select example" placeholder="text">                        <option selected>Status</option>
                        <option value="Actif">Actif</option>
                        <option value="Inactif">Inactif</option>
                    </select>
                    <select id="categorie" name="categorie" class="form-select" aria-label="Default select example">
                        <option selected>Categorie</option>
                        <option value="Test 1">Test 1</option>
                        <option value="Test 2">Test 2</option>
                        <option value="Test 3">Test 3</option>
                    </select>
                </div>
                <div class="form-groupPrice">
                    <input id="pv" name="pv" type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.V.">
                    <input id="pa" name="pa" type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.A.">
                    <input id="uv" name="uv" type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.V.">
                    <input id="ua" name="ua" type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.A.">
                </div>
                <button type="submit"  onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="color: white; background: #2C061F; transition-duration: 0.4s; border: solid  ;" class="btn btn-primary" id="ajout" >AJOUTER</button>
            </form>
        </div>
    </section>

    <section id="content2">
        <div class="myForm">
            <form class="mine" action="{{isset($id) ? route('article.update', ['id' => $id]) : ''}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group0">
                <input name="code1" value="{{(isset($id)) ? $article->code : ''}}"  type="text" class="form-control" placeholder="Code">
                <input name="designation1" value="{{(isset($id)) ? $article->designation : ''}}"  type="text" class="form-control" placeholder="Designation">
                </div>
                <div class="form-groupSelect">
                    <select name="status1" class="form-select" aria-label="Default select example" placeholder="text">
                        <option selected>Status</option>
                        <option value="Actif" @if (isset($id) && $article->categorie == "Actif")
                            selected
                        @endif>Actif</option>
                        <option value="Inactif" @if (isset($id) && $article->categorie == "Inactif")
                            selected
                        @endif>Inactif</option>
                    </select>
                    <select name="categorie1" class="form-select" aria-label="Default select example">
                        <option selected>Categorie</option>
                        
                        <option value="Test 1" @if (isset($id) && $article->categorie == "Test 1")
                            selected
                        @endif>Test 1</option>
                        <option value="Test 2" @if (isset($id) && $article->categorie == "Test 2")
                            selected
                        @endif>Test 2</option>
                        <option value="Test 3" @if (isset($id) && $article->categorie == "Test 3")
                            selected
                        @endif>Test 3</option>
                    </select>
                </div>
                <div class="form-groupPrice">
                    <input  name="pv1" value="{{(isset($id)) ? $article->pv : ''}}"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.V.">
                    <input name="pa1"  value="{{(isset($id)) ? $article->pa : ''}}"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="P.A.">
                    <input name="uv1" value="{{(isset($id)) ? $article->uv : ''}}"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.V.">
                    <input  name="ua1" value="{{(isset($id)) ? $article->ua : ''}}"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="U.A.">
                </div>
                <button type="submit" class="btn btn-primary" onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="color: white; background: #2C061F; transition-duration: 0.4s; border: solid  ; float : left">MODIFIER</button>
                <button class="btn btn-primary" onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="color: white; background: #2C061F; transition-duration: 0.4s; border: solid  ; float : left; margin-left: 2px">VIDER</button>
            </form>
            <form action="{{isset($id) ? route('article.destroy', ['id' => $id]) : ''}}" method="post">
                @csrf
                @method('delete')
                <button 
                    onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                    onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" 
                    style="float: right; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" 
                    type="submit" class="btn btn-primary ed" onclick="vider()">
                    SUPPRIMER
                </button>
            </form>
        </div>
    </section>
@endsection 