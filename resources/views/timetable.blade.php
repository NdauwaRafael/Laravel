
@extends('layouts.masterTT')
@section('content')
    <form>
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label>Subject Name
                        <input type="text" placeholder="">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label>Subject Teacher
                        <input type="text" placeholder="">
                    </label>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label>Class Assigned
                        <input type="text" placeholder="">
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label>Time
                        <input type="text" placeholder="">
                    </label>
                </div>
            </div>
         <button type="Submit" class="success button">Add To TimeTable</button>
    </form>
@endsection