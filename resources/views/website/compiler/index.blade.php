@extends('website.master')
@section('body')

<div style="align-items: center;">
    <h2 style="margin: 0 auto; width: 80%; max-width: 800px; text-align: center;" >Code Editor & Compiler — Practice in Real Time</h2>

    <form method="POST" action="{{ route('compiler.run') }}">
        @csrf

        <label for="language">Language:</label>
        <select name="language" id="language" >
            <option value="71" {{ (isset($languageId) && $languageId == 71) ? 'selected' : '' }}>Python 3</option>
            <option value="62" {{ (isset($languageId) && $languageId == 62) ? 'selected' : '' }}>Java</option>
            <option value="54" {{ (isset($languageId) && $languageId == 54) ? 'selected' : '' }}>C++</option>
        </select>

        <br><br>
        <label for="code">Your Code:</label><br>
        <textarea name="code" rows="12" cols="100">{{ $code ?? '' }}</textarea>

        <br><br>
        <label for="input">Custom Input:</label><br>
        <textarea name="input" rows="5" cols="100">{{ $input ?? '' }}</textarea>

        <br><br>
        <button type="submit" style=" align: center;">Run Code</button>
    </form>

    <hr>

    <div id="output-section">
        <h3 style="margin: 0 auto; width: 80%; max-width: 800px; text-align: center;">Output:</h3>
        @if(isset($output))
        
            <pre>{{ $output }}</pre>
        @endif
    </div>

</div>


@endsection
