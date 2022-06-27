@extends('layout.app')



@section("title")

    My Posts

@endsection

@section('body')
    
    <a href="posts/create" class="btn btn-info"> Create Post </a>

   <table class="table"> 
        <tr> 
            <th>
                #Num
            </th>
            <th>
                Title
            </th>
            <th>
                Description
            </th>
        </tr>    
        {{-- @dd($data) --}}
        @foreach ($data as $item)
            {{-- @dd($item) --}}
            <tr> 
                <td> {{$loop->iteration}} </td>
                <td>
                    {{-- @dd($item) --}}
                    {{-- {{$item["title"]}}  --}}
                    {{$item->title}}
                </td> 
                <td>
                    {{$item->body}}
                    {{-- {{$item["description"]}}  --}}
                </td>
                <td> 
                    <a class="btn btn-warning" href="/post/{{$item->id}}">Show</a> 
                </td>
                <td> 
                    <a class="btn btn-warning" href="/posts/edit/{{$item->id}}">Edit</a> 
                </td>
             </tr>
        @endforeach
   </table>



@endsection