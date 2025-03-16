@extends('website.master')
@section('body')

<div style="align-items: center;">
    <h2>Laravel + Judge0 API Compiler with Input</h2>

    <form method="POST" action="{{ route('compiler.run') }}">
        @csrf

        <label for="language">Language:</label>
        <select name="language" id="language">
            <option value="71" {{ (isset($languageId) && $languageId == 71) ? 'selected' : '' }}>Python 3</option>
            <option value="62" {{ (isset($languageId) && $languageId == 62) ? 'selected' : '' }}>Java</option>
            <option value="54" {{ (isset($languageId) && $languageId == 54) ? 'selected' : '' }}>C++</option>
        </select>

        <br><br>
        <label for="code">Your Code:</label><br>
        <textarea name="code" rows="15" cols="100">{{ $code ?? '' }}</textarea>

        <br><br>
        <label for="input">Custom Input:</label><br>
        <textarea name="input" rows="5" cols="100">{{ $input ?? '' }}</textarea>

        <br><br>
        <button type="submit">Run Code</button>
    </form>

    @if(isset($output))
        <h3>Output:</h3>
        <pre>{{ $output }}</pre>
    @endif

</div>


@endsection
