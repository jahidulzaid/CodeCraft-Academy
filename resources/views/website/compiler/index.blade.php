@extends('website.master')
@section('body')

    <h2>Online Compiler (Judge0 API)</h2>

    <form action="{{ route('compiler.submit') }}" method="POST">
        @csrf
        <div class="compiler-settings">
            <label>Language:</label>
            <select name="language">
                <option value="71" {{ (isset($language) && $language == 71) ? 'selected' : '' }}>Python 3</option>
                <option value="54" {{ (isset($language) && $language == 54) ? 'selected' : '' }}>C++</option>
                <option value="62" {{ (isset($language) && $language == 62) ? 'selected' : '' }}>Java</option>
            </select>
        </div>
    
        <div class="editor-container">
            <div class="code-section">
                <label for="code">Code:</label>
                <textarea name="code" id="code" rows="8" cols="80">{{ old('code', $code ?? '') }}</textarea>
            </div>
            
            <div class="input-section">
                <label for="input">Input:</label>
                <textarea name="input" id="input" rows="2   " cols="80">{{ old('input', $input ?? '') }}</textarea>
                <p class="help-text">Enter program input here (if required)</p>
            </div>
        </div>
    
        <button type="submit" class="run-button">Run Code</button>
    </form>
    
    @if(isset($output))
        <div class="output-section">
            <h3>Output:</h3>
            <pre>{{ $output }}</pre>
        </div>
    @endif
    
    @if(isset($errors) && count($errors) > 0)
        <div class="error-section">
            <h3>Compilation/Runtime Errors:</h3>
            <pre>{{ $errors }}</pre>
        </div>
    @endif
    
    @if(isset($execution_time))
        <div class="execution-stats">
            <p>Execution Time: {{ $execution_time }} seconds</p>
            <p>Memory Used: {{ $memory_used ?? 'N/A' }}</p>
        </div>
    @endif


    
@endsection
