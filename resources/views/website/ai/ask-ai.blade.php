{{-- @extends('layouts.app') <!-- Only if you are using a layout --> --}}

@section('content')
<div class="container">
    <h1>Ask Llama 3.2</h1>

    <textarea id="prompt" rows="5" class="form-control" placeholder="Type your question..."></textarea>
    <br>
    <button class="btn btn-primary" onclick="askAI()">Ask</button>

    <br><br>

    <h3>AI Response:</h3>
    <div id="response" style="background: #f5f5f5; padding: 20px; border-radius: 8px;"></div>
</div>

<script>
function askAI() {
    let prompt = document.getElementById('prompt').value;

    fetch("{{ route('ai.ask') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: JSON.stringify({ prompt: prompt })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('response').innerText = data.response;
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('response').innerText = "Something went wrong.";
    });
}
</script>
@endsection
