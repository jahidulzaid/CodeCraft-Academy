@extends('website.master')
@section('body')

<style>
    .compiler-body, .compiler-html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .compiler-navbar {
      background-color: #f9f3f3;
      color: white;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      font-size: 20px;
    }

    .compiler-container {
      display: flex;
      height: calc(100% - 50px);
    }

    .compiler-sidebar {
      width: 200px;
      background-color: #d6d3d3;
      color: white;
      padding: 20px;
      box-sizing: border-box;
    }

    .compiler-sidebar h3 {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .compiler-editor-container {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    #compiler-editor {
      flex: 1;
      height: 100%;
    }

    .compiler-controls {
      padding: 10px;
      background: #f5f5f5;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    #compiler-output {
      height: 150px;
      background: #ddd7d7;
      color: black;
      padding: 10px;
      overflow-y: auto;
      font-family: monospace;
    }

    .compiler-btn {
      padding: 8px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .compiler-textarea {
      width: 100%;
      box-sizing: border-box;
      font-family: monospace;
    }
</style>



<div class="compiler-container">
  <div class="compiler-sidebar">
    <h3>Settings</h3>
    <form method="POST" action="{{ route('compiler.run') }}">
      @csrf

      <label for="language">Language:</label><br>
      <select name="language" id="language">
          <option value="71" {{ (isset($languageId) && $languageId == 71) ? 'selected' : '' }}>Python 3</option>
          <option value="62" {{ (isset($languageId) && $languageId == 62) ? 'selected' : '' }}>Java</option>
          <option value="54" {{ (isset($languageId) && $languageId == 54) ? 'selected' : '' }}>C++</option>
      </select>

      <br><br>

      <label for="input">Custom Input:</label><br>
      <textarea name="input" id="input" rows="5" class="compiler-textarea">{{ $input ?? '' }}</textarea>

      <br><br>

      <button type="submit" onclick="prepareForm()" class="compiler-btn">Run Code ▶️</button>

      <textarea name="code" id="hiddenCode" style="display:none;">{{ $code ?? '' }}</textarea>
    </form>
  </div>

  <div class="compiler-editor-container">
    <div id="compiler-editor">{{ $code ?? '# Write your Python/Java/C++ code here' }}</div>
    <div class="compiler-controls">
      <span>Editor</span>
    </div>
    <pre id="compiler-output">@if(isset($output)){{ $output }}@endif</pre>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.14/ace.js"></script>
<script>
  var editor = ace.edit("compiler-editor");
  editor.setTheme("ace/theme/white");

  const languageSelect = document.getElementById('language');
  function setEditorMode() {
    let lang = languageSelect.value;
    if (lang == 71) {
      editor.session.setMode("ace/mode/python");
    } else if (lang == 62) {
      editor.session.setMode("ace/mode/java");
    } else if (lang == 54) {
      editor.session.setMode("ace/mode/c_cpp");
    }
  }

  setEditorMode();
  languageSelect.addEventListener('change', setEditorMode);

  function prepareForm() {
    const code = editor.getValue();
    document.getElementById('hiddenCode').value = code;
  }
</script>













{{-- <div style="align-items: center;">
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

</div> --}}


@endsection
