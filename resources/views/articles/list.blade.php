@extends('layout.app')



@section("title")

    My Articles

@endsection

{{-- @dd(auth()->user()) --}}


{{-- @if (auth()->user()->role == "admin")
    hello Admin
@endif --}}
 
 


@section('body')
        @can('isAdmin')
            <h1 class="text-danger">  I am Admin  </h1>
        @elsecan("isManager")
            <h1 class="text-warning">  I am Manager  </h1>
        @elsecan("isUser")
            <h1 class="text-info">  I am User  </h1>
        @else 
            <h1 class="text-dark">  I am Guest  </h1>
        @endcan



   <a href="{{route("article.create")}}" class="btn btn-info"> Create Article</a>
   <table class="table"> 
        <tr> 
            <th>
                Name
            </th>
            <th>
                Title
            </th>
            <th>
                Number
            </th>
            <th>
                Actions
            </th>
        </tr>    
        {{-- @dd($data) --}}
        @foreach ($articles as $article)
            {{-- @dd($item) --}}
            <tr> 
             
                <td>
                    {{$article->name}}
                </td> 
                <td>
                    {{$article->title}}
                </td>
                <td>
                    {{$article->number}}
                </td>
                <td>
                    {{$article->user->name}}
                </td>
                <td> 
                    {{-- <a class="btn btn-warning" href="/show/{{$article->id}}">Show</a>  --}}

                    <a class="btn btn-warning" href="{{route("article.show", [$article->id])}}">Show</a> 

                    <a class="btn btn-info" href="/edit/{{$article->id}}">Edit</a> 

                    {{-- <a class="btn btn-danger" href="/delete/{{$article->id}}">Delete</a>  --}}
                   

                </td>
                <td> 
                    <form action="/delete/{{$article->id}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        {{-- <a class="btn btn-danger" href="/delete/{{$article->id}}">Delete</a> --}}
                    </form>

                </td>

             </tr>
        @endforeach
   </table>



@endsection