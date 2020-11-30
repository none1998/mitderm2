@extends('layout.layout')
@section('content')

    <div class="container" align="center" style="margin: 120px 0">
{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        @endif--}}
    <form  method="post" enctype="multipart/form-data" action="{{route('questions.save')}}">

        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Question</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"}}  placeholder="Type Your Question" name="title">
{{--                @if($errors->has('title'))--}}
{{--                    <p class="text-danger">{{$errors->first('title')}}</p>--}}
{{--                @endif--}}
                @error('title')
                    <p class="text-danger">{{$errors->first('title')}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Answers</label>
                <select name="tags[]" id="" multiple>
                    @foreach($answers as $answer)
                        <option value="{{$answer->id}}">{{$answer->text}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @csrf
{{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <div>
            <a style="color: darkgreen" href="{{url('/student')}}"><h3>Students Page</h3></a>
        </div>
    </form>
    </div>
@endsection
