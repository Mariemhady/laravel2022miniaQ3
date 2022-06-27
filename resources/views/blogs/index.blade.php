@extends('layout.app')



@section("title")

    My blogs

@endsection

@section('body')
   <a href="{{route("blogs.create")}}" class="btn btn-info"> Create blog</a>
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
        @foreach ($data as $blog)
            {{-- @dd($item) --}}
            <tr> 
             
                <td>
                    {{$blog->name}}
                </td> 
                <td>
                    {{$blog->title}}
                </td>
                <td>
                    {{$blog->number}}
                </td>
                <td> 
                    <a class="btn btn-warning" href="{{route('blogs.show', [$blog->id])}}">Show</a> 

                    {{-- <a class="btn btn-warning" href="{{route("blog.show", [$blog->id])}}">Show</a> --}}
                    {{-- blogs/{blog}/edit  --}}
                    <a class="btn btn-info" href="{{route('blogs.edit', [$blog->id])}}">Edit</a>  

                    {{-- <a class="btn btn-danger" href="/delete/{{$blog->id}}">Delete</a>  --}}
                   

                </td>
                <td> 
                    <form action="{{route('blogs.destroy', [$blog->id])}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 

                </td>

             </tr>
        @endforeach
   </table>



@endsection