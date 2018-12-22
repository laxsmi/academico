@extends('backpack::layout')

@section('header')
<section class="content-header">
    <h1>
        @lang_u('academico.course_creation')
    </h1>
</section>
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    @lang_u('academico.course_creation')
                </div>

                <div class="box-tools pull-right">
                
                </div>  
            </div>
            
            <div class="box-body">           
                <div id="app">

                    <form action="/courses" method="post">
                        @csrf()

                        <div class="input-group">
                            <label for="period">{{ ucfirst(trans_choice('academico.periods', 1)) }}</label>
                            <select name="period" id="period">
                                @foreach ($periods as $period)
                                    <option value="{{ $period->id }}">{{ $period->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="input-group">
                            <label for="start">{{ ucfirst(trans_choice('academico.start', 1)) }}</label>
                            <input type="date" name="start" id="start" value={{ $current_period->start }}>
                        </div>

                        <div class="input-group">
                            <label for="end">{{ ucfirst(trans_choice('academico.end', 1)) }}</label>
                            <input type="date" name="end" id="end" value={{ $current_period->end }}>
                        </div>

                        <div class="input-group">
                            <label for="rythms">{{ ucfirst(trans_choice('academico.rythms', 1)) }}</label>
                            <select name="rythm" id="rythm">
                                @foreach ($rythms as $rythm)
                                    <option value="{{ $rythm->id }}">{{ $rythm->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group">
                            <label for="levels">{{ ucfirst(trans_choice('academico.levels', 1)) }}</label>
                            <select name="level" id="level">
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group">
                            <label for="name">{{ ucfirst(trans_choice('academico.name', 1)) }}</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="input-group">
                            <label for="volume">{{ ucfirst(trans_choice('academico.volume', 1)) }}</label>
                            <input type="numeric" name="volume" step="0.5" id="volume">
                        </div>

                        <div class="input-group">
                            <label for="price">{{ ucfirst(trans_choice('academico.price', 1)) }}</label>
                            <input type="numeric" name="price" step="0.01" id="price">
                        </div>

                        <div class="input-group">
                            <button type="submit">@lang_u('academico.validate')</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('after_scripts')
    <script src="/js/app.js"></script>
@endsection
