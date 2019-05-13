@extends('layouts.app')

@section('content')
        <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }
                  
                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }
                  
                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
        </style>
        <h1>Search</h1>
        <div class="row">
                <div class="col-sm-2">
                        <form action="/search/N5">
                        <input type="submit" value="N5" class="btn btn-primary" style="font-size: 4rem;">
                        </form>
                </div>
                
                <div class="col-sm-2">
                        <form action="/search/N4">
                        <input type="submit" value="N4" class="btn btn-info" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/N3">
                        <input type="submit" value="N3" class="btn btn-success" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/N2">
                        <input type="submit" value="N2" class="btn btn-warning" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/N1">
                        <input type="submit" value="N1" class="btn btn-danger" style="font-size: 4rem;">
                        </form>
                </div>
        </div>
        <div class="row">
                <div class="col-sm-2">
                        <form action="/search/J1">
                        <input type="submit" value="E1" class="btn btn-primary" style="font-size: 4rem;">
                        </form>
                </div>
                
                <div class="col-sm-2">
                        <form action="/search/J2">
                        <input type="submit" value="E2" class="btn btn-info" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/J3">
                        <input type="submit" value="E3" class="btn btn-success" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/J4">
                        <input type="submit" value="E4" class="btn btn-warning" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/J5">
                        <input type="submit" value="E5" class="btn btn-danger" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/J6">
                        <input type="submit" value="E6" class="btn btn-warning" style="font-size: 4rem;">
                        </form>
                </div>
                <div class="col-sm-2">
                        <form action="/search/JJH">
                        <input type="submit" value="JH" class="btn btn-danger" style="font-size: 4rem;">
                        </form>
                </div>
        </div>
    @if(count($kanjis) >= 1)
    <div class="table table-dark">
            <thead>
            <tr>
                <th scope="row">Kanji</th>
                    <th scope="col">Keyword</th>

                    <th scope="col">StrokeCount</th>
                    <th scope="col">LessonNo</th>

                    <th scope="col">Jouyou</th>
                    <th scope="col">JLPT</th>

            </tr>
        </thead>
    </div>
        @foreach($kanjis as $kanji)
            <div>
                <tbody>
                        <tr>
                                <th scope="row">{{$kanji->K_Kanji}}</th>
                                <td>{{$kanji->K_Keyword}}</td>
        
                                <td>{{$kanji->K_StrokeCount}}</td>
                                <td>{{$kanji->K_LessonNo}}</td>
        
                                <td>{{$kanji->K_JouYou}}</td>
                                <td>{{$kanji->K_JLPT}}</td>
                                
                        </tr>
                </tbody>
            </div>
        @endforeach
        {{$kanjis->links()}}
    @else
        <p>No kanji found</p>
    @endif
        </table>
@endsection