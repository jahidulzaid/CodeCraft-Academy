@extends('website.master')
@section('body')

<body>
    <div class="container my-5">
        <h1 class="mb-4">Compilation Result</h1>
        
        <div class="card mb-4">
            <div class="card-header">
                Status: 
                @if($result['status']['id'] == 3)
                    <span class="badge bg-success">Success</span>
                @else
                    <span class="badge bg-danger">{{ $result['status']['description'] }}</span>
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">Output</h5>
                <pre class="bg-light p-3">{{ $result['stdout'] ?? 'No output' }}</pre>
                
                @if(isset($result['stderr']) && !empty($result['stderr']))
                    <h5 class="card-title mt-4">Error</h5>
                    <pre class="bg-light p-3">{{ $result['stderr'] }}</pre>
                @endif
                
                @if(isset($result['compile_output']) && !empty($result['compile_output']))
                    <h5 class="card-title mt-4">Compilation Output</h5>
                    <pre class="bg-light p-3">{{ $result['compile_output'] }}</pre>
                @endif
                
                <div class="mt-4">
                    <strong>Time:</strong> {{ $result['time'] ?? 'N/A' }}s<br>
                    <strong>Memory:</strong> {{ $result['memory'] ?? 'N/A' }} KB
                </div>
            </div>
        </div>
        
        <a href="{{ route('compiler.index') }}" class="btn btn-primary">Back to Compiler</a>
    </div>
</body>

    
@endsection
